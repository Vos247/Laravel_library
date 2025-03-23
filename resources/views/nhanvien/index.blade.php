@extends('layout.app')
@section('title')
Danh sách nhân viên
@endsection
@section('search')
<form action="{{route('nhanvien.search')}}"
    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..."
            aria-label="Search" aria-describedby="basic-addon2">
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
        <a href="{{route('nhanvien.create')}}" class="m-0 font-weight-bold btn btn-success">Thêm nhân viên</a>
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
                        <th>Mã nhân viên</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Vai trò</th>
                        <th>Mật khẩu</th>
                        <th>Ngày tạo</th>
                        <th>Mã người dùng</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @if($nhanviens->count() > 0)
                        @foreach ($nhanviens as $nhanvien)
                            <tr>
                                <td>{{$nhanvien->id}}</td>
                                <td>{{$nhanvien->ho_ten}}</td>
                                <td>{{$nhanvien->email}}</td>
                                <td>{{$nhanvien->so_dien_thoai}}</td>
                                <td>{{$nhanvien->vai_tro}}</td>
                                <td>{{$nhanvien->mat_khau}}</td>
                                <td>{{$nhanvien->ngay_tao}}</td>
                                <td>{{$nhanvien->nguoidung_id}}</td>
                                <td>
                                <a href="{{route('nhanvien.show',$nhanvien->id)}}" type="button" class="btn btn-success">Xem</a>
                                <a href="{{route('nhanvien.edit',$nhanvien->id)}}" type="button" class="btn btn-primary">Sửa</a>
                                <form action="{{route('nhanvien.destroy',$nhanvien->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xóa</button>
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