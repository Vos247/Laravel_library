<?php

namespace App\Http\Controllers;

use App\Models\Nguoidung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
        // trả về trang đăng ký 
    }
    public function registerPost(Request $request)
    {
        // Chuyển email về chữ thường để kiểm tra
        $email = strtolower($request->email);
        $request->validate([
            'ho_ten' => 'required|string|max:255',
            'email' => 'required|email|unique:nguoidungs,email',
            'mat_khau' => 'required|min:6',
        ]);
        if($email == 'admin@gmail.com'){
            return back()->with('error', 'Email này không được phép đăng ký!');
        }
        // Kiểm tra email đã tồn tại (không phân biệt hoa thường), và ràng buộc email xem nó có tồn tại không ->(exists)
        if (Nguoidung::whereRaw('LOWER(email) = ?', [$email])->exists()) {
            return back()->with('error', 'Email đã tồn tại, vui lòng nhập email khác.');
        }
        // Nếu email chưa tồn tại, tiến hành đăng ký
        $user = new Nguoidung(); 
        $user->ho_ten = $request->ho_ten;
        $user->email = $email; // Lưu email dạng chữ thường
        $user->mat_khau = Hash::make($request->mat_khau); // bảo mật bằng bcrypt 
        $user->save(); // lưu user lại
    
        return back()->with('success', 'Đăng ký thành công!');
    }    
    public function login()
    {
        if (Auth::check()) {
            return redirect('/home');
        }
        return view('login');
    }
    public function loginPost(Request $request)
{
    // Dữ liệu đăng nhập cần kiểm tra
    $credentials = [
        'email' => $request->email,
        'password' => $request->mat_khau, // Laravel sẽ tự động kiểm tra mật khẩu băm
    ];

    // Đăng nhập cho bảng nguoidungs
    if (Auth::guard('web')->attempt($credentials)) {
        return redirect('/home')->with('success', 'Đăng nhập thành công'); // Nếu đúng, chuyển hướng về trang chủ
    }

    // Đăng nhập cho bảng nhanviens
    if (Auth::guard('nhanvien')->attempt($credentials)) {
        return redirect('/admin')->with('success', 'Đăng nhập thành công'); // Nếu đúng, chuyển hướng về trang admin
    }
    // Nếu đăng nhập thất bại, trả về trang login kèm thông báo lỗi
    return back()->withInput($request->only('email'))->with('error', 'Email hoặc mật khẩu không đúng');
}
public function logout()
    {
        // Nếu người dùng đang đăng nhập
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout(); // Đăng xuất người dùng
            return redirect()->route('login')->with('success', 'Người dùng đã đăng xuất!');
        }

        // Nếu nhân viên đang đăng nhập
        if (Auth::guard('nhanviens')->check()) {
            Auth::guard('nhanviens')->logout(); // Đăng xuất nhân viên
            return redirect()->route('login')->with('success', 'Nhân viên đã đăng xuất!');
        }

        return redirect()->route('login'); // Nếu không ai đăng nhập, chuyển về trang đăng nhập
    }
}
