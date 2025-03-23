@extends('layout.app')
@section('title')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Danh sách thư viện</h1>
    </div>
@endsection
@section('search')
    <form action="{{route('sach.search')}}"
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
            <a href="{{route('sach.create')}}" class="m-0 font-weight-bold btn btn-success">Thêm sách</a>
        </div>
        <div class="card-body">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã sách</th>
                            <th>Tiêu đề</th>
                            <th>Tên tác giả</th>
                            <th>Thể loại</th>
                            <th>ISBN</th>
                            <th>Năm Xuất Bản</th>
                            <th>Số lượng</th>
                            <th>Còn lại</th>
                            <th>Vị trí</th>
                            <th>Ngôn ngữ</th>
                            <th>Nhà xuất bản</th>
                            <th>hình ảnh</th>
                            <th>Tình trạng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($sachs->count() > 0)
                            @foreach ($sachs as $sach)
                                <tr>
                                    <td>{{$sach->id}}</td>
                                    <td>{{$sach->tieu_de}}</td>
                                    <td>{{$sach->tacgia ? $sach->tacgia->ten_tac_gia : 'Không có tác giả'}}</td>
                                    <td>{{$sach->theloai ? $sach->theloai->ten_the_loai : 'Không có thể loại'}}</td>
                                    <td>{{$sach->isbn}}</td>
                                    <td>{{$sach->nam_xuat_ban}}</td>
                                    <td>{{$sach->so_luong}}</td>
                                    <td>{{$sach->con_lai}}</td>
                                    <td>{{$sach->vitri ? $sach->vitri->ten_vi_tri : 'Không có vị trí'}}</td>
                                    <td>{{$sach->ngonngu ? $sach->ngonngu->ten_ngon_ngu : 'Không có ngôn ngữ'}}</td>
                                    <td>{{$sach->nhaxuatban ? $sach->nhaxuatban->ten_nha_xuat_ban : 'Không có nhà xuất bản'}}</td>
                                    <td><img src="{{ asset('img/' . $sach->image) }}" width="50" alt="Hình ảnh sách"></td>
                                    <td>{{ $sach->con_lai == 0 ? 'Tạm hết' : $sach->hien_trang }}</td>
                                    <td>
                                        <a href="{{route('sach.show', $sach->id)}}" class="btn btn-success">Xem</a>
                                        <a href="{{route('sach.edit', $sach->id)}}" class="btn btn-primary">Sửa</a>
                                        <form action="{{route('sach.destroy', $sach->id)}}" method="POST" class="btn btn-danger p-0"
                                            onsubmit="return confirm('Bạn muốn xóa?')">
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