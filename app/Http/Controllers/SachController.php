<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Sach;
class sachController extends Controller
{
    public function index()
    {
        $sachs = Sach::all();
        return view('sach.index')->with('sachs', $sachs);
    }
    public function search(Request $request){
        $search = $request->get('search');
        $sachs = Sach::where('tieu_de', 'like', '%' . $search . '%')
        ->orWhere('isbn', 'like', '%' . $search . '%')
        ->orWhereHas('tacgia', function ($query) use ($search) {
        $query->where('ten_tac_gia', 'like', '%' . $search . '%');
    })
        ->get();
        return view('sach.index')->with('sachs', $sachs);
    }
    public function imageUpload(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    // Đặt tên file theo thời gian để tránh trùng lặp
    $imageName = time().'.'.$request->image->extension();

    // Lưu file vào thư mục public/img/
    $request->image->move(public_path('img'), $imageName);

    // Lưu đường dẫn vào database
    $sach = new Sach(); // Nếu dùng model Sach
    $sach->image = $imageName; 
    $sach->save();

    return back()->with('success', 'Bạn đã upload ảnh thành công.')->with('image', $imageName);
}
    public function create()
    {
        return view('sach.create');
    }
    public function store(Request $request)
    {
        Sach::create($request->all());
        return redirect()->route('sach.index')->with('success', 'Thêm sách thành công');
    }
    public function show($id)
{
    $sach = Sach::findOrFail($id);
    return view('sach.show')->with('sach', $sach);
}
    public function edit($id)
    {
        $sach = Sach::findOrFail($id);
        return view('sach.edit')->with('sach', $sach);
    }
    public function update(Request $request, $id){
        $sach = Sach::findOrFail($id);
        $sach->update($request->all());
        return redirect()->route('sach.index')->with('success','Cập nhật sách thành công');
    }
    public function destroy($id){
        $sach = Sach::findOrFail($id);
        $sach->delete();
        return redirect()->route('sach.index')->with('success','Xóa sách thành công');
    }
}
