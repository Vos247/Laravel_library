@extends ('layout.app')
@section('title')
Xem tác giả
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{route('tacgia.store')}}" method="POST">
            @csrf
            <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tên tác giả</label>
                    <input type="text" name="ten_tac_gia" class="form-control" value="{{$tacgia->ten_tac_gia}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ngày sinh</label>
                    <input type="date" name="ngay_sinh" class="form-control" value="{{$tacgia->ngay_sinh}}" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Quốc tịch</label>
                    <input type="text" name="quoc_tich" class="form-control" value="{{$tacgia->quoc_tich}}"readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tiểu sử</label>
                    <input type="text" name="tieu_su" class="form-control" value="{{$tacgia->tieu_su}}" readonly>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mã vị trí</label>
                    <input type="text" name="id" class="form-control" placeholder="tenvitri" value="{{$tacgia->id}}" readonly >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Created At</label>
                    <input type="text" name="created_at" class="form-control" placeholder="mota" value="{{$tacgia->created_at}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Updated At</label>
                    <input type="text" name="updated_at" class="form-control" placeholder="mota" value="{{$tacgia->updated_at}}" readonly>
                </div>
            </div>
            </div>
            </div>
            <div class="card-footer">
            <a href="{{route('tacgia.index')}}" class="btn btn-primary">Quay lại</a>
            </div>
        </form>
    </div>
@endsection