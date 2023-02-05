<?php
ob_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>NHÓM 08 - KTUDPM</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets\img\favicon.png">
		
		<!-- all css here -->
        <link rel="stylesheet" href="assets\css\bootstrap.min.css">
        <link rel="stylesheet" href="assets\css\plugin.css">
        <link rel="stylesheet" href="assets\css\bundle.css">
        <link rel="stylesheet" href="assets\css\style.css">
        <link rel="stylesheet" href="assets\css\responsive.css">
        <script src="assets\js\vendor\modernizr-2.8.3.min.js"></script>
    </head>
    <body>
            <!-- Add your site or application content here -->
            
            <!--pos page start-->
            <div class="pos_page">
                <div class="container">
                   <!--pos page inner-->
                    <div class="pos_page_inner">  
                       <!--header area -->
                        <div class="header_area">
                               <!--header top--> 
                                <div class="header_top">
                                   <div class="row align-items-center">
                                        <div class="col-lg-6 col-md-6">
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="header_links">
                                                <ul>
                                                    <?php if(is_login())
                                                    {
                                                        ?>
                                                    <li><a href="?mod=cart&act=show" title="My cart">Giỏ hàng</a></li>
                                                    <li><a href="" title="My cart"><?php if(is_login())  echo info_user('fullname'); ?><i class="fa fa-user"></i></a></li>
                                                     <li><a href="?mod=log&act=logout" title="My cart">Đăng xuất</a></li>
                                                    <?php
                                                    } else{
                                                    ?>
                                                     <li><a href="?mod=cart&act=show" title="My cart">Giỏ hàng</a></li>
                                                    <li><a href="?mod=log&act=login" title="Login">Đăng nhập</a></li>
                                                     
                                                    <?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>   
                                        </div>
                                   </div> 
                                </div> 
                                <!--header top end-->

                                <!--header middel--> 
                                <div class="header_middel">
                                    <div class="row align-items-center">
                                       <!--logo start-->
                                        <div class="col-lg-3 col-md-3">
                                            <div class="logo">
                                                <a href="index.html"><img src="assets\img\logo\logo_transparent1.png" alt=""></a>
                                            </div>
                                        </div>
                                        <!--logo end-->
                                        <div class="col-lg-9 col-md-9">
                                            <div class="header_right_info">
                                                <div class="search_bar">
                                                    <form action="#">
                                                        <input placeholder="Search..." type="text">
                                                        <button type="submit"><i class="fa fa-search"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                                <!--header middel end-->      
                            <div class="header_bottom">
                                <div class="row">
                                        <div class="col-12">
                                            <div class="main_menu_inner">
                                                <div class="main_menu d-none d-lg-block">
                                                    <nav>
                                                        <ul>
                                                            
                                                            <li class="active"><a href="index.php">TRANG CHỦ</a>
                                                                <div class="mega_menu jewelry">
                                                                    <div class="mega_items jewelry">
                                                                        <!--<ul>
                                                                            <li><a href="index.html">Home 1</a></li>
                                                                            <li><a href="index-2.html">Home 2</a></li>
                                                                        </ul>-->
                                                                    </div>
                                                                </div> 
                                                            </li>
                                                            <li><a href="?mod=product&act=main">SẢN PHẨM </a>
                                                                <div class="mega_menu jewelry">
                                                                    <div class="mega_items jewelry">
                                                                        <ul>
                                                                            <li><a href="?mod=product&act=product1&cat_id=1">MÁY ĐO HUYẾT ÁP</a></li>
                                                                            <li><a href="?mod=product&act=product2&cat_id=2">MÁY ĐO ĐƯỜNG HUYẾT</a></li>
                                                                            <li><a href="?mod=product&act=product3&cat_id=3">NHIỆT KẾ ĐIỆN TỬ</a></li>
                                                                            <li><a href="shop-sidebar.html">CHĂM SÓC SỨC KHỎE</a></li>
                                                                            <li><a href="shop-sidebar-list.html">THIẾT BỊ GIA ĐÌNH</a></li>
                                                                            <li><a href="single-product-video.html">ĐỒ DÙNG MẸ VÀ BÉ</a></li>
                                                                            <li><a href="single-product-video.html">THỰC PHẨM DINH DƯỠNG</a></li>
                                                                            <li><a href="single-product-video.html">ĐỒ THỂ THAO</a></li>
                                                                            <!--<li><a href="single-product-gallery.html">Product Details Gallery</a></li>-->
                                                                        </ul>
                                                                    </div>
                                                                </div>  
                                                            </li>
                                                         
                                                            <li><a href="?mod=page&act=main">GIỚI THIỆU</a></li>
                                                            <li><a href="?mod=page&act=detail">LIÊN HỆ</a></li>
                                                            <li><a href="?mod=post&act=detail">HỢP TÁC</a></li>
                                                        </ul>
                                                    </nav>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>