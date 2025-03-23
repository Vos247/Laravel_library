@extends ('layout.app')
@section('title')
Sửa nhà xuất bản
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{route('nhaxuatban.update',$nhaxuatban->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tên nhà xuất bản</label>
                    <input type="text" name="ten_nha_xuat_ban" class="form-control" placeholder="tenvitri" value="{{$nhaxuatban->ten_nha_xuat_ban}}" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">địa chỉ</label>
                    <input type="text" name="dia_chi" class="form-control" placeholder="mota" value="{{$nhaxuatban->dia_chi}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                    <input type="text" name="so_dien_thoai" class="form-control" placeholder="tenvitri" value="{{$nhaxuatban->so_dien_thoai}}" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="mota" value="{{$nhaxuatban->email}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">website</label>
                    <input type="text" name="website" class="form-control" placeholder="tenvitri" value="{{$nhaxuatban->website}}" >
                </div>
            </div>
            </div>
            <div class="row">
            <button class="btn btn-warning">Cập nhật</button>
            <a href="{{route('nhaxuatban.index')}}" class="btn btn-primary">Quay lại</a>
            </div>
        </form>
    </div>
</div>
@endsection