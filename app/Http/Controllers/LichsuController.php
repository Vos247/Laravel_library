<?php

namespace App\Http\Controllers;

use App\Models\Muontra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class LichsuController extends Controller
{
    public function index()
{   
    // Lấy danh sách lịch sử mượn sách của người dùng hiện tại
    $lichsu = Muontra::with(['sach'])
        ->where('nguoidung_id', Auth::id()) // Kiểm tra lại Auth::id()
        ->orderBy('ngay_muon', 'desc') // Sắp xếp theo ngày mượn mới nhất
        ->get();

    return view('lichsu', compact('lichsu'));
}
public function giahan($id)
{
    $lichsu = Muontra::findOrFail($id);

    // Kiểm tra nếu hạn trả đã quá 2 ngày
    $quahan = Carbon::parse($lichsu->han_tra)->addDays(2)->isPast();
    if ($quahan) {
        return redirect()->back()->with('error', 'Không thể gia hạn vì đã quá hạn 2 ngày.');
    }
    // Kiểm tra nếu đã gia hạn trước đó
    if ($lichsu->updated_at != $lichsu->created_at) {
        return redirect()->back()->with('error', 'Bạn chỉ được phép gia hạn 1 lần duy nhất!');
    }
    // Gia hạn thêm 2 ngày
    $lichsu->han_tra = Carbon::parse($lichsu->han_tra)->addDays(2);
    $lichsu->save();

    return redirect()->back()->with('success', 'Gia hạn thành công!');
}

}

