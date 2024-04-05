<?php
class generality{
    private $db;

    public function __construct()
    {
        $this ->db =new Database();
    }
    public function insert_generality($brand_id,$generality_content){
        $query = "INSERT INTO tbl_generality (brand_id,generality) VALUE ('$brand_id','$generality_content')";
        $result = $this -> db->insert($query);
        header('Location:generalitylist.php');
        return $result;
    }
    public function show_generality(){
        $query = "SELECT *, tbl_brand.brand_name
        FROM tbl_generality INNER JOIN tbl_brand ON tbl_brand.brand_id = tbl_generality.brand_id
        ORDER BY tbl_brand.brand_id DESC";
        $result = $this -> db->select($query);
        return $result;
    }
}