@extends ('layout.app')
@section('title')
Xem thể loại
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{route('theloai.store')}}" method="POST">
            @csrf
            <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tên thể loại</label>
                    <input type="text" name="ten_the_loai" class="form-control" placeholder="tenvitri" value="{{$theloai->ten_the_loai}}" readonly >
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mã thể loại</label>
                    <input type="text" name="id" class="form-control" placeholder="tenvitri" value="{{$theloai->id}}" readonly >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Created At</label>
                    <input type="text" name="created_at" class="form-control" placeholder="mota" value="{{$theloai->created_at}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Updated At</label>
                    <input type="text" name="updated_at" class="form-control" placeholder="mota" value="{{$theloai->updated_at}}" readonly>
                </div>
            </div>
            </div>
            <div class="card-footer">
            <a href="{{route('theloai.index')}}" class="btn btn-primary">Quay lại</a>
            </div>
        </form>
    </div>
</div>
@endsection