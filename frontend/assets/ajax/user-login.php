<?php
//this is the working login code of my project
session_start();
include('config.php');

if (isset($_POST['submit'])) {
    // Retrieve user inputs
    $email = $_POST["email1"];
    $password = $_POST["password1"];

    // Perform validation
    $errors = array();

    // Check if username/email is empty
    if (empty($email)) {
        $errors[] = "Email is required.";
    }

    // Check if password is empty
    if (empty($password)) {
        $errors[] = "Password is required.";

    }

    // print_r($errors);
    // exit;

    // If no validation errors, attempt to authenticate the user (e.g., check against a database)
    if ($errors != '') {
        $query = mysqli_query($con, "select id  from login  where email='$email' && password='$password' ");
        if (!$query) {
            die('MySQL Error: ' . mysqli_error($con));
        }
        
        $ret=mysqli_fetch_array($query);
        $_SESSION['mail']=$email;
        if($ret>0){
            $_SESSION['user_logged_in'] = true;

        //header('Location: http://localhost/ecom/frontend/my-account.php');
        // header('Location: https://effectivesollution.000webhostapp.com/bid-out/seller/dashboard.php');
        header('Location: http://localhost/ecom/bid-out/seller/dashboard.php');
            }
         else {
            // header('Location:https://effectivesollution.000webhostapp.com/index.php?userFail');
            header('Location: http://localhost/ecom/frontend/index.php?userFail');
   
         }
    }else{
        echo "fail";
    }
}




?>