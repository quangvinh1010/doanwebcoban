<?php
if (isset($_POST['dangky'])) {
    $tenkh = $_POST['hvt'];
    $email = $_POST['email'];
    $matkhau = md5($_POST['matkhau']);
    $diachi = $_POST['diachi'];
    $sdt = $_POST['dienthoai'];
    $sql = mysqli_query($con, "INSERT INTO user(`name`,email,`password`,diachi,sdt) 
                        VALUE ('$tenkh','$email','$matkhau','$diachi','$sdt')");
    if ($sql) {
        echo '<p style="font-size:15px; color: green;">Bạn đã đăng ký thành công!</p>';
        $_SESSION['dangky'] = $tenkh;
        $_SESSION['id_user'] = mysqli_insert_id($con);
        header('Location:./index.php?quanly=giohang');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký thành viên</title>
</head>

<body>
    <div class="wraper">
        <div style="font-size: 15px;" class="form-box">

            <form action="#" method="POST">
                <h2>Registration</h2>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-user'></i></span>
                    <input type="text" name="hvt" required>
                    <label>Họ Và Tên</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                    <input type="password" name="matkhau" required>
                    <label>Mật Khẩu</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-map'></i></span>
                    <input type="text" name="diachi" required>
                    <label>Địa Chỉ</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-phone'></i></span>
                    <input type="text" name="dienthoai" required>
                    <label>Số Điện Thoại</label>
                </div>
                <div class="forgot">
                    <label><input type="checkbox">
                        I agree to the terms & conditions
                    </label>
                </div>
                <button type="submit" name="dangky" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account?
                        <a href="index.php?quanly=login" class="login-link">Login</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>