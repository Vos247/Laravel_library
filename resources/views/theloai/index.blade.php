@extends('layout.app')
@section('title')
Danh sách thể loại
@endsection
@section('search')
<form action="{{route('theloai.search')}}"
class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search"
            aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>
@endsection
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{route('theloai.create')}}" class="m-0 font-weight-bold btn btn-success">Thêm thể loại sách</a>
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Mã thể loại</th>
                        <th>Tên thể loại</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody>
                    @if($theloais->count() > 0)
                    @foreach ($theloais as $theloai)
                        <tr>
                            <td>{{$theloai->id}}</td>
                            <td>{{$theloai->ten_the_loai}}</td>
                            <td>
                            <a href="{{route('theloai.show',$theloai->id)}}" type="button" class="btn btn-success">Xem</a>
                            <a href="{{route('theloai.edit',$theloai->id)}}" type="button" class="btn btn-primary">Sửa</a>
                            <form action="{{route('theloai.destroy',$theloai->id)}}" method="POST" class="btn btn-danger p-0" onsubmit="return confirm('Bạn muốn xóa?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    @else
                    <tr>
                        <td class="text-center">Không tìm thấy dữ liệu! </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
        // Kết nối với Pusher
const pusher = new Pusher("{{ config('broadcasting.connections.pusher.key') }}", {
    cluster: "{{ config('broadcasting.connections.pusher.options.cluster') }}",
    forceTLS: true
});

// Đăng ký kênh 'theloais'
const channel = pusher.subscribe('theloais');

// Lắng nghe sự kiện 'TheloaiCreated' từ server
channel.bind('App\\Events\\TheloaiCreated', function(data) {
    if (data && data.theloai && data.theloai.ten_the_loai) {
        let inputField = document.getElementById('ten_the_loai');
        if (inputField) {
            inputField.value = data.theloai.ten_the_loai; // Cập nhật tên thể loại
        } else {
            console.error("Element with ID 'ten_the_loai' not found.");
        }
    } else {
        console.error("Invalid data structure received:", data);
    }
});

    </script>
@endsection
