<?php 
function addToCart($masp, $img, $tensp, $giasp, $soluong,$tendm) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $sp = [
        'product_id' => $masp,
        'product_img' => $img,
        'product_name' => $tensp,
        'product_price' => $giasp,
        'soluong' => $soluong,
        'product_category' => $tendm,
    ];

    $sl = true;
    $i = 0;

    foreach ($_SESSION['cart'] as $index) {
        if ($index['product_id'] == $sp['product_id']) {
            // Cập nhật số lượng sản phẩm trong giỏ hàng
            $_SESSION['cart'][$i]['soluong'] += $soluong;
            $sl = false;
        }
        $i++;
    }

    if ($sl) {
        $_SESSION['cart'][] = $sp;
    }
}

?>
