<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="assets/font/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/sale.css">
    <link rel="stylesheet" href="assets/css/banner.css">
    <link rel="stylesheet" href="assets/css/sanpham.css">
</head>
<body>
    <div class="app">
        <header class="header">
            <div class="grid">
                <nav class="header__navbar">
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-qr header__navbar-item--spearate">
                            Vào cửa hàng ứng dụng shop
                            <div class="header__qr">
                                <img src="./assets/img/qrcode.png" alt="" class="header__qr-img">
                                <div class="header__qr-apps">
                                    <a href="" class="header__qr-link">
                                        <img src="./assets/img/googleplay.png" alt="Google Play" class="header__qr-download-img">
                                    </a>
                                    <a href="" class="header__qr-link">
                                        <img src="./assets/img/appstrore.png" alt="App store" class="header__qr-download-img">
                                    </a>                                      
                                </div>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <span class="header__navbar-title--no-pointer">Kết nối</span> 
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fa-brands fa-facebook"></i>
                            </a>
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fa-brands fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
    
                    <ul class="header__navbar-list">
                        <li class="header__navbar-item header__navbar-item--has-notify">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon fa-solid fa-bell"></i>Thông báo
                            </a>
                            <div class="header__notify">
                                <header class="header__notify-header">
                                    <h3>Thông báo mới nhận</h3>
                                </header>
                                <ul class="header__notify-list">
                                    <li class="header__notify-item header__notify-item--viewed">
                                        <a href="" class="header__notify-link">
                                            <img src="./assets/img/anhsp.jpeg" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Mỹ phẩm Ohui chính hãng</span>
                                                <span class="header__notify-descrtion">Mô tả</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./assets/img/anhsp.jpeg" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Mỹ phẩm Ohui chính hãng</span>
                                                <span class="header__notify-descrtion">Mô tả</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="header__notify-item">
                                        <a href="" class="header__notify-link">
                                            <img src="./assets/img/anhsp.jpeg" alt="" class="header__notify-img">
                                            <div class="header__notify-info">
                                                <span class="header__notify-name">Mỹ phẩm Ohui chính hãng</span>
                                                <span class="header__notify-descrtion">Mô tả</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <footer class="header__notify-footer">
                                    <a href="" class="header__notify-footer-btn">Xem tất cả</a>
                                </footer>
                            </div>
                        </li>
                        <li class="header__navbar-item">
                            <a href="" class="header__navbar-item-link">
                                <i class="header__navbar-icon fa-solid fa-circle-question"></i>Trợ giúp
                            </a>
                        </li><?php 
                    if (isset($_SESSION['user']) && $_SESSION['user'] ){
                        echo '<li class="header__navbar-item header__navbar-user">
                        <img src="https://tse2.mm.bing.net/th?id=OIP.-cbx3pbKBX9WN6IP0bLsjgHaJ5&pid=Api&P=0&h=180" alt="" class="header__navbar-user-img">
                        <span class="header__navbar-user-name">'.$_SESSION['user']['hoten'].'</span>
                        <ul class="header__navbar-user-menu">
                            <li class="header__navbar-user-item">
                                <a href="?mod=user&act=account">Tài khoản của tôi</a>
                            </li>
                            <li class="header__navbar-user-item">
                                <a href="?mod=sanpham&act=orders">Đơn mua</a>
                            </li>
                            <li class="header__navbar-user-item header__navbar-user-item--separate">
                                <a href="?mod=user&act=dangxuat">Đăng xuất</a>
                            </li>
                        </ul>
                    </li>';               
                    }
                    else{
                       echo' <li class="header__navbar-item header__navbar-item--strong header__navbar-item--spearate"><a style="text-decoration: none; color:white;" href="?mod=user&act=dangky">Đăng ký</a></li>
                        <li class="header__navbar-item header__navbar-item--strong"><a style="text-decoration: none; color:white;" href="?mod=user&act=dangnhap">Đăng Nhập</a></li> ';                   
                    }
                ?>
                    </ul>
                </nav>
                <div class="header-with-search">
                    <div class="header__logo">
                        <a href="index.php"><img src="./assets/img/logo.webp"  class="header__logo-img"> </img> </a>                                         
                    </div> 
                    <form action="" id="search" method="get" class="header__search">                    
                        <div class="header__search-input-wrap">
                            <input type="text" name="keyword"  class="header__search-input" placeholder="Tìm kiếm sản phẩm">     
                            <div class="header__search-history">
                                <h3 class="header__search-history-heading">Lịch sử tìm kiếm</h3>
                                <ul class="header__search-history-list">
                                    <li class="header__search-history-item">
                                        <a href="">Kem dưỡng</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <input type="hidden" name="mod" value="product">
                        <input type="hidden" name="act" value="search">                   
                       <input type="submit" name="submit" value="Tìm" class="header__search-btn">
                    </form>
                    <div class="header__cart">                   
                        <div class="header__cart-wrap">
                        <i class="header__cart-icon fa-solid fa-cart-shopping"></i>
                        <span class="header__cart-notice">
                            <?php
                                $totalItemsInCart = 0;
                                if (isset($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $index) {
                                        $totalItemsInCart += $index['soluong']; 
                                    }
                                }
                                 echo $totalItemsInCart;
                            ?>
                        </span>                        
                        <!-- <span class="header__cart-notice">3</span> -->
                        
                        <div class="header__cart-list ">
                            <img src="./assets/img/no_cart.png" alt="" class="header__cart-no-cart-img">
                            <span class="header__cart-list-no-cart-msg">
                                Chưa có sản phẩm
                            </span>
                            <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                            <ul class="header__cart-list-item">
                            <?php
                            $stt=1; 
                            $id=0;
                    if (isset($_SESSION['cart']) && $_SESSION['cart']){ 
                        foreach ($_SESSION['cart'] as $index ) {
                            echo'    
                            <form action="" method="post">
                            <li class="header__cart-item">
                                    <img src="'. $index['product_img'] . '" alt="" class="header__cart-img">
                                <div class="header__cart-item-info">
                                    <div class="header__cart-item-head">
                                       <h5 class="header__cart-item-name">' . $index['product_name'] . '</h5> 
                                       <div class="header__cart-item-price-wrap">
                                            <span class="header__cart-item-price">'.number_format( $index['product_price'],0,".",",").' VNĐ</span>
                                            <span class="header__cart-item-mutiply">x</span>
                                            <span class="header__cart-item-qnt">' . $index['soluong'] . '</span>
                                       </div>
                                    </div>
                                    <div class="header__cart-item-body">
                                        <span class="header__cart-item-description">
                                            Phân loại: '.$index['product_category'].'
                                        </span>
                                        
                                    </div>
                                </div>
                                </li>
                                </form>';
                            }
                        }else{
                            echo'<li>Chưa có sản phẩm</li>';
                        }
                                ?>
                            </ul>
                          <a href="?mod=product&act=cart" class="header__cart-view-cart btn btn--primary">Xem giỏ hàng</a>
                        </div>
                    </div>                
                    </div>
                </div>
        </header>
    </div>

<script src="assets/js/dropdown.js"></script>   
   