<?php

namespace App\Console\Commands;

use App\Mail\ThongBaoQuaHanMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\Muontra;
use Carbon\Carbon;

class SendOverdueEmail extends Command
{
    protected $signature = 'email:overdue';
    protected $description = 'Gửi email thông báo sách quá hạn';
    public function handle()
    {
        $today = Carbon::now();
        $quahan = Muontra::where('trang_thai', 0) // Chưa trả sách
            ->whereDate('han_tra', '<', $today) // Quá hạn hôm nay
            ->with(['nguoidung', 'sach']) // Load luôn người dùng & sách
            ->get();

        if ($quahan->isEmpty()) {
            $this->info("Không có sách nào quá hạn.");
            return;
        }
        foreach ($quahan as $muontra) {
            $nguoidung = $muontra->nguoidung;
            $sach = $muontra->sach;
            if (!$nguoidung || !$sach) {
                $this->error("Không tìm thấy người dùng hoặc sách cho mượn/trả ID: {$muontra->id}");
                continue;
            }
            if (!$nguoidung->email) {
                $this->error("Người dùng ID {$nguoidung->id} không có email.");
                continue;
            }
            Mail::to($nguoidung->email)->send(new ThongBaoQuaHanMail($nguoidung, $sach, $muontra));
            $this->info("Đã gửi email đến: " . $nguoidung->email);
        }
    }
}
