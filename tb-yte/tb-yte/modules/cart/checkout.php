<?php
get_header();
?>
<?php
$list_buy = get_list_buy();
?>
<?php
if (is_login()) {
    if (isset($_POST['btn_checkout'])) {
        $error = array();
        if (empty($_POST['fullname']))
            $error['fullname'] = "Không được để trống username";
        else
            $fullname = $_POST['fullname'];
        if (empty($_POST['email']))
            $error['email'] = "không được để trống email";
        else {
            $email = $_POST['email'];
        }
        if (empty($_POST['address']))
            $error['address'] = "Không được để trống địa chỉ";
        else {
            $address = $_POST['address'];
        }
        if (empty($_POST['phone']))
            $error['phone'] = "không được để trống số điện thoại";
        else {
            $phone = $_POST['phone'];
        }

        $note = $_POST['note'];
        if (empty($error)) {

            $sql = "INSERT INTO `orders` (`user_id`, `fullname`, `email`, `phone_number`, `address`, `note`, `status`)"
                    . "VALUES ('{$_SESSION['user_id']}', '{$fullname}', '{$email}', '{$phone}', '{$address}', '{$note}', '1')";

            if (mysqli_query($conn, $sql)) {
                $order_id = mysqli_insert_id($conn);
                foreach ($list_buy as $item) {
                    $pro_id = $item['id'];
                    $qty = $item['qty'];
                    $price = $item['price'];
                    $order_details = "INSERT INTO `order_details` (`order_id`, `product_id`, `price`, `qty`)"
                            . "VALUES ('{$order_id}', '{$pro_id}', '{$price}', '{$qty}')";
                    $true = mysqli_query($conn, $order_details);
                }

                $_SESSION['cart']['buy'] = array();
                unset($_SESSION['info']);
                $_SESSION['cart']['info'] = array();
                 echo "<script>window.location.href='?mod=home&act=main';alert('Đặt hàng thành công!');</script>";
//                redirect("?mod=home&act=main");
            }
        } else {
            $error['acount'] = "đặt hàng không thành công";
        }
    }
} else {
    redirect("?mod=log&act=login");
}
?>
﻿<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="?mod=home&act=main">Trang chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Thanh Toán</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->


<!--Checkout page section-->
<div class="Checkout_section">
    <div class="checkout_form">
        <form action="" method="POST">
            <div class="row">

                <div class="col-lg-6 col-md-6">
                    <h3>Thông tin khách hàng</h3>
                    <div class="row">
                        <div class="col-12 mb-30">
                            <label>Họ và tên</label>
                            <input type="text" name="fullname">
                        </div>
                        <div class="col-12 mb-30">
                            <label>Địa chỉ nhận hàng <span>*</span></label>
                            <input type="text" name="address">
                        </div>

                        <div class="col-lg-6 mb-30">
                            <label>Số điện thoại<span>*</span></label>
                            <input type="text" name="phone">

                        </div>
                        <div class="col-lg-6 mb-30">
                            <label> Email <span>*</span></label>
                            <input type="text" name="email">

                        </div>
                        <div class="col-12">
                            <div class="order-notes">
                                <label for="order_note">Ghi chú</label>
                                <textarea id="order_note" name="note"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">

                    <h3>Thông tin đơn hàng</h3>
                    <div class="order_table table-responsive mb-30">
                        <table>
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Tổng</th>
                                </tr>
                            </thead>
                            <?php
                            if (isset($list_buy)) {
                                ?>
                                <tbody>
                                    <?php
                                    foreach ($list_buy as $item) {
                                        ?>
                                        <tr>
                                            <td><?php echo $item['product_name'] ?><strong> ×<?php echo $item['qty'] ?></strong></td>
                                            <td><?php echo number_format($item['total']) ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>                                                                                     
                                </tbody>
                                <?php
                            }
                            ?>
                            <tfoot>
                                <tr>
                                    <th>Tổng đơn sản phẩm</th>
                                    <td><?php echo number_format(total_cart()) ?></td>
                                </tr>
                                <tr>
                                    <th>Phí giao hàng</th>
                                    <td><strong></strong></td>
                                </tr>
                                <tr class="order_total">
                                    <th>Tổng đơn hàng</th>
                                    <td><strong><?php echo number_format(total_cart()) ?></strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="payment_method">
                        <div class="order_button">
                            <button type="submit" name="btn_checkout">Thanh toán</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</div>
<!--Checkout page section end-->

<?php
get_footer();
?>