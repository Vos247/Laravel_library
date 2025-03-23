<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ngonngu;

class NgonnguController extends Controller
{
    public function index() {
        $ngonngus = Ngonngu::all();
        return view('ngonngu.index')->with('ngonngus', $ngonngus);
    }
    public function create(){
        return view('ngonngu.create');
    }
    public function store(Request $request)
    {
        Ngonngu::create($request->all());
        return redirect()->route('ngonngu.index')->with('success','Thêm ngôn ngữ thành công');
    }
    public function search(Request $request){
        $search = $request->get('search');
        $ngonngus = Ngonngu::where('ten_ngon_ngu', 'like', '%' . $search . '%')
        ->get();
        return view('ngonngu.index')->with('ngonngus', $ngonngus);
    }
    public function show($id)
    {
        $ngonngu = Ngonngu::findOrFail($id);
        return view('ngonngu.show')->with('ngonngu', $ngonngu);
    }
    public function edit($id){
        $ngonngu = Ngonngu::findOrFail($id);
        return view('ngonngu.edit')->with('ngonngu', $ngonngu);
    }
    public function update(Request $request, $id){
        $ngonngu = Ngonngu::findOrFail($id);
        $ngonngu->update($request->all());
        return redirect()->route('ngonngu.index')->with('success','Sửa ngôn ngữ thành công');
    }
    public function destroy($id){
        Ngonngu::destroy($id);
        return redirect()->route('ngonngu.index')->with('success','Xóa ngôn ngữ thành công');
    }
}
