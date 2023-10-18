<?php

$pid=$_SESSION['product_id'];
//get the winner
$bidSql = "SELECT * FROM bidding WHERE product_id = $pid ORDER BY bid_amount DESC LIMIT 1";
$bidResult = mysqli_query($con, $bidSql);

if (!$bidResult) {
    die("Error querying the database: " . mysqli_error($con));
}

if (mysqli_num_rows($bidResult) > 0) {
    $row = mysqli_fetch_assoc($bidResult);
    $email = $row['email'];
    $_SESSION['email']=$row['email'];
    $_SESSION['bid_amount']=$row['bid_amount'];

$now = new DateTime(null, new DateTimeZone('Asia/Colombo'));

$currentDateTime = $now->format('Y-m-d H:i:s');

// Update the bid_status to 'close' and set the winner for rows where time is less than the current time and bid_status is 'active'
$updateSql = "UPDATE bidding_product SET bid_status='close', winner='$email' WHERE time <= '$currentDateTime' AND bid_status='active' AND product_id = '$pid'";
$updateResult = mysqli_query($con, $updateSql);

//inserting to the notification
 $message="Congradulation!....You Won the Bid."." Product ID:".$pid;
 $notification="INSERT INTO notifications (user_id, message, status) VALUES ('$email', '$message', 'new')";
 $notificationResult = mysqli_query($con, $notification);

if (!$updateResult) {
    die("Error updating the database: " . mysqli_error($con));
} else {
   
}


} else {
  
}


?>
