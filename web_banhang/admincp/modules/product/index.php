<?php
    $sql_dssanpham = "SELECT * FROM products,categories WHERE products.id_danhmuc = categories.id_danhmuc ";
    $query_dssanpham = mysqli_query($con, $sql_dssanpham);
?>
<h1>Danh sách Sản Phẩm</h1>
<table style="width: 1200px; font-size: 20px; text-align: center; border-collapse: collapse;" border="1">
    <tr>
        <th>STT</th>
        <th>Tên Sản Phẩm</th>
        <th>Hình Ảnh</th>
        <th>Tên Danh Mục</th>
        <th>Giá</th>
        <th>Số Lượng</th>
        <th>Tóm Tắt</th>
        <th>Trạng Thái</th>
        <th>Xử Lý</th>
    </tr>
    <?php
    $i = 0;
    while($row = mysqli_fetch_array($query_dssanpham)){
        $i++;
    ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tensanpham']?></td>
            <td><img src="modules/product/upload/<?php echo $row['hinhanh'] ?>" width="100px"></td>
            <td><?php echo $row['tendanhmuc']?></td>
            <td><?php echo $row['gia'] ?></td>
            <td><?php echo $row['soluong'] ?></td>
            <td><?php echo $row['tomtat'] ?></td>
            <td><?php if($row['tinhtrang']==1){
                    echo'Kích Hoạt';
                }else {
                    echo 'Ẩn';
                }
                ?>
            </td>
            <td>
                <a class="text" href="?action=quanlysanpham&query=sua&id=<?php echo $row['id_sanpham'] ?>">Sửa</a> | 
                <a class="text" href="modules/product/xuly.php?id=<?php echo $row['id_sanpham'] ?>">Xóa</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
