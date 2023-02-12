<?php
ob_start();
?>
<?php
global $list_product_cat;
$list_cat = $list_product_cat;
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
                                            <?php
                                            if (is_login()) {
                                                ?>
                                                <li><a href="?mod=cart&act=show" title="My cart">Giỏ hàng</a></li>
                                                <li><a href="?mod=users&act=main" title="My account"><?php if (is_login()) echo info_user('fullname'); ?></a></li>
                                                <li><a href="?mod=log&act=logout" title="My cart">Đăng xuất</a></li>
                                                <?php
                                            } else {
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
                                        <a href="index.php"><img src="assets\img\logo\logo_transparent1.png" alt=""></a>
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
                                                            <?php 
                                                                  
                                                                    foreach($list_cat as $item){
                                                                     ?>
                                                                    <div class="mega_items jewelry">
                                                                        <ul>
                                                                            <li><a href="<?php echo "?mod=product&act=product1&cat_id={$item['cat_id']}"?>"><?php echo $item['cat_title'] ?></a></li>
                                                                        </ul>
                                                                    </div>
                                                                    <?php
                                                                    }
                                                                    ?>

                                                        </div>  
                                                    </li>

                                                    <li><a href="?mod=page&act=main">GIỚI THIỆU</a></li>
                                                    <li><a href="?mod=page&act=detail">LIÊN HỆ</a></li>
                                                </ul>
                                            </nav>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--content-->
                    <div class="pos_home_section">
                        <div class="row pos_home">

                            <div class="col-lg-9 col-md-12">
                                <!--banner slider start-->
                                <div class="banner_slider slider_1">
                                    <div class="slider_active owl-carousel">
                                        <div class="single_slider" style="background-image: url(assets/img/slider/hocy1.jpg)">
                                            <div class="slider_content">
                                                <div class="slider_content_inner">
                                                    <!--<h1>Women's Fashion</h1>-->
                                                    <p>SỨC KHỎE VÀ HẠNH PHÚC CỦA BẠN</p>
                                                    <p>LÀ NIỀM VUI VÀ TRÁCH NHIỆM CỦA CHÚNG TÔI</p>
                                                    <a href="?mod=product&act=main">Mua ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_slider" style="background-image: url(assets/img/slider/slide2.jpg)">
                                            <div class="slider_content">
                                                <div class="slider_content_inner">
                                                    <h1>Đảm bảo</h1>
                                                    <p>Chất lượng - Hiệu quả- Lan tỏa niềm tin</p>
                                                    </p>
                                                    <a href="?mod=product&act=main">mua ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_slider" style="background-image: url(assets/img/slider/slide3.jpg)">
                                            <div class="slider_content">
                                                <div class="slider_content_inner">
                                                    <h1>Sự lựa chọn tốt nhất</h1>
                                                    <p>Còn chần chờ gì nữa mà không thêm ngay vào giỏ hàng</p>
                                                    <a href="?mod=product&act=main">mua ngay</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--banner slider start-->

                                <!--new product area start-->

                                <div class="new_product_area"> 
                                    <?php
                                    foreach ($list_cat as $cat) {
                                        ?>
                                        <div class="block_title">
                                            <h3><?php echo $cat['cat_title'] ?></h3>
                                        </div>
                                        <div class="row">
                                            <?php
                                            #lấy danh sách sản phẩm
                                            $list_item = get_list_product_by_cat($cat['cat_id']);
                                            ?>
                                            <div class="product_active owl-carousel">
                                                <?php
                                                if (!empty($list_item)) {
                                                    ?>
                                                    <?php
                                                    foreach ($list_item as $item) {
                                                        ?>
                                                        <div class="col-lg-3">
                                                            <div class="single_product">
                                                                <div class="product_thumb">
                                                                    <a href="<?php echo $item['url'] ?>"><img src="<?php echo "assets/img/product/{$item['thumb']}" ?>" alt=""></a>
                                                                    <div class="img_icone">
                                                                        <img src="assets\img\cart\span-new.png" alt="">
                                                                    </div>
                                                                    <div class="product_action">
                                                                        <a href="<?php echo "?mod=cart&act=add&id={$item['id']}" ?>"> <i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</a>
                                                                    </div>
                                                                </div>
                                                                <div class="product_content">
                                                                    <span class="product_price_goc"><?php echo number_format($item['price']).' VND' ?></span>
                                                                    <span class="product_price_dis">3.900.000 VND</span>
                                                                    <h3 class="product_name"><?php echo $item['product_name'] ?></h3>
                                                                    <!--<h3 class="product_title"><a href="single-product-video.html">Curabitur sodales</a></h3>-->
                                                                </div>
                                                                <div class="product_info">
                                                                    <ul>
                                                                        <li><a href="<?php echo "?mod=product&act=detail&id={$item['id']}" ?>">Thông tin chi tiết</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>               
                                </div>
                                <!--new product area start-->
                            </div>
                        </div>
                    </div>
                    <!--pos home section end-->
                    <?php
                    get_footer();
                    ?>