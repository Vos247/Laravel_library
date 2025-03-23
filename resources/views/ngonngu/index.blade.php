@extends('layout.app')
@section('title')
Danh sách ngôn ngữ
@endsection
@section('search')
<form action="{{route('ngonngu.search')}}"
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
        <a href="{{route('ngonngu.create')}}" class="m-0 font-weight-bold btn btn-success">Thêm ngôn ngữ</a>
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
                        <th>Mã ngôn ngữ</th>
                        <th>Tên ngôn ngữ</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                 @if($ngonngus->count() > 0)
                    @foreach ($ngonngus as $ngonngu)
                        <tr>
                            <td>{{$ngonngu->id}}</td>
                            <td>{{$ngonngu->ten_ngon_ngu}}</td>
                            <td>
                            <a href="{{route('ngonngu.show',$ngonngu->id)}}" type="button" class="btn btn-success">Xem</a>
                            <a href="{{route('ngonngu.edit',$ngonngu->id)}}" type="button" class="btn btn-primary">Sửa</a>
                            <form action="{{route('ngonngu.destroy',$ngonngu->id)}}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Bạn muốn xóa?')">
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