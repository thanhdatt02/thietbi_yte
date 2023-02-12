<?php
get_header_admin();
?>
<?php
if (isset($_POST['btn_pro'])) {
    $error = array();
    if (empty($_POST['cat_title']))
        $error['cat_title'] = "Không được để trống tên danh mục";
    else
        $cat_title = $_POST['cat_title'];
    if (empty($error)) {
        $sql = "INSERT INTO `dhd_category` (`cat_title`)"
                ."VALUES ('{$cat_title}')";
        if(mysqli_query($conn, $sql))
//            redirect("?mod=log&act=login");
               echo "<script>window.location.href='?mod=product&act=main';alert('Thêm danh mục thành công!');</script>";
        } else {
            $error['acount'] = "Thêm không thành công";
        }
    }

?>
<style>
    .submit{
     width: 100%;
     text-align: center;
    }
</style>
<div class="customer_login">
    <div class="row">
        <!--login area start-->
        <div class="col-lg-6 col-md-6">
            <div class="account_form">
                <h2>Thêm danh mục</h2>
                <form enctype="multipart/form-data" action="" method="POST">
                     <p>
                        <label>Tên danh mục <span>*</span></label>
                        <input type="text" name="cat_title"autocomplete="off" /><br>
                        <?php echo form_error('cat_title'); ?>
                        
                    </p>
                    <div class="login_submit">
                        <button type="submit" class="submit" name="btn_pro" value="add">Tạo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>