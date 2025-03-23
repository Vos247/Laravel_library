@extends ('layout.app')
@section('title')
Xem tác giả
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{route('tacgia.update', $tacgia->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tên tác giả</label>
                    <input type="text" name="ten_tac_gia" class="form-control" value="{{$tacgia->ten_tac_gia}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ngày sinh</label>
                    <input type="date" name="ngay_sinh" class="form-control" value="{{$tacgia->ngay_sinh}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Quốc tịch</label>
                    <input type="text" name="quoc_tich" class="form-control" value="{{$tacgia->quoc_tich}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tiểu sử</label>
                    <input type="text" name="tieu_su" class="form-control" value="{{$tacgia->tieu_su}}">
                </div>
            </div>
            </div>
            <div class="row">
            <button class="btn btn-warning">Cập nhật</button>
            <a href="{{route('tacgia.index')}}" class="btn btn-primary">Quay lại</a>
            </div>
        </form>
    </div>
</div>
@endsection