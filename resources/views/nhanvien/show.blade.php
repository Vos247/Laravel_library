@extends ('layout.app')
@section('title')
Thêm mới nhân viên
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{route('nhanvien.store')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Họ tên nhân viên</label>
                        <input type="text" name="ho_ten" class="form-control" value="{{$nhanvien->ho_ten}}" readonly>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Vai trò</label>
                    <input type="text" name="dia_chi" class="form-control" value="{{$nhanvien->vai_tro}}" readonly>
                </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$nhanvien->email}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                        <input type="text" name="so_dien_thoai" class="form-control" id="exampleInputPassword1" value="{{$nhanvien->so_dien_thoai}}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="mat_khau" class="form-control" id="exampleInputPassword1" value="{{$nhanvien->mat_khau}}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mã người dùng</label>
                        <input type="number" name="nguoidung_id" class="form-control" id="exampleInputPassword1" value="{{$nhanvien->nguoidung_id}}" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mã nhân viên</label>
                    <input type="text" name="id" class="form-control" placeholder="tenvitri" value="{{$nhanvien->id}}" readonly >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Created At</label>
                    <input type="text" name="created_at" class="form-control" placeholder="mota" value="{{$nhanvien->created_at}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Updated At</label>
                    <input type="text" name="updated_at" class="form-control" placeholder="mota" value="{{$nhanvien->updated_at}}" readonly>
                </div>
            </div>
            </div>
            <div class="card-footer">
            <a href="{{route('nhanvien.index')}}" class="btn btn-primary">Quay lại</a>
            </div>
        </form>
    </div>
</div>
@endsection