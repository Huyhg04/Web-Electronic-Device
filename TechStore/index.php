<?php
    session_start();
    //dieu huong den cac controller
    if(isset($_GET['mod'])){
        switch ($_GET['mod']) {
            case 'page':
                include_once 'controller/page.php';
                break;
            case 'contact' :
                include_once 'controller/contact.php';
                break;

            case 'user':
                include_once 'controller/user.php';
                break;

            case 'product' :
                include_once 'controller/product.php';
                break;
            case 'admin' :
                include_once 'controller/admin.php';
                break;
            default:
                
                break;
        }
    }else{
        header("Location:index.php?mod=page&act=home");
    }
?>
