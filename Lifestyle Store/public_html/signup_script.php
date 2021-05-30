<?php
    require("../includes/common.php");
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = md5(mysqli_real_escape_string($con, $_POST['password']));
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $address = mysqli_real_escape_string($con, $_POST['address']);

    $email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
    $contact_regex = "/^[789][0-9]{9}$/";

    $select_query = "SELECT * FROM users WHERE email = '$email' ";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $select_rows = mysqli_num_rows($select_query_result);
    if($select_rows!=0){
        $error = "<span class='red'>Email Already Exists</span>";
        header('location:signup.php?m1='.$error);
    }else if(!preg_match($email_regex , $email)){
        $error = "<span class='red'>Incorrect Email Id</span>";
        header('location:signup.php?m1='.$error);
    }else if(!preg_match($contact_regex , $contact )){
        $error = "<span class='red'>Incorrect Contact Number</span>";
        header('location:signup.php?m2='.$error);
    }

    //If not then add to DB
    else{
        $insert_query = "INSERT INTO users (name, email, password, contact, city, address) VALUES
        ('$name', '$email', '$password', '$contact', '$city', '$address')";
        $insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));
        $user_id = mysqli_insert_id($con);
        $_SESSION['user_id'] = $user_id;
        $_SESSION['email'] = $email;
        header('location: login.php');
    }
     
?>
