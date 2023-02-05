<?php
get_header_admin();
?>
<?php
if (isset($_POST['btn_pro'])) {
    $error = array();
    if (empty($_POST['product_name']))
        $error['fullname'] = "Không được để trống tên sản phẩm";
    else
        $product_name = $_POST['product_name'];
    if (empty($_POST['cat_id']))
        $error['cat_id'] = "Không được để trống mã danh mục";
    else
        $cat_id= $_POST['cat_id'];
    if (empty($_POST['price']))
        $error['price'] = "không được để trống giá sản phẩm";
    else {
            $price= $_POST['price'];
    }
    if (empty($_POST['code']))
        $error['code'] = "không được để trống mã sản phẩm";
    else {
            $code = $_POST['code'];
    }
    if (empty($_POST['desc']))
        $error['desc'] = "không được để trống giá mô tả";
    else {
            $desc = $_POST['desc'];
    }
    if (empty($_FILES['file']['name']))
        $error['thumb'] = "không được để trống ảnh sản phẩm";
    else {
        $upload_dir = 'assets/img/product/';
        //đường dẫn file
        $upload_file = $upload_dir . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $upload_file);
        $thumb = $_FILES['file']['name'];
    }
    if (empty($_POST['product_show']))
        $error['product_show'] = "không được để trống chi tiết sản phẩm";
    else {
            $product_show = $_POST['product_show'];
    }
    if (empty($error)) {
        $sql = "INSERT INTO `dhd_product` (`cat_id`, `product_name`, `price`, `code`, `desc`, `thumb`, `product_show`)"
                ."VALUES ('{$cat_id}', '{$product_name}', '{$price}', '{$code}', '{$desc}', '{$thumb}', '{$product_show}')";
        if(mysqli_query($conn, $sql))
//            redirect("?mod=log&act=login");
                echo "thành công";
        } else {
            $error['acount'] = "đăng kí không thành công";
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
                <h2>Thêm sản phẩm</h2>
                <form enctype="multipart/form-data" action="" method="POST">
                     <p>
                        <label>Tên sản phẩm <span>*</span></label>
                        <input type="text" name="product_name"autocomplete="off" /><br>
                        <?php echo form_error('product_name'); ?>
                        
                    </p>
                    <p>
                        <label>mã danh mục<span>*</span></label>
                        <input type="int" name="cat_id" autocomplete="off" /><br>
                        <?php echo form_error('cat_id'); ?>
                        
                    </p>
                    <p>
                        <label>giá sản phẩm<span>*</span></label>
                        <input type="int" name="price" autocomplete="off" /><br>
                        <?php echo form_error('price'); ?>
                        
                    </p>
                    <p>
                        <label>mã sản phẩm <span>*</span></label>
                        <input type="text" name="code" autocomplete="off" /><br>
                        <?php echo form_error('code'); ?>
                    </p>
                    <p>
                        <label>mô tả<span>*</span></label>
                        <input type="text" name="desc"><br>
                        <?php echo form_error('desc'); ?>
                    </p>
                    <p>
                        <label>ảnh sản phẩm<span>*</span></label>
                        <input type="file" name="file"/> <br>
                     
                    </p>
                    <p>
                        <label>chi tiết sản phẩm<span>*</span></label>
                        <input type="text" name="product_show"><br>
                        <?php echo form_error('product_show'); ?>
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