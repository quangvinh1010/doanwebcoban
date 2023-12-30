<?php
session_start();
include('../../admincp/mysql.php');

// thêm giỏ hàng
if (isset($_POST['themgiohang'])) {
    $id = $_GET['idsanpham'];
    $soluong = 1;
    $sql = "SELECT * FROM products WHERE id_sanpham = '$id' LIMIT 1";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        $new_cart[] = array(
            'id' => $id, 'tensanpham' => $row['tensanpham'], 'hinhanh' => $row['hinhanh'],
            'gia' => $row['gia'], 'soluong' => $soluong,
        );
        // kiểm tra gio hang da to tai?
        if (isset($_SESSION['addcart'])) {
            $ktra = false;
            foreach ($_SESSION['addcart'] as $cart_item) {
                // nếu trùng
                if ($cart_item['id'] == $id) {
                    $cart[] = array(
                        'id' => $cart_item['id'], 'tensanpham' => $cart_item['tensanpham'], 'hinhanh' => $cart_item['hinhanh'],
                        'gia' => $cart_item['gia'], 'soluong' => $soluong + 1
                    );
                    $ktra = true;
                    // nếu không trùng
                } else {
                    $cart[] = array(
                        'id' => $cart_item['id'], 'tensanpham' => $cart_item['tensanpham'], 'hinhanh' => $cart_item['hinhanh'],
                        'gia' => $cart_item['gia'], 'soluong' => $cart_item['soluong']
                    );
                }
            }
            // + dữ liệu trùng nhau
            if ($ktra == false) {
                $_SESSION['addcart'] = array_merge($cart, $new_cart);
            } else {
                $_SESSION['addcart'] = $cart;
            }
        } else {
            $_SESSION['addcart'] = $new_cart;
        }
    }
    header('Location:../../index.php');
}
// Tăng số Lượng
if (isset($_GET['tang'])) {
    $id = $_GET['tang'];
    foreach ($_SESSION['addcart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $cart[] = array(
                'id' => $cart_item['id'], 'tensanpham' => $cart_item['tensanpham'], 'hinhanh' => $cart_item['hinhanh'],
                'gia' => $cart_item['gia'], 'soluong' => $cart_item['soluong']
            );
            $_SESSION['addcart'] = $cart;
        } else {
            $tangsoluong = $cart_item['soluong'] + 1;
            if ($cart_item['soluong'] <=10) {
                $cart[] = array(
                    'id' => $cart_item['id'], 'tensanpham' => $cart_item['tensanpham'], 'hinhanh' => $cart_item['hinhanh'],
                    'gia' => $cart_item['gia'], 'soluong' => $tangsoluong
                );
            }else{
                $cart[] = array(
                    'id' => $cart_item['id'], 'tensanpham' => $cart_item['tensanpham'], 'hinhanh' => $cart_item['hinhanh'],
                    'gia' => $cart_item['gia'], 'soluong' => $cart_item['soluong']
                );

            }
            $_SESSION['addcart'] = $cart;
        }
    }
    header('Location:../../index.php?quanly=giohang');
}
// Giảm Số Lượng
if (isset($_GET['giam'])) {
    $id = $_GET['giam'];
    foreach ($_SESSION['addcart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $cart[] = array(
                'id' => $cart_item['id'], 'tensanpham' => $cart_item['tensanpham'], 'hinhanh' => $cart_item['hinhanh'],
                'gia' => $cart_item['gia'], 'soluong' => $cart_item['soluong']
            );
            $_SESSION['addcart'] = $cart;
        } else {
            $giamsoluong = $cart_item['soluong'] -1;
            if ($cart_item['soluong'] >1) {
                $cart[] = array(
                    'id' => $cart_item['id'], 'tensanpham' => $cart_item['tensanpham'], 'hinhanh' => $cart_item['hinhanh'],
                    'gia' => $cart_item['gia'], 'soluong' => $giamsoluong
                );
            }else{
                $cart[] = array(
                    'id' => $cart_item['id'], 'tensanpham' => $cart_item['tensanpham'], 'hinhanh' => $cart_item['hinhanh'],
                    'gia' => $cart_item['gia'], 'soluong' => $cart_item['soluong']
                );

            }
            $_SESSION['addcart'] = $cart;
        }
    }
    header('Location:../../index.php?quanly=giohang');
}
// Xóa Tất Cả
if (isset($_GET['xoatatca']) && $_GET['xoatatca'] == 1) {
    unset($_SESSION['addcart']);
    header('Location:../../index.php?quanly=giohang');
}
// Xóa Sản Phẩm
if (isset($_SESSION['addcart']) && isset($_GET['xoasp'])) {
    $id = $_GET['xoasp'];
    foreach ($_SESSION['addcart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $cart[] = array(
                'id' => $cart_item['id'], 'tensanpham' => $cart_item['tensanpham'], 'hinhanh' => $cart_item['hinhanh'],
                'gia' => $cart_item['gia'], 'soluong' =>$cart_item['soluong']
            );
        }
        $_SESSION['addcart'] = $cart;
        header('Location:../../index.php?quanly=giohang');
    }
}
