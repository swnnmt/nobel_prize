<?php 
include "header.php";
?>
     <!-- Slider -->
     <section id="slider">
        <!-- <div class="logo">
            <img src="./img/z5259488677843_7b5373257d2f223bf2ad0a815de13a78.jpg" alt="">
        </div> -->
        <div class="aspect-ratio-169">
            <img src="./img/54146-hero-tablet-2x.jpg" alt="">
            <img src="./img/nobel.jpg" alt="">
            <img src="./img/10_Oct_2022_104614_GMTMarie_Curie_b1.jpg" alt="">
            <img src="./img/76d6110311t2901l0.jpg" alt="">
            <img src="./img/phyics.jpeg" alt="">
            
        </div>
        <div class="dot-container" style="top:130%;">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
</section>

<!-- content - đổ từ database -->
<?php
            
            if ($show_content) {
                while ($result = $show_content->fetch_assoc()) {
            ?>
        <div style="margin-top: 20px;" class="name-content">
         <p  style="font-size: 40px; margin-left: 200px;"><?php echo $result['name_content'] ?></p>
        </div>              
        <div class="content">
<div class="main-content">
    <div class="name-topic">
        <p style="color: darkkhaki;"><?php echo $result['name_topic'] ?></p>
    </div>
    <div class="name-prize">
        <p style="font-size: 60px;"><?php echo $result['name_prize'] ?></p>
    </div>
    <br>
    <div class="detail-content">
        <p><?php echo $result['detail_content'] ?></p>
    </div>
</div>
<div class="img">
    <img style="width: 550px; height: 350px; margin-left: 20px;" src="./img/<?php echo $result['name_img']?>" alt="">
</div>
</div>   
            <?php
                }
            }
?>
<!--  -->

</body>
<!-- show search -->
<script src="JS/controler_search.js">
</script>
<script src="JS/controler_home.js"></script>
</html>