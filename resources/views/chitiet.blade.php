<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Thư viện sách</title>
 <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
    .book-details-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin: 2rem auto;
        }

        .book-header {
            background-color: var(--primary-color);
            color: white;
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 2rem;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .book-header h2 {
            margin: 0;
            font-weight: 600;
            font-size: 1.8rem;
        }

        .book-image {
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .book-image:hover {
            transform: scale(1.02);
        }

        .book-details p {
            padding: 1rem;
            border-bottom: 1px solid #ecf0f1;
            margin: 0;
            transition: background-color 0.3s ease;
        }

        .book-details p:hover {
            background-color: #f8f9fa;
        }

        .book-details strong {
            color: var(--primary-color);
            min-width: 150px;
            display: inline-block;
            font-weight: 600;
        }

        .btn-primary {
            background-color: var(--secondary-color);
            border: none;
            padding: 0.8rem 2rem;
            font-weight: 500;
            transition: all 0.3s ease;
            margin-top: 2rem;
        }

        .btn-primary:hover {
            background-color: #d35400;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
        }

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
  @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
  <div class="container animate-fadeInUp">
        <div class="book-details-container">
            <div class="book-header">
                <h2>{{ $sach->tieu_de ?? 'Không có tiêu đề' }}</h2>
            </div>
            <div class="row">
                <div class="col-md-4 text-center mb-4">
                    <img src="{{ asset('img/' . $sach->image) }}" alt="{{ $sach->tieu_de }}" 
                         class="img-fluid book-image mb-3" style="max-width: 200px;">
                </div>
                <div class="col-md-8">
                    <div class="book-details">
                        <p><strong>Tác giả:</strong> {{ $sach->tacGia->ten_tac_gia ?? 'Không rõ' }}</p>
                        <p><strong>Thể loại:</strong> {{ $sach->theLoai->ten_the_loai ?? 'Không rõ' }}</p>
                        <p><strong>ISBN:</strong> {{ $sach->isbn ?? 'Không có' }}</p>
                        <p><strong>Năm xuất bản:</strong> {{ $sach->nam_xuat_ban ?? 'Không có' }}</p>
                        <p><strong>Vị trí:</strong> {{ $sach->viTri->mo_ta ?? 'Không có' }}</p>
                        <p><strong>Ngôn ngữ:</strong> {{ $sach->ngonNgu->ten_ngon_ngu ?? 'Không có' }}</p>
                        <p><strong>Nhà xuất bản:</strong> {{ $sach->nhaxuatBan->ten_nha_xuat_ban ?? 'Không có' }}</p>
                        <p><strong>Số lượng:</strong> {{ $sach->so_luong ?? 'Không có' }}</p>
                        <p><strong>Còn lại:</strong> {{ $sach->con_lai ?? 'Không có' }}</p>
                        <p><strong>Tình trạng sách:</strong> {{ $sach->con_lai == 0 ? 'Tạm hết' :($sach->hien_trang ?? 'Đang cập nhật') }}</p>
                    </div>
                </div>
            </div>
            <div>
                <a href="{{ route('home') }}" class="btn btn-primary">
                    <i class="fas fa-arrow-left me-2"></i>Quay lại danh sách
                </a>
            </div>
            <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#muonSachModal{{ $sach->id }}">
    <i class="fas fa-book-reader me-2"></i> Mượn sách
</button>
            </div>
        </div>
<!-- Modal đặt ngay sau nút -->
<div class="modal fade" id="muonSachModal{{ $sach->id }}" tabindex="-1" aria-labelledby="muonSachLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="muonSachLabel">Phiếu mượn</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('sach.muon', $sach->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <!-- Hiển thị lỗi nếu có -->
                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="mb-3">
                        <label for="ngay_muon{{ $sach->id }}" class="form-label">Ngày Mượn</label>
                        <input type="date" class="form-control @error('ngay_muon') is-invalid @enderror" 
                               id="ngay_muon{{ $sach->id }}" name="ngay_muon" value="{{ old('ngay_muon') }}" required>
                        @error('ngay_muon')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="han_tra{{ $sach->id }}" class="form-label">Ngày Trả</label>
                        <input type="date" class="form-control @error('han_tra') is-invalid @enderror" 
                               id="han_tra{{ $sach->id }}" name="han_tra" value="{{ old('han_tra') }}" required>
                        @error('han_tra')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-success">Xác nhận mượn</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Tự động mở modal nếu có lỗi -->
@if (session('error') || $errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var modal = new bootstrap.Modal(document.getElementById("muonSachModal{{ $sach->id }}"));
            modal.show();
        });
    </script>
@endif
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
  <script>
    document.addEventListener("DOMContentLoaded", function () {
    var modalElement = document.getElementById("muonSachModal{{ $sach->id }}"); // Thay số ID của sách
    var modal = new bootstrap.Modal(modalElement, {
        backdrop: false
    });
    modalElement.addEventListener("shown.bs.modal", function () {
        setTimeout(function () {
            var backdrops = document.getElementsByClassName("modal-backdrop");
            for (var i = 0; i < backdrops.length; i++) {
                backdrops[i].remove(); // Xóa backdrop để tránh bị khóa
            }
        }, 100);
    });
});
  </script>