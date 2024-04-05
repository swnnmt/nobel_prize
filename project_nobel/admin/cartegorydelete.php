<?php
include "./class/cartegory_class.php";
?>
<?php
$cartegory = new cartegory;
if(!isset($_GET['cartegory_id']) || $_GET['cartegory_id'] ==NULL ){
    echo "<script>window.location = 'cartegorylis.php'</script>";
}
else{
    $cartegory_id = $_GET['cartegory_id'];
    $delete_cartegory = $cartegory -> delete_catergory($cartegory_id);
}
