<?php
    $sql_dsdanhmuc = "SELECT * FROM categories";
    $query_sql_dsdanhmuc = mysqli_query($con, $sql_dsdanhmuc);
?>
<h1>Danh sách Danh Mục Sản Phẩm</h1>
<table style="width: 1200px; font-size: 20px; text-align: center; border-collapse: collapse;" border="1">
    <tr>
        <th>STT</th>
        <th>Tên Sản Phẩm</th>
        <th>Mô Tả</th>
        <th>Ngày Tạo</th>
        <th>Ngày Sửa</th>
        <th>Xử Lý</th>
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_sql_dsdanhmuc)){
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tendanhmuc'] ?></td>
            <td><?php echo $row['mota'] ?></td>
            <td><?php echo $row['ngaytao'] ?></td>
            <td><?php echo $row['ngaycapnhat'] ?></td>
            <td>
                <a class="text" href="?action=quanlydanhmucsanpham&query=sua&id=<?php echo $row['id_danhmuc'] ?>">Sửa</a> | 
                <a class="text" href="modules/category/xuly.php?id=<?php echo $row['id_danhmuc'] ?>">Xóa</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
