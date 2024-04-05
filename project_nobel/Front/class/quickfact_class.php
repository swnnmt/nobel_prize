<?php
class quick_fact{
    private $db;

    public function __construct()
    {
        $this ->db =new Database();
    }
    public function get_quick_fact($brand_id){
        $query = "SELECT *FROM tbl_quick_fact Where brand_id=$brand_id";
        $result = $this -> db->select($query);
        return $result;
    }
}
?>