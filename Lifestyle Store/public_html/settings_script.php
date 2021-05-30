<?php
    require("../includes/common.php");

    $oldPassword = md5(mysqli_real_escape_string($con, $_POST['old_password']));

    $newPassword = md5(mysqli_real_escape_string($con, $_POST['new_password']));

    $newPasswordRe = md5(mysqli_real_escape_string($con, $_POST['confirm_password']));

    $email = $_SESSION['email'];

    $select_query = "SELECT * FROM users WHERE email = '$email' AND password = '$oldPassword'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $rows = mysqli_num_rows($select_query_result);

    if($rows > 0 && $newPassword==$newPasswordRe){
        $success = "<span class='green'>Password Changed</span> ";
        $update_query = "UPDATE users SET password = '$newPassword' WHERE email = '$email'";
        $update_query_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
        header('location: settings.php?m1='.$success);
    }
    else{
        $error = "<span class = 'red'>Invalid Credentials</span>";
        header('location: settings.php?m1='.$error);
    }
?>