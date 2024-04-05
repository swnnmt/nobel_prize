<?php
include "header.php";
include "slider.php";
include "./class/brand_class.php";
include "./class/generality_class.php";
?>
<?php
$generality = new generality;
$show_generality = $generality ->show_generality();
?>
<div class="admin-content-right">
    <div class="admin-content-right-cartegory_list">
        <h1>Danh sách nội dung tổng quát </h1>
        <table>
            <tr>
                <th>Số thứ tự</th>
                <th>Tên chủ đề</th>
                <th>Content</th>
                <th>Edit</th>
            </tr>
            <?php
            $stt=0;
            if ($show_generality) {
                while ($result = $show_generality->fetch_assoc()) {
                    $stt++;
            ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $result['brand_name']?></td>
                        <td><?php echo $result['generality'] ?></td>
                        <td><a href="brandedit.php?brand_id=<?php echo $result['brand_id'] ?>">Sửa</a>|<a href="branddelete.php?brand_id=<?php echo $result['brand_id'] ?>">Xóa</a></td>
                
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</div>
</section>
</body>

</html>