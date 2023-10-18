<?php
session_start();
include('config.php');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Check if the email already exists
$email = $_POST['email'];
$sql = "SELECT * FROM  login WHERE email = '$email'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<script>
    window.alert('email already exist!');
    window.location = '../../index.php';
  </script>";
} else {
    // Insert the new user into the database
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = "INSERT INTO  login  (name, email, password) VALUES ('$name', '$email', '$password')";
    
    if ($con->query($sql) === TRUE) {
        echo "<script>
        window.alert('Registration Success!');
        window.location = '../../index.php';
      </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

$con->close();
?>




?>