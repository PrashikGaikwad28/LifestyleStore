<?php
    require("../includes/common.php");
    if (isset($_SESSION['email'])) {
        header('location: products.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Signup Page</title>
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
                <h2>SIGN UP</h2>
                <form method="POST" action="signup_script.php">
                    <div class="form-group">
                        <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control"  placeholder="Email"  name="email" required = "true" 
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        <?php
                            if(isset($_GET['m1'])){
                                echo $_GET['m1'];
                            }
                        ?>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern=".{6,}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control"  placeholder="Contact" name="contact" required = "true" pattern="^[0-9\-\+]{9,15}$">
                        <?php
                            if(isset($_GET['m2'])){
                                echo $_GET['m2'] ;
                            }
                        ?>
                    </div>
                    <div class="form-group">
                        <input class="form-control"  placeholder="City" name="city" required = "true" pattern="^[a-zA-Z]+(?:[\s-][a-zA-Z]+)*$">
                    </div>
                    <div class="form-group">
                        <input class="form-control"  placeholder="Address" name="address" required = "true" pattern="^[#.0-9a-zA-Z\s,-]+$">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <?php
        include("../includes/footer.php");
    ?>
</body>
</html>