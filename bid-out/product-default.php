<?php 

include('inc/header-bitout.php');
include('inc/config.php');
//include('inc/close_auction.php');
if(isset($_GET['pid'])){
    $pid=$_GET['pid'];
    $_SESSION['product_id']=$_GET['pid'];


    $ret9 = "SELECT * FROM  bidding_product  WHERE product_id = '$pid'";
    $result9 = mysqli_query($con, $ret9);
   // $path = "http://localhost/ecom/admin/";
    $row9 = mysqli_fetch_array($result9);
}
    if(isset($_POST['addcart'])){
        $addcart=$_POST['addcart'];

         if(isset($_SESSION['cart'])){
                $pid_array=array_column($_SESSION['cart'],"pid");

                    if(!in_array($_GET['pid'],$pid_array)){
                        $index=count($_SESSION['cart']);
                        $item = array(
                            'pid'=> $_POST['page_id'],
                            'pname'=> $_POST['pname'],
                            'price'=> $_POST['price'],
                            'qty'=> $_POST['qty'],
                            'image'=> $row9['image'],
                        );
                        $_SESSION['cart'][$index]=$item;
                        echo "<script>alert('Product Added Successfully!');</script>";
                        header("cart.php");

                    } else{
                        echo "<script>alert('Product Already Added!');</script>";
                        header("cart.php");
                    }
            }

            else{
                $item = array(
                    'pid'=> $_POST['page_id'],
                    'pname'=> $_POST['pname'],
                    'price'=> $_POST['price'],
                    'qty'=> $_POST['qty'],
                    'image'=> $row9['image'],
                );

                $_SESSION['cart'][0]=$item;
                echo "<script>alert('Product Added Successfully!');</script>";
                header("cart.php");
            }
    }

include('inc/close_auction.php');

?>
<style>
    .glyph{
    position: relative;
    left: 35px;
    pointer-events: none; //this makes the glyph clickable as part of the input
}
</style>
<!-- Start of Main -->
<main class="main mb-10 pb-1">
    <form action="bid.php" method='post' onsubmit="return validatePrice();">
        <input type="hidden" name="page_id" value="<?php echo $pid; ?>">
        
        <?php 
 $ret9 = "SELECT * FROM  bidding_product  WHERE product_id = '$pid'";
 $result9 = mysqli_query($con, $ret9);
 $row9 = mysqli_fetch_array($result9);
        ?>
