<?php include "header.php" ?>
<?php
include "./class/brand_class.php";
include "./class/quickfact_class.php";
include "./class/generality_class.php";
?>
<?php
$brand = new brand;
$quick_fact= new quick_fact;
$generality= new generality;
if(!isset($_GET['brand_id']) || $_GET['brand_id'] ==NULL ){
    echo "<script>window.location = 'brandlis.php'</script>";
}
else{
    $brand_id = $_GET['brand_id'];
    $get_brand = $brand -> get_brand($brand_id);
    $get_quick_fact= $quick_fact -> get_quick_fact($brand_id);
    $get_generality= $generality -> get_generality($brand_id);
    $get_winner_prize= $brand -> get_winner_prize($brand_id);
}
if ($get_brand){
    $result= $get_brand -> fetch_assoc();
 }
 if($get_quick_fact){
    $result2 = $get_quick_fact -> fetch_assoc();
 }
 if($get_generality){
    $result3 = $get_generality -> fetch_assoc();
 }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
    <!-- đổ từ database -->
    <div class="banner">
        <img src="./img/<?php echo $result['img_banner']?>" alt="" style="width:100%; height: 480px;" >
    </div>
    <div class="intro_content">
    <div class ="generality" >
    <h2>Generality</h2>
    <br>
        <p><?php echo $result3['generality'] ?></p>
    </div>
        <div class="quick_fact" >
        <h2>Quick Fact</h2>
        <h4  class="quick_fact_content" > <div class="dot"></div> Number of awards: <?php echo $result2['prize_quantity'] ?></h4> 
        <h4  class="quick_fact_content" > <div class="dot"></div> Number of winners: <?php echo $result2['winner_quantity'] ?></h4>
        <h4  class="quick_fact_content" > <div class="dot"></div> Awarded women: <?php echo $result2['women_quantity'] ?></h4> 
        <h4  class="quick_fact_content" > <div class="dot"></div> Youngest Winner: <?php echo $result2['youngest_age'] ?></h4> 
        <h4  class="quick_fact_content" > <div class="dot"></div> Oldest Winner:<?php echo $result2['oldest_age'] ?></h4> 
        </div>
    </div>
    <div class="title_main" style="color: bisque;">
    <h1 >Featured laureates</h1>
    </div>
    <div class="winner_prize">
    <?php
            if ($get_winner_prize) {
                while ($result4 = $get_winner_prize->fetch_assoc()) {
            ?> 
            <div class="all_winner_prize">
                  <div class="winner_prize_img">
                    <img src="./img/<?php echo $result4['prize_img']?>" alt="">
                 </div>  
                 <div class="winner_prize_content">
                    <div class="prize_name">
                    <h3><?php echo $result4['winner_name']?></h3>
                    </div>
                    <div class="title_prize">
                   <p> <?php echo $result4['prize_name']?> <?php echo $result4['prize_year']?> </p>
                    </div>
                    <div class="prize_detail">
                        <p>"<?php echo $result4['prize_detail']?>"</p>
                    </div>
                 </div>
            </div>
            <?php
                }
            }
            if(!$get_winner_prize){
                ?>
                None
                <?php
            }
            ?>
    
    </div>
</section>
</body>
</html>
