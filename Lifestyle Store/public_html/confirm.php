<?php
    include("../includes/common.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Confirm | Mobile Shoppee</title>
</head>
<body>
<?php
        $user_id = $_SESSION["user_id"];
        $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));

        while($row = mysqli_fetch_array($result)){
            $items_id = $row["item_id"];
            $query_update = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$items_id'";            
            $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
        }
    ?>
</body>
</html>