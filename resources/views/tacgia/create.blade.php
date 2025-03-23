@extends ('layout.app')
@section('title')
Thêm mới tác giả
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
                    <input type="text" name="ten_tac_gia" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Ngày sinh</label>
                    <input type="date" name="ngay_sinh" class="form-control" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Quốc tịch</label>
                    <input type="text" name="quoc_tich" class="form-control" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tiểu sử</label>
                    <input type="text" name="tieu_su" class="form-control" >
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