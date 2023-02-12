<?php
get_header();
?>
﻿<?php

$cat_id = (int)$_GET['cat_id'];
// lấy thông tin danh mục
$info_cat = get_info_cat($cat_id - 1);
// show_array($info_cat);
#lấy danh sách bài viết
$list_item = get_list_product_by_cat($cat_id);
// show_array($list_item);
?>
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="?mod=home&act=main">TRANG CHỦ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Máy đo đường huyết</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--pos home section-->
<div class=" pos_home_section shop_section shop_fullwidth">
    <div class="row">
        <div class="col-12">
            <!--banner slider start-->
            <div class="banner_slider fullwidht  mb-35">
                <img src="assets\img/banner/Suckhoegiadinh.jpg" alt="">
            </div>
            <!--banner slider start-->
        </div>
    </div>

    <!--shop tab product-->
    <div class="shop_tab_product shop_fullwidth">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="large" role="tabpanel">
            <div class="section-head">
                        <h4 class="section_title"><?php echo $info_cat['cat_title']; ?> </h4>
                    </div>
                <div class="row">
                    <?php 
                    if(!empty($list_item)){
                        ?>
                    <?php 
                        foreach($list_item as $item){
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single_product">
                        <div class="product_thumb">
                                <a href="<?php echo $item['url'] ?>"><img src="<?php echo "assets/img/product/{$item['thumb']}" ?>" alt=""></a>
                                <div class="img_icone">
                                    <img src="assets\img\cart\span-new.png" alt="">
                                </div>
                                <div class="product_action">
                                    <a href="<?php echo "?mod=cart&act=add&id={$item['id']}" ?>"> Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                            <div class="product_content">
                                <span class="product_price_goc"><?php echo number_format($item['price']).' VND' ?></span>
                                <span class="product_price_dis">3.900.000 VND</span>
                                <h3 class="product_name"><?php echo $item['product_name'] ?></h3>
                                <!--<h3 class="product_title"><a href="single-product.html">Curabitur sodales</a></h3>-->
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
                    ?>
                            
                    <?php
                        }
                    ?>
                    

    <!--pagination style start-->
    <div class="pagination_style shop_page">
        <div class="item_page">
            <form action="#">
                <label for="page_select">xem</label>
                <select id="page_select">
                    <option value="1">9</option>
                    <option value="2">10</option>
                    <option value="3">11</option>
                </select>
                <span>Sản phẩm theo trang</span>
            </form>
        </div>
        <div class="page_number">
            <span>Trang: </span>
            <ul>
                <li>«</li>
                <li class="current_number">1</li>
                <li><a href="#">2</a></li>
                <li>»</li>
            </ul>
        </div>
    </div>
    <!--pagination style end-->
</div>
<!--pos home section end-->
<?php
get_footer();
?>