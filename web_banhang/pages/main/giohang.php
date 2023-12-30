<!-- <?php
if(isset($_SESSION['dangky'])){
    echo $_SESSION['id_user'];
}
?> -->
<h1 style="font-size: 25px;">Giỏ Hàng</h1>
<?php
if (isset($_SESSION['addcart'])) {
}
?>
<table style="width: 1200px; font-size: 20px; text-align: center; border-collapse: collapse;" border="1">
    <tr>
        <th>Thứ tự</th>
        <th>Tên Sản Phẩm</th>
        <th>Hình ảnh</th>
        <th>Số Lượng</th>
        <th>Giá</th>
        <th>Thành tiền</th>
        <th>Xử Lý</th>
    </tr>
    <!-- lap sản phẩm -->
    <?php
    $i = 0;
    if (isset($_SESSION['addcart'])) {
        $i = 0;
        $tongtien = 0;
        foreach ($_SESSION['addcart'] as $cart_item) {
            $thanhtien = $cart_item['soluong'] * $cart_item['gia'];
            $tongtien += $thanhtien;
            $i++;
    ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $cart_item['tensanpham'] ?></td>
                <td><img src="admincp/modules/product/upload/<?php echo $cart_item['hinhanh'] ?>" width="100px"></td>
                <td>
                    <a class="text" href="pages/main/addgiohang.php?tang=<?php echo $cart_item['id'] ?>">
                        <button style="width: 20%;" type="submit" name="dathang" class="btn">+</button>
                    </a>
                    <?php echo $cart_item['soluong'] ?>
                    <a style="font-size: 30px;" class="text" href="pages/main/addgiohang.php?giam=<?php echo $cart_item['id'] ?>">
                        <button style="width: 20%;" type="submit" name="dathang" class="btn">-</button>
                    </a>
                </td>
                <td><?php echo number_format($cart_item['gia'], 0, ',', '.') . ' VNĐ' ?></td>
                <td><?php echo number_format($thanhtien, 0, ',', '.') . ' VNĐ' ?></td>
                <td><a class="text" href="pages/main/addgiohang.php?xoasp=<?php echo $cart_item['id'] ?>">Xóa</a></td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="4"></td>
            <td>Tổng Tiền: </td>
            <td> <?php echo number_format($tongtien, 0, ',', '.') . ' VNĐ' ?></td>
            <td><a class="text" href="pages/main/addgiohang.php?xoatatca=1">Xóa Tất Cả</a></td>
        </tr>
        <tr>
            <td colspan="5"></td>
            <?php
            if (isset($_SESSION['dangky'])) {
            ?>
                <td><a href="pages/main/thanhtoan.php"><button style="width: 70%;" type="submit" name="dathang" class="btn">Đặt Hàng</button></a></td>
            <?php
            } else {
            ?>
                <td><a href="./index.php?quanly=register"><button style="width: 70%;" type="submit" name="dathang" class="btn">Đặt Hàng</button></a></td>
            <?php
            }
            ?>

        </tr>
</table>
<?php
    } else {
?>
    <p style="font-size: 20px; text-align: center;"><?php echo ('Bạn Chưa Thêm Sản Phẩm Vào Giỏ Hàng Bạn Ơi!') ?></p>
<?php
    }
?>
</div>
</div>