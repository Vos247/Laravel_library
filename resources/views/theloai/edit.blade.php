@extends ('layout.app')
@section('title')
    Sửa mới thể loại
@endsection
@section('content')
    <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center"></div>
            <form action="{{route('theloai.update', $theloai->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tên thể loại</label>
                            <input type="text" name="ten_the_loai" class="form-control" placeholder="Nhập tên thể loại"
                                value="{{$theloai->ten_the_loai}}">
                            @if ($errors->has('ten_the_loai'))
                                <div class="text-danger">{{ $errors->first('ten_the_loai') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <button class="btn btn-warning">Cập nhật</button>
                    <a href="{{route('theloai.index')}}" class="btn btn-primary">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
@endsection