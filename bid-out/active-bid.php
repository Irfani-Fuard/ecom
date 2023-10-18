<?php

include('inc/header-bitout.php');
include('inc/config.php');

?>
        <!-- Start of Main -->
        <main class="main cart">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="active"><a href="#">Bid Items</a></li>
                        <li><a href="#">Active Bids</a></li>
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
                                        <th class="product-price"><span>Bidder Name</span></th>
                                        <th class="product-quantity"><span>Bid Price</span></th>
                                        <th class="product-subtotal"><span>Bid End Time</span></th>
                                    </tr>
                                    <?php 
                                    
                                          
                                          $email = $_SESSION['mail'];
                                         // echo $email;
                                          // Check if the bid already exists in the database
                                          $ret9= "SELECT * FROM  bidding_product JOIN bidding ON  bidding_product.product_id=bidding.product_id WHERE bidding_product.bid_status ='active'";
                                         
                                         /* if (!$row9) {
                                              die("Error querying the database: " . mysqli_error($con));
                                          }*/
                                     if ($ret9 > 0) {
                                          $result9 = mysqli_query($con, $ret9);                               
                                    ?>
                                </thead>
                                <tbody>

                                <?php   while($row9 = mysqli_fetch_array($result9)) {
                                     $email = $row9['email'];
                                     $status = $row9['bid_status'];
                                     $color = ($status === 'active') ? 'green' : 'red';
                                     
                                     $sql_mail="SELECT * FROM login WHERE email='$email'";
                                     $result_mail = mysqli_query($con, $sql_mail);
                                     $row_mail = mysqli_fetch_array($result_mail) 
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
                                            <span class="amount"><?php echo  $row_mail['name']; ?></span>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount"><?php echo  $row9['bid_amount']; ?></span>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount"><?php echo $row9['time']; ?></span>
                                        </td>
                                    </tr>
                                     <?php }
                                     }
                                     /*else{
                                        echo "<script>alert('You dont have any bid records. Start bidding now!');</script>";
                                        echo "<script type='text/javascript'>window.top.location='http://localhost/ecom/bid-out/seller/dashboard.php';</script>";
                                     }*/
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