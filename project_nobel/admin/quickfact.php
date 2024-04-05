<?php
include "header.php";
include "slider.php";
include "./class/brand_class.php";
?>
<?php
 $brand = new brand;
 if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $brand_id=$_POST['brand_id'];
    $prize_quantity = $_POST['prize_quantity'];
    $winner_quantity = $_POST['winner_quantity'];
    $women_quantity = $_POST['women_quantity'];
    $youngest_age = $_POST['youngest_age'];
    $oldest_age = $_POST['oldest_age'];
    $insert_quick_fact = $brand ->insert_quick_fact($brand_id,$prize_quantity,$winner_quantity,$women_quantity,$youngest_age,$oldest_age);
     
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
                <h1>Thêm thông tin nhanh</h1>
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
                    <label for="">Number of awards <span style="color: red;">*</span></label>
                    <input name="prize_quantity" required type="text">
                    <label for="">Number of winners <span style="color: red;">*</span></label>
                    <input name="winner_quantity" required type="text">
                    <label for="">Awarded women <span style="color: red;">*</span></label>
                    <input name="women_quantity" required type="text">
                    <label for="">Youngest Winner <span style="color: red;">*</span></label>
                    <input name="youngest_age" required type="text">
                    <label for="">Oldest Winner <span style="color: red;">*</span></label>
                    <input name="oldest_age" required type="text">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html> 