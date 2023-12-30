<?php
include("../../mysql.php");
$tendanhmuc = $_POST['tendanhmuc'];
$mota = $_POST['mota'];
    // thêm 
if(isset($_POST['themdanhmuc'])){
    $them_danhmuc = "INSERT INTO categories(tendanhmuc,mota) VALUE ('$tendanhmuc','$mota')";
    mysqli_query($con,$them_danhmuc);
    header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
    // sửa 
}elseif(isset($_POST['suadanhmuc'])){
    $sua_danhmuc = "UPDATE categories SET tendanhmuc='$tendanhmuc', mota='$mota' WHERE id_danhmuc = '$_GET[id]'";
    mysqli_query($con,$sua_danhmuc);
    header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
    // xóa
}else{
    $id = $_GET['id'];
    $xoa_danhmuc = "DELETE FROM categories WHERE id_danhmuc='$id'";
    mysqli_query($con,$xoa_danhmuc);
    header('location:../../index.php?action=quanlydanhmucsanpham&query=them');
}
?>