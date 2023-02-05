<?php
session_start();
ob_start();
#dữ liệu
require 'db/connect.php';
require 'data/users.php';
require 'data/pages.php';
require 'data/product.php';
//thư viện hàm
require 'lib/data.php';
require 'lib/url.php';
require 'lib/users.php';
require 'lib/product.php';
require 'lib/add_cart.php';
require 'lib/validation.php';
require 'lib/template.php';
?>
<?php
$mod = !empty($_GET['mod'])?$_GET['mod']:'home';
$act = !empty($_GET['act'])?$_GET['act']:'main';
if (is_login()) {
    if ($_SESSION['user_id'] == 8) {
        $path = "modules/admin/{$mod}/{$act}.php";
    } else {
        $path = "modules/{$mod}/{$act}.php";
    }
}else {
        $path = "modules/{$mod}/{$act}.php";
    }

if(file_exists($path))
    require $path;
else
    require '404.php';
?>
       