<?php
include "header.php";
include "slider.php";
include "./class/brand_class.php";
include "./class/generality_class.php";
$brand = new brand;

?>
<style>
    textarea {
        padding: 10px; 
        margin: 10px; 
        border: 1px solid #ccc;
        border-radius: 5px; 
        box-sizing: border-box; 
    }
</style>
<?php
 $generality = new generality;
 if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $brand_id=$_POST['brand_id'];
    $generality_content = $_POST['generality'];
    $insert_generality = $generality ->insert_generality($brand_id,$generality_content);
     
 }
?>
<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Thêm Nội Dung Tổng Quát</h1>
                <br>
                <form action="" method="post">
                    <select name="brand_id" id="">
                        <option value="#">-Select Topic</option>
                        <?php 
                        $show_brand = $brand -> show_brandfolow_cartegory_name();
                        if($show_brand)
                        {
                            while($result= $show_brand -> fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['brand_id'] ?>"><?php echo $result['brand_name'] ?></option>
                        <?php 
                           }
                        }
                        ?>
                    </select>
                    <label for="">Enter General <span style="color: red;">*</span></label>
                    <br>
                    <textarea require name="generality" id="" cols="70" rows="20" placeholder="Write"></textarea>
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html> 