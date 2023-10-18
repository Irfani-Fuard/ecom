
<?php 
include('inc/header-bitout.php');
include('inc/config.php');
if(isset($_GET['val'])){
    $val=$_GET['val'];
    }

 

?>

<!-- Start of Main -->
        <main class="main">
                    <!-- Start of Page Content -->
            <div class="page-content mb-10">
                <div class="shop-default-banner shop-boxed-banner banner d-flex align-items-center mb-6"
                    style="background-image: url(images/banner/b2.jpg); background-color: #FFC74E;">
                    <div class="container banner-content">
                        <h4 class="banner-subtitle font-weight-bold"></h4>
                        <h3 class="banner-title text-white text-uppercase font-weight-bolder ls-10">All Categories</h3>
                        
                    </div>
                </div>
                <!-- End of Shop Banner -->
                <div class="container-fluid">
                    <!-- Start of Shop Content -->
                    <div class="shop-content">
                        <!-- Start of Shop Main Content -->
                        <div class="main-content">
                            <nav class="toolbox sticky-toolbox sticky-content fix-top">
                                
                                <!--<div class="toolbox-right">
                                    <div class="toolbox-item toolbox-show select-box">
                                        <select name="count" class="form-control">
                                            <option value="9">Show 9</option>
                                            <option value="12" selected="selected">Show 12</option>
                                            <option value="24">Show 24</option>
                                            <option value="36">Show 36</option>
                                        </select>
                                    </div>
                                    <div class="toolbox-item toolbox-layout">
                                        <a href="shop-fullwidth-banner.html" class="icon-mode-grid btn-layout active">
                                            <i class="w-icon-grid"></i>
                                        </a>
                                        <a href="shop-list.html" class="icon-mode-list btn-layout">
                                            <i class="w-icon-list"></i>
                                        </a>
                                    </div>
                                </div>-->
                            </nav>
                            <div class="product-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2">
                                <?php
                                  $ret = "SELECT * FROM  bidding_product JOIN features ON  bidding_product.feature_id  = features.id ";
                                $result = mysqli_query($con, $ret);
                               // $path = "http://localhost/ecom/admin/";
      
                             while($row = mysqli_fetch_array($result)) {
                                    
                                ?>
                                <div class="product-wrap">
                                    <div class="product text-center">
                                        <figure class="product-media">
                                        <a href="product-default.php?pid=<?= $row['product_id'] ?>">
                                                <img src="<?= $path.$row['image'] ?>" alt="Product" width="300"
                                                    height="220" />
                                            </a>
                                           <!-- <div class="product-action-horizontal">
                                                <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                    title="Add to cart"></a>
                                                <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                    title="Wishlist"></a>
                                                <a href="#" class="btn-product-icon btn-compare w-icon-compare"
                                                    title="Compare"></a>
                                                <a href="#" class="btn-product-icon btn-quickview w-icon-search"
                                                    title="Quick View"></a>
                                            </div>-->
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="shop-banner-sidebar.html"><?= $row['name'] ?></a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="product-default.html"><?= $row['product_name'] ?></a>
                                            </h3>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width: 100%;"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <a href="product-default.html" class="rating-reviews">(3 reviews)</a>
                                            </div>
                                            <div class="product-pa-wrapper">
                                                <div class="product-price">
                                                <ins class="new-price ls-50">&#8360;
                                                </ins><?= $row['price'] ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>

                        </div>
                        <!-- End of Shop Main Content -->

                    
                    </div>
                    <!-- End of Shop Content -->
                </div>
            </div>
            <!-- End of Page Content -->
        </main>
        <!-- End of Main -->
        <?php
include('inc/footer.php');
?>
       