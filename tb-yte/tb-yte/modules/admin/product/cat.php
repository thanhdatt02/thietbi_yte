<?php
get_header_admin();
?>
<?php
global $list_product_cat;
?>
<style>
    #content {
    background: white;
    width: 700px;
    border-radius: 3px;
    padding: 30px 20px 20px 20px;
    margin: 0px auto;
    text-align: center;
    font-family: arial;
    }
    #content h1{
        font-size: 24px;
        text-align: center;
    }
     .table_data{
        width: 650px;
        padding: 0px 0px 100px;
    }
     .table_data, tr, td {
        border: 1px solid #333;
        border-collapse: collapse;
    }
    
    .table_data thead tr td{
        font-weight: bold;
        border-bottom: 2px solid #333;
    }
    .table_data tr td{
        border-bottom: 1px solid #333;
        padding: 8px 15px;
    }
    .table_data tr td a:hover{
        color: red;
    }
     .edit{
        width: 50px;
        height: 30px;
        background-color: #258210;
    }
    .edit a{
        text-align: center;
        color: whitesmoke;
    }
</style>
<div id="content">
    <h1>Danh sách danh mục</h1>
    <table class="table_data">
        <thead>
            <tr>
                <td>STT</td>
                <td>id</td>
                <td>Tên danh mục</td><!-- comment -->
            </tr>
        </thead>
        <tbody>
            <?php
                $dem = 0;
                foreach ($list_product_cat as $user){
                    $dem++;
            ?>
            <tr>
                <td><?php echo $dem ?></td>
                <td><?php echo $user['cat_id'] ?></td>
                <td><?php echo $user['cat_title'] ?></td><!-- comment -->
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
        </div>
<?php
get_footer();
?>

