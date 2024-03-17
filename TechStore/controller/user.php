<?php
// quản lí view và model liên quan: trang chủ
// gọi được: view (html,css,js,database)
    if (isset($_GET['act'])) {
       switch ($_GET['act']) {
        case 'dangnhap':           
            include_once 'model/connect.php';
            include_once 'model/user.php';

            if (isset($_POST['login']) && $_POST['login']) {
                $kq = login($_POST['email'], $_POST['pass']);
                if ($kq) {
                    //kq dung, dang nhap thanh cong
                    $_SESSION['user'] = $kq;
                    if ($kq['quyen'] == 'admin') {
                        header("Location: index.php?mod=admin&act=home");
                    } else {
                        header("Location:index.php");
                    }
                } else {
                    $thongbao = "Email hoặc mật khẩu sai ! Hãy nhập lại";
                }
            }
            
            include_once 'view/user/header.php';
            include_once 'view/user/login.php';
            include_once 'view/user/footer.php';
            break;
        case 'dangky':
            include_once 'model/connect.php'; 
            include_once 'model/user.php';           
            if (isset($_POST['register']) && $_POST['register']) {
                $email = $_POST['email'];
                $password = $_POST['password'];
                $password_repeat = $_POST['password_repeat'];
                $kq = signup($email, $password, $password_repeat);
            
                if ($kq === true) {
                } else {
                    if ($kq !== true) {
                        $errorMessage =  $kq;
                    }
                }
            }
            include_once 'view/user/header.php';
            include_once 'view/user/register.php';
            include_once 'view/user/footer.php';
            break;
        case 'dangxuat':
            if (isset($_SESSION['user'])){
                session_unset(); // xóa session login
            }
            header("location: ?mod=page&act=home");
            break;
        case 'account':
                include_once 'model/connect.php';            
                include_once 'view/user/header.php';
                include_once 'view/user/account.php';
                include_once 'view/user/footer.php';
                break;
        default:
            # code...
            break;
       }
    }
?>