@extends ('layout.app')
@section('title')
    Thêm mới sản phẩm
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
                            <input type="text" class="form-control" name="tieu_de" id="tieu_de">
                        </div>
                        <div class="mb-3">
                            <label for="tacgia_id" class="form-label">Mã tác giả</label>
                            <input type="number" class="form-control" name="tacgia_id" id="tacgia_id">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="theloai_id" class="form-label">Mã thể loại</label>
                            <input type="number" class="form-control" name="theloai_id" id="theloai_id">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="isbn" class="form-label">Nhập ISBN</label>
                            <input type="text" class="form-control" name="isbn" id="isbn">
                        </div>
                        <div class="mb-3">
                            <label for="nam_xuat_ban" class="form-label">Năm xuất bản</label>
                            <input type="number" class="form-control" name="nam_xuat_ban" id="nam_xuat_ban">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="so_luong" class="form-label">Số lượng sách</label>
                            <input type="number" class="form-control" name="so_luong" id="so_luong">
                        </div>
                        <div class="mb-3">
                            <label for="con_lai" class="form-label">Còn lại</label>
                            <input type="number" class="form-control" name="con_lai" id="con_lai">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="vitri_id" class="form-label">Mã vị trí</label>
                            <input type="number" class="form-control" name="vitri_id" id="vitri_id">
                        </div>
                        <div class="mb-3">
                            <label for="ngonngu_id" class="form-label">Mã ngôn ngữ</label>
                            <input type="number" class="form-control" name="ngonngu_id" id="ngonngu_id">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nha_xuat_ban_id" class="form-label">Mã nhà xuất bản</label>
                            <input type="number" class="form-control" name="nhaxuatban_id" id="nhaxuatban_id">
                        </div>
                        @if (session('success'))
                            <p style="color: green;">{{ session('success') }}</p>
                            <img src="{{ asset('images/' . session('image')) }}" width="300px">
                        @endif
                        <form action="{{ route('sach.upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="image" class="form-label">Hình ảnh sách</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection