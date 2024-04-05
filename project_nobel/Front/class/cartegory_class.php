<?php
include "database.php";
?>
<?php
class cartegory{
    private $db;

    public function __construct()
    {
        $this ->db =new Database();
    }
    public function insert_catergory($cartegory_name){
        $query = "INSERT INTO tbl_cartegory (cartegory_name) VALUE ('$cartegory_name')";
        $result = $this -> db->insert($query);
        header('Location:cartegorylist.php');
        return $result;
    }
    public function show_cartegory(){
        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id ASC";
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
    public function show_brand(){
        $query = "SELECT *, tbl_cartegory.cartegory_name
        FROM tbl_brand INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id
        ORDER BY tbl_brand.brand_id DESC";
        $result = $this -> db->select($query);
        return $result;
    }
    public function show_content(){
        $query = "SELECT * FROM tbl_content_home ORDER BY content_home_id Desc";
        $result = $this -> db->select($query);
        return $result;
    }
}

?>