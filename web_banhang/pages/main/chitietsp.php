<?php
$sql_chitiet = "SELECT * FROM categories, products WHERE products.id_danhmuc=categories.id_danhmuc
 AND products.id_sanpham='$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($con, $sql_chitiet);
while ($row = mysqli_fetch_array($query_chitiet)) {
?>
    <h3 style="font-size: 20px;">Chi Tiết Sản Phẩm</h3>
    <div class="chitiet">
        <div class="anh">
            <img src="admincp/modules/product/upload/<?php echo $row['hinhanh'] ?>">
        </div>
        <form method="POST" action="pages/main/addgiohang.php?idsanpham=<?php echo $row['id_sanpham'] ?>">
            <div class="chitietsp">
                <h3>Tên Sản Phẩm: <?php echo $row['tensanpham'] ?></h3>
                <p>Danh Mục Sản Phẩm: <?php echo $row['tendanhmuc'] ?> </p>
                <p>Giá Sản Phẩm: <?php echo number_format($row['gia'],0,',','.') .' VNĐ' ?></p>
                <p>Số Lượng Trong Kho: <?php echo $row['soluong'] ?></p>
                <p>Tóm Tắt Về Sản Phẩm: <?php echo $row['tomtat'] ?></p>
                <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm Vào Giỏ Hàng"></p>
            </div>
        </form>
    </div>
<?php
}
?>