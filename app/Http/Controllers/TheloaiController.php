<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theloai;
class TheloaiController extends Controller
{
    public function index()
    {
        $theloais = TheLoai::all(); // Lấy tất cả thể loại từ database
        return view('theloai.index', compact('theloais')); // Truyền dữ liệu sang view
    }
    public function create(){
        return view('theloai.create');
    }
    public function search(Request $request){
        $search = $request->get('search');
        $theloais = Theloai::where('ten_the_loai', 'like', '%' . $search . '%')->get();
        return view('theloai.index')->with('theloais', $theloais);
    }
    public function store(Request $request){
        Theloai::create($request->all());
        return redirect()->route('theloai.index')->with('success','Thêm thể loại thành công');
    }
    public function show($id)
    {
        $theloai = Theloai::findOrFail($id);
        return view('theloai.show')->with('theloai', $theloai);
    }
    public function edit($id)
    {
        $theloai = Theloai::findOrFail($id);
        return view('theloai.edit')->with('theloai', $theloai);
    }
    public function update(Request $request, $id)
{
    $request->validate([
        'ten_the_loai' => ['required', 'regex:/^[\pL\s]+$/u'], // Chỉ chấp nhận chữ và khoảng trắng
    ], [
        'ten_the_loai.required' => 'Tên thể loại không được để trống.',
        'ten_the_loai.regex' => 'Tên thể loại chỉ được chứa chữ cái.',
    ]);

    $theloai = Theloai::findOrFail($id);
    $theloai->update($request->only('ten_the_loai'));

    return redirect()->route('theloai.index')->with('success', 'Sửa thể loại thành công');
}

    public function destroy($id){
        $theloai = Theloai::findOrFail($id);
        $theloai->delete();
        return redirect()->route('theloai.index')->with('success','Xóa thể loại thành công');
    }
}
