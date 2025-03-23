<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thongke;
use App\Models\Muontra;

class ThongkeController extends Controller
{
    // Hàm hiển thị danh sách thống kê
    public function index(Request $request)
    {
        $query = Muontra::query(); // Tạo truy vấn lấy dữ liệu từ bảng Muontra
        // Lọc theo ngày
        if ($request->has('date') && !empty($request->date)) {
            $query->whereDate('created_at', $request->date); // Lọc các bản ghi theo ngày cụ thể
        }
        // Lọc theo tháng
        if ($request->has('month') && !empty($request->month)) {
            $query->whereMonth('created_at', $request->month); // Lọc theo tháng
        }
        // Lọc theo năm
        if ($request->has('year') && !empty($request->year)) {
            $query->whereYear('created_at', $request->year); // Lọc theo năm
        }
        $thongkes = $query->get(); // Lấy danh sách thống kê sau khi lọc
        

        $data = []; // Mảng lưu tổng số sách đã mượn theo tên sách
        foreach ($thongkes as $thongke) {
            foreach ($thongke->chitietmuontra as $chitiet) { // Duyệt qua chi tiết mượn trả
                if ($chitiet->sach) { // Kiểm tra nếu có sách
                    $tenSach = $chitiet->sach->ten_sach;
                    if (!isset($data[$tenSach])) { 
                        $data[$tenSach] = 0; // Khởi tạo nếu sách chưa có trong danh sách
                    }
                    $data[$tenSach] += $chitiet->so_luong; // Cộng dồn số lượng sách đã mượn
                }
            }
        }
        return view('thongke.index', compact('thongkes')); // Trả về view hiển thị dữ liệu thống kê
    }

    // Hàm tìm kiếm thống kê theo email người dùng hoặc tiêu đề sách
    public function search(Request $request)
    {
        $search = $request->search; // Lấy từ khóa tìm kiếm từ request

        $thongkes = Thongke::with(['sach', 'nguoidung']) // Lấy danh sách thống kê kèm theo sách và người dùng liên quan
            ->whereHas('nguoidung', function ($query) use ($search) {
                $query->where('email', 'LIKE', '%' . $search . '%'); // Tìm theo email người dùng
            })
            ->orWhereHas('sach', function ($query) use ($search) {
                $query->where('tieu_de', 'LIKE', '%' . $search . '%'); // Tìm theo tiêu đề sách
            })
            ->orWhere('noi_dung_thong_ke', 'LIKE', '%' . $search . '%') // Tìm theo nội dung thống kê
            ->orWhere('loai_thong_ke', 'LIKE', '%' . $search . '%') // Tìm theo loại thống kê
            ->get();

        return view('thongke.index')->with('thongkes', $thongkes); // Trả về view cùng với danh sách thống kê đã tìm kiếm
    }
    // Hàm xóa một bản ghi thống kê
    public function destroy($id)
    {
        $thongke = Thongke::find($id); // Tìm bản ghi thống kê theo ID
        $thongke->delete(); // Xóa bản ghi khỏi database

        return redirect()->route('thongke.index')->with('success', 'Xóa thông tin thống kê thành công'); // Chuyển hướng về trang danh sách với thông báo thành công
    }
}