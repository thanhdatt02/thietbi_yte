
<?php
get_header_admin();
?>
<?php
#xuất dữ liệu
$id = (int)$_GET['id'];
$sql = "SELECT * from order_details, dhd_product
                                where order_details.product_id=dhd_product.id and order_details.order_id='{$id}' ORDER BY order_details.id DESC";
$result = mysqli_query($conn, $sql);
$orders = array();
while ($row = mysqli_fetch_assoc($result)){
    $orders[] = $row;
}
  
//foreach ($list_orders as $order){
//    $order['url_delete'] = "?mod=admin_users&act=delete&id={$order['user_id']}";
//}
?>
<style>
    #content {
    background: white;
    width: 700px;
    border-radius: 3px;
    padding: 30px 20px 20px 20px;
    margin: 0px auto;
    text-align: center;
    }
    #content h1{
        font-size: 24px;
        text-align: center;
    }.table_data{
        width: 700px;
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
    .fomat td{
    border: 1px solid white;
   }
</style>
<div id="content">
<!--    <a class="add_new" href="?mod=log&act=reg">Thêm mới</a>-->
    <h1>Chi Tiết Đơn Hàng</h1>
    <table class="table_data">
        <thead>
            <tr>
                <td>STT</td>
                <td>id đơn hàng</td>
                <td>Tên sản phẩm</td><!-- -->
                <td>số lượng</td>
                <td>giá sản phẩm</td>
                <td>Tổng tiền</td>
         
            </tr>
        </thead>
        <tbody>
            <?php
                $dem = 0;
                $sum = 0;
                foreach ($orders as $order){
                    $total = $order['qty']*$order['price'];
                    $sum += $total;
                    $dem++;
            ?>
            <tr>
                <td><?php echo $dem ?></td>
                <td> <?php echo $id ?> </td>
               <td><?php echo $order['product_name'] ?></td>
               <td><?php echo $order['qty'] ?></td>
               <td><?php echo number_format($order['price']). ' vnd'?></td>
               <td><?php echo number_format($order['qty']*$order['price']). ' vnd';?> </td>
            </tr>
             <?php
                }
            ?>
            <tr>
                <td></td>
                <td>
                    <p> Tổng tiền : <?php echo number_format($sum).' VND'; ?> </p>
                </td>
            </tr>
        </tbody>
        
    </table>
    
        </div>
<?php
get_footer();
?>

