<?php
get_header_admin();
?>
<?php
$id = (int)$_GET['id'];
if (isset($_POST['btn_update'])) {
    $error = array();
    $product_name = $_POST['product_name'];
    if (empty($_POST['price']))
        $error['price'] = "không được để trống giá sản phẩm";
    else {
            $price= $_POST['price'];
    }
    if (!empty($_POST['desc']))
        $desc = $_POST['desc'];
    if (!empty($_FILES['file']['name'])){
        $upload_dir = 'assets/img/product/';
        //đường dẫn file
        $upload_file = $upload_dir . $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $upload_file);
        $thumb = $_FILES['file']['name'];
    }
    if (empty($error)) {
        $sql = "UPDATE `dhd_product` SET `product_name` = '{$product_name}', `price` = '{$price}', `desc` = '{$desc}', `thumb` = '{$thumb}' WHERE `id` = {$id}";
        if(mysqli_query($conn, $sql))
//            redirect("?mod=log&act=login");
            redirect ("?mod=admin_users&act=product");
        } else {
            $error['update'] = "chỉnh sửa không thành công";
        }
    }
$sql = "SELECT * FROM `dhd_product` where `id` = {$id}";
$result = mysqli_query($conn, $sql);
$item = mysqli_fetch_array($result);

?>

<div class="customer_login">
    <div class="row">
        <!--login area start-->
        <div class="col-lg-6 col-md-6">
            <div class="account_form">
                <h2>Chỉnh sửa sản phẩm</h2>
                <form enctype="multipart/form-data" action="" method="POST">
                     <p>
                        <label>Tên sản phẩm <span>*</span></label>
                        <input type="text" name="product_name" value="<?php echo $item['product_name'] ?>" autocomplete="off" /><br>
                        <?php echo form_error('product_name'); ?>
                        
                    </p>
                    <p>
                        <label>giá sản phẩm<span>*</span></label>
                        <input type="int" name="price"  value="<?php echo number_format($item['price'])?> " autocomplete="off" /><br>
                        <?php echo form_error('price'); ?>
                        
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
                    <?php echo form_error('update'); ?>
                    </p>
                    <div class="login_submit">
                        <button type="submit" class ="submit" name="btn_update" value="add">Tạo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
