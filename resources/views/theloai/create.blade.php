@extends ('layout.app')
@section('title')
Thêm mới thể loại
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
                    <input type="text" name="ten_the_loai" class="form-control" placeholder="Nhập tên thể loại">
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