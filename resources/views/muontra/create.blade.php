@extends ('layout.app')
@section('title')
Thêm mới phiếu mượn
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{route('muontra.store')}}" method="POST">
            @csrf
            <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mã người dùng</label>
                    <input type="number" name="nguoidung_id" class="form-control" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ngày mượn sách</label>
                    <input type="date" name="ngay_muon" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Hạn trả sách</label>
                    <input type="date" name="han_tra" class="form-control" >
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