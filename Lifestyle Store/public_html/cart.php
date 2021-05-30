<?php
    require("../includes/common.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Carts Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel='stylesheet' type='text/css' media='screen' href="css/style.css">
</head>

<body>
    <?php
        include("../includes/header.php");
    ?>
    <div class="container">
        <br><br><br><br>
        <div class="table-responsive" style="margin-left: 300px; margin-right: 300px">



            <table class="table table-striped">
            <?php
            if(isset($_GET['m1'])){
                $disc=$_GET['m1'];
            }
            $sum = 0;
            $user_id = $_SESSION['user_id'];
            $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items on users_items.item_id = items.id WHERE users_items.user_id= '$user_id' and status = 'Added to Cart'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            if(mysqli_num_rows($result) >= 1){
            ?>
            <thead>
            <tr>
                        <th> Item Number </th>
                        <th> Item Name </th>
                        <th> Price </th>
                        <th></th>
                    </tr>
            </thead>
            <tbody>
            <?php
                while ($row = mysqli_fetch_array($result)) {
                    $sum+= $row["Price"];                                    
                    $id = $row["id"];
                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link btn btn-danger btn-block'> Remove</a></td></tr>";
                }
                echo "<tr><td></td><td>Total</td><td>Rs. " .$sum. "</td><td><a href='success.php' class='btn btn-success btn-block'>Confirm Order</a></td></tr>";
            }
            ?>
            </tbody>

            </table>
        </div>
    </div>


   <?php
    include("../includes/footer.php");
   ?>
</body>

</html>