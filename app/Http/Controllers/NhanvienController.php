<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nhanvien;
class NhanvienController extends Controller
{
    public function index(){
        $nhanviens = Nhanvien::all();
        return view('nhanvien.index')->with('nhanviens', $nhanviens);
    }
    public function create(){
        return view('nhanvien.create');
    }
    public function store(Request $request){
        $nhanvien = new Nhanvien();
        $nhanvien->ho_ten = $request->ho_ten;
        $nhanvien->email = $request->email;
        $nhanvien->mat_khau = bcrypt($request->mat_khau);
        $nhanvien->so_dien_thoai = $request->so_dien_thoai;
        $nhanvien->vai_tro= $request->vai_tro;
        $nhanvien->nguoidung_id = $request->nguoidung_id;
        $nhanvien->save();
        return redirect()->route('nhanvien.index')->with('success', 'thêm nhân viên thành công');
    }
    public function search(Request $request){
        $search = $request->get('search');
        $nhanviens = Nhanvien::where('ho_ten', 'like', '%' . $search . '%')
        ->orWhere('email', 'like', '%' . $search . '%')
        ->get();
        return view('nhanvien.index')->with('nhanviens', $nhanviens);
    }
    public function show($id){
        $nhanvien = Nhanvien::find($id);
        return view('nhanvien.show')->with('nhanvien', $nhanvien);
    }
    public function edit($id){
        $nhanvien = Nhanvien::find($id);
        return view('nhanvien.edit')->with('nhanvien', $nhanvien);
    }
    public function update(Request $request, $id){
        $nhanvien = Nhanvien::find($id);
        if (!$nhanvien) {
            return redirect()->route('nhanvien.index')->with('error', 'Nhân viên không tồn tại');
        }
        $nhanvien->ho_ten = $request->ho_ten;
        $nhanvien->email = $request->email;
    
        if ($request->filled('mat_khau')) {
            $nhanvien->mat_khau = bcrypt($request->mat_khau);
        }
    
        $nhanvien->so_dien_thoai = $request->so_dien_thoai;
        $nhanvien->vai_tro = $request->vai_tro;
        $nhanvien->nguoidung_id = $request->nguoidung_id;
    
        $nhanvien->save();
        return redirect()->route('nhanvien.index')->with('success', 'cập nhật nhân viên thành công');
    }
    public function destroy($id){
        $nhanvien = Nhanvien::find($id);
        if (!$nhanvien) {
            return redirect()->route('nhanvien.index')->with('error', 'Nhân viên không tồn tại');
        }
        $nhanvien->delete();
        return redirect()->route('nhanvien.index')->with('success', 'xóa nhân viên thành công');
    }
}
