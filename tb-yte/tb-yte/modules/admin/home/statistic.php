<?php
get_header_admin();
?>
<?php
#xuất dữ liệu
$sql = "SELECT * from orders, order_details, dhd_product
                                where order_details.order_id= orders.id and order_details.product_id=dhd_product.id and orders.status = '3' ORDER BY orders.id DESC";
$result = mysqli_query($conn, $sql);
$list_orders = array();
while ($row = mysqli_fetch_assoc($result)){
    $list_orders[] = $row;
}
//foreach ($list_orders as $order){
//    $order['url_delete'] = "?mod=admin_users&act=delete&id={$order['user_id']}";
//}
?>
<style>
    #content {
    background: white;
    width: 800px;
    border-radius: 3px;
    padding: 30px 20px 20px 20px;
    margin: 0px auto;
    text-align: center;
    font-family: arial;
    }
    #content h1{
        font-size: 24px;
        text-align: center;
    }.table_data{
        width: 720px;
        padding: 0px 0px 100px;   
    }
    .table_data, tr, td {
        border: 1px solid #333;
        border-collapse: collapse;
    }
    
    .table_data thead tr td{
        font-weight: bold;
        border-bottom: 2px solid #333;
        
    }
    .table_data tr td{
        border-bottom: 1px solid #333;
        padding: 8px 15px;
    }
    .table_data tr td a:hover{
        color: red;
    }
    .edit{
        width: 50px;
        height: 30px;
        background-color: #258210;
    }
    .edit a{
        text-align: center;
        color: whitesmoke;
    }
</style>
<div id="content">
    <!--    <a class="add_new" href="?mod=log&act=reg">Thêm mới</a>-->
    <h1>Đơn Hàng Hoàn Thành</h1>
    <table class="table_data">
        <thead>
            <tr>
                <td>STT</td>
                <td>Họ và tên</td><!-- comment -->
                <td>Tên sản phẩm</td>
                <td>Tổng tiền</td>
                <td>số điện thoại</td><!-- comment -->
                <td>Địa chỉ</td><!-- comment -->
            </tr>
        </thead>
        <tbody>
            <?php
            $sum = 0;
            $dem = 0;
            foreach ($list_orders as $order) {
                $dem++;
                $sum += $order['price'] * $order['qty'];
                ?>
                <tr>
                    <td><?php echo $dem ?></td>
                    <td><?php echo $order['fullname'] ?></td>
                    <td><?php echo $order['product_name'] ?>(<strong> <?php echo $order['qty'] ?></strong>)</td>
                    <td><?php echo number_format($order['price'] * $order['qty']) . ' VND'; ?></td>
                    <td><?php echo $order['phone_number'] ?></td>  
                    <td><?php echo $order['address'] ?></td>
                </tr>

                <?php
            }
            ?>
        </tbody>
    </table>
    <div>
        <br><p><strong> Doanh thu:</strong> <?php echo number_format($sum).' VND' ?> </p>
    </div>
</div>
<?php
get_footer();
?>

