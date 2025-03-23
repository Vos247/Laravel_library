@extends ('layout.app')
@section('title')
Thêm mới người dùng
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
                    <input type="text" name="ho_ten" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Địa chỉ</label>
                    <input type="text" name="dia_chi" class="form-control" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mật khẩu</label>
                    <input type="password" name="mat_khau" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                    <input type="number" name="so_dien_thoai" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ngày hết hạn</label>
                    <input type="date" name="ngay_het_han" class="form-control" >
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