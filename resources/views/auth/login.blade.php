<!DOCTYPE html>
<html>
    <head>
      <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div class="login-container">
            <form action="{{ route('index') }}"> <!-- đường dẫn đến file xử lý đăng nhập -->
                <h2>Đăng nhập</h2>
                <div class="input-group">
                    <input type="text" id="username" name="username" placeholder=" " required>
                    <label for="username">Tài khoản</label>
                </div>
                <div class="input-group">
                    <input type="password" id="password" name="password" placeholder=" " required>
                    <label for="password">Mật khẩu</label>
                </div>
                <button type="submit">Đăng nhập</button>
                <div class="forgot-password">
                    <a href="#">Quên mật khẩu?</a><!-- đường dẫn đến file xử lý quên mật khẩu, không có làm-->
                </div>
                <div class="register">
                    <a href="{{ route('register') }}">Đăng ký</a><!-- đường dẫn đến file xử lý đăng ký -->
                </div>
            </form>
        </div>
    </body>
</html>