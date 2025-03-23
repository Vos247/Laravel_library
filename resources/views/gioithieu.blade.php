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
        /* Animation Keyframes */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        /* Hero Section với Image Background và Animation */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url(img/pexels-photo-694740.jpeg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            animation: fadeIn 2s ease-out;
            z-index: -2;
        }

        .hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.6);
            animation: fadeIn 2s ease-out;
            z-index: -1;
        }

        .hero-content {
            position: relative;
            color: white;
            padding: 20px;
            z-index: 1;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: slideUp 1.5s ease-out 0.5s backwards;
        }

        .hero p {
            font-size: 1.2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            animation: slideUp 1.5s ease-out 1s backwards;
        }

        /* Rest of the styles remain the same */
        .mission {
            padding: 80px 20px;
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .mission-text {
            padding-right: 40px;
        }

        .mission h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #000;
        }

        .mission p {
            line-height: 1.6;
            color: #333;
        }

        .mission-image {
            background-color: #f5f5f5;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
        }

        /* Values Section */
        .values {
            background-color: #000;
            color: white;
            padding: 80px 20px;
        }

        .values-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .values h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 40px;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .value-card {
            text-align: center;
            padding: 20px;
        }

        .value-card .icon {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .value-card h3 {
            margin-bottom: 15px;
        }

        /* Team Section */
        .team {
            padding: 80px 20px;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .team h2 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 40px;
        }

        .team-grid {
            display: flex;
            grid-template-columns: repeat(4, 1fr);
            justify-content: center;
            align-items: center;
            gap: 30px;
        }

        .team-member {
            text-align: center;
        }

        .member-image {
            width: 120px; /* Giảm kích thước */
            height: 120px; /* Giảm kích thước */
            background-color: #f5f5f5;
            border-radius: 50%;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
        }

        .member-image img {
            width: 100%; /* Đảm bảo ảnh co theo kích thước */
            height: 100%;
            object-fit: cover; /* Giữ ảnh không bị méo */
            border-radius: 50%; /* Đảm bảo ảnh bo tròn */
        }
        /* Responsive Design */
        @media (max-width: 768px) {
            .mission {
                grid-template-columns: 1fr;
            }

            .values-grid {
                grid-template-columns: 1fr;
            }

            .team-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 480px) {
            .team-grid {
                grid-template-columns: 1fr;
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
          <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}"><i class="fas fa-home me-1"></i>Trang chủ</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('gioithieu') }}"><i class="fas fa-info-circle me-1"></i>Giới thiệu</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('tintuc')}}"><i class="fas fa-newspaper me-1"></i>Tin tức</a></li>
          <li class="nav-item"><a class="nav-link" href="#lien-he"><i class="fas fa-address-book me-1"></i>Liên hệ</a></li>
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
    <section class="hero">
        <div class="hero-content">
            <h1>THƯ VIỆN SÁCH</h1>
            <p>Nơi Trao dồi kiến thức </p>
        </div>
    </section>
    <!-- Rest of the sections remain the same -->
    <section class="mission">
        <div class="mission-text">
            <h2>Sứ Mệnh</h2>
            <p>Chúng tôi tin rằng mỗi cuốn sách là một cánh cửa mở ra thế giới mới. Với hơn 10 năm kinh nghiệm, chúng
                tôi tự hào mang đến cho độc giả những tác phẩm chất lượng, góp phần thắp sáng tri thức và nuôi dưỡng tâm
                hồn.</p>
        </div>
        <div class="mission-image">
            <img src="img/pexels-photo-1106468.jpeg" alt="">
        </div>
    </section>
    <section class="mission">

        <div class="mission-image">
            <img src="img/pexels-photo-30311887.webp" alt="">
        </div>
        <div class="mission-text">
            <h2>Hình thành</h2>
            <p>Từ một tiệm sách nhỏ ngụ tại Hóc Môn VA-MN đã phát triển vượt bậc sau 3 năm , với hơn 200 cửa hàng trên
                toàn thế giới.Tại Việt Nam có 36 cửa hàng trải dài từ Bắc vào Nam </p>
        </div>
    </section>
    <!-- Values Section -->
    <section class="values">
        <div class="values-container">
            <h2>Giá Trị Cốt Lõi</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="icon">📚</div>
                    <h3>Chất Lượng</h3>
                    <p>Cam kết mang đến những ấn phẩm chất lượng cao từ các nhà xuất bản uy tín</p>
                </div>
                <div class="value-card">
                    <div class="icon">🤝</div>
                    <h3>Tận Tâm</h3>
                    <p>Luôn lắng nghe và phục vụ độc giả với tinh thần tận tâm nhất</p>
                </div>
                <div class="value-card">
                    <div class="icon">💡</div>
                    <h3>Sáng Tạo</h3>
                    <p>Không ngừng đổi mới để mang đến trải nghiệm tốt nhất cho độc giả</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section -->
    <section class="team">
        <h2>Đội Ngũ Của Chúng Tôi</h2>
        <div class="team-grid">
            <div class="team-member">
                <div class="member-image">
                  <img src="img/vinh.jpeg" alt="">
                </div>
                <h3>Nguyễn Tăng Thế Vinh</h3>
            </div>
    </section>
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
