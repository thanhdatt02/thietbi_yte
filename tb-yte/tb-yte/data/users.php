
<?php
#lấy dữ liệu user
$sql = "SELECT * FROM `dhd_users`";
$conn = mysqli_connect('localhost', 'root', '', 'dhd');
$result = mysqli_query($conn, $sql);

$list_users = array();
while ($row = mysqli_fetch_assoc($result)){
    $list_users[] = $row;
}
//mảng dữ diệu user
/*thông tin: id, họ và tên, tên đăng nhập, mật khẩu
 */
//foreach ($list_users as $item){
//    echo "<pre>";
//    print_r($item);
//    echo "</pre>";
//}
?>