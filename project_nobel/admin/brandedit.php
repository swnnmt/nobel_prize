<?php
include "header.php";
include "slider.php";
include "./class/brand_class.php";
?>
<?php
$brand = new brand;
if(!isset($_GET['brand_id']) || $_GET['brand_id'] ==NULL ){
    echo "<script>window.location = 'brandlis.php'</script>";
}
else{
    $brand_id = $_GET['brand_id'];
}
$get_brand = $brand -> get_brand($brand_id);
 if ($get_brand){
    $result= $get_brand -> fetch_assoc();
 }
?>
<?php
 if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $brand_name=$_POST['brand_name'];
    $img_banner=$_POST['img_banner'];
    $update_brand = $brand ->update_brand($brand_name,$brand_id,$img_banner);     
 }
?>

<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Chỉnh sửa danh mục</h1>
                <form action="" method="post">
                    <h4>Nhập tên chủ đề</h4>
                    <br>
                    <input name="brand_name" type="text" placeholder="Nhập tên chủ đề" value=" <?php echo $result['brand_name'] ?> ">
                    <br>
                    <h4>Chọn ảnh banner cho chủ đề</h4>
                    <br>
                    <input name="img_banner" type="file">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html> 