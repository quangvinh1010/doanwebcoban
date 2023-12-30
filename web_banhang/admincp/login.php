<!-- <?php
session_start();
include('./mysql.php');
if (isset($_POST['dangnhap'])) {
    $tendangnhap = $_POST['username'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM `admin` WHERE username ='$tendangnhap' AND `password` = '$matkhau' LIMIT 1";
    $row = mysqli_query($con, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $_SESSION['dangnhap'] = $tendangnhap;
        header('Location:index.php');
    } else {
        echo '<p style="font-size:15px; color: red;">Tên tài khoản hoặc mật khẩu không đúng! Vui Lòng nhập lại!</p>';
        header('Location:login.php');
    }
}
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Đăng Nhập Admin</title>
</head>

<body style="background: aliceblue;">
    <div class="wraper">
        <div class="form-box">
            <form action="" method="POST">
                <h2>Login</h2>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-envelope'></i></span>
                    <input type="text" name="username" required>
                    <label>UserName</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="forgot">
                    <label><input type="checkbox">
                        Remember me
                    </label>
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" name="dangnhap" class="btn">Login</button>
                <div class="login-register">
                    <p>Don't have account?
                        <a href="#" class="register-link">Register</a>
                    </p>
                </div>
            </form>
        </div>

    </div>
</body>

</html>