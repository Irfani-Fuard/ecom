<?php
session_start(); // Start the session (if not already started)

// Check if the user is logged in
if (!isset($_SESSION['user_logged_in'])) {
    echo "<script>alert('You must be logged into sell your product!');</script>";
    echo "<script type='text/javascript'>window.top.location='index.php';</script>";
   // header('Location: http://localhost/ecom/frontend/');
    exit; // Exit the script
}
else
{

    header('Location: http://localhost/ecom/bid-out/seller/dashboard.php');
}
?>