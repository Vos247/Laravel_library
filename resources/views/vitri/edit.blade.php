@extends ('layout.app')
@section('title')
Sửa vị trí
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{route('vitri.update',$vitri->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tên vị trí</label>
                    <input type="text" name="ten_vi_tri" class="form-control" placeholder="tenvitri" value="{{$vitri->ten_vi_tri}}" >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mô tả</label>
                    <input type="text" name="mo_ta" class="form-control" placeholder="mota" value="{{$vitri->mo_ta}}">
                </div>
            </div>
            <div class="row">
            <button class="btn btn-warning">Cập nhật</button>
            <a href="{{route('vitri.index')}}" class="btn btn-primary">Quay lại</a>
            </div>
            </div>
        </form>
    </div>
</div>
@endsection