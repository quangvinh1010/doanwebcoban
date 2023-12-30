<!-- <?php
    if(isset($_GET['logout'])&&$_GET['logout']==1){
        unset($_SESSION['dangnhap']);
        header('Location:login.php');
    }
?> -->
<ul class="list_admin">
    <li><a href="index.php?action=quanlydanhmucsanpham&query=them">Quản lý danh mục sản phẩm</a></li>
    <li><a href="index.php?action=quanlysanpham&query=them">Quản lý sản phẩm</a></li>
    <li><a href="index.php?action=quanlydanhmucbaiviet&query=them">Quản lý Đơn Hàng</a></li>
    <li><a href="index.php?action=quanly&query=them">Quản lý Người Dùng</a></li>
    <li><a href="index.php?logout=1">Đăng Xuất | <?php if(isset($_SESSION['dangnhap'])){
        echo $_SESSION['dangnhap'];
    } ?></a></li>
</ul>   