<?php

namespace App\Http\Controllers;

use App\Models\Theloai;
use App\Models\Thongke;
use App\Models\Nguoidung;
use App\Models\Nhanvien;
use App\Models\Muontra;
use App\Models\Sach;
use App\Models\NhaXuatBan;
use App\Models\Vitri;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
{
    $tongSoSach = Sach::count(); 
    $soSachDaMuon = Thongke::count(); // đếm tổng số lượt sách đã mượn
    $soNguoiDung = Nguoidung::count(); 
    $soNhaXuatBan = NhaXuatBan::count(); 
    $soNhanVien = Nhanvien::count();
    $sachDaTra = Muontra::where('trang_thai', 1)->count();
    $sachQuaHan = Muontra::where('trang_thai', 0)
    ->where('han_tra', '<', now()->subDays(2))// Đếm tổng số sách quá hạn chưa trả (quá hạn 2 ngày)
    ->count();
    $sachChuaTra = Muontra::where('trang_thai', 0)->count();
    $tongTheloai = Theloai::count();
    $tongViTri = Vitri::count();

    // Lọc sách được mượn nhiều nhất trong tháng
    $thangHienTai = Carbon::now()->month;
    $sachNhieuNhat = Thongke::select('sach_id')
        ->where('loai_thong_ke', 'Sách đã mượn')
        ->whereMonth('created_at', $thangHienTai)
        ->groupBy('sach_id')
        ->selectRaw('count(sach_id) as so_luot, sach_id')
        ->orderByDesc('so_luot')
        ->with('sach')
        ->first();
    // Tìm người dùng mượn sách nhiều nhất
        $soNguoiDungMuonSachNhieuNhat = Muontra::select('nguoidung_id')
        ->groupBy('nguoidung_id')
        ->selectRaw('count(nguoidung_id) as so_luot, nguoidung_id')
        ->orderByDesc('so_luot')
        ->with('nguoidung') // Lấy thông tin chi tiết của người dùng
        ->first();
        // Trả về view dashboard cùng với các dữ liệu thống kê
        return view('dashboard.index', compact(
            'soSachDaMuon',
            'soNguoiDung',
            'sachNhieuNhat',
            'thangHienTai',
            'soNhanVien',
            'sachDaTra',
            'sachChuaTra',
            'sachQuaHan',
            'tongSoSach',
            'soNhaXuatBan',
            'soNguoiDungMuonSachNhieuNhat',
            'tongTheloai',
            'tongViTri'
        ));
}
}


