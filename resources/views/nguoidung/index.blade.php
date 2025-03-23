@extends('layout.app')
@section('title')
Danh sách người dùng
@endsection
@section('search')
<form action="{{route('nguoidung.search')}}"
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
        <a href="{{route('nguoidung.create')}}" class="m-0 font-weight-bold btn btn-success">Thêm người dùng</a>
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
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Mật khẩu</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Ngày đăng ký</th>
                        <th>Ngày hết hạn</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                @if($nguoidungs->count() > 0)
                    @foreach ($nguoidungs as $nguoidung)
                        <tr>
                            <td>{{$nguoidung->id}}</td>
                            <td>{{$nguoidung->ho_ten}}</td>
                            <td>{{$nguoidung->email}}</td>
                            <td>{{$nguoidung->mat_khau}}</td>
                            <td>{{$nguoidung->so_dien_thoai}}</td>
                            <td>{{$nguoidung->dia_chi}}</td>
                            <td>{{$nguoidung->ngay_dang_ky}}</td>
                            <td>{{$nguoidung->ngay_het_han}}</td>
                            <td>
                            <a href="{{route('nguoidung.show',$nguoidung->id)}}" type="button" class="btn btn-success">Xem</a>
                            <a href="{{route('nguoidung.edit',$nguoidung->id)}}" type="button" class="btn btn-primary">Sửa</a>
                            <form action="{{route('nguoidung.destroy',$nguoidung->id)}}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Bạn muốn xóa?')">
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