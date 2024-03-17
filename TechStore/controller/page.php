<?php
//Quan ly view va model lien quan: trang chu, lien he, gioi thieu
// Goi duoc: view (giao dien html, css, js)
// mode (csdl)
include_once 'model/connect.php';
include_once 'view/user/header.php';
include_once 'model/categories.php';
$data['dsdm'] = lay_danhmuc(1);
include_once 'view/user/danhmuc.php';
if (isset($_GET['act'])) {
    switch ($_GET['act']) {
        case 'home':
            include_once 'model/product.php';
            $data['dssp']['iphone'] = get_products(1);
            $data['dssp']['samsung'] = get_products(2);
            $data['dssp']['xiaomi'] = get_products(3);            
            include_once 'view/user/home.php';
            break;
        default:
            # code...
            break;
    }
    include_once 'view/user/footer.php';
}
?>