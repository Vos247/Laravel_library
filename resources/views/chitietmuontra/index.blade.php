@extends('layout.app')
@section('title')
Danh sách chi tiết mượn trả
@endsection

@section('content')
   <!-- DataTales Example -->
   <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tác giả</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã chi tiết mượn trả</th>
                                            <th>Mã mượn trả</th>
                                            <th>Mã sách</th>
                                            <th>Ngày trả</th>
                                            <th>Tình trạng sách</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($chitietmuontras as $chitietmuontra)
                                        <tr>
                                            <td>{{$chitietmuontra->id}}</td>
                                            <td>{{$chitietmuontra->muontra_id}}</td>
                                            <td>{{$chitietmuontra->sach_id}}</td>
                                            <td>{{$chitietmuontra->ngay_tra}}</td>
                                            <td>{{$chitietmuontra->tinh_trang_sach}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection