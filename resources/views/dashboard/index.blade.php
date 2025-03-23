@extends('layout.app')
@section('title')
@section('content')
<div class="dashboard-container">
    <div class="dashboard-header">
        <h1>Trang Quản Lý Thư Viện</h1>
        <p class="subtitle">Thông tin tổng quan hệ thống</p>
    </div>
    <div class="stats-container">
        @php
        $user = Auth::user();
        $isAdmin = $user && $user->email === 'admin@gmail.com'
        @endphp
        <!-- Main Stats -->
        <div class="main-stats">
            <a href="{{ route('sach.index') }}" class="stat-card primary-gradient">
                <div class="stat-icon">
                    <i class="fas fa-book"></i>
                </div>
                <div class="stat-content">
                    <h3>{{ $tongSoSach }}</h3>
                    <p>Tổng số sách</p>
                </div>
            </a>
            
            <a href="{{ $isAdmin ? route('nguoidung.index') : '#' }}" class="stat-card success-gradient">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-content">
                    <h3>{{ $soNguoiDung }}</h3>
                    <p>Người dùng</p>
                </div>
            </a>
            
            <a href="{{ route('muontra.index') }}" class="stat-card info-gradient">
                <div class="stat-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <div class="stat-content">
                    <h3>{{ $soSachDaMuon }}</h3>
                    <p>Sách đã mượn</p>
                </div>
            </a>
            
            <a href="{{ route('muontra.index') }}" class="stat-card warning-gradient">
                <div class="stat-icon">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div class="stat-content">
                    <h3>{{ $sachQuaHan }}</h3>
                    <p>Sách quá hạn</p>
                </div>
            </a>
        </div>
        <!-- Detailed Stats -->
        <div class="detailed-stats">
            <div class="stat-row">
                <a href="{{ route('nhaxuatban.index') }}" class="stat-card secondary-gradient">
                    <div class="stat-content-horizontal">
                        <div>
                            <h4>Nhà xuất bản</h4>
                            <h2>{{ $soNhaXuatBan }}</h2>
                        </div>
                        <i class="fas fa-building stat-icon-right"></i>
                    </div>
                </a>
                
                <a href="{{ $isAdmin ? route('nhanvien.index') : '#' }}" class="stat-card secondary-gradient">
                    <div class="stat-content-horizontal">
                        <div>
                            <h4>Nhân viên</h4>
                            <h2>{{ $soNhanVien }}</h2>
                        </div>
                        <i class="fas fa-user-tie stat-icon-right"></i>
                    </div>
                </a>
            </div>
            
            <div class="stat-row">
                <a href="{{ route('muontra.index') }}" class="stat-card secondary-gradient">
                    <div class="stat-content-horizontal">
                        <div>
                            <h4>Sách đã trả</h4>
                            <h2>{{ $sachDaTra }}</h2>
                        </div>
                        <i class="fas fa-check-circle stat-icon-right"></i>
                    </div>
                </a>
                <a href="{{ route('muontra.index') }}" class="stat-card secondary-gradient">
                    <div class="stat-content-horizontal">
                        <div>
                            <h4>Sách chưa trả</h4>
                            <h2>{{ $sachChuaTra }}</h2>
                        </div>
                        <i class="fas fa-hourglass-half stat-icon-right"></i>
                    </div>
                </a>
                <a href="{{ route('theloai.index') }}" class="stat-card secondary-gradient">
                    <div class="stat-content-horizontal">
                        <div>
                            <h4>Thể loại</h4>
                            <h2>{{ $tongTheloai }}</h2>
                        </div>
                        <i class="fas fa-layer-group stat-icon-right"></i>
                    </div>
                </a>
                <a href="{{ route('vitri.index') }}" class="stat-card secondary-gradient">
                    <div class="stat-content-horizontal">
                        <div>
                            <h4>Vị trí</h4>
                            <h2>{{ $tongViTri }}</h2>
                        </div>
                        <i class="fas fa-map-marker-alt stat-icon-right"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Highlights Section -->
    <div class="highlights-section">
        <h2 class="section-title"><i class="fas fa-trophy"></i> Thống kê nổi bật</h2>
        
        <div class="highlights-container">
            <div class="highlight-card">
                <div class="highlight-icon">
                    <i class="fas fa-book"></i>
                </div>
                <div class="highlight-content">
                    <h3>Sách được mượn nhiều nhất</h3>
                    @if($sachNhieuNhat)
                    <p class="highlight-value">{{ $sachNhieuNhat->sach->tieu_de }}</p>
                    <p class="highlight-subtext">{{ $sachNhieuNhat->so_luot }} lượt mượn</p>
                    @else
                    <p class="highlight-value">Không có sách nào được mượn</p>
                    @endif
                </div>
            </div>
            
            <div class="highlight-card">
                <div class="highlight-icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="highlight-content">
                    <h3>Người dùng tích cực nhất</h3>
                    @if($soNguoiDungMuonSachNhieuNhat)
                    <p class="highlight-value">{{ $soNguoiDungMuonSachNhieuNhat->nguoidung->ho_ten }}</p>
                    <p class="highlight-subtext">{{ $soNguoiDungMuonSachNhieuNhat->so_luot }} lượt mượn</p>
                    @else
                    <p class="highlight-value">Chưa có người mượn sách</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --primary: #4361ee;
        --primary-dark: #3a0ca3;
        --success: #2ecc71;
        --success-dark: #1abc9c;
        --info: #3498db;
        --info-dark: #2980b9;
        --warning: #f39c12;
        --warning-dark: #e67e22;
        --danger: #e74c3c;
        --secondary: #6c5ce7;
        --secondary-light: #a29bfe;
        --light: #f8f9fa;
        --dark: #343a40;
        --shadow: 0 5px 15px rgba(0,0,0,0.1);
        --transition: all 0.3s ease;
        --border-radius: 1rem;
    }

    body {
        background-color: #f4f7fa;
        font-family: 'Segoe UI', Roboto, 'Helvetica Neue', sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
    }

    .dashboard-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 2rem;
    }

    .dashboard-header {
        text-align: center;
        margin-bottom: 2.5rem;
        background: linear-gradient(135deg, var(--primary), var(--primary-dark));
        color: white;
        padding: 2rem;
        border-radius: var(--border-radius);
        box-shadow: var(--shadow);
    }

    .dashboard-header h1 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        text-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }

    .dashboard-header .subtitle {
        font-size: 1.1rem;
        opacity: 0.9;
    }

    .stats-container {
        display: flex;
        gap: 1.5rem;
        margin-bottom: 2.5rem;
    }

    .main-stats {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
        flex: 3;
    }

    .detailed-stats {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        flex: 2;
    }

    .stat-row {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 1.5rem;
    }

    .stat-card {
        display: block;
        text-decoration: none;
        color: white;
        border-radius: var(--border-radius);
        padding: 1.5rem;
        box-shadow: var(--shadow);
        transition: var(--transition);
        position: relative;
        overflow: hidden;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .stat-card::after {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 100%;
        height: 100%;
        background: rgba(255,255,255,0.1);
        transform: rotate(30deg);
        pointer-events: none;
    }

    .stat-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        width: 4rem;
        height: 4rem;
        border-radius: 50%;
        background-color: rgba(255,255,255,0.2);
        margin-bottom: 1rem;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .stat-content h3 {
        font-size: 2.2rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        text-shadow: 0 1px 2px rgba(0,0,0,0.2);
    }

    .stat-content p {
        font-size: 1rem;
        opacity: 0.9;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .stat-content-horizontal {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .stat-content-horizontal h4 {
        font-size: 1rem;
        opacity: 0.9;
        margin-bottom: 0.5rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .stat-content-horizontal h2 {
        font-size: 1.8rem;
        font-weight: 700;
        margin: 0;
        text-shadow: 0 1px 2px rgba(0,0,0,0.2);
    }

    .stat-icon-right {
        font-size: 2.5rem;
        opacity: 0.7;
    }

    /* Gradient backgrounds */
    .primary-gradient {
        background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    }

    .success-gradient {
        background: linear-gradient(135deg, var(--success), var(--success-dark));
    }

    .info-gradient {
        background: linear-gradient(135deg, var(--info), var(--info-dark));
    }

    .warning-gradient {
        background: linear-gradient(135deg, var(--warning), var(--warning-dark));
    }

    .danger-gradient {
        background: linear-gradient(135deg, var(--danger), #c0392b);
    }

    .secondary-gradient {
        background: linear-gradient(135deg, var(--secondary), var(--secondary-light));
    }

    /* Highlights section */
    .highlights-section {
        margin-top: 2rem;
    }

    .section-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 1.5rem;
        padding-bottom: 0.75rem;
        border-bottom: 2px solid #e2e8f0;
        display: flex;
        align-items: center;
    }

    .section-title i {
        margin-right: 0.75rem;
        color: var(--primary);
        font-size: 1.25rem;
        background: rgba(67, 97, 238, 0.1);
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }

    .highlights-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
    }

    .highlight-card {
        background: white;
        border-radius: var(--border-radius);
        padding: 1.5rem;
        box-shadow: var(--shadow);
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        transition: var(--transition);
        border-left: 5px solid var(--primary);
    }

    .highlight-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .highlight-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        min-width: 3rem;
        height: 3rem;
        border-radius: 0.75rem;
        background-color: rgba(67, 97, 238, 0.1);
        color: var(--primary);
    }

    .highlight-content h3 {
        font-size: 1rem;
        font-weight: 600;
        color: #718096;
        margin-bottom: 0.5rem;
    }

    .highlight-value {
        font-size: 1.25rem;
        font-weight: 700;
        color: #2d3748;
        margin-bottom: 0.25rem;
    }

    .highlight-subtext {
        font-size: 0.875rem;
        color: #718096;
        display: flex;
        align-items: center;
    }

    .highlight-subtext::before {
        content: '\f0e7';
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
        margin-right: 5px;
        color: var(--warning);
    }

    /* Responsive design */
    @media (max-width: 1200px) {
        .stats-container {
            flex-direction: column;
        }
        
        .main-stats {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 768px) {
        .main-stats, 
        .stat-row {
            grid-template-columns: 1fr;
        }
        
        .dashboard-container {
            padding: 1rem;
        }

        .dashboard-header {
            padding: 1.5rem 1rem;
        }

        .dashboard-header h1 {
            font-size: 2rem;
        }
    }

    @media (max-width: 576px) {
        .highlights-container {
            grid-template-columns: 1fr;
        }
    }
</style>
@endsection