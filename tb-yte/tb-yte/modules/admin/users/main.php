<?php
get_header_admin();
?>
<?php
#xuất dữ liệu
$sql = "SELECT * FROM `dhd_users`";
$result = mysqli_query($conn, $sql);
$list_users = array();
while ($row = mysqli_fetch_assoc($result)){
    $list_users[] = $row;
}
foreach ($list_users as $user){
    $user['url_delete'] = "?mod=users&act=delete&id={$user['user_id']}";
}
?>
<style>
    #content {
    background: white;
    width: 700px;
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
        width: 650px;
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
    <h1>Danh sách thành viên</h1>
    <table class="table_data">
        <thead>
            <tr>
                <td>STT</td>
                <td>id</td>
                <td>Họ và tên</td><!-- comment -->
                <td>Tên đăng nhập</td><!-- comment -->
                <td>Email</td>
                <td>Thao tác</td>
            </tr>
        </thead>
        <tbody>
            <?php
                $dem = 0;
                foreach ($list_users as $user){
                    $dem++;
            ?>
            <tr>
                <td><?php echo $dem ?></td>
                <td><?php echo $user['user_id'] ?></td>
                <td><?php echo $user['fullname'] ?></td><!-- comment -->
                <td><?php echo $user['username'] ?></td><!-- comment -->
                <td><?php echo $user['email'] ?></td>
                <td><div class="edit">
                    <a href="<?php echo "?mod=users&act=delete&id={$user['user_id']}" ?>">Xóa</a>
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

