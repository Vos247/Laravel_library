@extends ('layout.app')
@section('title')
Xem sản phẩm
@endsection
@section('content')
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center"></div>
        <form action="{{ route('sach.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="tieu_de" class="form-label">Tiêu đề</label>
                        <input type="text" class="form-control" name="tieu_de" id="tieu_de" value="{{$sach->tieu_de}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="tacgia_id" class="form-label">Mã tác giả</label>
                        <input type="number" class="form-control" name="tacgia_id" id="tacgia_id" value="{{$sach->tacgia_id}}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="theloai_id" class="form-label">Mã thể loại</label>
                        <input type="number" class="form-control" name="theloai_id" id="theloai_id" value="{{$sach->theloai_id}}" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="isbn" class="form-label">Nhập ISBN</label>
                        <input type="text" class="form-control" name="isbn" id="isbn" value="{{$sach->isbn}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nam_xuat_ban" class="form-label">Năm xuất bản</label>
                        <input type="number" class="form-control" name="nam_xuat_ban" id="nam_xuat_ban" value="{{$sach->nam_xuat_ban}}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="so_luong" class="form-label">Số lượng sách</label>
                        <input type="number" class="form-control" name="so_luong" id="so_luong" value="{{$sach->so_luong}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="con_lai" class="form-label">Còn lại</label>
                        <input type="number" class="form-control" name="con_lai" id="con_lai" value="{{$sach->con_lai}}" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="vitri_id" class="form-label">Mã vị trí</label>
                        <input type="number" class="form-control" name="vitri_id" id="vitri_id" value="{{$sach->vitri_id}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="ngonngu_id" class="form-label">Mã ngôn ngữ</label>
                        <input type="number" class="form-control" name="ngonngu_id" id="ngonngu_id" value="{{$sach->ngonngu_id}}" readonly>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nha_xuat_ban_id" class="form-label">Mã nhà xuất bản</label>
                        <input type="number" class="form-control" name="nhaxuatban_id" id="nhaxuatban_id" value="{{$sach->nhaxuatban_id}}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Hình ảnh sách</label>
                        <input type="img" class="form-control" name="image" id="image" value="{{$sach->image}}" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mã sách</label>
                    <input type="text" name="id" class="form-control" placeholder="tenvitri" value="{{$sach->id}}" readonly >
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Created At</label>
                    <input type="text" name="created_at" class="form-control" placeholder="mota" value="{{$sach->created_at}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Updated At</label>
                    <input type="text" name="updated_at" class="form-control" placeholder="mota" value="{{$sach->updated_at}}" readonly>
                </div>
            </div>
            </div>
            <div class="card-footer">
            <a href="{{route('sach.index')}}" class="btn btn-primary">Quay lại</a>
            </div>
        </form>
    </div>
</div>
@endsection