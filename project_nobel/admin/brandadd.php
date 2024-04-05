<?php
include "header.php";
include "slider.php";
include "./class/brand_class.php";
?>
<?php
 $brand = new brand;
 if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $cartegory_id=$_POST['cartegory_id'];
    $brand_name = $_POST['brand_name'];
    $img_banner = $_POST['img_banner'];
    $insert_brand = $brand ->insert_brand($cartegory_id,$brand_name,$img_banner);
     
 }
?>
<style>
    select{
        height: 30px;
        width: 200px;
    } 
</style>
<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Thêm chủ đề</h1>
                <br>
                <form action="" method="post">
                    <select name="cartegory_id" id="">
                        <option value="#">-Chọn danh mục</option>
                        <?php 
                        $show_cartegory = $brand -> show_cartegory();
                        if($show_cartegory)
                        {
                            while($result= $show_cartegory -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                        <?php 
                           }
                        }
                        ?>
                    </select>
                <br>
               <h4> Nhập tên chủ đề</h4>
                <br>
                    <input required name="brand_name" type="text" placeholder="Nhập tên chủ đề ">
                    <br>
                    <h4> Chọn ảnh banner cho chủ đề:</h4>
                    <br>
                    <input name="img_banner" type ="file">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html> 