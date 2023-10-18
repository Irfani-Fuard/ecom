<?php
    session_start();
    include('inc/config.php');

    $uname=$_POST['username'];
    //$Password=md5($_POST['inputpwd']);
    $Password=$_POST['inputpwd'];
    $query = mysqli_query($con, "select id from admin where username='$uname' && password='$Password' ");
  
    
    if (!$query) {
        die('MySQL Error: ' . mysqli_error($con));
    }
   
    $ret=mysqli_fetch_array($query);
    $_SESSION['aid']=$ret['id'];
    
    if($ret>0){
      echo "<script>
      window.location = 'dashboard.php';
    </script>";
    }
     else {
        echo "<script>
        $.noConflict();
        $('#message').html(`<div class='alert alert-warning'>Invalid username or password</div>`);
        $('#submitbtn').attr('disabled', false);
        $('#submitbtn').css({ 'border-radius': '6px' });
        </script>";
    
     }

    

  ?>
