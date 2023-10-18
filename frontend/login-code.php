<?php
session_start();
include('includes/config.php');


    $uname=$_POST['username'];
    $Password=md5($_POST['inputpwd']);
    $query=mysqli_query($con,"select ID from tbladmin where  AdminuserName='$uname' && Password='$Password' ");
    $ret=mysqli_fetch_array($query);
	
	  $query2=mysqli_query($con,"select id, user_level from tbllogin where username='$uname' && password='$Password' ");
    $ret2=mysqli_fetch_array($query2);

    $ulevel = $ret2['user_level'];
    $_SESSION['uid'] = $ret2['id'];
	
    if($ret>0){
      $_SESSION['aid']=$ret['ID'];
     echo"<script>
      window.location = 'dashboard.php';
      $('#submitbtn').attr('disabled', true);
      $('#submitbtn').css({ 'border-radius': '6px' });
      </script>";
   
     //header('location:dashboard.php');
    }
	 elseif($ulevel == 0){
	  $_SESSION['ulevel'] = $ulevel;
    $_SESSION['uname']= $uname;
	  $_SESSION['password']=  $Password;

      $query=mysqli_query($con,"select id from tbllogin where username='$uname' && password='$Password' ");
      $user=mysqli_fetch_array($query);
      
      if($user>0)
      echo "<script>
      window.location = 'user-dashboard.php';
      $('#submitbtn').attr('disabled', true);
      $('#submitbtn').css({ 'border-radius': '6px' });</script>";

     else {
        echo "<script>$('#message').html(`<div class='alert alert-warning'>Invalid username or password</div>`);
        $('#submitbtn').attr('disabled', false);
        $('#submitbtn').css({ 'border-radius': '6px' });
        </script>";
		
     }
    
    }
    else{
    echo "<script>alert('Invalid Details.');</script>"; 
          
    }
 

  ?>
