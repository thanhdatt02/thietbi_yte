<?php
get_header_admin();
?>
<?php
#xuất dữ liệu
$sql = "SELECT * FROM `orders`";
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
    <h1>Danh sách Đơn Hàng</h1>
    <table class="table_data">
        <thead>
            <tr>
                <td>STT</td>
                <td>id</td>
                <td>Họ và tên</td><!-- comment -->
                <td>số điện thoại</td><!-- comment -->
                <td>Địa chỉ</td>
                <td>Trạng thái</td><!-- -->
                <td>Thao tác</td>
   
            </tr>
        </thead>
        <tbody>
            <?php
                $dem = 0;
                foreach ($list_orders as $order){
                    $dem++;
            ?>
            <tr>
                <td><?php echo $dem ?></td>
                <td><?php echo $order['id'] ?></td>
               <td><?php echo $order['fullname'] ?></td>
               <td><?php echo $order['phone_number'] ?></td>
               <td><?php echo $order['address']?></td>
               <td><?php if($order['status'] == 1)
                            echo "Đang chuẩn bị";
                            else if($order['status'] == 2)
                                    echo "Đang giao";
                                 else if($order['status'] == 3)
                                     echo "Đã nhận hàng";
                                     else
                                         echo "Đã hủy";
                                 ?> </td>
               <td><div class="edit">
                   <a href="<?php echo"?mod=cart&act=update&id={$order['id']}";?>">Sửa</a>
                   </div></td>
                   <td><div class="edit">
                       <a href="<?php echo"?mod=cart&act=detail&id={$order['id']}";?>">Xem</a>
                       </div></td>
            </tr>
             
            <?php
                }
            ?>
        </tbody>
    </table>
        </div>
<?php
get_footer();
?>

