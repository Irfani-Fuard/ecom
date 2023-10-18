
<?php 
include('inc/config.php');


if(isset($_GET['userFail'])){
  echo "<script> alert('Username or Password were wrong please check and try again') </script>";  
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from portotheme.com/html/wolmart/demo1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Sep 2023 07:27:02 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Effective Sollution</title>

    <meta name="keywords" content="Marketplace ecommerce responsive HTML5 Template" />
    <meta name="description"
        content="Wolmart is powerful marketplace &amp; ecommerce responsive Html5 Template.">
    <meta name="author" content="D-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/ir3.png">

    <!-- WebFont.js -->
    <script>
        WebFontConfig = {
            google: { families: ['Poppins:400,500,600,700,800'] }
        };
        (function (d) {
            var wf = d.createElement('script'), s = d.scripts[0];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>

    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="assets/fonts/wolmart87d5.woff?png09e" as="font" type="font/woff" crossorigin="anonymous">

    <!-- Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/fontawesome-free/css/all.min.css">

    <!-- Plugins CSS -->
    <!-- <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/vendor/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/magnific-popup/magnific-popup.min.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- Default CSS 1-->
    <link rel="stylesheet" type="text/css" href="assets/css/demo2.min.css">
        <!-- Default CSS -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.min.css">

  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css"> -->
  
  <!--Admin theme template --->
  
  <!--Admin theme template --->

<body class="">
    <div class="page-wrapper">

        <!-- Start of Header -->
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <p class="welcome-msg">Welcome to Effective Sollution store</p>
                    </div>
                    <div class="header-right">
                        <!-- <div class="dropdown">
                            <a href="#currency">USD</a>
                            <div class="dropdown-box">
                                <a href="#USD">USD</a>
                                <a href="#EUR">EUR</a>
                            </div>
                        </div> -->
                        <!-- End of DropDown Menu -->
                        <a href="#" class="d-lg-show">Contact Us</a>
                        <a href="#" class="d-lg-show">My Account</a>
                        <a href="assets/ajax/login.php" class=" login sign-in"><i
                                class="w-icon-account"></i>SignIn</a>
                        <span class="delimiter d-lg-show">/</span>
                        <a href="assets/ajax/login.php" class="ml-0 login register">Register</a>
                    </div>
                </div>
            </div>
            <!-- End of Header Top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left mr-md-2">
                        <a href="#" class="mobile-menu-toggle  w-icon-hamburger" aria-label="menu-toggle">
                        </a>
                        <a href="demo1.html" class="logo ml-lg-0">
                            <img src="images/eslogo.jpg" alt="logo" />
                        </a>
                        <form method="POST" action="#"
                            class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper">
                            <div class="select-box">
                                <select id="category" name="category">
                                    <option value="">All Categories</option>
                                    <option value="4">Fashion</option>
                                    <option value="10">Electronics</option>
                                    <option value="11">Luxury</option>
                                    <option value="12">Car</option>
                                </select>
                            </div>
                            <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Search in..."
                                required />
                            <button class="btn btn-search" type="submit"><i class="w-icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="header-right ml-4">
                        <a class="wishlist label-down link d-xs-show" href="wishlist.php">
                            <!--<i class="w-icon-heart"></i>
                            <span class="wishlist-label d-lg-show">Wishlist</span>-->
                        </a>
                        <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                            <div class="cart-overlay"></div>
                            <a href="view-cart.php" >
                                <i class="w-icon-cart"></i>
                                <span class="cart-label">Cart</span>
                            </a>
                            <div class="dropdown-box">
                                <div class="cart-header">
                                    <span>Shopping Cart</span>
                                    <a href="#" class="btn-close">Close<i class="w-icon-long-arrow-right"></i></a>
                                </div>

                                <div class="products">
                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product-default.html" class="product-name">Beige knitted
                                                elas<br>tic
                                                runner shoes</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">&#8360;25.68</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/cart/product-1.jpg" alt="product" height="84"
                                                    width="94" />
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>

                                    <div class="product product-cart">
                                        <div class="product-detail">
                                            <a href="product-default.html" class="product-name">Blue utility
                                                pina<br>fore
                                                denim dress</a>
                                            <div class="price-box">
                                                <span class="product-quantity">1</span>
                                                <span class="product-price">&#8360;32.99</span>
                                            </div>
                                        </div>
                                        <figure class="product-media">
                                            <a href="product-default.html">
                                                <img src="assets/images/cart/product-2.jpg" alt="product" width="84"
                                                    height="94" />
                                            </a>
                                        </figure>
                                        <button class="btn btn-link btn-close" aria-label="button">
                                            <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="cart-total">
                                    <label>Subtotal:</label>
                                    <span class="price">&#8360;58.67</span>
                                </div>

                                <div class="cart-action">
                                    <a href="view-cart.php" class="btn btn-dark btn-outline btn-rounded">View Cart</a>
                                    <a href="#" class="btn btn-primary  btn-rounded">Checkout</a>
                                </div>
                            </div>
                            <!-- End of Dropdown Box -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Header Middle -->

            <div class="header-bottom sticky-content fix-top sticky-header has-dropdown">
                <div class="container">
                    <div class="inner-wrap">
                        <div class="header-left">
                            <div class="dropdown category-dropdown has-border" data-visible="true">
                                <a href="category.php" class="category-toggle text-dark" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="true" data-display="static"
                                    title="Browse Categories">
                                    <i class="w-icon-category"></i>
                                    <span>Browse Categories</span>
                                </a>
                             
                                <div class="dropdown-box">
                                    <ul class="menu vertical-menu category-menu">
                                    <?php
                                        $ret = "SELECT * FROM category";
                                        $result = mysqli_query($con, $ret);
                                        while($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <li>
                                            <a href="category.php?name=<?= $row['id'] ?>&category=<?= $row['name'] ?>">
                                              <?= $row['name'] ?>
                                            </a>
                    
                                        </li>
                                        <?php  }?>
                                </div>
                            </div>
                            <nav class="main-nav">
                            <ul class="menu">
                                <li class="active">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="">
                                    <a href="all-category.php">All Categories</a>
                                </li>
                                <?php
                                             $ret1 = "SELECT category.name AS cname, Features.name AS fname, Features.id AS fid, category.id AS cid  FROM category JOIN Features ON category.id=features.category_id GROUP BY category.name ";
                                             $result1 = mysqli_query($con, $ret1);
                                             while($row1 = mysqli_fetch_array($result1)) {
                                                $features = $row1['fname'];
                                        ?>
                                <li class="has-submenu">
                                    <a href="<?= $row1['cname'] ?>"><?= $row1['cname'] ?></a>
                                    <!-- Start of Megamenu -->
                                            <ul class="">
                                            <?php   
                                            $sql = "SELECT * FROM features WHERE  category_id = $row1[cid]";
                                            $result = mysqli_query($con, $sql);
                                           
                                            while($row = mysqli_fetch_array($result)) {
                                                
                                            ?>
                                            <li><a href="features.php?fid=<?= $row['id'] ?>&name=<?= $row['name'] ?>"> <?= $row['name'] ?></a></li>
                                             <?php    
                                            }?>
                                            </ul>
                                    <!-- End of Megamenu -->
                                </li>
                                <?php 
                                }
                                ?>
                            </ul>
                              
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </header>
        <!-- End of Header -->