<?php
include "header.php";
include "slider.php";
include "./class/brand_class.php";
?>
<?php
$quick_fact = new brand;
$show_quick_fact = $quick_fact ->show_quick_fact();
?>
<div class="admin-content-right">
    <div class="admin-content-right-cartegory_list">
        <h1>Danh sách loại sản phẩm</h1>
        <table>
            <tr>
                <th>Số thứ tự</th>
                <th>Tên chủ đề</th>
                <th>Number of awards</th>
                <th>Number of winners</th>
                <th>Awarded women</th>
                <th>Youngest Winner</th>
                <th>Oldest Winner</th>
                <th>Edit</th>
            </tr>
            <?php
            $stt=0;
            if ($show_quick_fact) {
                while ($result = $show_quick_fact->fetch_assoc()) {
                    $stt++;
            ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $result['brand_name']?></td>
                        <td><?php echo $result['prize_quantity'] ?></td>
                        <td><?php echo $result['winner_quantity'] ?></td>
                        <td><?php echo $result['women_quantity'] ?></td>
                        <td><?php echo $result['youngest_age'] ?></td>
                        <td><?php echo $result['oldest_age'] ?></td>
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