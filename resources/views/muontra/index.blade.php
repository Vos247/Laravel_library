@extends('layout.app')
@section('title')
Danh sách phiếu mượn
@endsection
@section('search')
<form action="{{route('muontra.search')}}"
class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search"
            aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>
@endsection
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{route('muontra.create')}}" class="m-0 font-weight-bold btn btn-success">Thêm phiếu mượn</a>
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Mã Phiếu mượn</th>
                        <th>Email người dùng</th>
                        <th>Tên sách</th>
                        <th>Ngày mượn</th>
                        <th>Hạn trả</th>
                        <th>Ngày đã trả sách</th>
                        <th>Trạng thái</th>
                        <th>Ghi chú</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                @if($muontras->count() > 0)
                    @foreach ($muontras as $muontra)
                        <tr>
                            <td>{{$muontra->id}}</td>
                            <td>{{$muontra->nguoidung ? $muontra->nguoidung->email : 'không có tên người dùng'}}</td>
                            <td>{{$muontra->sach ? $muontra->sach->tieu_de : 'Không có tài liệu sách'}}</td>
                            <td>{{$muontra->ngay_muon}}</td>
                            <td>{{$muontra->han_tra}}</td>
                            <td>{{$muontra->ngay_tra}}</td>
                            <td>{{$muontra->trang_thai}}</td>
                            <td>{{$muontra->ghi_chu }}</td>
                            <td>
                            <a href="{{route('muontra.show',$muontra->id)}}" type="button" class="btn btn-success">Xem</a>
                            <a href="{{route('muontra.edit',$muontra->id)}}" type="button" class="btn btn-primary">Sửa</a>
                            <form action="{{route('muontra.destroy',$muontra->id)}}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Bạn muốn xóa?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <tr>
                        <td class="text-center">Không tìm thấy dữ liệu! </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection