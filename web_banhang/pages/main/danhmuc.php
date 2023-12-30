<?php
$sql_dssanpham = "SELECT * FROM products WHERE products.id_danhmuc='$_GET[id]'";
$query_dssanpham = mysqli_query($con, $sql_dssanpham);
//get tên danh mục
$sql_danhmuc = "SELECT * FROM categories WHERE categories.id_danhmuc='$_GET[id]' LIMIT 1";
$query_danhmuc = mysqli_query($con, $sql_danhmuc);
$tendanhmuc = mysqli_fetch_array($query_danhmuc);
?>
<h1 style="font-size: 25px;">Danh Mục Sản Phẩm: <?php echo $tendanhmuc['tendanhmuc'] ?> </h1>
<ul>
    <?php
    while ($row = mysqli_fetch_array($query_dssanpham)) {
    ?>
        <li>
            <a href="./index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                <img src="admincp/modules/product/upload/<?php echo $row['hinhanh'] ?>">
                <p style="font-size: 15px;">Tên sản phẩm: <br>
                    <?php echo $row['tensanpham'] ?>
                </p>
                <p style="font-size: 15px;">Giá: <?php echo number_format($row['gia'], 0, ',', '.') . ' VNĐ' ?></p>
            </a>
        </li>
    <?php
    }
    ?>
</ul>