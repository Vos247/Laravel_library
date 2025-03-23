<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sach;
use App\Models\Thongke;

class ChitietController extends Controller
{
    public function index()
    {
        // Lấy danh sách tất cả sách kèm theo thông tin tác giả, thể loại, vị trí
        $sach = Sach::with(['tacGia', 'theLoai', 'viTri'])->get();
        return view('chitiet', compact('sach'));
    }
    public function show($id)
    {
        // Lấy thông tin chi tiết của một cuốn sách dựa theo ID
        $sach = Sach::with(['tacGia', 'theLoai', 'viTri'])->findOrFail($id);
        return view('chitiet', compact('sach'));
    }

    public function muonSach(Request $request, $sachId)
    {
        // Kiểm tra số điện thoại và địa chỉ của người dùng trước khi mượn sách
        $nguoiDung = auth()->user();
        if (!$nguoiDung->so_dien_thoai) {
            return redirect()->back()->with('error', 'Vui lòng cập nhật số điện thoại trước khi mượn sách.');
        }
        if (!$nguoiDung->dia_chi) {
            return redirect()->back()->with('error', 'Vui lòng cập nhật địa chỉ trước khi mượn sách.');
        }
        // Kiểm tra xem người dùng có sách chưa trả không (trang_thai = 0 là chưa trả)
        $sachChuaTra = \App\Models\MuonTra::where('nguoidung_id', $nguoiDung->id)
            ->where('trang_thai', 0)->exists();
        if ($sachChuaTra) {
            return redirect()->back()->with('error', 'Bạn phải trả sách trước khi mượn sách mới.');
        }
        // Kiểm tra sách có tồn tại không
        $sach = Sach::findOrFail($sachId);
        // Kiểm tra số lượng sách còn lại
        if ($sach->con_lai <= 0) {
            return redirect()->back()->with('error', 'Sách đã hết, không thể mượn!');
        }
        // Kiểm tra hợp lệ ngày mượn và hạn trả (hạn trả phải sau hoặc bằng ngày mượn)
        $request->validate([
            'ngay_muon' => 'required|date',
            'han_tra' => 'required|date|after_or_equal:ngay_muon',
        ]);
        // Tạo phiếu mượn sách
        $muontra = \App\Models\MuonTra::create([
            'nguoidung_id' => auth()->id(),
            'sach_id' => $sachId,
            'ngay_muon' => $request->ngay_muon,
            'han_tra' => $request->han_tra,
            'trang_thai' => 0, // Mặc định là chưa trả sách
        ]);
        // Giảm số lượng sách còn lại sau khi mượn
        $sach->decrement('con_lai');
        // Tự động lưu thống kê vào bảng `thongkes`
        Thongke::create([
            'loai_thong_ke' => 'Sách đã mượn', // Loại thống kê là sách đã mượn
            'noi_dung_thong_ke' => '', // Chưa có nội dung cụ thể
            'sach_id' => $sach->id, // Lưu ID của sách
            'nguoidung_id' => $nguoiDung->id, // Lưu ID của người mượn
            'created_at' => now(), // Lưu thời gian mượn
        ]);
        // Trả về thông báo mượn sách thành công
        return redirect()->back()->with('success', 'Bạn đã đặt lịch mượn sách thành công! Vui lòng đến đúng vị trí tại thư viện để nhận sách.');
    }
}