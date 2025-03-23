@extends ('layout.app')
@section('title')
Xem thể loại
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{route('ngonngu.update', $ngonngu->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tên Ngôn ngữ</label>
                    <input type="text" name="ten_ngon_ngu" class="form-control" placeholder="tenngonngu" value="{{$ngonngu->ten_ngon_ngu}}" >
                </div>
            </div>
            </div>
            <div class="row">
            <button class="btn btn-warning">Cập nhật</button>
            <a href="{{route('ngonngu.index')}}" class="btn btn-primary">Quay lại</a>
            </div>
        </form>
    </div>
</div>
@endsection