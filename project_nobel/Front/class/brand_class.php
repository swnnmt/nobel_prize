
<?php
class brand{
    private $db;

    public function __construct()
    {
        $this ->db =new Database();
    }
    public function insert_brand($cartegory_id,$brand_name,$img_banner){
        $query = "INSERT INTO tbl_brand (cartegory_id,brand_name,img_banner) VALUE ('$cartegory_id','$brand_name','$img_banner')";
        $result = $this -> db->insert($query);
        header('Location:brandlist.php');
        return $result;
    }
    public function show_brand(){
        // $query = "SELECT * FROM tbl_brand ORDER BY brand_id DESC";
        $query = "SELECT *, tbl_cartegory.cartegory_name
        FROM tbl_brand INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY tbl_brand.brand_id DESC";
        $result = $this -> db->select($query);
        return $result;
    }
    public function show_brand_folow($cartegory_id){
        // $query = "SELECT * FROM tbl_brand ORDER BY brand_id DESC";
        $query = "SELECT * FROM tbl_brand 
        WHERE cartegory_id='$cartegory_id'
        ORDER BY tbl_brand.brand_id DESC";
        $result = $this -> db->select($query);
        return $result;
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this -> db->select($query);
        return $result;
    }
    public function get_brand ($brand_id){
        $query = "SELECT * FROM tbl_brand WHERE brand_id ='$brand_id'";
        $result = $this -> db->select($query);
        return $result;
    }
    public function update_brand($brand_name,$brand_id,$img_banner){
        $query = "UPDATE tbl_brand SET brand_name= '$brand_name',img_banner= '$img_banner' WHERE brand_id = '$brand_id' ";
        $result = $this -> db->update($query);
        header('Location:brandlist.php');
        return $result;
    }
    public function delete_brand($brand_id){
        $query = "DELETE FROM tbl_brand WHERE brand_id = '$brand_id' ";
        $result = $this -> db->delete($query);
        header('Location:brandlist.php');
        return $result;
    }
// winner prize
public function get_winner_prize($brand_id){
    $query = "SELECT *FROM tbl_winner_prize Where brand_id=$brand_id";
    $result = $this -> db->select($query);
    return $result;
}














    public function get_cartegory ($cartegory_id){
        $query = "SELECT * FROM tbl_cartegory WHERE cartegory_id ='$cartegory_id'";
        $result = $this -> db->select($query);
        return $result;
    }
    public function update_catergory($cartegory_name,$cartegory_id){
        $query = "UPDATE tbl_cartegory SET cartegory_name= '$cartegory_name' WHERE Cartegory_id = '$cartegory_id' ";
        $result = $this -> db->update($query);
        header('Location:cartegorylist.php');
        return $result;
    }
    public function delete_catergory($cartegory_id){
        $query = "DELETE FROM tbl_cartegory WHERE Cartegory_id = '$cartegory_id' ";
        $result = $this -> db->delete($query);
        header('Location:cartegorylist.php');
        return $result;
    }
}

?>