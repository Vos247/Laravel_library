<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thư viện sách</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-color: #2c3e50;
      --secondary-color: #e67e22;
      --light-color: #ecf0f1;
      --dark-color: #2c3e50;
      --success-color: #27ae60;
      --danger-color: #e74c3c;
      --warning-color: #f39c12;
      --info-color: #3498db;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f9f9f9;
    }

    .navbar {
      background-color: var(--primary-color) !important;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      padding: 0.8rem 1rem;
    }

    .nav-link {
      color: rgba(255, 255, 255, 0.8) !important;
      font-weight: 500;
      margin: 0 0.2rem;
      transition: all 0.3s;
    }

    .nav-link:hover,
    .nav-link.active {
      color: white !important;
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 5px;
    }

    .borrow-history-container {
      padding: 2.5rem;
      margin: 3rem auto;
      background-color: white;
      border-radius: 15px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.05);
    }

    .section-title {
      color: var(--primary-color);
      font-weight: 700;
      margin-bottom: 1.5rem;
      position: relative;
      padding-bottom: 0.8rem;
    }

    .section-title:after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      width: 80px;
      height: 3px;
      background: var(--secondary-color);
      border-radius: 2px;
    }

    .table-responsive {
      border-radius: 10px;
      overflow: hidden;
    }

    .borrow-history-table {
      margin-bottom: 0;
    }

    .table-header {
      background-color: var(--primary-color);
      color: white;
    }

    .table-header th {
      font-weight: 600;
      padding: 1rem;
      border: none;
    }

    .borrow-history-table tbody tr {
      transition: all 0.3s ease;
    }

    .borrow-history-table tbody tr:hover {
      background-color: rgba(236, 240, 241, 0.5);
      transform: translateY(-2px);
    }

    .borrow-history-table td {
      padding: 1rem;
      vertical-align: middle;
      border-color: #f5f5f5;
    }

    .book-title {
      font-weight: 600;
      color: var(--primary-color);
    }

    .status-badge {
      padding: 0.5rem 1rem;
      font-weight: 500;
      border-radius: 50px;
      font-size: 0.8rem;
      letter-spacing: 0.5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .bg-success {
      background-color: var(--success-color) !important;
    }

    .bg-danger {
      background-color: var(--danger-color) !important;
    }

    @media (max-width: 768px) {
      .borrow-history-container {
        padding: 1.5rem;
      }

      .borrow-history-table td,
      .borrow-history-table th {
        padding: 0.75rem;
      }
    }

    .footer {
      width: 100vw;
      position: relative;
      background-color: #333;
      color: white;
      padding: 40px 0;
    }

    .footer h5 {
      color: var(--secondary-color);
      margin-bottom: 1.5rem;
      font-weight: 600;
      position: relative;
      display: inline-block;
      padding-bottom: 0.7rem;
    }

    .footer h5::after {
      content: '';
      position: absolute;
      width: 40px;
      height: 2px;
      background-color: var(--secondary-color);
      bottom: 0;
      left: 0;
    }

    .footer p,
    .footer li {
      opacity: 0.8;
      line-height: 1.8;
    }

    .footer .social-icons {
      margin-top: 1.5rem;
    }

    .footer .social-icons a {
      color: #ffffff;
      font-size: 1.5rem;
      margin-right: 1.2rem;
      transition: all 0.3s;
      opacity: 0.7;
    }

    .footer .social-icons a:hover {
      color: var(--secondary-color);
      opacity: 1;
      transform: translateY(-3px);
    }

    .footer-contact li {
      margin-bottom: 1rem;
      display: flex;
      align-items: start;
    }

    .footer-contact i {
      margin-right: 0.8rem;
      color: var(--secondary-color);
    }

    .copyright {
      background-color: rgba(0, 0, 0, 0.1);
      padding: 1rem 0;
      margin-top: 2rem;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}"><i
                class="fas fa-home me-1"></i>Trang chủ</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('gioithieu') }}"><i
                class="fas fa-info-circle me-1"></i>Giới thiệu</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('tintuc')}}"><i class="fas fa-newspaper me-1"></i>Tin
              tức</a></li>
          <li class="nav-item"><a class="nav-link" href="#lien-he"><i class="fas fa-address-book me-1"></i>Liên hệ</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <span class="d-none d-lg-inline text-gray-600 small">
                @auth
          Xin chào, {{ Auth::user()->ho_ten }}!
        @else
      Tài khoản
    @endauth
              </span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end shadow animated--grow-in" aria-labelledby="userDropdown">
              @auth
          <li>
          <a type="submit" class="dropdown-item" href="{{ route('profile') }}">Profile</a>
          <a type="submit" class="dropdown-item" href="{{ route('lichsu') }}">Lịch sử mượn sách</a>
          <hr>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="dropdown-item text-danger">Logout</button>
          </form>
          </li>
        @else
        <li><a class="dropdown-item" href="{{ route('login') }}">Đăng nhập</a></li>
        <li><a class="dropdown-item" href="{{ route('register') }}">Đăng ký</a></li>
      @endauth
            </ul>
      </div>
    </div>
  </nav>
  <!-- Main lịch sử-->
  <div class="container borrow-history-container">
    @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif
    @if(session('error'))
    <div class="alert alert-danger">
      {{ session('error') }}
    </div>
  @endif
    <h2 class="section-title">Lịch Sử Mượn Sách</h2>
    <div class="table-responsive shadow-sm rounded">
      <table class="table table-hover borrow-history-table">
        <thead class="table-header">
          <tr>
            <th>Tên Sách</th>
            <th>Ngày Mượn</th>
            <th>Ngày Trả</th>
            <th>Trạng Thái</th>
            <th>Ngày đã trả sách</th>
            <th>Ghi chú</th>
            <th>Thao tác</th>
          </tr>
        </thead>
        <tbody>
          @foreach($lichsu as $item)
        <tr>
        <td class="book-title">{{ $item->sach->tieu_de ?? 'Sách đã xóa' }}</td>
        <td>{{ $item->ngay_muon }}</td>
        <td>{{ $item->han_tra }}</td>
        <td>
          @if($item->trang_thai == 1)
        <span class="badge bg-success status-badge">Đã trả</span>
      @elseif($item->han_tra < now()->format('Y-m-d') && $item->trang_thai == 0)
      <span class="badge bg-warning status-badge">Quá hạn</span>
    @else
      <span class="badge bg-danger status-badge">Chưa trả</span>
    @endif
        </td>
        <td>{{ $item->ngay_tra }}</td>
        <td>{{ $item->ghi_chu }}</td>
        <td>
        @php
            $quahan = \Carbon\Carbon::parse($item->han_tra)->addDays(2)->isPast();
        @endphp
            @if($item->trang_thai == 0)
                <form action="{{ route('giahan', $item->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-primary" {{ $quahan ? 'disabled' : '' }}>Gia hạn</button>
                </form>
            @endif
        </td>
        </tr>
      @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h5>Về Thư viện sách</h5>
          <p>Thư viện sách là nơi kết nối tri thức, nơi mỗi trang sách mở ra một chân trời mới. Chúng tôi cung cấp
            đa dạng sách từ nhiều lĩnh vực khác nhau, đáp ứng nhu cầu đọc sách của mọi độc giả.</p>
          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
          <h5>Liên kết nhanh</h5>
          <ul class="list-unstyled">
            <li><a href="{{ route('home') }}">Trang chủ</a></li>
            <li><a href="{{ route('gioithieu') }}">Giới thiệu</a></li>
            <li><a href="#danhmucsach">Danh mục sách</a></li>
            <li><a href="{{ route('tintuc') }}">Tin tức</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6" id="lien-he">
          <h5>Liên hệ với chúng tôi</h5>
          <ul class="list-unstyled footer-contact">
            <li>
              <i class="fas fa-map-marker-alt"></i>
              <span>12 Đường Trịnh Đình Thảo, Quận Tân Phú, TP. Hồ Chí Minh</span>
            </li>
            <li>
              <i class="fas fa-phone"></i>
              <span>(+84) 28 1234 5678</span>
            </li>
            <li>
              <i class="fas fa-envelope"></i>
              <span>info@thuviensach.vn</span>
            </li>
            <li>
              <i class="fas fa-clock"></i>
              <span>8:00 - 20:00, Thứ 2 - Thứ 7</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="copyright text-center">
      <div class="container">
        <p class="mb-0">© 2025 Thư viện sách. Tất cả quyền được bảo lưu.</p>
      </div>
    </div>
  </footer>