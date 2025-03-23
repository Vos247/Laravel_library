<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thư Viện - Register</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(120deg, #6b48ff, #1e90ff);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .register-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 30px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            width: 1000px;
            max-width: 95%;
            display: flex;
            backdrop-filter: blur(10px);
        }

        .register-image {
            flex: 1.2;
            background: url('/img/thuvien.png') center/cover;
            position: relative;
            min-height: 600px;
        }

        .register-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(107, 72, 255, 0.3), rgba(30, 144, 255, 0.3));
        }

        .register-form {
            flex: 1;
            padding: 60px 50px;
            position: relative;
        }

        .register-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .register-header h1 {
            color: #2d3748;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 15px;
            letter-spacing: -0.5px;
        }

        .register-header p {
            color: #718096;
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 30px;
            position: relative;
        }

        .form-control {
            width: 100%;
            padding: 15px 25px;
            border: 2px solid #e2e8f0;
            border-radius: 15px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
        }

        .form-control:focus {
            border-color: #6b48ff;
            outline: none;
            box-shadow: 0 0 0 4px rgba(107, 72, 255, 0.1);
        }

        .form-group i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #a0aec0;
        }

        .btn-register {
            width: 100%;
            padding: 15px;
            background: linear-gradient(to right, #6b48ff, #1e90ff);
            color: white;
            border: none;
            border-radius: 15px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-top: 20px;
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(107, 72, 255, 0.4);
        }

        .divider {
            margin: 35px 0;
            display: flex;
            align-items: center;
            text-align: center;
            color: #a0aec0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #e2e8f0;
        }

        .divider span {
            padding: 0 15px;
            font-size: 14px;
        }

        .login-link {
            text-align: center;
        }

        .login-link a {
            color: #6b48ff;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .login-link a:hover {
            color: #1e90ff;
        }

        .alert {
            padding: 16px 20px;
            margin-bottom: 25px;
            border-radius: 15px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-success {
            background-color: #f0fff4;
            color: #2f855a;
            border: 1px solid #9ae6b4;
        }

        .alert-success::before {
            content: '✓';
            font-size: 18px;
        }
        .alert-danger {
            background-color: #fff5f5;
            color: #c53030;
            border: 1px solid #feb2b2;
        }
        .alert-danger::before {
            content: '!";
            font-size: 18px;
        }
        @media (max-width: 968px) {
            .register-container {
                width: 90%;
            }
        }

        @media (max-width: 768px) {
            .register-image {
                display: none;
            }
            
            .register-form {
                padding: 40px 30px;
            }

            .register-header h1 {
                font-size: 28px;
            }
        }

        /* Custom animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .register-form {
            animation: fadeIn 0.8s ease-out;
        }

        /* Floating label effect */
        .form-group {
            position: relative;
        }

        .form-control::placeholder {
            color: transparent;
        }

        .form-control:focus::placeholder {
            color: #a0aec0;
        }

        .form-group label {
            position: absolute;
            top: 50%;
            left: 25px;
            transform: translateY(-50%);
            background: white;
            padding: 0 5px;
            color: #a0aec0;
            transition: all 0.3s ease;
            pointer-events: none;
        }

        .form-control:focus + label,
        .form-control:not(:placeholder-shown) + label {
            top: 0;
            font-size: 12px;
            color: #6b48ff;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-image"></div>
        <div class="register-form">
            <div class="register-header">
                <h1>Đăng ký tài khoản</h1>
                <p>Tạo tài khoản mới để bắt đầu</p>
            </div>
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif
            <form action="{{route('register')}}" method="POST">
                @csrf
                <div class="form-group">
                    <input 
                        type="text" 
                        name="ho_ten" 
                        class="form-control" 
                        placeholder="Họ và tên"
                        required
                    >
                    <label>Họ và tên</label>
                    <i class="fas fa-user"></i>
                </div>
                
                <div class="form-group">
                    <input 
                        type="email" 
                        name="email" 
                        class="form-control" 
                        placeholder="Email"
                        required
                    >
                    <label>Email</label>
                    <i class="fas fa-envelope"></i>
                </div>
                
                <div class="form-group">
                    <input 
                        type="password" 
                        name="mat_khau" 
                        class="form-control" 
                        placeholder="Mật khẩu"
                        required
                    >
                    <label>Mật khẩu</label>
                    <i class="fas fa-lock"></i>
                </div>

                <button type="submit" class="btn-register">
                    Đăng ký ngay
                </button>

                <div class="divider">
                    <span>hoặc</span>
                </div>
                <div class="login-link">
                    <a href="{{route('login')}}">Đã có tài khoản? Đăng nhập ngay</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>