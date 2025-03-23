<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sach;
use App\Models\TheLoai;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        // Lấy giá trị filter từ URL (nếu có)
        $filter = $request->query('filter');

        // Tạo query lấy sách cùng với thông tin tác giả và thể loại
        $query = Sach::with(['tacGia', 'theLoai']);

        // Áp dụng bộ lọc dựa trên filter được chọn
        if ($filter === 'newest') {
            // Sắp xếp theo thời gian tạo mới nhất
            $query->orderBy('created_at', 'desc');
        } elseif ($filter === 'most_borrowed') {
            // Sắp xếp theo số lần được mượn nhiều nhất
            $query->withCount('muontras')->orderBy('muontras_count', 'desc');
        } else {
            // Mặc định sắp xếp theo ID tăng dần
            $query->orderBy('id', 'asc');
        }

        // Lấy danh sách sách với phân trang (mỗi trang 6 sách)
        $sachs = $query->paginate(6);
        // Lấy tất cả thể loại sách
        $theloais = TheLoai::all();
        // Lấy 3 quyển sách mới nhất
        $sachMoiNhat = Sach::latest()->take(3)->get();
        // Trả về view home với các dữ liệu đã lấy
        return view('home', compact('sachs', 'theloais', 'sachMoiNhat', 'filter'));
    }

    public function search(Request $request)
    {
        // Lấy từ khóa tìm kiếm và loại bỏ khoảng trắng thừa
        $search = trim($request->input('search'));
        // Tạo query lấy sách cùng với thông tin tác giả và thể loại
        $query = Sach::with(['tacGia', 'theLoai']);
        // Kiểm tra nếu từ khóa tìm kiếm không rỗng thì tiến hành lọc dữ liệu
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('tieu_de', 'LIKE', "%$search%") // Tìm theo tiêu đề sách
                  ->orWhereHas('tacGia', function ($subQuery) use ($search) {
                      $subQuery->where('ten_tac_gia', 'LIKE', "%$search%"); // Tìm theo tên tác giả
                  })
                  ->orWhereHas('theLoai', function ($subQuery) use ($search) {
                      $subQuery->where('ten_the_loai', 'LIKE', "%$search%"); // Tìm theo thể loại
                  });
            });
        }

        // Lấy danh sách sách sau khi tìm kiếm với phân trang (mỗi trang 6 sách)
        $sachs = $query->paginate(6);
        // Lấy tất cả thể loại sách
        $theloais = TheLoai::all();
        // Lấy 3 quyển sách mới nhất
        $sachMoiNhat = Sach::latest()->take(3)->get();
        // Trả về view home với các dữ liệu đã lấy
        return view('home', compact('sachs', 'search', 'theloais', 'sachMoiNhat'));
    }
}