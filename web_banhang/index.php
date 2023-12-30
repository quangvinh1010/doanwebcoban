<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <title>Web bán hàng</title>
</head>

<body>
    <div class="wrapper">
        <?php
        session_start();
        include("./admincp/mysql.php");
        include("./pages/header.php");
        include("./pages/menu.php");
        include("./pages/main.php");
        include("./pages/footer.php");
        ?>
    </div>
    <script src="./js/main.js"></script>
</body>

</html>