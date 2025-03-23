<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThongBaoQuaHanMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nguoidung;
    public $sach;
    public $muontra;

    public function __construct($nguoidung, $sach, $muontra)
    {
        $this->nguoidung = $nguoidung;
        $this->sach = $sach;
        $this->muontra = $muontra;
    }

    public function build()
    {
        return $this->from('info@thuviensach.vn', 'Thư viện sách')
                    ->subject('Thông báo quá hạn mượn sách')
                    ->view('emails.quahan')
                    ->with([
                        'nguoidung' => $this->nguoidung,
                        'sach' => $this->sach,
                        'muontra' => $this->muontra,
                    ]);
    }
}