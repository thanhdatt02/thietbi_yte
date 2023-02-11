<?php
if(isset($_POST['btn_update_cart'])){
    update_cart_qty($_POST['qty']);
    redirect("?mod=cart&act=show");
}
?>