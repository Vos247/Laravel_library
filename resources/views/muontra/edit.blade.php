@extends ('layout.app')
@section('title')
Sửa danh sách mượn trả
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{route('muontra.update', $muontra->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Hạn trả sách</label>
                    <input type="date" name="han_tra" class="form-control" value="{{$muontra->han_tra}}" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ngày đã trả sách</label>
                    <input type="date" name="ngay_tra" class="form-control" value="{{$muontra->ngay_tra}}" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Trạng thái</label>
                    <input type="number" name="trang_thai" class="form-control" value="{{$muontra->trang_thai}}" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Ghi chú</label>
                    <input type="text" name="ghi_chu" class="form-control" value="{{$muontra->ghi_chu}}" >
                </div>
            </div>
            </div>
            <div class="row">
            <button class="btn btn-warning">Cập nhật</button>
            <a href="{{route('muontra.index')}}" class="btn btn-primary">Quay lại</a>
            </div>
        </form>
    </div>
</div>
@endsection