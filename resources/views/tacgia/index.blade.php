@extends('layout.app')
@section('title')
Danh sách tác giả
@endsection
@section('search')
<form action="{{route('tacgia.search')}}"
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
        <a href="{{route('tacgia.create')}}" class="m-0 font-weight-bold btn btn-success">Thêm tác giả</a>
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
                        <th>Năm Sinh</th>
                        <th>Quốc tịch</th>
                        <th>Tiểu sử</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                @if($tacgias->count() > 0)
                    @foreach ($tacgias as $tacgia)
                        <tr>
                            <td>{{$tacgia->id}}</td>
                            <td>{{$tacgia->ten_tac_gia}}</td>
                            <td>{{$tacgia->ngay_sinh}}</td>
                            <td>{{$tacgia->quoc_tich}}</td>
                            <td>{{$tacgia->tieu_su}}</td>
                            <td>
                                <a href="{{route('tacgia.show',$tacgia->id)}}" type="button" class="btn btn-success">Xem</a>
                                <a href="{{route('tacgia.edit',$tacgia->id)}}" type="button" class="btn btn-primary">Sửa</a>
                                <form action="{{route('tacgia.destroy',$tacgia->id)}}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Bạn muốn xóa?')">
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