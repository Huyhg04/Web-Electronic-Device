<link rel="stylesheet" href="./assets/css/login.css">
 <div class="login" >
    <div class="login-user">
            <div class="auth-form">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng Nhập</h3>
                        <span class="auth-form__switch-btn"><a href="?mod=user&act=dangky">Đăng ký</a></span>                         
                    </div>
                    <form action="" method="post">
                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Email của bạn" name="email" required>
                        </div>
                        <div class="auth-form__group">
                            <input type="password" class="auth-form__input" placeholder="Mật khẩu của bạn" name="pass" required>
                        </div>
                    </div>
                    <div id="kq"><?php 
                    if(isset($_POST['login'])){
                        echo $thongbao;
                    }
                     ?></div>
                    <div class="auth-form__aside">
                        <div class="auth-form__help">
                            <a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                            <span class="auth-form__help-separate"></span>
                            <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                        </div>
                    </div>
                    <div class="auth-form__controls">
                        <button class="btn auth-form__controls-back btn--normal">TRỞ LẠI</button>
                        <input type="submit" class="btn btn--primary" name="login" value="ĐĂNG NHẬP"></input>
                    </div>
                </div>
                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-facebook"></i>
                        <span class="auth-form__socials-title">
                            Facebook
                        </span>
                    </a>
                    <a href="" class="auth-form__socials--google btn btn--size-s btn--with-icon">
                        <i class="auth-form__socials-icon fa-brands fa-google"></i>
                        <span class="auth-form__socials-title">
                             Google
                        </span>
                    </a>
                </div>                        
            </form>                    
            </div>
        </div>
</div>