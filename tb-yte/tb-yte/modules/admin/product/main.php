<?php
get_header_admin();
?>
<?php
global $list_product;
$list_item = $list_product;
?>
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Danh mục sản phẩm</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!--pos home section-->
<div class=" pos_home_section">
    <div class="row pos_home">

        <div class="col-lg-9 col-md-12">
            <!--banner slider start-->
            <div class="banner_slider mb-35">
                <img src="assets\img\banner\suckhoegiadinh.jpg" alt="">
            </div> 
            <!--banner slider start-->
            <!--shop tab product-->
            <div class="shop_tab_product">   
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="large" role="tabpanel">
                        <div class="row">
                            <?php
                            if (!empty($list_item)) {
                                ?>
                                <?php
                                foreach ($list_item as $item) {
                                    ?>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single_product">
                                            <div class="product_thumb">
                                                <a href="<?php echo "?mod=product&act=detail&id={$item['id']}"?>"><img src="<?php echo "assets/img/product/{$item['thumb']}" ?>" alt=""></a>
                                                <div class="img_icone">
                                                    <img src="assets\img\cart\span-new.png" alt="">
                                                </div>
                                                <div class="product_action">
                                                    <a href="<?php echo "?mod=product&act=update&id={$item['id']}" ?>"> <i class="fa fa-shopping-cart"></i> Chỉnh sửa sản phẩm</a>
                                                </div>
                                            </div>
                                            <div class="product_content">
                                                <span class="product_price_goc"><?php echo number_format($item['price']).' VND' ?></span>
                                                <span class="product_price_dis">3,900,000 VND</span>
                                                <h3 class="product_name"><?php echo $item['product_name'] ?></h3>
                                                <!--<h3 class="product_title"><a href="single-product.html">Curabitur sodales</a></h3>-->
                                            </div>
                                            <div class="product_info">
                                                <ul>
                                                    
                                                    <li><a href="<?php echo "?mod=product&act=detail&id={$item['id']}"?>">Thông tin chi tiết</a></li>
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
                </div>     
            </div>
        </div>    
    </div>
</div>
</div> 

<!-- modal area end --> 


<?php
get_footer();
?>
