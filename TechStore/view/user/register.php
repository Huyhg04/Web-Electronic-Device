<link rel="stylesheet" href="./assets/css/login.css">
 <div class="login" >
    <div class="login-user">
        <div class="auth-form-test"></div>
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng Ký</h3>
                        <span class="auth-form__switch-btn"><a href="?mod=user&act=dangnhap">Đăng Nhập</a></span>                              
                    </div>
                    <form action="" method="post">
                <div class="auth-form__form">
                    <div class="auth-form__group">
                        <input type="text" class="auth-form__input" placeholder="Email của bạn" name="email" required>
                    </div>
                    <div class="auth-form__group">
                        <input type="password" class="auth-form__input" placeholder="Mật khẩu của bạn" name="password" required>
                    </div>
                    <div class="auth-form__group">
                        <input type="password" class="auth-form__input" placeholder="Nhập lại mật khẩu của bạn" name="password_repeat" required>
                    </div>
                </div>
                <div id="kq"> <?php if (isset($errorMessage) && $_POST['register']) {
                        echo $errorMessage;}
                 ?></div>
                <div class="auth-form__aside">
                    <p class="auth-form__policy-text">
                        Bằng việc đăng ký, bạn đồng ý với Shop về
                        <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a>&
                        <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                    </p>
                </div>
                <div class="auth-form__controls">
                    <button class="btn auth-form__controls-back btn--normal">TRỞ LẠI</button>
                    <input type="submit" class="btn btn--primary" name="register" value="ĐĂNG KÝ"></input>
                </div>
            </div>
            <div class="auth-form__socials">
                <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                    <i class="auth-form__socials-icon fa-brands fa-facebook"></i>
                    <span class="auth-form__socials-title"> Facebook </span>
                </a>
                <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                    <i class="auth-form__socials-icon fa-brands fa-google"></i>
                    <span class="auth-form__socials-title"> Google </span>                   
                </a>
            </div>
        </div>
    </form>                  
            </div>
        </div>
