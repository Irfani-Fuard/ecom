<?php 
session_start();
include('inc/header.php'); 
include('inc/config.php'); 
if(isset($_GET['pid'])){
    $pid=$_GET['pid'];
    $_SESSION['id']=$pid;


    $ret9 = "SELECT * FROM product WHERE product_id = '$pid'";
    $result9 = mysqli_query($con, $ret9);
    $path = "http://localhost/ecom/admin/";
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
    <form action="cart.php" method='post'>
        <input type="hidden" name="page_id" value="<?php echo $pid; ?>">
        
        <?php 
 $ret9 = "SELECT * FROM product WHERE product_id = '$pid'";
 $result9 = mysqli_query($con, $ret9);
 $row9 = mysqli_fetch_array($result9);
        ?>
<input type="hidden" name="img" value="<?php echo $row9['image']; ?>">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav container">
            <ul class="breadcrumb bb-no">
                <li><a href="demo1.html">Home</a></li>
                <li>Products</li>
            </ul>
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
            $ret2= "SELECT * FROM product JOIN category ON  product.category_id=category.id WHERE product_id='$pid'";
            $result1 = mysqli_query($con, $ret2);
            $path = "http://localhost/ecom/admin/";
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
                                             $ret3= "SELECT file_name FROM  files WHERE status='$status'";
                                             $result3 = mysqli_query($con, $ret3);
                                             $path3 = "http://localhost/ecom/admin/upload/";
                                            //  $row3 = mysqli_fetch_array($result3);
                                             while($row = mysqli_fetch_array($result3)) {
                                            ?>
                                            <div class="swiper-slide">
                                                <figure class="product-image">
                                                    <img src="<?= $path3.$row['file_name'] ?>"
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
                                             $ret3= "SELECT file_name FROM  files WHERE status='$status'";
                                             $result3 = mysqli_query($con, $ret3);
                                             $path3 = "http://localhost/ecom/admin/upload/";
                                            //  $row3 = mysqli_fetch_array($result3);
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

                                    <div class="product-price"><ins class="new-price">&#8360;<?= $row1['price'] ?></ins>
                                    </div>

                                    <div class="ratings-container">
                                        <div class="ratings-full">
                                            <span class="ratings" style="width: 80%;"></span>
                                            <span class="tooltiptext tooltip-top"></span>
                                        </div>
                                        <a href="#product-tab-reviews" class="rating-reviews scroll-to">(3
                                            Reviews)</a>
                                    </div>

                                    <div class="product-short-desc">

                                        <ul class="list-type-check list-style-none">
                                            <?= $row1['description'] ?>
                                        </ul>
                                    </div>

                                    <hr class="product-divider">

                                    <div class="product-form product-variation-form product-color-swatch">

                                    </div>


                                    <div class="product-variation-price">
                                        <span></span>
                                    </div>

                                    <div class="fix-bottom product-sticky-content sticky-content">
                                        <div class="product-form container">
                                            <div class="product-qty-form">
                                                <div class="input-group">
                                                    <input type="hidden" value="<?php echo $row1['product_name'];?>"
                                                        name="pname">
                                                    <input type="hidden" value="<?php echo $row1['price'];?>"
                                                        name="price">
                                                    <input class="quantity form-control" type="number" min="1"
                                                        max="10000000" name="qty">
                                                    <span class="quantity-plus w-icon-plus" style="position: absolute;top: 50%;-webkit-transform: translateY(-50%);transform: translateY(-50%)!important;right: 4.5rem!important;padding: 0!important;width: 2.4rem!important;height: 2.4rem!important;border-radius: 50%!important;text-align: center;background-color: #eee!important;color: #666!important;font-size: 2rem!important;border: none;"></span>
                                                    <span class="quantity-minus w-icon-minus"style="position: absolute;top: 50%;-webkit-transform: translateY(-50%);text-align: center;transform: translateY(-50%)!important;right: 1.5rem!important;padding: 0!important;width: 2.4rem!important;height: 2.4rem!important;border-radius: 50%!important;background-color: #eee!important;color: #666!important;font-size: 2rem!important;border: none;"></span>
                                                </div>
                                            </div>
                                            <!-- <button class="btn btn-primary btn-cart" name="addcart">
                                                <i class="w-icon-cart"></i>
                                                <span>Add to Cart</span>


                                            </button> -->
                                            <input class="btn btn-primary" value="Add to Cart" type="submit" name="crt">
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
                            <i class="w-icon-truck"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title">Free Shipping & Returns</h4>
                            <p>For all orders over $99</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="w-icon-bag"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title">Secure Payment</h4>
                            <p>We ensure secure payment</p>
                        </div>
                    </div>
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="w-icon-money"></i>
                        </span>
                        <div class="icon-box-content">
                            <h4 class="icon-box-title">Money Back Guarantee</h4>
                            <p>Any back within 30 days</p>
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