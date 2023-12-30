<?php
include("../../mysql.php");
$tensanpham = $_POST['tensanpham'];
// xử lý hình ảnh 
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time() . '_' . $hinhanh;
$gia = $_POST['gia'];
$sl = $_POST['soluong'];
$noidung = $_POST['noidung'];
$tomtat = $_POST['tomtat'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];

// thêm 
if (isset($_POST['themsanpham'])) {
    $them_sanpham = "INSERT INTO products(tensanpham, hinhanh, gia, soluong, noidung, tomtat, tinhtrang, id_danhmuc) 
    VALUE ('$tensanpham','$hinhanh','$gia','$sl','$noidung','$tomtat','$tinhtrang','$danhmuc')";
    mysqli_query($con, $them_sanpham);
    move_uploaded_file($hinhanh_tmp, 'upload/' . $hinhanh);
    header('location:../../index.php?action=quanlysanpham&query=them');
    // sửa 
} elseif (isset($_POST['suasanpham'])) {
    if ($hinhanh != '') {
        move_uploaded_file($hinhanh_tmp, 'upload/' . $hinhanh);
        $sua_sanpham = "UPDATE products SET tensanpham='$tensanpham', hinhanh='$hinhanh', 
                    gia='$gia', soluong='$sl', noidung='$noidung', tomtat='$tomtat', tinhtrang='$tinhtrang', id_danhmuc='$danhmuc'
                    WHERE id_sanpham = '$_GET[id]'";
        $sql = "SELECT * FROM products WHERE id_sanpham = '$_GET[id]' LIMIT 1";
        $query = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_array($query)) {
            unlink('upload/' . $row['hinhanh']);
        }
    } else {
        $sua_sanpham = "UPDATE products SET tensanpham='$tensanpham', 
                    gia='$gia', soluong='$sl', noidung='$noidung', tomtat='$tomtat', tinhtrang='$tinhtrang', id_danhmuc='$danhmuc'
                    WHERE id_sanpham = '$_GET[id]'";
    }
    mysqli_query($con, $sua_sanpham);
    header('location:../../index.php?action=quanlysanpham&query=them');
    // xóa
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id_sanpham = '$id' LIMIT 1";
    $query = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($query)) {
        unlink('upload/' . $row['hinhanh']);
    }
    $xoa_sanpham = "DELETE FROM products WHERE id_sanpham='$id'";
    mysqli_query($con, $xoa_sanpham);
    header('location:../../index.php?action=quanlysanpham&query=them');
}
