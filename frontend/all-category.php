
<?php 
include('inc/header.php');
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
                                  $ret = "SELECT * FROM product JOIN Features ON product.feature_id  = features.id ";
                                $result = mysqli_query($con, $ret);
                                $path = "http://localhost/ecom/admin/";
      
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

                            <div class="toolbox toolbox-pagination justify-content-between">
                                <p class="showing-info mb-2 mb-sm-0">
                                    Showing<span>1-12 of 60</span>Products 
                                </p>
                                <ul class="pagination">
                                    <li class="prev disabled">
                                        <a href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                            <i class="w-icon-long-arrow-left"></i>Prev
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="next">
                                        <a href="#" aria-label="Next">
                                            Next<i class="w-icon-long-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End of Shop Main Content -->

                        <!-- Start of Sidebar, Shop Sidebar -->
                        <aside class="sidebar shop-sidebar left-sidebar sticky-sidebar-wrapper">
                            <!-- Start of Sidebar Overlay -->
                            <div class="sidebar-overlay"></div>
                            <a class="sidebar-close" href="#"><i class="close-icon"></i></a>

                            <!-- Start of Sidebar Content -->
                            <div class="sidebar-content scrollable">
                                <div class="filter-actions">
                                    <label>Filter :</label>
                                    <a href="#" class="btn btn-dark btn-link filter-clean">Clean All</a>
                                </div>
                                <!-- Start of Collapsible widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>All Categories</span></h3>
                                    <ul class="widget-body filter-items search-ul">
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Babies</a></li>
                                        <li><a href="#">Beauty</a></li>
                                        <li><a href="#">Decoration</a></li>
                                        <li><a href="#">Electronics</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Food</a></li>
                                        <li><a href="#">Furniture</a></li>
                                        <li><a href="#">Kitchen</a></li>
                                        <li><a href="#">Medical</a></li>
                                        <li><a href="#">Sports</a></li>
                                        <li><a href="#">Watches</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Price</span></h3>
                                    <div class="widget-body">
                                        <ul class="filter-items search-ul">
                                            <li><a href="#">$0.00 - $100.00</a></li>
                                            <li><a href="#">$100.00 - $200.00</a></li>
                                            <li><a href="#">$200.00 - $300.00</a></li>
                                            <li><a href="#">$300.00 - $500.00</a></li>
                                            <li><a href="#">$500.00+</a></li>
                                        </ul>
                                        <form class="price-range">
                                            <input type="number" name="min_price" class="min_price text-center"
                                                placeholder="$min"><span class="delimiter">-</span><input type="number"
                                                name="max_price" class="max_price text-center" placeholder="$max"><a
                                                href="#" class="btn btn-primary btn-rounded">Go</a>
                                        </form>
                                    </div>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Size</span></h3>
                                    <ul class="widget-body filter-items item-check mt-1">
                                        <li><a href="#">Extra Large</a></li>
                                        <li><a href="#">Large</a></li>
                                        <li><a href="#">Medium</a></li>
                                        <li><a href="#">Small</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Brand</span></h3>
                                    <ul class="widget-body filter-items item-check mt-1">
                                        <li><a href="#">Elegant Auto Group</a></li>
                                        <li><a href="#">Green Grass</a></li>
                                        <li><a href="#">Node Js</a></li>
                                        <li><a href="#">NS8</a></li>
                                        <li><a href="#">Red</a></li>
                                        <li><a href="#">Skysuite Tech</a></li>
                                        <li><a href="#">Sterling</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->

                                <!-- Start of Collapsible Widget -->
                                <div class="widget widget-collapsible">
                                    <h3 class="widget-title"><span>Color</span></h3>
                                    <ul class="widget-body filter-items item-check">
                                        <li><a href="#">Black</a></li>
                                        <li><a href="#">Blue</a></li>
                                        <li><a href="#">Brown</a></li>
                                        <li><a href="#">Green</a></li>
                                        <li><a href="#">Grey</a></li>
                                        <li><a href="#">Orange</a></li>
                                        <li><a href="#">Yellow</a></li>
                                    </ul>
                                </div>
                                <!-- End of Collapsible Widget -->
                            </div>
                            <!-- End of Sidebar Content -->
                        </aside>
                        <!-- End of Shop Sidebar -->
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
       