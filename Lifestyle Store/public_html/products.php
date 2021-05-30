<?php
    require("../includes/common.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Products Page</title>
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
        include("../includes/check_if_added.php");
        $user_id = $_SESSION['user_id'];
        $email = $_SESSION['email'];
    ?>

    <div class="container">
        <div class="jumbotron">
            <?php
                echo "<h3 class='text-center'>Welcome $email</h3>";
            ?>
            <h1>Welcome to our Lifestyle Store</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
                have all in one place.</p>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/5.jpg" alt="...">
                    <div class="caption">
                        <h2>Cannon EOS</h2>
                        <p>Price Rs.36000.00</p>
                        <?php 
                            if(check_if_added_to_cart(1)) {                                    
                                echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                            } else {?>                                    
                                <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/2.jpg" alt="">
                    <div class="caption">
                        <h2>Sony DSLR</h2>
                        <p>Price Rs.40000.00</p>
                        <?php if(check_if_added_to_cart(2)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/3.jpg" alt="">
                    <div class="caption">
                        <h2>Sony DSLR</h2>
                        <p>Price Rs.50000.00</p>
                        <?php if(check_if_added_to_cart(3)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/4.jpg" alt="">
                    <div class="caption">
                        <h2>Olympus DSLR</h2>
                        <p>Price Rs.80000.00</p>
                        <?php if(check_if_added_to_cart(4)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/9.jpg" alt="">
                    <div class="caption">
                        <h2>Titan Model #301</h2>
                        <p>Price Rs.13000.00</p>
                        <?php if(check_if_added_to_cart(5)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/10.jpg" alt="">
                    <div class="caption">
                        <h2>Titan Model #201</h2>
                        <p>Price Rs.3000.00</p>
                        <?php if(check_if_added_to_cart(6)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/11.jpg" alt="">
                    <div class="caption">
                        <h2>HMT Milan</h2>
                        <p>Price Rs.8000.00</p>
                        <?php if(check_if_added_to_cart(7)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/12.jpg" alt="">
                    <div class="caption">
                        <h2>Faber Luba #111</h2>
                        <p>Price Rs.18000.00</p>
                        <?php if(check_if_added_to_cart(8)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/8.jpg" alt="">
                    <div class="caption">
                        <h2>H&W</h2>
                        <p>Price Rs.800.00</p>
                        <?php if(check_if_added_to_cart(9)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/6.jpg" alt="">
                    <div class="caption">
                        <h2>Louis Phil</h2>
                        <p>Price Rs.1000.00</p>
                        <?php if(check_if_added_to_cart(10)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/13.jpg" alt="">
                    <div class="caption">
                        <h2>John Zok</h2>
                        <p>Price Rs.1500.00</p>
                        <?php if(check_if_added_to_cart(11)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="../img/14.jpg" alt="">
                    <div class="caption">
                        <h2>Jhalsani</h2>
                        <p>Price Rs.1300.00</p>
                        <?php if(check_if_added_to_cart(12)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
        include("../includes/footer.php");
    ?>

</body>

</html>