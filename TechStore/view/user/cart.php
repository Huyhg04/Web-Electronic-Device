<link rel="stylesheet" href="assets/css/cart.css">
<link rel="stylesheet" href="assets/css/login.css">
<div class="grid">
    <div class="containner" style="min-height: 400px;">
        <div class="cart-home">
            <div class="cart-left">
            <form action="" method="post">
                <table border=1 class="cart-left-table">
                    <tr>                       
                        <th colspan="6" class="pay">Giỏ hàng</th>                        
                    </tr>   
                    <?php
                    $tongtien = 0;
                    if (isset($_SESSION['cart']) && $_SESSION['cart']) {
                        $stt = 1; 
                        $id = 0; 
                        foreach ($_SESSION['cart'] as $index ) {
                            $thanhtien = (intval($index['product_price']) * intval($index['soluong']));
                            $tongtien += $thanhtien;
                            echo '              
                                <tr class="cart-prodcut">
                                    <td>'.$stt++.'</td>
                                    <td class="cart-img"> <img src="'. $index['product_img'] . '" alt=""></td>
                                    <td class="cart-name">' . $index['product_name'] . '</td>
                                    <td class="cart-price">' . number_format($index['product_price'], 0, ".", ",") . ' VNĐ</td>
                                    <td class="cart-quality">
                                        <div class="quality">
                                            <button type="button" id="increaseQuantity">+</button>
                                            <input type="number" name="soluong" min="1" value="' . $index['soluong'] . '" class="soluong">
                                            <button type="button" id="decreaseQuantity">-</button>
                                        </div>
                                    </td >
                                    <input type="hidden" name="stt" value="'.($id++).'">
                                    <input type="hidden" name="masp" value="' . $index['product_id'] .'">      
                                    <td><input type="submit" name="xoasp" value="Xóa" class="btn-remove"></td> 
                                </tr>';       
                        }
                    }else {
                        echo '<tr><td colspan="6" >Cart is empty.</td></tr>';
                    }
            if (isset($_SESSION['cart'])) {
                echo '
                    <tr>
                        <th colspan="3">Tạm tính</th>
                        <td class="tamtinh" colspan="3">'.number_format($tongtien,0,".",",").' VNĐ</td>
                    </tr>
                    <tr>
                        <th colspan="3">Tổng</th>
                        <td class="tong" colspan="3">'.number_format($tongtien, 0, ".", ",").' VNĐ</td>
                    </tr>'; 
                    if (isset($_SESSION['user']) && $_SESSION['user']) {
                        echo '<td colspan="6"><a href="?mod=sanpham&act=cart" class="header__cart-view-cart btn btn--primary">Thanh Toán</a></td>';
                    }else{
                        echo '<td colspan="6"><a href="?mod=user&act=dangnhap" class="header__cart-view-cart btn btn--primary">Thanh Toán</a></td>'; 
                    }
                        
            }
            ?>
                </table>
        </div>
            <?php 
            if (isset($_SESSION['user'])) {
                echo' <div class="cart-right"> 
                <h2>Thông tin</h2>
                <div class="auth-form__group">
                    <input type="text" name="name" class="auth-form__input" value="'.$_SESSION['user']['hoten'].'">
                </div>
                <div class="auth-form__group">
                    <input type="text" name="sex" class="auth-form__input" value="">
                </div>
                <div class="auth-form__group">
                    <input type="text" name="eamil" class="auth-form__input" value="'.$_SESSION['user']['email'].'">
                </div>
                <div class="auth-form__group">
                    <input type="text" name="phone" class="auth-form__input" value="">
                </div>
                <div class="auth-form__group">
                    <input type="text" name="address" class="auth-form__input" value="">
                </div>
                <label for="">Phương thức thanh toán</label><br>
                <input type="radio" name="check"id="crash" value="Thanh toán khi nhận hàng"> <label for="crash">Thanh toán khi nhận hàng</label> <br>
                <input type="radio" name="check" id="online" value="Thanh toán online"><label for="online"> Thanh toán online</label><br>
                <input type="hidden" name="mauser" value="' . $_SESSION['user']['matk'] . '">
                <input type="submit" value="Thanh toán" class="btn btn--primary" name="dathang">  
                </from>
                </div>          
            ';
            }
            ?>
          
    </div>
    </div>
</div>
<script src="assets/js/quantity.js"></script>
