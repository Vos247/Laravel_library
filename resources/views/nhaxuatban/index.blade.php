@extends('layout.app')
@section('title')
Danh sách nhà xuất bản
@endsection
@section('search')
<form action="{{route('nhaxuatban.search')}}"
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
        <a href="{{route('nhaxuatban.create')}}" class="m-0 font-weight-bold btn btn-success">Thêm nhà xuất bản</a>
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
                        <th>Mã nhà xuất bản</th>
                        <th>Tên nhà xuất bản</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                @if($nhaxuatbans->count() > 0)
                    @foreach ($nhaxuatbans as $nhaxuatban)
                        <tr>
                            <td>{{$nhaxuatban->id}}</td>
                            <td>{{$nhaxuatban->ten_nha_xuat_ban}}</td>
                            <td>{{$nhaxuatban->dia_chi}}</td>
                            <td>{{$nhaxuatban->so_dien_thoai}}</td>
                            <td>{{$nhaxuatban->email}}</td>
                            <td>{{$nhaxuatban->website}}</td>
                            <td>
                                <a href="{{route('nhaxuatban.show',$nhaxuatban->id)}}" type="button" class="btn btn-success">Xem</a>
                                <a href="{{route('nhaxuatban.edit',$nhaxuatban->id)}}" type="button"class="btn btn-primary">Sửa</a>
                                <form action="{{route('nhaxuatban.destroy',$nhaxuatban->id)}}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Bạn muốn xóa?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @else 
                    <tr>
                        <td class="text-center" colspa="5">không tìm thấy dữ liệu</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection