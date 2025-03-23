<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nguoidung;

class NguoidungController extends Controller
{
    public function index()
    {
        $nguoidungs = Nguoidung::all();
        return view('nguoidung.index')->with('nguoidungs', $nguoidungs);
    }
    public function create(){
        return view('nguoidung.create');
    }
    public function store(Request $request){
        $nguoidung = new Nguoidung();
        $nguoidung->ho_ten = $request->ho_ten;
        $nguoidung->email = $request->email;
        $nguoidung->mat_khau = bcrypt($request->mat_khau);
        $nguoidung->so_dien_thoai = $request->so_dien_thoai;
        $nguoidung->dia_chi = $request->dia_chi;
        $nguoidung->ngay_dang_ky = now();
        $nguoidung->ngay_het_han = $request->ngay_het_han;
        $nguoidung->save();
        return redirect()->route('nguoidung.index')->with('success', 'thêm người dùng thành công');
    }
    public function search(Request $request){
        $search = $request->get('search');
        $nguoidungs = Nguoidung::where('ho_ten', 'like', '%' . $search . '%')
        ->orWhere('email', 'like', '%' . $search . '%')
        ->get();
        return view('nguoidung.index')->with('nguoidungs', $nguoidungs);
    }
    public function show($id){
        $nguoidung = Nguoidung::find($id);
        return view('nguoidung.show')->with('nguoidung', $nguoidung);
    }
    public function edit($id){
        $nguoidung = Nguoidung::find($id);
        return view('nguoidung.edit')->with('nguoidung', $nguoidung);
    }
    public function update(Request $request, $id){
        $nguoidung = Nguoidung::find($id);
        if (!$nguoidung) {
            return redirect()->route('nguoidung.index')->with('error', 'Người dùng không tồn tại');
        }
        $nguoidung->ho_ten = $request->ho_ten;
        $nguoidung->email = $request->email;
    
        if ($request->filled('mat_khau')) {
            $nguoidung->mat_khau = bcrypt($request->mat_khau);
        }
    
        $nguoidung->so_dien_thoai = $request->so_dien_thoai;
        $nguoidung->dia_chi = $request->dia_chi;
    
        $nguoidung->save();
        return redirect()->route('nguoidung.index')->with('success', 'cập nhật người dùng thành công');
    }
    public function destroy($id){
        $nguoidung = Nguoidung::find($id);
        if (!$nguoidung) {
            return redirect()->route('nguoidung.index')->with('error', 'Người dùng không tồn tại');
        }
        $nguoidung->delete();
        return redirect()->route('nguoidung.index')->with('success', 'xóa người dùng thành công');
    }
}
