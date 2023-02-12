<?php
get_header_admin();
?>
<?php
#xuất dữ liệu
$id = (int) $_GET['id'];
$sql = "SELECT * FROM `orders` where `id` = '{$id}'";
$result = mysqli_query($conn, $sql);
$list_orders = array();
while ($row = mysqli_fetch_assoc($result)) {
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
    }
    .table_data{
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
</style>
<div id="content">
    <!--    <a class="add_new" href="?mod=log&act=reg">Thêm mới</a>-->
    <h1>Danh sách Đơn Hàng</h1>
    <form action="" method="POST">
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
                foreach ($list_orders as $order) {
                    $dem++;
                    ?>
                    <tr>
                        <td><?php echo $dem ?></td>
                        <td><?php echo $order['id'] ?></td>
                        <td><?php echo $order['fullname'] ?></td>
                        <td><?php echo $order['phone_number'] ?></td>
                        <td><?php echo $order['address'] ?></td>
                        <td><select name="status" id="status" onchange="status(154)">
                                <option value="Đang chuẩn bị">Đang chuẩn bị</option>
                                <option value="Đang giao">Đang giao</option>
                                <option value="Đã nhận hàng">Đã nhận hàng</option>
                                <option value="Đã hủy">Đã hủy</option>
                            </select>
                        </td>
                        <td>
                            <button class="btn btn-success" name="btn-save">Lưu</button>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </form>
</div>
<?php
if (isset($_POST['btn-save'])) {
    if($_POST['status'] == "Đang chuẩn bị")
        $status = 1;
        else if ($_POST['status'] == "Đang giao")
            $status = 2;
            else if($_POST['status'] == "Đã nhận hàng")
                $status = 3;
                else $status = 4;

    $sql = "UPDATE `orders` SET `status` = '$status' WHERE `id` = $id";
    if(mysqli_query($conn, $sql))
            redirect ("?mod=cart&act=main");
}
?>

<?php
get_footer();
?>

