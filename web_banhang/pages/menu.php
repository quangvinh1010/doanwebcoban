<?php
$danhmuc = "SELECT * FROM categories ";
$query_danhmuc = mysqli_query($con, $danhmuc);
?>
<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['dangky']);
}
 ?>
<div class="menu">
    <div class="logo">
        <a href="./index.php"><img src="./images/logo.png"></a>
    </div>
    <ul>
        <li><a href="./index.php">Home</a></li>
        <?php
        while ($row = mysqli_fetch_array($query_danhmuc)) {
        ?>
            <li><a href="./index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
        <?php
        }
        ?>
        <li><a href="./index.php?quanly=lienhe">Liên Hệ</a></li>
        <li><a href="./index.php?quanly=thanhtoan">Thanh Toán</a></li>
    </ul>
    <div class="icon">
        <a href="./index.php?quanly=giohang" class="btnLogin"><i class='bx bxs-cart'></i></a>
        <?php
        if (isset($_SESSION['dangky'])) {
        ?>
            <a href="./index.php?dangxuat=1">
                <p>Đăng Xuất</p>
            </a>
        <?php
        } else {
        ?>
            <a href="./index.php?quanly=register">
                <p>Đăng Ký</p>
            </a>
        <?php
        }
        ?>
    </div>
</div>