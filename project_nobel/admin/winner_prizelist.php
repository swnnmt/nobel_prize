<?php
include "header.php";
include "slider.php";
include "./class/brand_class.php";
?>
<?php
$winner_prize = new brand;
$show_winner_prize = $winner_prize ->show_winner_prize();
?>
<div class="admin-content-right">
    <div class="admin-content-right-cartegory_list">
        <h1>Danh sách loại sản phẩm</h1>
        <table>
            <tr>
                <th>Số thứ tự</th>
                <th>Tên chủ đề</th>
                <th>Winner name</th>
                <th>Prize name</th>
                <th>Prize year</th>
                <th>Prize detail</th>
                <th>Prize img</th>
                <th>Edit</th>
            </tr>
            <?php
            $stt=0;
            if ($show_winner_prize) {
                while ($result = $show_winner_prize->fetch_assoc()) {
                    $stt++;
            ?>
                    <tr>
                        <td><?php echo $stt ?></td>
                        <td><?php echo $result['brand_name']?></td>
                        <td><?php echo $result['winner_name'] ?></td>
                        <td><?php echo $result['prize_name'] ?></td>
                        <td><?php echo $result['prize_year'] ?></td>
                        <td><?php echo $result['prize_detail'] ?></td>
                        <td><?php echo $result['prize_img'] ?></td>
                        <td><a href="winner_prizeedit.php?brand_id=<?php echo $result['brand_id'] ?>">Sửa</a>|<a href="winner_prizedelete.php?brand_id=<?php echo $result['brand_id'] ?>">Xóa</a></td>
                
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