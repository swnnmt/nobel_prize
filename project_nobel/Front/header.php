<?php
include "./class/cartegory_class.php";
?>
<?php
$cartegory = new cartegory;
$show_cartegory = $cartegory ->show_cartegory();
$show_brand = $cartegory ->show_brand();
$show_content= $cartegory ->show_content();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/detail_prize.css">
    <title>Document</title>
</head>
<script src="JS/controler_search.js">
</script>
<body>
    <head>
        <div class="logo_prize" style="display: flex; justify-content: center;">
            <a href="home.php"><img src="./img/logo.jpg" alt=""></a>
        </div>
        <div class="banner">
            <img src="" alt="">
        </div>
        <!--Đổ data từ database-->
        <hr style="color: beige;">
        <div class="navbar">
        <div class="menu">
        <?php
            if ($show_cartegory) {
                while ($category_result = $show_cartegory->fetch_assoc()) {
                    $current_category_id = $category_result['cartegory_id'];
                    // điều hướng
                    $link_conect;
                switch ($current_category_id) {
                    case 11: $link_conect="detail_prize";
                        break;
                    case 12:$link_conect="nomination";
                        break;
                    case 13:$link_conect="alfredNobel";  
                        break;
                    case 14:$link_conect="news";
                        break;
                }
            ?>
            <li><a href=""><?php echo $category_result['cartegory_name'] ?></a>
             <ul class="sub-menu">
             <?php
             // Đặt con trỏ về đầu của kết quả của $show_brand
            $show_brand->data_seek(0);
            if ($show_brand) {
                while ($brand_result  = $show_brand->fetch_assoc()) {
                    if ($brand_result['cartegory_id'] == $current_category_id) {
                        ?>
                            <li><a href="<?php echo $link_conect ?>.php?brand_id=<?php  echo $brand_result['brand_id']?>"><?php echo $brand_result['brand_name'] ?></a></li>
                        <?php
                            }
                }
            }
            ?>
             </ul>
                </li>         
            <?php
                }
            }
            ?>
        </div>
        <div class="show_search">
            <li><i id="searchIcon" style="color: burlywood;" class="fas fa-search"></i></li>
        </div>
    </div>
        <hr>
        <div class="search" style="display: none;">
            <input type="text" placeholder="Enter your search here?" style="font-size: 18px;">
            <div class="icon_header">
            <i style="color: burlywood; margin-top: 20px; font-size:20px " class="fas fa-search"></i>
            <i id="hinde_search" style="font-size:25px ; margin-left: 12px;" class="fas fa-caret-up"></i>
            </div>
        </div>
        
    </head>
