<?php
$sql_sanphammoi = "SELECT * FROM products LIMIT 10";
$query_sanphammoi = mysqli_query($con, $sql_sanphammoi);
?>
<h1 style="font-size: 25px;">Sản Phẩm Mới Nhất</h1>
<ul>
    <?php
    while ($row = mysqli_fetch_array($query_sanphammoi)){
        ?>
    <li>
        <a href="./index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
        <img src="admincp/modules/product/upload/<?php echo $row['hinhanh'] ?>">
                <p style="font-size: 20px;">Tên sản phẩm: <br>
                    <?php echo $row['tensanpham'] ?>
                </p>
                <p style="font-size: 20px;">Giá: <?php echo number_format($row['gia'],0,',','.') .' VNĐ' ?></p>
        </a>
    </li>
    <?php
    }
    ?>
</ul>
<?php
$sql_allsp = "SELECT * FROM products";
$query_allsp = mysqli_query($con, $sql_allsp);
?>
<h1 style="font-size: 25px;">Tất cả sản phẩm</h1>
<ul>
    <?php
    while ($row = mysqli_fetch_array($query_allsp)){
        ?>
    <li>
        <a href="./index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
        <img src="admincp/modules/product/upload/<?php echo $row['hinhanh'] ?>">
                <p style="font-size: 15px;">Tên sản phẩm: <br>
                    <?php echo $row['tensanpham'] ?>
                </p>
                <p style="font-size: 15px;">Giá: <?php echo number_format($row['gia'],0,',','.') .' VNĐ' ?></p>
        </a>
    </li>
    <?php
    }
    ?>
</ul>