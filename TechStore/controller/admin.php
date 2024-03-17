<?php
// quản lí view và model liên quan: trang chủ
// gọi được: view (html,css,js,database)
include_once 'view/admin/header.php';
    if (isset($_GET['act'])) {
       switch ($_GET['act']) {
        case 'home':     
            include_once 'view/admin/home.php';
            break;
        case 'user':      
            include_once 'model/connect.php';
            include_once 'model/user.php';
            $data['dsuser'] = get_users();  
            include_once 'view/admin/qlusers.php';
            break;
        case 'sanpham':     
            include_once 'model/connect.php';
            include_once 'model/product.php';
            $data['dssp'] = get_products();   
            include_once 'view/admin/qlproduct.php';
            break;
        case 'addsanpham': 
            include_once 'model/connect.php';
            include_once 'model/product.php';
            include_once 'model/categories.php';
            $data['dsdm'] = lay_danhmuc();

            if (isset($_GET['id'])) {
                $data['sp'] = get_product($_GET['id']);
            }

            if (isset($_POST['add']) && $_POST['add']) {
                $tensp = $_POST['tensp'];
                
                $gia = $_POST['gia'];
                $giakhuyenmai = $_POST['giakhuyenmai'];
                // $soluong = $_POST['soluong'];
                $mota = $_POST['mota'];
                $anh = $_FILES['anh']; // Đảm bảo bạn đã sử dụng name của trường input tải lên
            
                $madm = $_POST['madm'];
            
                $kq =add_product($tensp, $gia, $giakhuyenmai,  $mota, $anh, $madm);
            
                if ($kq === true) {
                } else {
                    if ($kq !== true) {
                        $errorMessage =  $kq;
                    }
                }
            }       
            include_once 'view/admin/addproduct.php';
            break;
        case 'donhang':        
            include_once 'view/admin/qlorders.php';
            break;
        case 'update':    
            include_once 'model/connect.php';
            include_once 'model/product.php';
            include_once 'model/categories.php';
            $data['dsdm'] = lay_danhmuc();

            if (isset($_GET['id'])) {
                $data['sp'] = get_product($_GET['id']);
            }

            if (isset($_POST['update']) && $_POST['update']) {
                $masp = $_GET['id']; 
                $tensp = $_POST['tensp'];
                $gia = $_POST['gia'];
                $giakhuyenmai = $_POST['giakhuyenmai'];
                // $soluong = $_POST['soluong'];
                $mota = $_POST['mota'];
                $anh = $_FILES['anh']; // Đảm bảo bạn đã sử dụng name của trường input tải lên
            
                $madm = $_POST['madm'];
            
                $kq = update_product($masp, $tensp, $gia, $giakhuyenmai, $mota, $anh, $madm);
            
                if ($kq === true) {
                } else {
                    if ($kq !== true) {
                        $errorMessage =  $kq;
                    }
                }
            }
          
            include_once 'view/admin/suasp.php';
            break;
        default:
            # code...
            break;
       }
    }
include_once 'view/admin/footer.php';
?>