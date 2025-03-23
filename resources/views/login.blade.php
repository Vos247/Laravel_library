<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thư Viện - Login</title>
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

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 30px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            width: 1000px;
            max-width: 95%;
            display: flex;
            backdrop-filter: blur(10px);
        }

        .login-image {
            flex: 1.2;
            background: url('/img/thuvien.png') center/cover;
            position: relative;
            min-height: 600px;
        }

        .login-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(107, 72, 255, 0.3), rgba(30, 144, 255, 0.3));
        }

        .login-form {
            flex: 1;
            padding: 60px 50px;
            position: relative;
        }

        .login-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .login-header h1 {
            color: #2d3748;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 15px;
            letter-spacing: -0.5px;
        }

        .login-header p {
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

        .remember-me {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 30px;
        }

        .remember-me input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #6b48ff;
        }

        .remember-me label {
            color: #4a5568;
            font-size: 15px;
        }

        .btn-login {
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
        }

        .btn-login:hover {
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

        .create-account {
            text-align: center;
        }

        .create-account a {
            color: #6b48ff;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .create-account a:hover {
            color: #1e90ff;
        }

        .alert {
            padding: 16px 20px;
            margin-bottom: 25px;
            border-radius: 15px;
            background-color: #fff5f5;
            color: #c53030;
            border: 1px solid #feb2b2;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert::before {
            content: '⚠️';
            font-size: 18px;
        }

        @media (max-width: 968px) {
            .login-container {
                width: 90%;
            }
        }

        @media (max-width: 768px) {
            .login-image {
                display: none;
            }
            
            .login-form {
                padding: 40px 30px;
            }

            .login-header h1 {
                font-size: 28px;
            }
        }

        /* Custom animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .login-form {
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
    <div class="login-container">
        <div class="login-image"></div>
        <div class="login-form">
            <div class="login-header">
                <h1>Chào mừng trở lại!</h1>
                <p>Vui lòng đăng nhập để tiếp tục</p>
            </div>
            @if(Session::has('error'))
                <div class="alert" role="alert">
                    {{ Session::get('error') }}
                </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input 
                        type="email" 
                        name="email" 
                        class="form-control" 
                        placeholder="Email của bạn"
                        required
                    >
                    <label>Email của bạn</label>
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

                <div class="remember-me">
                    <input type="checkbox" id="remember">
                    <label for="remember">Ghi nhớ đăng nhập</label>
                </div>

                <button type="submit" class="btn-login">
                    Đăng nhập
                </button>

                <div class="divider">
                    <span>hoặc</span>
                </div>

                <div class="create-account">
                    <a href="{{route('register')}}">Tạo tài khoản mới</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>