<?php
    require 'includes/connection.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = sha1($password);
    $confirm_password = $_POST['confirm_password'];
    $hashed_confirm_password = sha1($confirm_password);
    
    if(empty($errors)){
        $query = "INSERT INTO admin (name, email, password, confirm_password) VALUES('{$name}', '{$email}', '{$hashed_password}', '{$hashed_confirm_password}')";
        $result = mysqli_query($conn, $query);
        if ($result){
            //Success
            header("Location: /zijefugusau/register.php?signup=success");
        }
        else{
            $message = "The user could not be created";
            $message .= "<br />" . mysqli_error($connection);
        }
    }else{
        if(count($errors) == 1){
            $message = "There is one error in the form";
        }else{
            $message = "There were " . count($errors) . " errors in the form.";
        }
    }
	
?>