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
        case 'detail':
            include_once 'model/product.php';
            if (isset($_GET['id'])) {
                $data['sp'] = get_product($_GET['id']);
            }
            
            if (isset($_POST['addcart'])) {
                // Lấy dữ liệu từ form và gọi hàm addToCart
                $masp = $_POST['product_id'];
                $img = $_POST['product_img'];
                $tensp = $_POST['product_name'];
                $giasp = $_POST['product_price'];
                $soluong = $_POST['soluong'];
                $tendm = $_POST['product_category'];
                include_once 'model/cart.php';
                addToCart($masp, $img, $tensp, $giasp, $soluong, $tendm);
            }
            
            include_once 'view/user/chitietsp.php';
            
            break;

        case 'list':
            include_once 'model/product.php';
            if (isset($_GET['iddm'])) {
                $data['dssp'] = get_products($_GET['iddm']);
            }
            include_once 'view/user/product_list.php';
            break;
        case 'cart':         
            if(isset($_POST['xoasp'])){                    
                unset($_SESSION['cart'][$_POST['stt']]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
            } 
            // unset($_SESSION['cart']);
            include_once 'view/user/cart.php';
            break;
        case 'order':         
            
            include_once 'view/user/orders.php';
            break;

        case 'search':
            include_once 'model/product.php';
            if (isset($_GET['keyword'])) {
                $data['dssp'] = search_products($_GET['keyword']);
            }
            include_once 'view/user/product_search.php';
            break;
            
        case 'admin':
            //kiem tra da dang nhap va la admin
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                header('Location: index.php');
            }

            include_once 'model/connect.php';
            include_once 'model/product.php';

            //mot trang gioi han chi co 4 san pham
            //Trang 1 bat dau tu 0
            //Trang 2 bat dau tu 4
            //Trang 4 bat dau tu 8
            //Trang 4 bat dau tu 12
            //Trang n bat dau tu (n-1)*4;

            $page = 1;
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            }
            $data['dssp'] = get_products(0, ($page - 1) * 4, 4);
            $soluongsp = count_products()['soluong'];
            $sotrang = ceil($soluongsp / 4);

            include_once 'view/template_admin_header.php';
            include_once 'view/product.admin.php';
            include_once 'view/template_admin_footer.php';
            break;
        case 'add':
            //kiem tra da dang nhap va la admin
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                header('Location: index.php');
            }

            include_once 'model/connect.php';
            include_once 'model/product.php';
            include_once 'model/categories.php';
            $data['dsdm'] = lay_danhmuc();


            if (isset($_POST['submit'])) {
                $kq = add_product(
                    $_POST['tensp'],
                    $_POST['gia'],
                    $_POST['giakhuyenmai'],
                    $_POST['soluong'],
                    $_POST['mota'],
                    $_FILES['anh']['name'],
                    $_POST['madm']
                );
                if ($kq) {
                    //ke dung, da them vao csdl thanh cong
                    if ($_FILES['anh']['error'] == 0) {
                        move_uploaded_file(
                            $_FILES['anh']['tmp_name'],
                            'upload/product/' . $_FILES['anh']['name']
                        );
                    }
                    if ($kq) {
                        //kq dung, upload file thanh cong
                        header("Location: admin.php?mod=product&act=admin");
                    } else {
                        $thongbao = "Co loi khong mong muon xay ra ! Vui long thu lai sau !";
                    }
                } else {
                    $thongbao = "Co loi khong mong muon xay ra ! vui long thu lai";
                }
            }


            include_once 'view/template_admin_header.php';
            include_once 'view/product_add.php';
            include_once 'view/template_admin_footer.php';
            break;

        case 'delete':
            //kiem tra da dang nhap va la admin
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                header('Location: index.php');
            }

            include_once 'model/connect.php';
            include_once 'model/product.php';

            if (isset($_GET['id'])) {
                $kq = delete_product($_GET['id']);
                if ($kq) {
                    $_SESSION['thongbao'] = "Da xoa san pham[" . $_GET['id'] . "] Thanh cong";
                    header("Location: admin.php?mod=product&act=admin");
                } else {
                    $thongbao = "Co loi da xay ra. Vui long thu lai sau";
                }
            }
            break;
        case 'update':
            //kiem tra da dang nhap va la admin
            if (!(isset($_SESSION['user']) && $_SESSION['user']['quyen'] == 'admin')) {
                header('Location: index.php');
            }

            include_once 'model/connect.php';
            include_once 'model/product.php';
            include_once 'model/categories.php';
            $data['dsdm'] = lay_danhmuc();

            if (isset($_GET['id'])) {
                $data['sp'] = get_product($_GET['id']);
            }

            if (isset($_POST['update'])) {
                //khai bao $anh = anh moi
                $anh = $_FILES['anh']['name'];
                if ($_FILES['anh']['error'] != 0) {
                    //khong co anh hoac anh bi loi, lay anh cu
                    $anh = $data['sp']['anh'];
                }

                $kq = update_product(
                    $_GET['id'],
                    $_POST['tensp'],
                    $_POST['gia'],
                    $_POST['giakhuyenmai'],
                    $_POST['soluong'],
                    $_POST['mota'],
                    $anh,
                    $_POST['madm']
                );
            }
            include_once 'view/template_admin_header.php';
            include_once 'view/product_update.php';
            include_once 'view/template_admin_footer.php';
            break;

        default:
            # code...
            # 
            break;
    }
    include_once 'view/user/footer.php';
}
?>