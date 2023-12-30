<?php
$sql_suadanhmuc = "SELECT * FROM categories WHERE id_danhmuc ='$_GET[id]' LIMIT 1";
$query_sql_suadanhmuc = mysqli_query($con, $sql_suadanhmuc);
?>
<h1>Sửa Danh Mục Sản Phẩm</h1>
<table style="width:auto; border: 1px solid #000;">
    <?php
    while ($dong = mysqli_fetch_array($query_sql_suadanhmuc)) {
    ?>
        <form method="POST" action="modules/category/xuly.php?id=<?php echo $_GET['id'] ?>">
            <tr>
                <td>Tên Danh Mục</td>
                <td><input type="text" name="tendanhmuc" value="<?php echo $dong['tendanhmuc'] ?>"></td>
            </tr>
            <tr>
                <td>Mô Tả</td>
                <td><input type="text" name="mota" value="<?php echo $dong['mota'] ?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="suadanhmuc" value="Lưu Thay Đổi">
                </td>
            </tr>
        </form>
    <?php } ?>
</table>