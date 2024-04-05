<?php
class generality{
    private $db;

    public function __construct()
    {
        $this ->db =new Database();
    }
    public function get_generality($brand_id){
        $query = "SELECT *FROM tbl_generality Where brand_id=$brand_id";
        $result = $this -> db->select($query);
        return $result;
    }
}
?>