@extends ('layout.app')
@section('title')
Xem thể loại
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{route('ngonngu.store')}}" method="POST">
            @csrf
            <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tên Ngôn ngữ</label>
                    <input type="text" name="ten_ngon_ngu" class="form-control" placeholder="tenngonngu" value="{{$ngonngu->ten_ngon_ngu}}" readonly >
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mã vị trí</label>
                    <input type="text" name="id" class="form-control" placeholder="tenvitri" value="{{$ngonngu->id}}" readonly >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Created At</label>
                    <input type="text" name="created_at" class="form-control" placeholder="mota" value="{{$ngonngu->created_at}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Updated At</label>
                    <input type="text" name="updated_at" class="form-control" placeholder="mota" value="{{$ngonngu->updated_at}}" readonly>
                </div>
            </div>
            </div>
            <div class="card-footer">
            <a href="{{route('ngonngu.index')}}" class="btn btn-primary">Quay lại</a>
            </div>
        </form>
    </div>
</div>
@endsection