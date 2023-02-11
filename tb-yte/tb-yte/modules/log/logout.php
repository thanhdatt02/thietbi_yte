
<?php

unset($_SESSION['is_login']);
unset($_SESSION['user_login']);
unset($_SESSION['user_id']);
$_SESSION['cart']['buy'] = array();
$_SESSION['cart']['info'] = array(
            'num_order' => 0,
            'total' => 0
        );
redirect('index.php');
?>