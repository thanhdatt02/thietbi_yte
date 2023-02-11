<?php
if (isset($_POST['btn_save'])) {
    $error = array();
    if (empty($_POST['fullname']))
        $error['fullname'] = "Không được để trống username";
    else
        $fullname = $_POST['fullname'];
    if (empty($_POST['email']))
        $error['email'] = "không được để trống email";
    else {
            $email = $_POST['email'];
    }
    if (empty($_POST['password']))
        $error['password'] = "không được để trống password";
    else {
        if (!is_password($_POST['password']))
            $error['password'] = "password sử dụng 1 kí tự hoa, ký tự đặc biệt và dài từ 6-32 ký tự ";
        else {
            $password = $_POST['password'];
        }
    }
    if (empty($error)) {
        $sql = "UPDATE `dhd_users` SET `fullname` = '{$fullname}', `password` = '{$password}', `email` = '{$email}' where `user_id` = {$_SESSION['user_id']}";
        if(mysqli_query($conn, $sql))
            redirect("?mod=users&act=main");
        } else {
            $error['acount'] = "Thay đổi không thành công";
        }
    }

?>

