<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vitri;

class VitriController extends Controller
{
    public function index()
    {
        $vitris = Vitri::orderBy('created_at','DESC')->get();
        $vitris = Vitri::all(); 
        return view('vitri.index')->with('vitris', $vitris);
    }
    public function search(Request $request){
        $search = $request->get('search');
        $vitris = Vitri::where('ten_vi_tri', 'like', '%' . $search . '%')->get();
        return view('vitri.index')->with('vitris', $vitris);
    }
    public function create(){
        return view('vitri.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ten_vi_tri' => 'required',
            'mo_ta' => 'required',
        ]);
        Vitri::create($validatedData);
        return redirect()->route('vitri.index')->with('success','Thêm mới vị trí thành công');
    }
    public function show($id)
    {
        $vitri = Vitri::findOrFail($id);
        return view('vitri.show')->with('vitri', $vitri);
    }
    public function edit($id){
        $vitri = Vitri::findOrFail($id);
        return view('vitri.edit')->with('vitri', $vitri);
    }
    public function update(Request $request, $id){
        $vitri = Vitri::findOrFail($id);
        $vitri->update($request->all());
        return redirect()->route('vitri.index')->with('success','Cập nhật vị trí thành công');
    }
    public function destroy($id){
       $vitri = Vitri::findOrFail($id);
       $vitri->delete();
        return redirect()->route('vitri.index')->with('success','Xóa vị trí thành công');
    }
}
