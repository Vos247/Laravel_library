<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        return view('profile');
    }
    public function update(Request $request)
{
    $nguoidung = Auth::user(); // trả về thông tin người dùng đăng nhập 
    $request->validate([
        'ho_ten' => 'required|string|max:255',
        'mat_khau' => 'nullable|min:6', // nếu đặt lại mật khẩu thì tối đa 6 ký tự
        'so_dien_thoai' => 'nullable|numeric', 
        'dia_chi' => 'nullable|string|max:255',
    ]);
    $nguoidung->ho_ten = $request->ho_ten;
    $nguoidung->so_dien_thoai = $request->so_dien_thoai;
    $nguoidung->dia_chi = $request->dia_chi;

    if ($request->filled('mat_khau')) { // kiểm tra xem người dùng có nhập mật khẩu mới không
        $nguoidung->mat_khau = bcrypt($request->mat_khau); // nếu có thì dùng bcrypt để mã hóa mật khẩu trước khi lưu
    }
    $nguoidung->save();
    return redirect()->route('profile')->with('success', 'Cập nhật thông tin thành công!');
}
}
