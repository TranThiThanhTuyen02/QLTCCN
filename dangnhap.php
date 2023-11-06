<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/font-awesome.css">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/dangnhap.css">
    <title>Đăng Nhập</title>
</head>
<body>
    <section class="Form my-5 mx-5">
        <div class="container">
          <div class="row no-gutters"> 

            <div class="col-lg-5">
              <img src="./assets/img/logo.png" class="img-fluid" alt="">
              <h1 class="text-center">Phần mềm quản lý <br> tài chính cá nhân</h1>
            </div>


            <div class="col-lg-5 px-5 pt-5 row d-flex" id="dangnhap"> 
              <h1  class="text-center">ĐĂNG NHẬP</h1>

              <form action="" class="form">
                <div class="form__username">
                    <div class="form__username--icon form__icon">
                      <i class="fa fa-user" aria-hidden="true"></i>
                    </div>
                    <div class="form__username--input form__input">
                        <input type="text" id="username" placeholder="Tên đăng nhập" onblur="checkUsername()">
                        <span class="text-danger" id="err_user"></span>
                    </div>
                </div>
                <p id="errorUsername"></p>
                <div class="form__password">
                    <div class="form__password--icon form__icon">
                      <i class="fa fa-lock" aria-hidden="true"></i>
                    </div>
                    <div class="form__password--input form__input">
                        <input type="password" id="password" placeholder="Mật khẩu" onblur="checkPassword()">
                        <span class="fa fa-eye" aria-hidden="true" id="togglePassword"></span>
                        <span class="text-danger" id="err_password"></span>
                    </div>
                </div>
                <p id="errorPassword" class="text-center"></p>
                <span id="err" class="text-danger"></span>
                <div class="form__submit">
                    <button type="button" class="font-weight-bold" onclick="login()">ĐĂNG NHẬP
                    </button>
                </div>
            </form>  
            <div class="text-center">
                <a href="#">Quên mật khẩu</a>
                <p class="sign-up">Chưa có tài khoản<a href="signup.html">&nbsp;Đăng ký tại đây</a></p>
            </div>  
            </div>
          </div>
        </div>
    </section>
    <script src="js/dangnhap.js"></script>
</body>
</html>