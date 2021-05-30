<?php
    require("../includes/common.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Order-Confirmation Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' href="css/style.css">
</head>

<body>
    <?php
        include("../includes/header.php");
        require "confirm.php";
    ?>
    <div id="success">
        <div class="jumbotron">
            <p><strong>Your order is confirmed. Thank you for shoppingwith us.<a href="products.php"> Click here​</a> to purchase any other item.</strong></p>
        </div>
    </div>
    <?php
        include("../includes/footer.php");
    ?>
        
</body>

</html>