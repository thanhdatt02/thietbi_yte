
<?php

//danh mục
/*
 * id => id
 * tên danh mục => cat_title
 */
$sql = "SELECT * FROM `dhd_category`";
$conn = mysqli_connect('localhost', 'root', '', 'dhd');
$result = mysqli_query($conn, $sql);

$list_product_cat = array();
while ($row = mysqli_fetch_assoc($result)){
    $list_product_cat[] = $row;
}
?>
<!--// danh sách sản phẩm
/*
 * id => id
 * id danh mục => cat_id
 * tên sản phẩm => product_name
 * giá => price
 * mã sản phẩm => code
 * mô tả => desc
 * ảnh sản phẩm => thumb => url
 * chi tiết sản phẩm => product_show
 */-->
 
<?php
#lấy dữ liệu user
//$sql = "SELECT * FROM `dhd_product`";
//$conn = mysqli_connect('localhost', 'root', '', 'dhd');
//$result = mysqli_query($conn, $sql);
//
//$list_product = array();
//while ($row = mysqli_fetch_assoc($result)){
//    $list_product[] = $row;
//}
$sql = "SELECT * FROM `dhd_product`";
$conn = mysqli_connect('localhost', 'root', '', 'dhd');
$result = mysqli_query($conn, $sql);

$list_product = array();
while ($row = mysqli_fetch_assoc($result)){
    $list_product[] = $row;
}
//show_array($list_product);
?>