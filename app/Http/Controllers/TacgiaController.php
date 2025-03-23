<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tacgia;
class TacgiaController extends Controller
{
    public function index()
    {
        $tacgias = Tacgia::all();
        return view('tacgia.index')->with('tacgias', $tacgias);
    }
    public function create(){
        return view('tacgia.create');
    }
    public function store(Request $request){
        Tacgia::create($request->all());
        return redirect()->route('tacgia.index')->with('success','Thêm tác giả thành công');
    }
    public function search(Request $request){
        $search = $request->get('search');
        $tacgias = Tacgia::where('ten_tac_gia','like','%'.$search.'%')
        ->orWhere('quoc_tich','like','%'.$search.'%')
        ->get();
        return view('tacgia.index')->with('tacgias', $tacgias);
    }
    public function show($id){
        $tacgia = Tacgia::findOrFail($id);
        return view('tacgia.show')->with('tacgia', $tacgia);
    }
    public function edit($id){
        $tacgia = Tacgia::findOrFail($id);
        return view('tacgia.edit')->with('tacgia', $tacgia);
    }
    public function update(Request $request, $id){
        $tacgia = Tacgia::findOrFail($id);
        $tacgia->update($request->all());
        return redirect()->route('tacgia.index')->with('success','Cập nhật tác giả thành công');
    }
    public function destroy($id){
        $tacgia = Tacgia::findOrFail($id);
        $tacgia->delete();
        return redirect()->route('tacgia.index')->with('success','Xóa tác giả thành công');
    }
}
