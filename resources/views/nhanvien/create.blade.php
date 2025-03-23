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
                        <input type="text" name="ho_ten" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="roleSelect" class="form-label">Vai trò</label><br>
                        <select class="form-select" name="vai_tro" aria-describedby="roleHelp">
                            <option value="" selected>Chọn vai trò</option>
                            <option value="Thủ thư">Thủ thư</option>
                        </select>
                        <small id="roleHelp" class="form-text text-muted">Vui lòng chọn vai trò của bạn.</small>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                        <input type="text" name="so_dien_thoai" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="mat_khau" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mã người dùng</label>
                        <input type="number" name="nguoidung_id" class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
            </div>

            <div class="row">
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
    </div>
</div>
@endsection