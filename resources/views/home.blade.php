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

    .hero-section {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/thuvien.png') no-repeat center center;
      background-size: cover;
      height: 80vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
      position: relative;
    }

    .hero-section::before {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      height: 150px;
      background: linear-gradient(to top, rgba(249, 249, 249, 1), rgba(249, 249, 249, 0));
    }

    .hero-content {
      position: relative;
      z-index: 1;
      max-width: 800px;
    }

    .hero-content h1 {
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 1.5rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .hero-content p {
      font-size: 1.5rem;
      margin-bottom: 2.5rem;
      text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    .btn-hero {
      padding: 0.8rem 2rem;
      font-weight: 600;
      border-radius: 50px;
      background-color: var(--secondary-color);
      border: none;
      box-shadow: 0 4px 15px rgba(230, 126, 34, 0.4);
      transition: all 0.3s;
    }

    .btn-hero:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 20px rgba(230, 126, 34, 0.6);
      background-color: #d35400;
    }

    .section-title {
      position: relative;
      display: inline-block;
      font-weight: 700;
      margin-bottom: 2rem;
      padding-bottom: 0.5rem;
      color: var(--primary-color);
    }

    .section-title::after {
      content: '';
      position: absolute;
      width: 50%;
      height: 3px;
      background-color: var(--secondary-color);
      bottom: 0;
      left: 0;
    }

    .category-container {
      background-color: white;
      border-radius: 10px;
      padding: 1.5rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    .category-item {
      transition: all 0.3s;
      border-radius: 8px;
      margin-bottom: 0.8rem;
      border: none;
      background-color: #f8f9fa;
      padding: 0.8rem 1rem;
      font-weight: 500;
    }

    .category-item:hover {
      transform: translateX(5px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
      background-color: #f0f3f5;
      color: var(--secondary-color);
    }

    .category-item i {
      width: 25px;
      text-align: center;
      margin-right: 10px;
    }

    .search-container {
      background-color: white;
      border-radius: 10px;
      padding: 1.2rem;
      margin-bottom: 2rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    .search-input {
      border-radius: 50px;
      padding-left: 1rem;
      border: 1px solid #e0e0e0;
    }

    .search-btn {
      border-radius: 50px;
      padding: 0.5rem 1.5rem;
      background-color: var(--secondary-color);
      border: none;
      color: white;
      font-weight: 500;
    }

    .search-btn:hover {
      background-color: #d35400;
    }

    .book-card {
      transition: all 0.3s;
      height: 100%;
      border: none;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
    }

    .book-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
    }

    .book-card img {
      height: 250px;
      object-fit: cover;
      transition: all 0.5s;
    }

    .book-card:hover img {
      transform: scale(1.05);
    }

    .book-card .card-body {
      padding: 1.5rem;
    }

    .book-card .card-title {
      font-weight: 600;
      margin-bottom: 0.8rem;
      color: var(--primary-color);
    }

    .book-card .card-text {
      color: #666;
      margin-bottom: 1.2rem;
    }

    .book-card .btn {
      border-radius: 50px;
      padding: 0.5rem 1.2rem;
      font-weight: 500;
      background-color: var(--primary-color);
      border: none;
    }

    .book-card .btn:hover {
      background-color: var(--secondary-color);
    }

    .pagination .page-link {
      border-radius: 50%;
      margin: 0 0.2rem;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--primary-color);
      border-color: #eee;
    }

    .pagination .page-item.active .page-link {
      background-color: var(--secondary-color);
      border-color: var(--secondary-color);
    }

    .pagination .page-link:hover {
      background-color: #f8f9fa;
      color: var(--secondary-color);
    }

    .pagination .page-item:first-child .page-link,
    .pagination .page-item:last-child .page-link {
      border-radius: 20px;
      width: auto;
      padding: 0 1rem;
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

    .user-dropdown img {
      border: 2px solid white;
    }

    .stats-container {
      background-color: var(--secondary-color);
      padding: 4rem 0;
      margin: 5rem 0;
      color: white;
    }

    .stat-item {
      text-align: center;
    }

    .stat-item i {
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .stat-item .count {
      font-size: 2.5rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .stat-item .label {
      font-size: 1.1rem;
      opacity: 0.9;
    }

    /* Animation */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fadeInUp {
      animation: fadeInUp 0.8s ease-out forwards;
    }

    /* Responsive adjustments */
    @media (max-width: 991.98px) {
      .hero-content h1 {
        font-size: 2.8rem;
      }

      .hero-content p {
        font-size: 1.2rem;
      }

      .stats-container {
        padding: 3rem 0;
      }

      .stat-item {
        margin-bottom: 2rem;
      }
    }

    @media (max-width: 767.98px) {
      .hero-section {
        height: 70vh;
      }

      .hero-content h1 {
        font-size: 2.2rem;
      }

      .hero-content p {
        font-size: 1rem;
      }

      .section-title {
        font-size: 1.5rem;
      }
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
          <li class="nav-item"><a class="nav-link active" href=""><i class="fas fa-home me-1"></i>Trang chủ</a></li>
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
  <!-- Hero Section -->
  <div class="hero-section mb-5">
    <div class="container hero-content animate-fadeInUp">
      <h1 class="display-3">CHÀO MỪNG ĐẾN VỚI THƯ VIỆN SÁCH</h1>
      <p class="lead">Khám phá thế giới qua từng trang sách - Mở ra cánh cửa tri thức vô tận</p>
      <a href="#main-content" class="btn btn-hero btn-lg px-5 py-3"><i class="fas fa-search me-2"></i>Khám phá ngay</a>
    </div>
  </div>
  <!-- Main Content -->
  <div class="container-fluid" id="main-content">
    <div class="row">
      <div class="col-lg-3">
        <!-- Recent Books Widget -->
        <div class="category-container mb-4">
          <h5 class="section-title">Sách mới cập nhật</h5>
          <div class="recent-books">
            @foreach($sachMoiNhat as $sach)
        <div class="d-flex mb-3">
          <a href="{{ route('sach.chitiet', ['id' => $sach->id]) }}">
          <img src="{{ asset('img/' . $sach->image) }}" alt="book" class="me-3"
            style="width: 70px; height: 70px; object-fit: cover;">
          </a>
          <div>
          <h6 class="mb-1">{{ $sach->tieu_de }}</h6>
          <p class="small text-muted mb-0">{{ $sach->tacGia->ten_tac_gia ?? 'Không rõ' }}</p>
          </div>
        </div>
      @endforeach
          </div>
        </div>
      </div>
      <!-- Danh mục sách-->
      <div class="col-lg-9 main-content">
        <div class="search-container">
          <form class="d-flex" role="search" method="GET" action="{{ route('search') }}">
            <input class="form-control search-input me-2" type="search" name="search"
              placeholder="Tìm kiếm sách, tác giả hoặc thể loại..." aria-label="Search" value="{{ request('search') }}">
            <button class="btn search-btn" type="submit">
              <i class="fas fa-search me-1"></i> Tìm
            </button>
          </form>
        </div>
        <!-- danh sách tư liệu -->
        <div class="d-flex justify-content-between align-items-center">
    <h3 class="section-title">Danh mục sách</h3>
    <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        Lọc sách
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="{{ route('home', ['filter' => 'newest']) }}">Mới nhất</a></li>
        <li><a class="dropdown-item" href="{{ route('home', ['filter' => 'most_borrowed']) }}">Được mượn nhiều nhất</a></li>
    </ul>
</div>
</div>
        <div class="row" id="danhmucsach">
          @foreach ($sachs as $sach)
        <div class="col-md-4 mb-4">
        <div class="card book-card">
          <div class="position-relative overflow-hidden">
          <img src="{{ asset('img/' . $sach->image) }}" class="card-img-top" alt="Book cover">
          </div>
          <div class="card-body">
          <div class="d-flex justify-content-between align-items-start mb-2">
            <h5 class="card-title mb-0">{{ $sach->tieu_de }}</h5>
            <span class="badge bg-warning text-dark">{{ $sach->theLoai->ten_the_loai ?? 'Không xác định' }}</span>
          </div>
          <p class="card-text text-muted small">Tác giả: {{ $sach->tacGia->ten_tac_gia ?? 'Không xác định' }}</p>
          <p class="card-text">ISBN: {{ $sach->isbn }}</p>
          <p class="card-text">Năm xuất bản: {{ $sach->nam_xuat_ban }}</p>
          <p class="card-text"> Còn lại: {{ $sach->con_lai }}</p>
          <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('sach.chitiet', $sach->id) }}" class="btn btn-primary">
            <i class="fas fa-book-open me-1"></i> Xem chi tiết
            </a>
          </div>
          </div>
        </div>
        </div>
      @endforeach
        </div>
      </div>
<!-- Pagination -->
@if ($sachs->hasPages())
<nav aria-label="Page navigation" class="mt-5">
<ul class="pagination justify-content-center">
  <!-- Nút "Trước" -->
  <li class="page-item {{ $sachs->onFirstPage() ? 'disabled' : '' }}">
    <a class="page-link" href="{{ $sachs->previousPageUrl() }}{{ request()->get('filter') ? '&filter=' . request()->get('filter') : '' }}#danhmucsach">
      <i class="fas fa-chevron-left"></i> Trước
    </a>
  </li>
  <!-- Hiển thị số trang -->
  @foreach(range(1, $sachs->lastPage()) as $i)
    <li class="page-item {{ $sachs->currentPage() == $i ? 'active' : '' }}">
      <a class="page-link" href="{{ $sachs->url($i) }}{{ request()->get('filter') ? '&filter=' . request()->get('filter') : '' }}#danhmucsach">{{ $i }}</a>
    </li>
  @endforeach
  <!-- Nút "Sau" -->
  <li class="page-item {{ $sachs->hasMorePages() ? '' : 'disabled' }}">
    <a class="page-link" href="{{ $sachs->nextPageUrl() }}{{ request()->get('filter') ? '&filter=' . request()->get('filter') : '' }}#danhmucsach">
      Sau <i class="fas fa-chevron-right"></i>
    </a>
  </li>
</ul>
</nav>
@endif
      <!-- Stats Section -->
      <section class="stats-container">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-6 stat-item animate-fadeInUp">
              <i class="fas fa-book"></i>
              <div class="count">20,000+</div>
              <div class="label">Đầu sách</div>
            </div>
            <div class="col-md-3 col-6 stat-item animate-fadeInUp">
              <i class="fas fa-users"></i>
              <div class="count">5,000+</div>
              <div class="label">Thành viên</div>
            </div>
            <div class="col-md-3 col-6 stat-item animate-fadeInUp">
              <i class="fas fa-book-reader"></i>
              <div class="count">10,000+</div>
              <div class="label">Lượt mượn sách</div>
            </div>
            <div class="col-md-3 col-6 stat-item animate-fadeInUp">
              <i class="fas fa-award"></i>
              <div class="count">15+</div>
              <div class="label">Năm hoạt động</div>
            </div>
          </div>
        </div>
    </div>
    </section>
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