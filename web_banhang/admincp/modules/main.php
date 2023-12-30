<div class="main">
    <?php
    if (isset($_GET['action']) && $_GET['query']) {
        $sanpham = $_GET['action'];
        $query = $_GET['query'];
    } else {
        $sanpham = '';
        $query = '';
    }
    if ($sanpham == 'quanlydanhmucsanpham' && $query == 'them') {
        include("category/them.php");
        include("category/index.php");
    } elseif ($sanpham == 'quanlydanhmucsanpham' && $query == 'sua') {
        include("category/sua.php");
    } elseif ($sanpham == 'quanlysanpham' && $query == 'them') {
        include("product/them.php");
        include("product/index.php");
    } elseif ($sanpham == 'quanlysanpham' && $query == 'sua') {
        include("product/sua.php");
        
    } else {
        include("dashboard.php");
    }
    ?>
</div>