<div id="main">
    <div class="main-content">
        <?php
        if(isset($_GET['quanly'])){
            $sanpham = $_GET['quanly'];
        }else{
            $sanpham = '';
        }
        if($sanpham=='danhmucsanpham'){
            include("main/danhmuc.php");
        }elseif($sanpham=='lienhe'){
            include("main/lienhe.php");
        }elseif($sanpham=='thanhtoan'){
            include("main/thanhtoan.php");
        }elseif($sanpham=='giohang'){
            include("main/giohang.php");
        }elseif($sanpham=='register'){
            include("main/dangky.php");
        }elseif($sanpham=='login'){
            include("main/dangnhap.php");
        }elseif($sanpham=='sanpham'){
            include("main/chitietsp.php");
        }else{
            include("main/maincontent.php");
        }
        ?>
    </div>
</div>