<input type="hidden" name="img" value="<?php echo $row9['image']; ?>">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav container">
         
            <ul class="product-nav list-style-none">
                <li class="product-nav-prev">
                    <a href="#">
                        <i class="w-icon-angle-left"></i>
                    </a>
                    <span class="product-nav-popup">
                        <img src="assets/images/products/product-nav-prev.jpg" alt="Product" width="110" height="110" />
                        <span class="product-name">Soft Sound Maker</span>
                    </span>
                </li>
                <li class="product-nav-next">
                    <a href="#">
                        <i class="w-icon-angle-right"></i>
                    </a>
                    <span class="product-nav-popup">
                        <img src="assets/images/products/product-nav-next.jpg" alt="Product" width="110" height="110" />
                        <span class="product-name">Fabulous Sound Speaker</span>
                    </span>
                </li>
            </ul>
        </nav>
        <!-- End of Breadcrumb -->
        <?php
            
               /* else{
                    header("location:index.php");
            }*/
            $ret2= "SELECT * FROM  bidding_product JOIN category ON  bidding_product.category_id=category.id WHERE bidding_product.product_id='$pid'";
            $result1 = mysqli_query($con, $ret2);
            //$path = "http://localhost/ecom/admin/";
            $row1 = mysqli_fetch_array($result1);
            $status=$row1['cmn_id'];
           // $file=array();
         
            ?>
        <!-- Start of Page Content -->
        <div class="page-content">
            <div class="container">
                <div class="row gutter-lg">
                    <div class="main-content">
                        <div class="product product-single row">
                            <div class="col-md-6 mb-6">
                                <div class="product-gallery product-gallery-sticky">
                                    <div class="swiper-container product-single-swiper swiper-theme nav-inner"
                                        data-swiper-options="{
                                            'navigation': {
                                                'nextEl': '.swiper-button-next',
                                                'prevEl': '.swiper-button-prev'
                                            }
                                        }">
                                        <div class="swiper-wrapper row cols-1 gutter-no">

                                            <div class="swiper-slide">
                                                <figure class="product-image">
                                                    <img src="<?= $path.$row1['image'] ?>"
                                                        alt="Electronics Black Wrist Watch" width="800" height="900">
                                                </figure>
                                            </div>
                                             <?php 
                                             $ret3= "SELECT * FROM bidding_images WHERE status='$status'";
                                             $result3 = mysqli_query($con, $ret3);
                                            // $path3 = "http://localhost/ecom/admin/upload/";
                                              //$row3 = mysqli_fetch_array($result3);
                                             while($row3 = mysqli_fetch_array($result3)) {
                                            ?>
                                            <div class="swiper-slide">
                                                <figure class="product-image">
                                                    <img src="<?= $path3.$row3['file_name'] ?>"
                                                        alt="" width="488" height="549">
                                                </figure>
                                            </div>
                                            <?php } ?>
                                           
                                            
                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                        <a href="#" class="product-gallery-btn product-image-full"><i
                                                class="w-icon-zoom"></i></a>
                                    </div>
                                    <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                            'navigation': {
                                                'nextEl': '.swiper-button-next',
                                                'prevEl': '.swiper-button-prev'
                                            }
                                        }">
                                        <div class="product-thumbs swiper-wrapper row cols-4 gutter-sm">
                                            <?php 
                                             $ret3= "SELECT * FROM bidding_images WHERE status='$status'";
                                             $result3 = mysqli_query($con, $ret3);
                                            // $path3 = "http://localhost/ecom/admin/upload/";
                                              $row3 = mysqli_fetch_array($result3);
                                             while($row = mysqli_fetch_array($result3)) {
                                            ?>
                                            <div class="product-thumb swiper-slide">
                                                <img src="<?= $path3.$row['file_name'] ?>"
                                                    alt="Product Thumb" width="800" height="900">
                                            </div>
                                           <?php } ?>
                                            
                                        </div>
                                        <button class="swiper-button-next"></button>
                                        <button class="swiper-button-prev"></button>
                                    </div>
                                </div>
                            </div>
                            <?php
                                $ret8= "SELECT * FROM  bidding_product JOIN seller ON  bidding_product.pstatus=seller.id WHERE bidding_product.product_id='$pid'";
                                $result8 = mysqli_query($con, $ret8);
                                //$path = "http://localhost/ecom/admin/";
                                $row8 = mysqli_fetch_array($result8);
                                $status = $row9['bid_status'];
                                $color = ($status === 'active') ? 'green' : 'red';
                            ?>
                            <div class="col-md-6 mb-4 mb-md-6">
                                <div class="product-details" data-sticky-options="{'minWidth': 767}">
                                    <h1 class="product-title"><?= $row1['product_name'] ?></h1>
                                    <div class="product-bm-wrapper">

                                        <div class="product-meta">
                                            <div class="product-categories">
                                                Category:
                                                <span class="product-category"><?= $row1['name'] ?></span>
                                            </div>

                                        </div>
                                    </div>

                                    <hr class="product-divider">
                                    Minimum bid amount:
                                    <div class="product-price"><ins class="new-price">&#8360;<?= $row1['price'] ?></ins>
                                    </div>

                                    <hr class="product-divider">
                                    <div class="product-short-desc">
                                     Description:           
                                     <span class="product-category">
                                            <?= $row1['description'] ?>
                                            
                                             </span>
                                    </div>
                                    <hr class="product-divider">
                                    <div class="product-short-desc">
                                     Bid Closing Date & Time:           
                                     <span class="product-category">
                                        <?= $row1['time'] ?>
                                        </span>
                                    </div>
                                 
                                    <hr class="product-divider">
                                    <div class="product-short-desc">
                                    Auction Status:           
                                     <!--<span class="product-category">-->
                                     <?php echo '<span class="product-category" style="color: ' . $color . ';">' . $row9['bid_status'] . '</span>';?>
                                        </span>
                                    </div>
                                    <hr class="product-divider">
                                    <div class="product-short-desc">
                                    Highest Bid value:           
                                     <span class="product-category">
                                        <?php 
                                            $bidSql = "SELECT * FROM bidding WHERE product_id = '$pid' ORDER BY bid_amount DESC LIMIT 1";
                                            $bidResult = mysqli_query($con, $bidSql);
                                            
                                            if (!$bidResult) {
                                                die("Error querying the database: " . mysqli_error($con));
                                            }
                                            
                                            // Check if there are any rows in the result set
                                            if (mysqli_num_rows($bidResult) > 0) {
                                                $row = mysqli_fetch_assoc($bidResult);
                                                $bmount = $row['bid_amount'];
                                                echo $bmount;
                                            } else {
                                                // Handle the case where there are no bids for the product
                                                echo "No bids for this product yet.";
                                            }
                                            
                                         
                                        ?>
                                        </span>
                                    </div>
                                    <hr class="product-divider">
                                    <div class="product-form product-variation-form product-color-swatch">

                                    </div>

                                    <?php 
                                            $status = $row9['bid_status'];
                                            if($status === 'active'){
                                    ?> 
                                    <div class="product-short-desc">
                                    <span>Enter your bid amount</span>
                                    </div>
                                        <?php }?>
                                    <div class="fix-bottom product-sticky-content sticky-content">
                                        <div class="product-form container">
                                            <div class="product-qty-form">
                                        
                                                <div class="input-group">
                                                    <input type="hidden" value="<?php echo $row1['product_name'];?>"
                                                        name="pname">
                                                    <input type="hidden" value="<?php echo $row1['price'];?>"
                                                        name="price">
                                                     
                                                        <?php 
                                                        $status = $row9['bid_status'];
                                                        if($status === 'active'){
                                                        ?>    
                                                    <input class="form-control" type="number" 
                                                        name="qty" value="<?php echo $row1['price'];?>" id="price">
                                                        <input type="hidden" id="minimumPrice" name="minimumPrice" value="<?php echo $row1['price'];?>"> 
                                                        <?php }?>
                                                   <!-- <span class="quantity-plus w-icon-plus" style="position: absolute;top: 50%;-webkit-transform: translateY(-50%);transform: translateY(-50%)!important;right: 4.5rem!important;padding: 0!important;width: 2.4rem!important;height: 2.4rem!important;border-radius: 50%!important;text-align: center;background-color: #eee!important;color: #666!important;font-size: 2rem!important;border: none;"></span>
                                                    <span class="quantity-minus w-icon-minus"style="position: absolute;top: 50%;-webkit-transform: translateY(-50%);text-align: center;transform: translateY(-50%)!important;right: 1.5rem!important;padding: 0!important;width: 2.4rem!important;height: 2.4rem!important;border-radius: 50%!important;background-color: #eee!important;color: #666!important;font-size: 2rem!important;border: none;"></span>-->
                                                </div>
                                            </div>
                                            <?php 
                                            $status = $row9['bid_status'];
                                            if($status === 'active'){
                                            ?>  
                                            <input class="btn btn-primary" value="Bid" type="submit" name="crt">
                                            <?php }?>
                                      
                                        </div>
                                    </div>
    </form>
                                                     
    </div>
    </div>
    </div>

    </div>
    <!-- End of Main Content -->
    <aside class="sidebar product-sidebar sidebar-fixed right-sidebar sticky-sidebar-wrapper">
        <div class="sidebar-overlay"></div>
        <a class="sidebar-close" href="#"><i class="close-icon"></i></a>
        <a href="#" class="sidebar-toggle d-flex d-lg-none"><i class="fas fa-chevron-left"></i></a>
        <div class="sidebar-content scrollable">
            <div class="sticky-sidebar">
                <div class="widget widget-icon-box mb-6">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <!--<i class="w-icon-truck"></i>-->
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title">Seller Name</h4>
                            <p><?php echo $row8['Seller_name'];?></p>
                            <input type="hidden" value="<?php echo $row8['id'];?>"
                                                        name="seller_id">
                        </div>
                    </div>
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <!--<i class="w-icon-bag"></i>-->
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title">Address</h4>
                            <p><?php echo $row8['Address'];?></p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <!--<i class="w-icon-money"></i>-->
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title">Contact Number</h4>
                            <p><?php echo $row8['Contact_no'];?></p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <!--<i class="w-icon-money"></i>-->
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title">Email</h4>
                            <p><?php echo $row8['Email'];?></p>
                        </div>
                    </div>
                </div>
                <!-- End of Widget Icon Box -->


                <!-- End of Widget Banner -->


            </div>
        </div>
    </aside>
    <!-- End of Sidebar -->
    </div>
    </div>
    </div>
    <!-- End of Page Content -->
</main>
<!-- End of Main -->
<?php
    include('inc/footer.php');
?>
  <script>
        function validatePrice() {
            // Get the values of the price and minimum price input fields
            var price = parseFloat(document.getElementById("price").value);
            var minimumPrice = parseFloat(document.getElementById("minimumPrice").value);

            // Check if the price is greater than the minimum price
            if (price >= minimumPrice) {
                // Allow the form to submit
                return true;
            } else {
                // Prevent the form from submitting
                alert("Price must be greater than or equal to the minimum price.");
                return false;
            }
        }
    </script>