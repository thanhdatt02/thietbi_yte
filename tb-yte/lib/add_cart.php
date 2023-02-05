
<?php
function add_cart($id)
{
    global $list_product;
    $item = get_product_by_id($id);
    //thêm vào giỏ hàng
    $qty = 1;
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy']))
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    $_SESSION['cart']['buy'][$id] = array(
        'id' => $item['id'],
        'product_name' => $item['product_name'],
        'price' => $item['price'],
        'thumb' => $item['thumb'],
        'code' => $item['code'],
        'qty' => $qty,
        'total' => $item['price'] * $qty
    );
    update_cart();
}

function update_cart()
{
    if (isset($_SESSION['cart'])) {
        $num_order = 0;
        $total = 0;
        foreach ($_SESSION['cart']['buy'] as $item) {
            $num_order += $item['qty'];
            $total += $item['total'];
        }
        $_SESSION['cart']['info'] = array(
            'num_order' => $num_order,
            'total' => $total
        );
    }
}

function total_cart()
{

    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['total'];
    }
}

function delete_cart($id){
    if (isset($_SESSION['cart'])){
        if(!empty($id)){
            unset($_SESSION['cart']['buy'][$id]);
            update_cart();
        }else
            unset($_SESSION['cart']);
        
    }
}

function update_cart_qty($qty){
    foreach($qty as $id => $new_qty){
        $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
        $_SESSION['cart']['buy'][$id]['total'] = $_SESSION['cart']['buy'][$id]['price'] * $new_qty;
    }
    update_cart();
}
?>
