<?php
if (isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM user WHERE email ='$email' AND `password` = '$matkhau' LIMIT 1";
    $row = mysqli_query($con, $sql);
    $count = mysqli_num_rows($row);
    if ($count > 0) {
        $sql_row = mysqli_fetch_array($row);
        $_SESSION['dangky'] = $sql_row['name'];
        $_SESSION['id_user'] = $sql_row['id'];
        header('Location:index.php?quanly=giohang');
    } else {
        echo '<p style="font-size:15px; color: red;">Email hoặc mật khẩu không đúng! Vui Lòng nhập lại!</p>';
        // header('Location:login.php');
    }
}
?>
<div class="wraper">
    <div style="font-size: 15px;" class="form-box">
        <form action="" method="POST">
            <h2>Login</h2>
            <div class="input-box">
                <span class="icon"><i class='bx bxs-envelope'></i></span>
                <input type="text" name="email" required>
                <label>Email</label>
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
                    <a href="index.php?quanly=register" class="register-link">Register</a>
                </p>
            </div>
        </form>
    </div>

</div>