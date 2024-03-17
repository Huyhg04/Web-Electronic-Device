<link rel="stylesheet" href="assets/css/orders.css">
<link rel="stylesheet" href="assets/css/login.css">
<div class="grid">
    <div class="containner" style="min-height: 400px;">
        <div class="account-home">
        <div class="account-right"> 
            <div class="auth-form__group">
                   <ul>
                    <li class="avatar"><img src="assets/img/6.png" alt=""> <span><?php echo''.$_SESSION['user'][0]['name'].'' ?></span></li>
                    <li class="account_item"><a href="">Tài Khoản</a>
                        <ul>
                            <li><a href="">Hồ sơ</a></li>
                            <li><a href="">Đổi mật khẩu</a></li>
                        </ul>
                    </li>
                    <li><a href="">Đơn hàng</a></li>
                   </ul> 
            </div>
        </div>
            <div class="account-left">
                <nav class="menu_detail">
                    <ul>
                        <li><a href="">Tất cả</a></li>
                        <li><a href="">Chờ thanh toán</a></li>
                        <li><a href="">Vận chuyển</a></li>
                        <li><a href="">Đang giao</a></li>
                        <li><a href="">Hoàn thành</a></li>
                        <li><a href="">Đã hủy</a></li>
                    </ul>
                </nav>
                <table border=1 class="account-left-table">
                <tr>
                <th>STT</th>
                <th>Mã hóa đơn</th>
                <th>Tên khách hàng</th>
                <th>Tổng tiền</th>
                <th>Phương thức thanh toán</th>
                <th>Xem</th>
                <th>Hủy đơn</th>
            </tr>
                </table>
            </form>
        </div>
    </div>
    </div>
</div>

