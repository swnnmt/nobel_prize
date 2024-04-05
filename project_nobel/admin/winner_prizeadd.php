<?php
include "header.php";
include "slider.php";
include "./class/brand_class.php";
?>
<?php
 $brand = new brand;
 if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $brand_id=$_POST['brand_id'];
    $winner_name = $_POST['winner_name'];
    $prize_name = $_POST['prize_name'];
    $prize_year = $_POST['prize_year'];
    $prize_detail = $_POST['prize_detail'];
    $prize_img = $_POST['prize_img'];
    $insert_winner_prize = $brand -> insert_winner_prize($brand_id,$winner_name,$prize_name,$prize_year,$prize_detail,$prize_img);
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
                <h1>Thêm người đoạt giải</h1>
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
                    <label for="">Winner name<span style="color: red;">*</span></label>
                    <br>
                    <input name="winner_name" required type="text">
                    <br>
                    <label for="">Prize name<span style="color: red;">*</span></label>
                    <br>
                    <input name="prize_name" required type="text">
                    <br>
                    <label for="">Prize year <span style="color: red;">*</span></label>
                    <br>
                    <input name="prize_year" required type="text">
                    <br>
                    <label for="">Prize detail <span style="color: red;">*</span></label> <br>
                    <br>
                    <textarea require name="prize_detail" id="" cols="30" rows="10" placeholder="Write"></textarea>
                    <br>
                    <label for="">Prize img <span style="color: red;">*</span></label>
                    <br>
                    <input name="prize_img" required type="file">
                    <br>
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html> 
