
<?php

unset($_SESSION['is_login']);
unset($_SESSION['user_login']);
unset($_SESSION['user_id']);
$_SESSION['cart']['buy'] = array();
redirect('index.php');
?>