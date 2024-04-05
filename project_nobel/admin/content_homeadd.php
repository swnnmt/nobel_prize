<?php
include "header.php";
include "slider.php";
include "./class/content_home_class.php";
?>
<?php
 $content_home = new content_home;
 if($_SERVER['REQUEST_METHOD']=== 'POST'){
    $name_content=$_POST['name_content'];
    $name_topic = $_POST['name_topic'];
    $name_prize= $_POST['name_prize'];
    $name_img = $_POST['name_img'];
    $detail_content = $_POST['detail_content'];
    $insert_content_home = $content_home ->insert_content($name_content, $name_topic, $name_prize,$name_img, $detail_content);
     
 }
?>
<div class="admin-content-right">
            <div class="admin-content-right-cartegory_add">
                <h1>Thêm danh mục</h1>
                <form action="" method="post">
                <label for="">Nhập tên nội dung <span style="color: red;">*</span></label>
                <br>
                    <input name="name_content" type="text" placeholder="Nhập tên nội dung">
                <br>
                <label for="">Nhập chủ đề <span style="color: red;">*</span></label>
                <br>
                    <input name="name_topic" type="text" placeholder="Nhập chủ đề">
                <br>
                <label for="">Nhập tên giải nobel <span style="color: red;">*</span></label>
                <br>
                    <input name="name_prize" type="text" placeholder="Nhập tên giải nobel ">
                <br>
                <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
                <br>
                    <input name="name_img" type="file">
                <label for="">Nội dung chính <span style="color: red;">*</span></label>
                <br>
                <textarea require name="detail_content" id="" cols="30" rows="10" placeholder="Nhập mô tả" name=""></textarea>
                <br>
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html> 