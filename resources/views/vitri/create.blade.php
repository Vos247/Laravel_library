@extends ('layout.app')
@section('title')
Thêm mới vị trí
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{route('vitri.store')}}" method="POST">
            @csrf
            <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tên vị trí</label>
                    <input type="text" name="ten_vi_tri" class="form-control" placeholder="tenvitri">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mô tả</label>
                    <input type="text" name="mo_ta" class="form-control" placeholder="mota">
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