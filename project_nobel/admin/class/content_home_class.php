<?php
include "database.php";
?>
<?php
class content_home
{
    private $db;

    public function __construct()
    {
        $this ->db =new Database();
    }
    public function insert_content($name_content, $name_topic, $name_prize, $name_img, $detail_content)
    {
        $query = "INSERT INTO tbl_content_home (name_content,name_topic,name_prize,name_img,detail_content) VALUE ('$name_content','$name_topic','$name_prize','$name_img','$detail_content')";
        $result = $this -> db->insert($query);
        header('Location:cartegorylist.php');
        return $result;
    }
}
?>