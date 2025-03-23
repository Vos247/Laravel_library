@extends ('layout.app')
@section('title')
Sửa sản phẩm
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{ route('sach.update', $sach->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tieu_de" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control" name="tieu_de" id="tieu_de" value="{{$sach->tieu_de}}">
                    </div>
                    <div class="mb-3">
                        <label for="tacgia_id" class="form-label">Mã tác giả</label>
                        <input type="number" class="form-control" name="tacgia_id" id="tacgia_id" value="{{$sach->tacgia_id}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="theloai_id" class="form-label">Mã thể loại</label>
                        <input type="number" class="form-control" name="theloai_id" id="theloai_id" value="{{$sach->theloai_id}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="isbn" class="form-label">Nhập ISBN</label>
                        <input type="text" class="form-control" name="isbn" id="isbn" value="{{$sach->isbn}}">
                    </div>
                    <div class="mb-3">
                        <label for="nam_xuat_ban" class="form-label">Năm xuất bản</label>
                        <input type="number" class="form-control" name="nam_xuat_ban" id="nam_xuat_ban" value="{{$sach->nam_xuat_ban}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="so_luong" class="form-label">Số lượng sách</label>
                        <input type="number" class="form-control" name="so_luong" id="so_luong" value="{{$sach->so_luong}}">
                    </div>
                    <div class="mb-3">
                        <label for="con_lai" class="form-label">Còn lại</label>
                        <input type="number" class="form-control" name="con_lai" id="con_lai" value="{{$sach->con_lai}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="vitri_id" class="form-label">Mã vị trí</label>
                        <input type="number" class="form-control" name="vitri_id" id="vitri_id" value="{{$sach->vitri_id}}">
                    </div>
                    <div class="mb-3">
                        <label for="ngonngu_id" class="form-label">Mã ngôn ngữ</label>
                        <input type="number" class="form-control" name="ngonngu_id" id="ngonngu_id" value="{{$sach->ngonngu_id}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nha_xuat_ban_id" class="form-label">Mã nhà xuất bản</label>
                        <input type="number" class="form-control" name="nhaxuatban_id" id="nhaxuatban_id" value="{{$sach->nhaxuatban_id}}">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Hình ảnh sách</label>
                        <input type="img" class="form-control" name="image" id="image" value="{{$sach->image}}">
                    </div>
                    <div class="mb-3">
                        <label for="hien_trang" class="form-label">Tình trạng sách</label>
                        <input type="text" class="form-control" name="hien_trang" id="hien_trang" value="{{$sach->hien_trang}}">
                    </div>
                </div>
            </div>
            <div class="row">
            <button class="btn btn-warning">Cập nhật</button>
            <a href="{{route('sach.index')}}" class="btn btn-primary">Quay lại</a>
            </div>
        </form>
    </div>
</div>
@endsection