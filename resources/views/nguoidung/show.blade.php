@extends ('layout.app')
@section('title')
Xem người dùng
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{route('nguoidung.store')}}" method="POST">
            @csrf
            <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tên người dùng</label>
                    <input type="text" name="ho_ten" class="form-control" value="{{$nguoidung->ho_ten}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{$nguoidung->email}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
                    <input type="text" name="dia_chi" class="form-control" value="{{$nguoidung->dia_chi}}" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mật khẩu</label>
                    <input type="password" name="mat_khau" class="form-control" value="{{$nguoidung->mat_khau}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                    <input type="number" name="so_dien_thoai" class="form-control" value="{{$nguoidung->so_dien_thoai}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ngày đăng ký</label>
                    <input type="date" name="ngay_het_han" class="form-control" value="{{$nguoidung->ngay_dang_ky}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ngày hết hạn</label>
                    <input type="date" name="ngay_het_han" class="form-control" value="{{$nguoidung->ngay_het_han}}" readonly>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mã vị trí</label>
                    <input type="text" name="id" class="form-control" placeholder="tenvitri" value="{{$nguoidung->id}}" readonly >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Created At</label>
                    <input type="text" name="created_at" class="form-control" placeholder="mota" value="{{$nguoidung->created_at}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Updated At</label>
                    <input type="text" name="updated_at" class="form-control" placeholder="mota" value="{{$nguoidung->updated_at}}" readonly>
                </div>
            </div>
            </div>
            <div class="card-footer">
            <a href="{{route('nguoidung.index')}}" class="btn btn-primary">Quay lại</a>
            </div>
        </form>
    </div>
</div>
@endsection