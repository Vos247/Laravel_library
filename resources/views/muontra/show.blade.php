@extends ('layout.app')
@section('title')
Xem danh sách phiếu mượn
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{route('muontra.store')}}" method="POST">
            @csrf
            <div class="row">
            <div class="col-md-12">
            <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mã người dùng</label>
                    <input type="number" name="nguoidung_id" class="form-control" value="{{$muontra->nguoidung_id}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mã sách</label>
                    <input type="number" name="nguoidung_id" class="form-control" value="{{$muontra->sach_id}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ngày mượn sách</label>
                    <input type="date" name="ngay_muon" class="form-control" value="{{$muontra->ngay_muon}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Hạn trả sách</label>
                    <input type="date" name="han_tra" class="form-control" value="{{$muontra->han_tra}}" readonly>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mã vị trí</label>
                    <input type="text" name="id" class="form-control" placeholder="tenvitri" value="{{$muontra->id}}" readonly >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Created At</label>
                    <input type="text" name="created_at" class="form-control" placeholder="mota" value="{{$muontra->created_at}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Updated At</label>
                    <input type="text" name="updated_at" class="form-control" placeholder="mota" value="{{$muontra->updated_at}}" readonly>
                </div>
            </div>
            </div>
            <div class="card-footer">
            <a href="{{route('muontra.index')}}" class="btn btn-primary">Quay lại</a>
            </div>
        </form>
    </div>
</div>
@endsection