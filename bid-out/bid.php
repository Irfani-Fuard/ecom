<?php
include('inc/header-bitout.php');
include('inc/config.php');


if (isset($_POST['crt'])) {
    $addcart = $_POST['crt'];
    $pid = $_POST['page_id'];
    $email = $_SESSION['mail'];

    

    // Check if the bid already exists in the database
    $bidSql = "SELECT * FROM bidding WHERE product_id = $pid AND email = '$email'";
    $bidResult = mysqli_query($con, $bidSql);

    if (!$bidResult) {
        die("Error querying the database: " . mysqli_error($con));
    }

    if ($bidResult->num_rows > 0) {
        // Bid already exists in the database, return to the index page or perform the desired action.
        echo "<script>alert('You already bid this product try to bid a new product!');</script>";
        echo "<script type='text/javascript'>window.top.location='http://localhost/ecom/bid-out/all-category.php';</script>";
        // Replace "index.php" with the appropriate URL.
        exit(); // Terminate the script to prevent further execution.
    } else {
        // Bid does not exist in the database, proceed to add it to the cart.
        if (isset($_SESSION['cart'])) {
            $pid_array = array_column($_SESSION['cart'], "pid");

            if (!in_array($_POST['page_id'], $pid_array)) {
                $index = count($_SESSION['cart']);
                $item = array(
                    'pid' => $_POST['page_id'],
                    'pname' => $_POST['pname'],
                    'price' => $_POST['price'],
                    'qty' => $_POST['qty'],
                    'image' => $_POST['img']
                );

                $_SESSION['cart'][$index] = $item;

                echo "<script>alert('Your bid is successful and added to Bid Items!');</script>";
                // Redirect or perform other actions as needed.
            } else {
                echo "<script>alert('You already added this product to your Bid Items!');</script>";
                // Redirect or perform other actions as needed.
            }
        } else {
            $item = array(
                'pid' => $_POST['page_id'],
                'pname' => $_POST['pname'],
                'price' => $_POST['price'],
                'qty' => $_POST['qty'],
                'page_id' => $_POST['page_id'],
                'image' => $_POST['img']
            );

            $_SESSION['cart'][0] = $item;
            echo "<script>alert('Your bid is successful and added to Bid items!');</script>";
            // Redirect or perform other actions as needed.
        }
    }
}

// Rest of your code here...


//print_r($_SESSION["cart"]);
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
                                        <th class="product-quantity"><span>Bid Price</span></th>
                                        <th class="product-subtotal"><span>Bid Date</span></th>
                                        <th class="product-subtotal"><span>Bid Time</span></th>
                                        <th class="product-subtotal"><span>Action</span></th>
                                    </tr>
                                    <?php 
                                    if(isset($_GET['del'])){
                                        foreach( $_SESSION["cart"] as $keys=>$values){
                                            $pro_id=$values['pid'];
                                            if($values['pid']==$_GET['del']){
                                                unset($_SESSION["cart"][$keys]);
                                                $sqldel = "DELETE FROM bidding WHERE product_id='$pro_id'";
                                                $retdel=mysqli_query($con,$sqldel);
                                            }

                                            }
                                    }
                                    
                                    
                                    ?>
                                </thead>
                                <tbody>
                                <?php 
                                // $url = "http://localhost/";
                                //$path = "http://localhost/ecom/admin/";
                                    if(!empty($_SESSION["cart"])){
                                        $total=0;
                                            foreach( $_SESSION["cart"] as $keys=>$values){
                                                $amt= $values['qty'] * $values['price'];
                                             
                                        ?>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <div class="p-relative">
                                            
                                                    <figure>
                                                        <img src="<?= $path.$values['image'] ?>" alt="product"
                                                            width="300" height="338">
                                                    </figure>
                                            
                                            </div>
                                        </td>
                                                                          
                                        <td class="product-subtotal">
                                            <span class="amount"><?php echo  "{$values['pname']} "?></span>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount"><?php echo  "{$values['price']}"?></span>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount"><?php echo  "{$values['qty']} "?></span>
                                        </td>
                                       
                                        <?php 
                                           $pid=$values['pid'];
                                           $ret9= "SELECT * FROM  bidding_product JOIN seller ON  bidding_product.pstatus=seller.id WHERE bidding_product.product_id='$pid'";
                                            $result9 = mysqli_query($con, $ret9);
                                            //$path = "http://localhost/ecom/admin/";
                                            $row9 = mysqli_fetch_array($result9);
                                            $seller_id=$row9['id'];
                                            $bid_amount=$values['qty'];
                                            $email=$_SESSION['mail'];
                                          
                                            //check whether product already exsist int the database   
                                            $sqlar = "SELECT * FROM bidding WHERE email='$email' AND  product_id='$pid'";

                                            $resultar = $con->query($sqlar);

                                            if ($resultar->num_rows > 0) {    
                                                        //echo "bid is in database";
                                            } else{       
                                            //adding to the bid table
                                            $sql="INSERT INTO  bidding (product_id, seller_id, email, bid_amount, status)
                                             VALUE ('$pid', '$seller_id','$email','$bid_amount','new' )"; 
                                            if (mysqli_query($con, $sql)) {
                                                
                                            } else {
                                                echo "Error: " . $sql . "<br>" . mysqli_error($con);
                                            }
                                            //adding to the bid table          
                                          }  //enfd of first if        
                                        ?>
                                        <td class="product-subtotal">
                                            <span class="amount"><?php echo  $row9['date'];?></span>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount"><?php echo  $row9['time'];?></span>
                                        </td>
                                        <td class="product-subtotal">
                                       
                                        <a href="bid.php?del=<?php echo  "{$values['pid']}"?>" class="btn btn-rounded btn-default btn-clear">Remove</a>    
                                    </td>
                                    </tr>
                                   <?php  } }
                                            else{
                                                echo '<script type="text/javascript">alert("You Dont have any bidding records. Start bidding now!");</script>';
                                                echo "<script type='text/javascript'>window.top.location='http://localhost/ecom/bid-out/all-category.php';</script>";
                                            }
                                   ?>
                    
                                </tbody>
                            </table>

                            <div class="cart-action mb-6">
                              <!--  <a href="index.php" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i class="w-icon-long-arrow-left"></i></a>-->
                               
                            </div>
                        </div>
                        <!--<div class="col-lg-4 sticky-sidebar-wrapper">
                            <div class="sticky-sidebar">
                                <div class="cart-summary mb-4">
                                    <h3 class="cart-title text-uppercase">Cart Totals</h3>
                                   <hr class="divider mb-6">
                                    <div class="order-total d-flex justify-content-between align-items-center">
                                        <label>Total</label>
                                        <span class="ls-50"><?php echo  $row9['date'];?></span>
                                    </div>
                                    <a href="checkout.php"
                                        class="btn btn-block btn-dark btn-icon-right btn-rounded  btn-checkout">
                                        Proceed to checkout<i class="w-icon-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <!-- End of Main -->

        <?php
        include("inc/footer.php");
        ?>