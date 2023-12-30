<h1>Thêm Sản Phẩm</h1>
<table style="width:auto; border: 1px solid #000;">
    <form method="POST" action="modules/product/xuly.php" enctype="multipart/form-data">
        <tr>
            <td>Tên Sản Phẩm</td>
            <td><input type="text" name="tensanpham"></td>
        </tr>
        <tr>
            <td>Hình Ảnh</td>
            <td><input type="file" name="hinhanh"></td>
        </tr>
        <tr>
            <td>Danh Mục Sản Phẩm</td>
            <td>
                <select name="danhmuc">
                    <?php
                    $danhmuc = "SELECT * FROM categories ";
                    $query_danhmuc = mysqli_query($con, $danhmuc);
                    while ($row = mysqli_fetch_array($query_danhmuc)) {
                    ?>
                        <option value="<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></option>
                    <?php
                    }
                    ?>

                </select>
            </td>
        </tr>
        <tr>
            <td>Giá Sản Phẩm</td>
            <td><input type="text" name="gia"></td>
        </tr>
        <tr>
            <td>Số Lượng</td>
            <td><input type="text" name="soluong"></td>
        </tr>
        <tr>
            <td>Nội Dung</td>
            <td><textarea rows="10" style="resize: none;" name="noidung"></textarea></td>
        </tr>
        <tr>
            <td>Tóm Tắt</td>
            <td><textarea rows="10" style="resize: none;" name="tomtat"></textarea></td>
        </tr>
        <tr>
            <td>Trạng Thái</td>
            <td>
                <select name="tinhtrang">
                    <option value="1">Kích Hoạt</option>
                    <option value="0">Ẩn</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="themsanpham" value="Thêm">
            </td>
        </tr>
    </form>
</table>