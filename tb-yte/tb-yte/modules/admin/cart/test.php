<?php


$sql_1 = "SELECT * from order_details, dhd_product
                                where order_details.product_id=dhd_product.id and order_details.order_id='10' ORDER BY order_details.id DESC";
$result = mysqli_query($conn, $sql_1);
$orders = array();
while ($row = mysqli_fetch_assoc($result)){
    $orders[] = $row;
}
show_array($orders);