<?php
get_header();
?>
<?php
#xuất dữ liệu
$id = $_SESSION['user_id'];
$sql = "SELECT * from orders, order_details, dhd_product
                                where orders.user_id='{$id}' and order_details.order_id=orders.id and order_details.product_id=dhd_product.id ORDER BY order_details.id DESC";
$result = mysqli_query($conn, $sql);
$orders = array();
while ($row = mysqli_fetch_assoc($result)) {
    $orders[] = $row;
}
$users = "SELECT * FROM `dhd_users` where `user_id` = '{$id}'";
$user = mysqli_fetch_assoc(mysqli_query($conn, $users));

//foreach ($list_orders as $order){
//    $order['url_delete'] = "?mod=admin_users&act=delete&id={$order['user_id']}";
//}
?>
                        
                         <!--breadcrumbs area start-->
                        <div class="breadcrumbs_area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="breadcrumb_content">
                                        <ul>
                                            <li><a href="index.php">Trang chủ</a></li>
                                            <li><i class="fa fa-angle-right"></i></li>
                                            <li>Thông tin chi tiết</li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--breadcrumbs area end-->

                        <!-- Start Maincontent  -->
                        <section class="main_content_area">
                                <div class="account_dashboard">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-3 col-lg-3">
                                            <!-- Nav tabs -->
                                            <div class="dashboard_tab_button">
                                                <ul role="tablist" class="nav flex-column dashboard-list">
                                       
                                                    <li> <a href="#orders" data-toggle="tab" class="nav-link">Đơn hàng</a></li>
                                                  
<!--                                                    <li><a href="#address" data-toggle="tab" class="nav-link">Địa chỉ</a></li>-->
                                                    <li><a href="#account-details" data-toggle="tab" class="nav-link">Thông tin cá nhân</a></li>
                                                    <li><a href="?mod=log&act=logout" class="nav-link">Đăng xuất</a></li>
                                                </ul>
                                            </div>    
                                        </div>
                                        <div class="col-sm-12 col-md-9 col-lg-9">
                                            <!-- Tab panes -->
                                            <div class="tab-content dashboard_content">
                                                <div class="tab-pane fade" id="orders">
                                                    <h3>Đơn hàng</h3>
                                                    <div class="coron_table table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>STT</th>
                                                                    <th>Tên sản phẩm</th>
                                                                    <th>số lượng</th>
                                                                    <th>Đơn giá</th>
                                                                    <th>Tổng tiền</th>	
                                                                    <th>Trạng thái</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $dem = 0;
                                                                    foreach($orders as $order){
                                                                        $dem += 1;
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $dem; ?></td>
                                                                    <td><?php echo $order['product_name']; ?></td>
                                                                    <td><span class="success"><?php echo $order['qty']; ?></span></td>
                                                                    <td><?php echo number_format($order['price']).' vnd'; ?> </td>
                                                                    <td><a href="" class="view"><?php echo number_format($order['price']*$order['qty']).' vnd'; ?></a></td>
                                                                    <td><?php  if($order['status'] == 1){
                                                                                        echo "Đang chuẩn bị";
                                                                                    }else{ if($order['status'] == 2){
                                                                                            echo "Đang giao";
                                                                                    }else {echo "Đã giao";}}?> </td>
                                                                </tr>
        
                                                                <?php
                                                                    }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
<!--                                                <div class="tab-pane" id="address">
                                                   <p>The following addresses will be used on the checkout page by default.</p>
                                                    <h4 class="billing-address">Billing address</h4>
                                                    <a href="#" class="view">Edit</a>
                                                    <p><strong>Bobby Jackson</strong></p>
                                                    <address>
                                                        House #15<br>
                                                        Road #1<br>
                                                        Block #C <br>
                                                        Banasree <br>
                                                        Dhaka <br>
                                                        1212
                                                    </address>
                                                    <p>Bangladesh</p>   
                                                </div>-->
                                                <div class="tab-pane fade" id="account-details">
                                                    <h3>Thông tin cá nhân </h3>
                                                    <div class="login">
                                                        <div class="login_form_container">
                                                            <div class="account_login_form">   
                                                                <form action="?mod=users&act=update" method="POST">
                                                                    <label>Họ và tên</label>
                                                                    <input type="text" name="fullname" value="<?php echo $user['fullname']; ?>">
                                                                    <label>Email</label>
                                                                    <input type="text" name="email" value="<?php echo $user['email']; ?>">
                                                                    <label>mật khẩu</label>
                                                                    <input type="password" name="password"value="<?php echo $user['password']; ?>">
                                                                    <label>ngày sinh</label>
                                                                    <input type="date" placeholder="MM/DD/YYYY" value="" name="birthday">
                                                                    <span class="custom_checkbox">
                                                                        <input type="checkbox" value="1" name="optin">
                                                                        <label>Bạn có chắc chắn muốn thay đổi thông tin?</label>
                                                                    </span>
                                                                    <br>
                                                                    <div class="save_button primary_btn default_button">
                                                                        <button type="submit" name="btn_save" value="save">Lưu</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>      	
                        </section>			
                        <!-- End Maincontent  --> 
                    </div>
                    <!--pos page inner end-->
                </div>
            </div>
            <!--pos page end-->
<?php
get_footer();
?>
          
            
            
            
      



