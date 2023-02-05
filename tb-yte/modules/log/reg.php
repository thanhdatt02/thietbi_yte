<?php
get_header();
?>

<?php
if (isset($_POST['btn_reg'])) {
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
    if (empty($_POST['username']))
        $error['username'] = "Không được để trống username";
    else {
        if (!is_username($_POST['username']))
            $error['username'] = "username cho phép và sử dụng các ký tự A-Z, a-z, 0-9, _, . và độ dài từ 6-32 ký tự ";
        else {
            $username = $_POST['username'];
        }
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
        $sql = "INSERT INTO `dhd_users` (`username`, `fullname`, `password`, `email`)"
                ."VALUES ('{$username}', '{$fullname}', '{$password}', '{$email}')";
        if(mysqli_query($conn, $sql))
            redirect("?mod=log&act=login");
        } else {
            $error['acount'] = "đăng kí không thành công";
        }
    }

?>

<!--header end -->
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Đăng kí</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->

<!-- customer login start -->
<div class="customer_login">
    <div class="row">
        <!--login area start-->
        <div class="col-lg-6 col-md-6">
            <div class="account_form">
                <h2>đăng kí</h2>
                <form action="" method="POST">
                     <p>
                        <label>Họ và tên <span>*</span></label>
                        <input type="text" name="fullname" id="fullname" autocomplete="off" /><br>
                        <?php echo form_error('fullname'); ?>
                        
                    </p>
                    <p>
                        <label>Email <span>*</span></label>
                        <input type="text" name="email" id="email" autocomplete="off" /><br>
                        <?php echo form_error('email'); ?>
                        
                    </p>
                    <p>
                        <label>tên đăng nhập <span>*</span></label>
                        <input type="text" name="username" id="username" autocomplete="off" /><br>
                        <?php echo form_error('username'); ?>
                    </p>
                    <p>
                        <label>mật khẩu <span>*</span></label>
                        <input type="password" name="password" id="password"><br>
                        <?php echo form_error('password'); ?>
                    </p>
                    <div class="login_submit">
                        <button type="submit" name="btn_reg" value="regsister">đăng kí</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- customer login end -->
<?php
get_footer();
?>

