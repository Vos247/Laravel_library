@extends('layout.app')
@section('title')
Danh sách thống kê
@endsection
@section('search')
<form action="{{route('thongke.search')}}"
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

@if($thongkes->isEmpty())
<div class="alert alert-warning">
    Không có sách nào được mượn hoặc trả trong ngày/tháng/năm này.
</div>
@endif
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('thongke.index') }}" method="GET" class="mb-3">
            <div class="form-row align-items-center">
                <div class="col-auto">
                    <input type="date" name="date" class="form-control" value="{{ request('date') }}">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Lọc</button>
                </div>
            </div>
        </form>
    </div>
</div>
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Thống Kê</h6>
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
                            <th>Mã thống kê</th>
                            <th>Loại thống kê</th>
                            <th>Nội dung thống kê</th>
                            <th>Tên sách</th>
                            <th>Email người dùng</th>
                            <th>Ngày tạo phiếu mượn</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($thongkes as $thongke)
                    <tr>
                        <td>{{ $thongke->id }}</td>
                        <td>{{ $thongke->trang_thai == 0 ? 'Chưa trả sách' : 'Đã trả sách' }}</td>
                        <td>{{ $thongke->trang_thai == 0 ? 'Sách đang được mượn' : 'Sách đã được trả' }}</td>
                        <td>{{ $thongke->sach ? $thongke->sach->tieu_de : 'Không có sách' }}</td>
                        <td>{{ $thongke->nguoidung ? $thongke->nguoidung->email : 'Không có người dùng' }}</td>
                        <td>{{ $thongke->created_at }}</td>
                        <td>
                            <form action="{{route('thongke.destroy',$thongke->id)}}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Bạn muốn xóa?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection