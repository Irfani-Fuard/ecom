<?php

include('inc/header-bitout.php');
include('inc/config.php');
if(isset($_GET['del'])){
    $pro_id=$_GET['del'];
    $sqldel = "DELETE FROM bidding WHERE product_id='$pro_id'";
    $retdel=mysqli_query($con,$sqldel);
  
    if($retdel){
        echo "<script>alert('Your Bid deleted Successfully!');</script>";
        echo "<script type='text/javascript'>window.top.location='http://localhost/ecom/bid-out/view-mybid.php';</script>";
    }

}

?>
        <!-- Start of Main -->
        <main class="main cart">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="active"><a href="#">Bid Items</a></li>
                        <li><a href="#">View My Bid</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->

            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container">
                    <div class="row gutter-lg mb-10">
                        <div class="col-lg-8 pr-lg-4 mb-6">
                            <table class="shop-table cart-table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th class="product-name"><span>Name</span></th>
                                        <th class="product-price"><span>Low Bid Price</span></th>
                                        <th class="product-quantity"><span>My Bid Price</span></th>
                                        <th class="product-subtotal"><span>Bid End Time</span></th>
                                        <th class="product-subtotal"><span>Bid Status</span></th>
                                        <th class="product-subtotal"><span>Action</span></th>
                                    </tr>
                                    <?php 
                                    
                                          
                                          $email = $_SESSION['mail'];
                                         // echo $email;
                                          // Check if the bid already exists in the database
                                          $ret9= "SELECT * FROM  bidding_product JOIN bidding ON  bidding_product.product_id=bidding.product_id WHERE bidding.email='$email'";
                                         
                                         /* if (!$row9) {
                                              die("Error querying the database: " . mysqli_error($con));
                                          }*/
                                     if ($ret9 > 0) {
                                          $result9 = mysqli_query($con, $ret9);                               
                                    ?>
                                </thead>
                                <tbody>

                                <?php   while($row9 = mysqli_fetch_array($result9)) {
                                     $status = $row9['bid_status'];
                                     $color = ($status === 'active') ? 'green' : 'red';
                                    
                                    ?>
                                    <tr>
                                    <td class="product-thumbnail">
                                            <div class="p-relative">
                                            <figure>
                                                <img src="<?= $path.$row9['image'] ?>" alt="product"
                                                    width="300" height="338">
                                            </figure>
                                            </div>
                                        </td>
                                                                          
                                        <td class="product-subtotal">
                                            <span class="amount"><?php echo  $row9['product_name']; ?></span>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount"><?php echo  $row9['price']; ?></span>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount"><?php echo  $row9['bid_amount']; ?></span>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount"><?php echo $row9['time']; ?></span>
                                        </td>
                                        <td class="product-subtotal">
                                        <?php echo '<span style="color: ' . $color . ';">' . $row9['bid_status'] . '</span>';?>
                                        </td>
                                        <td class="product-subtotal">
                                       
                                        <a href="view-mybid.php?del=<?php echo  $row9['product_id']; ?>" class="btn btn-rounded btn-default btn-clear">Remove</a>    
                                    </td>
                                    </tr>
                                     <?php }
                                     }
                                     else{
                                        echo "<script>alert('You dont have any bid records. Start bidding now!');</script>";
                                        echo "<script type='text/javascript'>window.top.location='http://localhost/ecom/bid-out/seller/dashboard.php';</script>";
                                     }
                                     ?>            
                                </tbody>
                            </table>

                            <div class="cart-action mb-6">
                              <!--  <a href="index.php" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i class="w-icon-long-arrow-left"></i></a>-->
                               
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

        <?php
        include("inc/footer.php");
        ?>