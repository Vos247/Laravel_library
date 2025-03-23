@extends ('layout.app')
@section('title')
Thêm mới nhân viên
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{route('nhanvien.update',$nhanvien->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Họ tên nhân viên</label>
                        <input type="text" name="ho_ten" class="form-control" value="{{$nhanvien->ho_ten}}">
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Vai trò</label>
                    <input type="text" name="vai_tro" class="form-control" value="{{$nhanvien->vai_tro}}">
                </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$nhanvien->email}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                        <input type="text" name="so_dien_thoai" class="form-control" id="exampleInputPassword1" value="{{$nhanvien->so_dien_thoai}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="mat_khau" class="form-control" id="exampleInputPassword1" value="{{$nhanvien->mat_khau}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mã người dùng</label>
                        <input type="number" name="nguoidung_id" class="form-control" id="exampleInputPassword1" value="{{$nhanvien->nguoidung_id}}">
                    </div>
                </div>
            </div>
            <div class="row">
            <button class="btn btn-warning">Cập nhật</button>
            <a href="{{route('nhanvien.index')}}" class="btn btn-primary">Quay lại</a>
            </div>
        </form>
    </div>
</div>
@endsection