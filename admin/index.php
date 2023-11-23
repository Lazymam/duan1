<!-- <?php
    // include "../dao/pdo.php";
    // include "../dao/sanpham.php";

    // include "layout/header.php";
    //     switch($pg) {
    //         case 'dssp':
    //         include "view/dssp.php";
    //         break;
    //     }
    // include "layout/home.php";
    // include "layout/footer.php";


















    // session_start();
    // ob_start();
    // if(isset($_SESSION['s_user'])&&(is_array($_SESSION['s_user']))&&(count($_SESSION['s_user'])>0)){
    //     $admin=$_SESSION['s_user'];
    // }else{
    //     header('location: login.php');
    // }
// ?>
<h1>Bạn đang đăng nhập vào trang Admin: <?=$admin["username"]?> </h1> -->
<?php
    session_start();
    ob_start();
    if(isset($_SESSION['s_user'])&&($_SESSION['s_user']['role']==1)){
        header("location:admin.php");
    }else{
        header("location:login.php");
    }
?>