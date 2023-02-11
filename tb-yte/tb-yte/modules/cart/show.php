<?php
get_header();
?>
<?php
$list_buy = get_list_buy();
?>
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.php">trang chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>giỏ hàng</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->
<!--shopping cart area start -->
<div class="shopping_cart_area">
    <form action="?mod=cart&act=update" method="POST">
        <div class="row">
            <div class="col-12">
                <?php
                if (!empty($list_buy)) {
                ?>
                    <div class="table_desc">

                        <div class="cart_page table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product_remove">Xóa</th>
                                        <th class="product_thumb">Ảnh</th>
                                        <th class="product_name">Tên sản phẩm</th>
                                        <th class="product-price">Giá</th>
                                        <th class="product_quantity">Số lượng</th>
                                        <th class="product_total">Tổng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($list_buy as $item) {
                                    ?>
                                        <tr>
                                            <td class="product_remove"><a href="<?php echo "?mod=cart&act=delete&id={$item['id']}" ?>"><i class="fa fa-trash-o"></i></a></td>
                                            <td class="product_thumb"> <a href="<?php echo "?mod=product&act=detail&id={$item['id']}" ?>"><img src="<?php echo "assets/img/product/{$item['thumb']}" ?>" alt=""></a></td>
                                            <td class="product_name"><a href=""><?php echo $item['product_name'] ?></a></td>
                                            <td class="product-price"><?php echo number_format($item['price']) . ' VND' ?></td>
                                            <td class="product_quantity"><input min="0" max="100" value="<?php echo $item['qty'] ?>" type="number" name="qty[<?php echo $item['id'] ?>]"></td>
                                            <td class="product_total"><?php echo number_format($item['total']) ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart_submit">
                                <input type="submit" name="btn_update_cart" value="cập nhật giỏ hàng" />
                        
                        </div>

                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <!--coupon code area start-->
        <div class="coupon_area">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code">
                        <h3>Khuyến mãi</h3>
                        <div class="coupon_inner">
                            <p>Nhập mã giảm giá nếu có</p>
                            <input placeholder="Coupon code" type="text">
                            <button type="submit">áp dụng</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code">
                        <h3>Giỏ hàng</h3>
                        <div class="coupon_inner">
                            <div class="cart_subtotal">
                                <p>Tổng giá sản phẩm</p>
                                <p class="cart_amount"><?php echo number_format(total_cart()) ?></p>
                            </div>
                            <div class="cart_subtotal ">
                                <p>Phí giao hàng</p>
                                <p class="cart_amount"><span>Flat Rate:</span></p>
                            </div>
                            <div class="cart_subtotal">
                                <p>Tổng</p>
                                <p class="cart_amount"><?php echo number_format(total_cart()) ?></p>
                            </div>
                            <div class="checkout_btn">
                                <a href="?mod=cart&act=checkout">Thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--coupon code area end-->
    </form>
</div>
<!--shopping cart area end -->

<?php
get_footer();
?>