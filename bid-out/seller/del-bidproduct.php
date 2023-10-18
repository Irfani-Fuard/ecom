<?php
include_once('inc/config.php');
if (isset($_GET['del'])) {
    $pid = $_GET['del'];
    
    // Corrected DELETE query
    $sql = "DELETE FROM bidding_product WHERE product_id ='$pid'";
    
    if (mysqli_query($con, $sql)) {
        echo "<script>alert('Your record deleted succesfully!');</script>";
        echo "<script type='text/javascript'>window.top.location='http://localhost/ecom/bid-out/seller/product.php';</script>";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    
    mysqli_close($con);
}

?>