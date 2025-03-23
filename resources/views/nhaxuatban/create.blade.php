@extends ('layout.app')
@section('title')
Thêm mới nhà xuất bản
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{route('nhaxuatban.store')}}" method="POST">
            @csrf
            <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tên nhà xuất bản</label>
                    <input type="text" class="form-control" name="ten_nha_xuat_ban" placeholder="tên nhà xuất bản">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                    <input type="text" name="dia_chi" class="form-control" placeholder="Địa chỉ">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" name="so_dien_thoai" placeholder="Số điện thoại">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Website</label>
                    <input type="text" class="form-control" name="website" placeholder="Website">
                </div>
            </div>
            </div>
            <div class="row">
            <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection