<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thư viện sách - Chi tiết tin tức</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        .article-hero {
            position: relative;
            height: 400px;
            background-size: cover;
            background-position: center;
            margin-bottom: 2rem;
        }

        .article-hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.7));
            display: flex;
            align-items: flex-end;
            padding: 3rem 0;
            color: white;
        }

        .article-meta {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            margin-top: -50px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            position: relative;
            z-index: 2;
        }

        .article-content {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            margin-bottom: 2rem;
        }

        .article-content img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin: 1.5rem 0;
        }

        .article-content p {
            margin-bottom: 1.5rem;
            font-size: 1.1rem;
        }

        .article-tags {
            margin: 2rem 0;
        }

        .tag {
            background: var(--bg-light);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            margin-right: 0.5rem;
            color: var(--primary);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .tag:hover {
            background: var(--primary);
            color: white;
        }

        .author-box {
            background: var(--bg-light);
            border-radius: 10px;
            padding: 1.5rem;
            margin: 2rem 0;
            display: flex;
            align-items: center;
        }

        .author-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-right: 1.5rem;
        }

        .share-buttons {
            margin: 2rem 0;
        }

        .share-button {
            display: inline-flex;
            align-items: center;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            margin-right: 0.5rem;
            transition: all 0.3s ease;
        }

        .share-button:hover {
            transform: translateY(-2px);
            color: white;
        }

        .facebook { background: #3b5998; }
        .twitter { background: #1da1f2; }
        .linkedin { background: #0077b5; }

        .related-articles {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .related-article {
            margin-bottom: 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid #eee;
        }

        .related-article:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
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
          <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}"><i class="fas fa-home me-1"></i>Trang chủ</a></li>
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
    <!-- Article Hero -->
    <div class="article-hero" style="background-image: url('img/hoi_sach.webp')">
        <div class="article-hero-overlay">
            <div class="container">
                <h1 class="display-4">Hội sách Mùa Thu 2024 - Lễ hội văn hóa đọc lớn nhất năm</h1>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <!-- Article Content -->
            <div class="col-lg-8">
                <div class="article-content">
                    <p class="lead">Hội sách Mùa Thu năm 2024 sẽ chính thức diễn ra từ ngày 20/11 đến 27/11/2024 tại Công viên Lê Văn Tám, TP.HCM. Đây là sự kiện văn hóa quy mô lớn với sự tham gia của hơn 100 đơn vị xuất bản và phát hành sách trong cả nước.</p>

                    <img src="img/hoisach8213742387852039485324093.png" alt="Hội sách" class="img-fluid">

                    <h2>Quy mô và ý nghĩa</h2>
                    <p>Hội sách năm nay được tổ chức với quy mô lớn hơn, bao gồm hơn 300 gian hàng trưng bày và giới thiệu sách. Đặc biệt, sự kiện năm nay có sự góp mặt của nhiều nhà xuất bản quốc tế, mang đến cơ hội tiếp cận với nhiều đầu sách giá trị từ khắp nơi trên thế giới.</p>

                    <h2>Các hoạt động chính</h2>
                    <p>Trong khuôn khổ hội sách, nhiều hoạt động phong phú sẽ được tổ chức:</p>
                    <ul>
                        <li>Triển lãm sách với hơn 50,000 đầu sách</li>
                        <li>20+ buổi giao lưu với các tác giả nổi tiếng</li>
                        <li>Workshop về đọc sách và phát triển bản thân</li>
                        <li>Các tiết mục văn nghệ đặc sắc</li>
                    </ul>

                    <div class="article-tags">
                        <a href="#" class="tag">#hoisach2024</a>
                        <a href="#" class="tag">#vanhoa</a>
                        <a href="#" class="tag">#sachviet</a>
                    </div>
                    <!-- Author Box -->
                    <div class="author-box">
                        <img src="img/370x370_2.png" alt="Author" class="author-image">
                        <div>
                            <h5>Về tác giả</h5>
                            <p class="mb-0">Nguyễn Văn Minh là Trưởng ban tổ chức Hội sách Mùa Thu 2024, với hơn 15 năm kinh nghiệm trong lĩnh vực tổ chức sự kiện văn hóa.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="related-articles">
                    <h4 class="mb-4">Bài viết liên quan</h4>
                    <div class="related-article">
                        <img src="img/hoisach8213742387852039485324093.png" alt="Related article" class="img-fluid rounded mb-3">
                        <h6>Tuần lễ sách Việt Nam 2024</h6>
                        <p class="small mb-2">Sự kiện kỷ niệm ngày Sách Việt Nam lần thứ 9</p>
                        <small class="text-muted">3 ngày trước</small>
                    </div>
                    <div class="related-article">
                        <img src="img/baner_website_4239c320e4a24ac8b4d5ad316ab3a27c_grande.webp" alt="Related article" class="img-fluid rounded mb-3">
                        <h6>Triển lãm sách cổ</h6>
                        <p class="small mb-2">Trưng bày các ấn phẩm quý hiếm từ thế kỷ 19</p>
                        <small class="text-muted">5 ngày trước</small>
                    </div>
                </div>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>