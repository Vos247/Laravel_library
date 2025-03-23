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
    .profile-container {
    padding: 3rem 1.5rem;
  }
  
  .custom-alert {
    border: none;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    padding: 1rem;
    margin-bottom: 2rem;
  }
  
  .alert-success {
    background-color: rgba(39, 174, 96, 0.1);
    color: var(--success-color);
  }
  
  .alert-content {
    display: flex;
    align-items: center;
  }
  
  .alert-icon {
    font-size: 1.2rem;
    margin-right: 0.8rem;
  }
  
  .profile-card {
    border: none;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    background-color: white;
    transition: all 0.3s ease;
  }
  
  .profile-header {
    text-align: center;
    background: linear-gradient(135deg, var(--primary-color), var(--info-color));
    color: white;
    padding: 3rem 2rem 2rem;
    position: relative;
  }
  
  .profile-avatar {
    width: 100px;
    height: 100px;
    background-color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.5rem;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
  }
  
  .profile-avatar i {
    font-size: 60px;
    color: var(--primary-color);
  }
  
  .profile-title {
    font-weight: 700;
    font-size: 1.8rem;
    margin-bottom: 0.5rem;
  }
  
  .profile-subtitle {
    font-size: 1rem;
    opacity: 0.9;
    margin-bottom: 0;
  }
  
  .profile-body {
    padding: 2.5rem;
  }
  
  .custom-input {
    border-radius: 10px;
    border: 2px solid #eaeaea;
    padding: 1.2rem 1rem;
    font-size: 1rem;
    transition: all 0.3s ease;
  }
  
  .custom-input:focus {
    border-color: var(--secondary-color);
    box-shadow: 0 0 0 0.25rem rgba(230, 126, 34, 0.1);
  }
  
  .form-floating > label {
    padding: 1.2rem 1rem;
  }
  
  .input-hint {
    font-size: 0.85rem;
    color: #777;
    margin-top: 0.5rem;
    padding-left: 0.5rem;
  }
  
  .input-note {
    font-size: 0.85rem;
    color: #777;
    margin-top: 0.5rem;
    padding-left: 0.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }
  
  .profile-actions {
    display: flex;
    gap: 1rem;
    margin-top: 2rem;
  }
  
  .btn-update {
    background-color: var(--secondary-color);
    color: white;
    border: none;
    border-radius: 10px;
    padding: 0.8rem 2rem;
    font-weight: 600;
    flex: 1;
    transition: all 0.3s ease;
  }
  
  .btn-update:hover {
    background-color: #d35400;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(214, 84, 0, 0.2);
  }
  
  .btn-back {
    background-color: #ecf0f1;
    color: var(--primary-color);
    border: none;
    border-radius: 10px;
    padding: 0.8rem 2rem;
    font-weight: 600;
    transition: all 0.3s ease;
  }
  
  .btn-back:hover {
    background-color: #dfe6e9;
    transform: translateY(-2px);
  }
  
  @media (max-width: 768px) {
    .profile-container {
      padding: 1.5rem 1rem;
    }
    
    .profile-header {
      padding: 2rem 1rem 1.5rem;
    }
    
    .profile-body {
      padding: 1.5rem;
    }
    
    .profile-avatar {
      width: 80px;
      height: 80px;
    }
    
    .profile-avatar i {
      font-size: 45px;
    }
    
    .profile-title {
      font-size: 1.5rem;
    }
    
    .profile-actions {
      flex-direction: column;
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
          <a type="submit" class="dropdown-item" href="">Profile</a>
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
  <!-- Main profile -->
  <div class="container profile-container">
  @if (session('success'))
  <div class="alert custom-alert alert-success alert-dismissible fade show" role="alert">
    <div class="alert-content">
      <i class="fas fa-check-circle alert-icon"></i>
      <span>{{ session('success') }}</span>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="profile-card">
        <div class="profile-header">
          <div class="profile-avatar">
            <i class="fas fa-user-circle"></i>
          </div>
          <h4 class="profile-title">Thông tin cá nhân</h4>
          <p class="profile-subtitle">Quản lý thông tin cá nhân của bạn</p>
        </div>
        
        <div class="profile-body">
          <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-floating mb-4">
              <input type="text" class="form-control custom-input" id="ho_ten" name="ho_ten" value="{{ Auth::user()->ho_ten }}" placeholder="Họ tên">
              <label for="ho_ten">Họ tên</label>
            </div>
            
            <div class="form-floating mb-4">
              <input type="email" class="form-control custom-input" id="email" name="email" value="{{ Auth::user()->email }}" placeholder="Email" readonly>
              <label for="email">Email</label>
              <div class="input-note"><i class="fas fa-lock"></i> Không thể thay đổi</div>
            </div>
            
            <div class="form-floating mb-4">
              <input type="password" class="form-control custom-input" id="mat_khau" name="mat_khau" placeholder="Mật khẩu">
              <label for="mat_khau">Mật khẩu mới</label>
              <div class="input-hint">Để trống nếu không muốn thay đổi</div>
            </div>
            
            <div class="form-floating mb-4">
              <input type="text" class="form-control custom-input" id="so_dien_thoai" name="so_dien_thoai" 
                value="{{ Auth::user()->so_dien_thoai }}" placeholder="Số điện thoại"
                {{ Auth::user()->so_dien_thoai ? 'readonly' : '' }}>
              <label for="so_dien_thoai">Số điện thoại</label>
              @if(Auth::user()->so_dien_thoai)
              <div class="input-note"><i class="fas fa-lock"></i> Không thể thay đổi</div>
              @endif
            </div>
            <div class="form-floating mb-4">
              <input type="text" class="form-control custom-input" id="dia_chi" name="dia_chi" value="{{ Auth::user()->dia_chi }}" placeholder="Địa chỉ">
              <label for="dia_chi">Địa chỉ</label>
            </div>
            <div class="profile-actions">
              <button type="submit" class="btn btn-update">
                <i class="fas fa-save"></i> Cập nhật
              </button>
              <a href="{{ route('home') }}" class="btn btn-back">
                <i class="fas fa-arrow-left"></i> Quay lại
              </a>
            </div>
          </form>
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