<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nhaxuatban;

class NhaxuatbanController extends Controller
{
    public function index()  {
        $nhaxuatbans = Nhaxuatban::orderBy('created_at','DESC')->get();
        $nhaxuatbans = Nhaxuatban::all();
        return view('nhaxuatban.index')->with('nhaxuatbans', $nhaxuatbans);
    }
    public function create(){
        return view('nhaxuatban.create');
    }
    public function search(Request $request){
        $search = $request->get('search');
        $nhaxuatbans = Nhaxuatban::where('website', 'like', '%' . $search . '%')
    ->orWhere('ten_nha_xuat_ban', 'like', '%' . $search . '%')
    ->get();
        return view('nhaxuatban.index')->with('nhaxuatbans', $nhaxuatbans);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ten_nha_xuat_ban' => 'required',
            'dia_chi' => 'required',
            'so_dien_thoai' => 'required',
            'email' => 'required',
            'website' => 'required',
        ]);
        Nhaxuatban::create($validatedData);
        return redirect()->route('nhaxuatban.index')->with('success','Thêm mới nhà xuất bản thành công');
    }
    public function show($id)
    {
        $nhaxuatban = Nhaxuatban::findOrFail($id);
        return view('nhaxuatban.show')->with('nhaxuatban', $nhaxuatban);
    }
    public function edit($id)
    {
        $nhaxuatban = Nhaxuatban::findOrFail($id);
        return view('nhaxuatban.edit')->with('nhaxuatban', $nhaxuatban);
    }
    public function update(Request $request, $id)
    {
        $nhaxuatban = Nhaxuatban::findOrFail($id);
        $nhaxuatban->update($request->all());
        return redirect()->route('nhaxuatban.index')->with('success','Sửa nhà xuất bản thành công');
    }
    public function destroy($id){
        $nhaxuatban = Nhaxuatban::findOrFail($id);
        $nhaxuatban->delete();
        return redirect()->route('nhaxuatban.index')->with('success','Xóa nhà xuất bản thành công');
    }
}
