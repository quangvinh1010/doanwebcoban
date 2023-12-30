<?php
$sql_suasanpham = "SELECT * FROM products WHERE id_sanpham ='$_GET[id]' LIMIT 1";
$query_sql_suasanpham = mysqli_query($con, $sql_suasanpham);
?>
<h1>Sửa Sản Phẩm</h1>
<table style="width:auto; border: 1px solid #000;">
    <?php
    while ($dong = mysqli_fetch_array($query_sql_suasanpham)) {
    ?>
        <form method="POST" action="modules/product/xuly.php?id=<?php echo $dong['id_sanpham'] ?>" enctype="multipart/form-data">
            <tr>
                <td>Tên Sản Phẩm</td>
                <td><input type="text" value="<?php echo $dong['tensanpham'] ?>" name="tensanpham"></td>
            </tr>
            <tr>
                <td>Hình Ảnh</td>
                <td>
                    <input type="file" name="hinhanh">
                    <img src="modules/product/upload/<?php echo $row['hinhanh'] ?>" width="100px">
                </td>
            </tr>
            <tr>
                <td>Danh Mục Sản Phẩm</td>
                <td>
                    <select name="danhmuc">
                        <?php
                        $danhmuc = "SELECT * FROM categories ";
                        $query_danhmuc = mysqli_query($con, $danhmuc);
                        while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                            if ($row_danhmuc['id_danhmuc'] == $dong['id_danhmuc']) {
                        ?>
                                <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                        <?php
                            }
                        }
                        ?>

                    </select>
                </td>
            </tr>
            <tr>
                <td>Giá Sản Phẩm</td>
                <td><input type="text" value="<?php echo $dong['gia'] ?>" name="gia"></td>
            </tr>
            <tr>
                <td>Số Lượng</td>
                <td><input type="text" value="<?php echo $dong['soluong'] ?>" name="soluong"></td>
            </tr>
            <tr>
                <td>Nội Dung</td>
                <td><textarea rows="10" style="resize: none;" name="noidung"><?php echo $dong['noidung'] ?></textarea></td>
            </tr>
            <tr>
                <td>Tóm Tắt</td>
                <td><textarea rows="10" style="resize: none;" name="tomtat"><?php echo $dong['tomtat'] ?></textarea></td>
            </tr>
            <tr>
                <td>Trạng Thái</td>
                <td>
                    <select name="tinhtrang">
                        <?php
                        if ($row['tinhtrang'] == 1) {
                        ?>
                            <option value="1" selected>Kích Hoạt</option>
                            <option value="0">Ẩn</option>
                        <?php
                        } else {
                        ?>
                            <option value="1">Kích Hoạt</option>
                            <option value="0" selected>Ẩn</option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="suasanpham" value="Lưu Thay Đổi">
                </td>
            </tr>
        </form>
    <?php } ?>
</table>