
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Admincp</title>
</head>

<body>
    <div class="wrapper">
        <h3 class="color" style="text-align: center;">welcom to AdminCP</h3>
        <?php
        include("mysql.php");
        include("./modules/header.php");
        include("./modules/menu.php");
        include("./modules/main.php");
        include("./modules/footer.php");
        ?>
    </div>
</body>

</html>