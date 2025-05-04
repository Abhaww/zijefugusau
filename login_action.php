<?php

    require 'includes/session.php';
    require 'includes/connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = sha1($password);

    $query = "SELECT * FROM admin WHERE email = '{$email}' AND password = '{$hashed_password}' LIMIT 1";
    $result_set = mysqli_query($conn, $query);
    $num_rows = mysqli_num_rows($result_set);

    if ($num_rows == 1){
        //Username and Password authenticated and only 1 match
        $row = mysqli_fetch_assoc($result_set);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_name'] = $row['name'];        
        header("Location: /admin_dashboard.php?login_id={$_SESSION['user_id']}");
    }
    else{
        die("Your login credentials are incorrect");
    }
?>