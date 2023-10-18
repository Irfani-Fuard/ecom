<?php
    //database connection
    $con=mysqli_connect("localhost","root","","ecom");
    if(mysqli_connect_errno()){
    echo "Connection Fail".mysqli_connect_error();
    }
  ?>