<?php
get_header_admin();
?>
<!--header end -->
<?php
global $list_product_cat;
$list_cat = $list_product_cat;
?>
<!--pos home section-->
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
                                <!--<a href="#">shop now</a>-->
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
                                                    <a href="<?php echo "?mod=product&act=update&id={$item['id']}" ?>"> <i class="fa fa-shopping-cart"></i> Thay đổi thông tin</a>
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
                    <?php
                }
                ?>               
            </div>
            <!--new product area start-->
        </div>
    </div>
</div>
<?php
get_footer();
?>