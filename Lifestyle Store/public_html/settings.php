<?php
    require("../includes/common.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Settings Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
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

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
            <h2>Change Password</h2>
            <form method="POST" action="settings_script.php">
                <div class="form-group">
                    <input class="form-control" placeholder="Old Password" name="old_password" type="password" required = "true">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="New Password" name="new_password" type="password" required = "true">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Confirm Password" name="confirm_password" type="password" required = "true">
                </div>
                <?php
                    if(isset($_GET['m1'])){
                        echo $_GET['m1'];
                    }
                ?>
                <button type="submit" name="submit" class="btn btn-primary">Change</button>
            </form>
        </div>
    </div>
</div>

    <?php
        include("../includes/footer.php");
    ?>
</body>
</html>