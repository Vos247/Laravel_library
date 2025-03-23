<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Muontra;
class MuontraController extends Controller
{
    public function index() {
        $muontras = Muontra::all();
        return view('muontra.index')->with('muontras', $muontras);
    }
    public function create(){
        return view('muontra.create');
    }
    public function store(Request $request){
        Muontra::create($request->all());
        return redirect()->route('muontra.index')->with('success','Thêm phiếu mượn thành công');
    }
    public function search(Request $request){
        $search = $request->get('search');
        
        $muontras = Muontra::with(['nguoidung', 'sach'])
            ->whereHas('nguoidung', function ($query) use ($search) {
                $query->where('email', 'like', '%'.$search.'%');
            })
            ->orWhereHas('sach', function ($query) use ($search) {
                $query->where('tieu_de', 'like', '%'.$search.'%');
            })
            ->orWhere('ngay_muon', 'like', '%'.$search.'%')
            ->get();
    
        return view('muontra.index')->with('muontras', $muontras);
    }    
    public function show($id)
    {
        $muontra = Muontra::find($id);
        return view('muontra.show')->with('muontra', $muontra);
    }
    public function edit($id){
        $muontra = Muontra::find($id);
        return view('muontra.edit')->with('muontra', $muontra);
    }
    public function update(Request $request, $id){
        $muontra = Muontra::find($id);
        // Chỉ cập nhật các trường cần thiết
        $muontra->trang_thai = $request->trang_thai;
        $muontra->ngay_tra = $request->ngay_tra;
        $muontra->ghi_chu = $request->ghi_chu;
        $muontra->save();
        return redirect()->route('muontra.index')->with('success','Cập nhật phiếu mượn thành công');
    }    
    public function destroy($id){
        Muontra::find($id)->delete();
        return redirect()->route('muontra.index')->with('success','Xóa phiếu mượn thành công');
    }
}
