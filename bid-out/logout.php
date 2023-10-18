<?php
session_start();
session_unset();
session_destroy();
header('location:http://localhost/ecom/frontend/index.php');
//this is for the bid logout
?>