@extends('layout.app')
@section('title')
Danh sách Vị trí
@endsection
@section('search')
<form action="{{route('vitri.search')}}"
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
        <a href="{{route('vitri.create')}}" class="m-0 font-weight-bold btn btn-success">Thêm vị trí</a>
    </div>
    <hr />
    @if( Session::has('success') )
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Mã vị trí</th>
                        <th>Tên vị trí</th>
                        <th>Mô tả</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @if($vitris->count() > 0)
                    @foreach ($vitris as $vitri)
                        <tr>
                            <td>{{$vitri->id}}</td>
                            <td>{{$vitri->ten_vi_tri}}</td>
                            <td>{{$vitri->mo_ta}}</td>
                            <td>
                                <a href="{{route('vitri.show',$vitri->id)}}" type="button" class="btn btn-success">Xem</a>
                                <a href="{{route('vitri.edit',$vitri->id)}}" type="button"class="btn btn-primary">Sửa</a>
                                <form action="{{route('vitri.destroy',$vitri->id)}}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Bạn muốn xóa?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @else 
                    <tr>
                        <td class="text-center" colspa="5">không tìm thấy dữ liệu!</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection