<?php 
include('inc/header.php'); 

?>

<!-- Start of Main-->
<main class="main">
    <section class="intro-section">
        <div class="swiper-container swiper-theme nav-inner pg-inner swiper-nav-lg animation-slider pg-xxl-hide nav-xxl-show nav-hide"
            data-swiper-options="{
                    'slidesPerView': 1,
                    'autoplay': {
                        'delay': 8000,
                        'disableOnInteraction': false
                    }
                }">
            <div class="swiper-wrapper">
                <div class="swiper-slide banner banner-fixed intro-slide intro-slide1"
                    style="background-image: url(assets/images/demos/demo1/sliders/slide-1.jpg); background-color: #ebeef2;">
                    <div class="container">
                        <figure class="slide-image skrollable slide-animate">
                            <img src="assets/images/demos/demo1/sliders/shoes.png" alt="Banner"
                                data-bottom-top="transform: translateY(10vh);"
                                data-top-bottom="transform: translateY(-10vh);" width="474" height="397">
                        </figure>
                        <div class="banner-content y-50 text-right">
                            <h5 class="banner-subtitle font-weight-normal text-default ls-50 lh-1 mb-2 slide-animate"
                                data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.2s'
                                }">
                                Custom <span class="p-relative d-inline-block">Men’s</span>
                            </h5>
                            <h3 class="banner-title font-weight-bolder ls-25 lh-1 slide-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.4s'
                                }">
                                RUNNING SHOES
                            </h3>
                            <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'duration': '1s',
                                    'delay': '.6s'
                                }">
                                Sale up to <span class="font-weight-bolder text-secondary">30% OFF</span>
                            </p>
                        </div>
                        <!-- End of .banner-content -->
                    </div>
                    <!-- End of .container -->
                </div>
                <!-- End of .intro-slide1 -->

                <div class="swiper-slide banner banner-fixed intro-slide intro-slide2"
                    style="background-image: url(assets/images/demos/demo1/sliders/slide-2.jpg); background-color: #ebeef2;">
                    <div class="container">
                        <figure class="slide-image skrollable slide-animate" data-animation-options="{
                                    'name': 'fadeInUpShorter',
                                    'duration': '1s'
                                }">
                            <img src="assets/images/demos/demo1/sliders/men.png" alt="Banner"
                                data-bottom-top="transform: translateX(10vh);"
                                data-top-bottom="transform: translateX(-10vh);" width="480" height="633">
                        </figure>
                        <div class="banner-content d-inline-block y-50">
                            <h5 class="banner-subtitle font-weight-normal text-default ls-50 slide-animate"
                                data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.2s'
                                    }">
                                Mountain-<span class="text-secondary">Climbing</span>
                            </h5>
                            <h3 class="banner-title font-weight-bolder text-dark mb-0 ls-25 slide-animate"
                                data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.4s'
                                    }">
                                Hot & Packback
                            </h3>
                            <p class="font-weight-normal text-default slide-animate" data-animation-options="{
                                        'name': 'fadeInUpShorter',
                                        'duration': '1s',
                                        'delay': '.8s'
                                    }">
                                Only until the end of this week.
                            </p>
                        </div>
                        <!-- End of .banner-content -->
                    </div>
                    <!-- End of .container -->
                </div>
                <!-- End of .intro-slide2 -->

                <div class="swiper-slide banner banner-fixed intro-slide intro-slide3"
                    style="background-image: url(assets/images/demos/demo1/sliders/slide-3.jpg); background-color: #f0f1f2;">
                    <div class="container">
                        <figure class="slide-image skrollable slide-animate" data-animation-options="{
                                    'name': 'fadeInDownShorter',
                                    'duration': '1s'
                                }">
                            <img src="assets/images/demos/demo1/sliders/skate.png" alt="Banner"
                                data-bottom-top="transform: translateY(10vh);"
                                data-top-bottom="transform: translateY(-10vh);" width="310" height="444">
                        </figure>
                        <div class="banner-content text-right y-50">
                            <p class="font-weight-normal text-default text-uppercase mb-0 slide-animate"
                                data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.6s'
                                    }">
                                Top weekly Seller
                            </p>
                            <h5 class="banner-subtitle font-weight-normal text-default ls-25 slide-animate"
                                data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.4s'
                                    }">
                                Trending Collection
                            </h5>
                            <h3 class="banner-title p-relative font-weight-bolder ls-50 slide-animate"
                                data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.2s'
                                    }"><span class="text-white mr-4">Roller</span>-skate
                            </h3>
                            <div class="btn-group slide-animate" data-animation-options="{
                                        'name': 'fadeInLeftShorter',
                                        'duration': '1s',
                                        'delay': '.8s'
                                    }">
                            </div>
                            <!-- End of .banner-content -->
                        </div>
                        <!-- End of .container -->
                    </div>
                </div>
                <!-- End of .intro-slide3 -->
            </div>
            <div class="swiper-pagination"></div>
            <button class="swiper-button-next"></button>
            <button class="swiper-button-prev"></button>
        </div>
        <!-- End of .swiper-container -->
    </section>
    <!-- End of .intro-section -->

    <div class="container">
        <div class="swiper-container appear-animate icon-box-wrapper br-sm mt-6 mb-6" data-swiper-options="{
                    'slidesPerView': 1,
                    'loop': false,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                }">
            <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
                <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                    <span class="icon-box-icon icon-shipping">
                        <i class="w-icon-truck"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title font-weight-bold mb-1">Free Shipping & Returns</h4>
                        <p class="text-default">For all orders over &#8360;99</p>
                    </div>
                </div>
                <div class="swiper-slide icon-box icon-box-side icon-box-primary">
                    <span class="icon-box-icon icon-payment">
                        <i class="w-icon-bag"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title font-weight-bold mb-1">Secure Payment</h4>
                        <p class="text-default">We ensure secure payment</p>
                    </div>
                </div>
                <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-money">
                    <span class="icon-box-icon icon-money">
                        <i class="w-icon-money"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title font-weight-bold mb-1">Money Back Guarantee</h4>
                        <p class="text-default">Any back within 30 days</p>
                    </div>
                </div>
                <div class="swiper-slide icon-box icon-box-side icon-box-primary icon-box-chat">
                    <span class="icon-box-icon icon-chat">
                        <i class="w-icon-chat"></i>
                    </span>
                    <div class="icon-box-content">
                        <h4 class="icon-box-title font-weight-bold mb-1">Customer Support</h4>
                        <p class="text-default">Call or email us 24/7</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Iocn Box Wrapper -->

        <div class="row category-banner-wrapper appear-animate pt-6 pb-8">
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed br-xs">
                    <figure>
                        <img src="assets/images/demos/demo1/categories/1-1.jpg" alt="Category Banner" width="610"
                            height="160" style="background-color: #ecedec;" />
                    </figure>
                    <div class="banner-content y-50 mt-0">
                        <h5 class="banner-subtitle font-weight-normal text-dark">Get up to <span
                                class="text-secondary font-weight-bolder text-uppercase ls-25">20% Off</span>
                        </h5>
                        <h3 class="banner-title text-uppercase">Sports Outfits<br><span
                                class="font-weight-normal                       text-capitalize">Collection</span>
                        </h3>
                        <div class="banner-price-info font-weight-normal">Starting at <span
                                class="text-secondary                       font-weight-bolder">&#8360;170.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed br-xs">
                    <figure>
                        <img src="assets/images/demos/demo1/categories/1-2.jpg" alt="Category Banner" width="610"
                            height="160" style="background-color: #636363;" />
                    </figure>
                    <div class="banner-content y-50 mt-0">
                        <h5 class="banner-subtitle font-weight-normal text-capitalize">New Arrivals</h5>
                        <h3 class="banner-title text-white text-uppercase">Accessories<br><span
                                class="font-weight-normal text-capitalize">Collection</span></h3>
                        <div class="banner-price-info text-white font-weight-normal text-capitalize">Only From
                            <span class="text-secondary font-weight-bolder">&#8360;90.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Category Banner Wrapper -->

        <div class="row deals-wrapper appear-animate mb-8">
            <div class="col-lg-9 mb-4">
                <div class="single-product h-100 br-sm">
                    <h4 class="title-sm title-underline font-weight-bolder ls-normal">
                        Deals Hot of The Day
                    </h4>

                    <div class="swiper">
                        <div class="swiper-container swiper-theme nav-top swiper-nav-lg" data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 1
                                }">
                            <div class="swiper-wrapper row cols-1 gutter-no">
                                <div class="swiper-slide">
                                    <div class="product product-single row">
                                        <div class="col-md-6">
                                            <div
                                                class="product-gallery product-gallery-sticky product-gallery-vertical">
                                                <div
                                                    class="swiper-container product-single-swiper swiper-theme nav-inner">
                                                    <div class="swiper-wrapper row cols-1 gutter-no">
                                                        <?php
                      $ret3= "SELECT file_name FROM  files WHERE status='3aYyRQYV'";
                      $result3 = mysqli_query($con, $ret3);
                      $path3 = "http://localhost/ecom/admin/upload/";
                     //  $row3 = mysqli_fetch_array($result3);
                      while($row = mysqli_fetch_array($result3)) {
                    ?>
                                                        <div class="swiper-slide">
                                                            <figure class="product-image">
                                                                <img src="<?= $path3.$row['file_name'] ?>"
                                                                    data-zoom-image="<?= $path3.$row['file_name'] ?>"
                                                                    alt="Product Image" width="800" height="900">
                                                            </figure>
                                                        </div>

                                                        <?php } ?>
                                                    </div>
                                                    <button class="swiper-button-next"></button>
                                                    <button class="swiper-button-prev"></button>
                                                    <div class="product-label-group">
                                                        <label class="product-label label-discount">25%
                                                            Off</label>
                                                    </div>
                                                </div>
                                                <div class="product-thumbs-wrap swiper-container" data-swiper-options="{
                                                            'direction': 'vertical',
                                                            'breakpoints': {
                                                                '0': {
                                                                    'direction': 'horizontal',
                                                                    'slidesPerView': 4
                                                                },
                                                                '992': {
                                                                    'direction': 'vertical',
                                                                    'slidesPerView': 'auto'
                                                                }
                                                            }
                                                        }">
                                                    <div
                                                        class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm">
                                                        <?php
                                                        $ret3= "SELECT file_name FROM  files WHERE status='3aYyRQYV'";
                                                        $result3 = mysqli_query($con, $ret3);
                                                        $path3 = "http://localhost/ecom/admin/upload/";
                                                        //  $row3 = mysqli_fetch_array($result3);
                                                        while($row = mysqli_fetch_array($result3)) {
                                                        ?>
                                                        <div class="product-thumb swiper-slide">
                                                            <img src="<?= $path3.$row['file_name'] ?>"
                                                                alt="Product thumb" width="60" height="68" />
                                                        </div>
                                                        <?php } ?>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <?php 
                                                $ret2= "SELECT * FROM product JOIN category ON  product.category_id=category.id WHERE product_id='96'";
                                                $result1 = mysqli_query($con, $ret2);
                                                $path = "http://localhost/ecom/admin/";
                                                $row1 = mysqli_fetch_array($result1);
                                                $status=$row1['cmn_id'];


                                                $ret9 = "SELECT * FROM product WHERE product_id = '96'";
                                                $result9 = mysqli_query($con, $ret9);
                                                $row9 = mysqli_fetch_array($result9);
                                                ?>
                                            <div class="product-details scrollable">
                                                <h2 class="product-title mb-1"><a
                                                        href="#"><?= $row1['product_name'] ?></a></h2>

                                                <hr class="product-divider">

                                                <div class="product-price"><ins
                                                        class="new-price ls-50">&#8360;<?= $row1['price'] ?>
                                                        -
                                                        &#8360;<?= $row1['cutoff_price'] ?></ins></div>

                                                <div class="product-countdown-container flex-wrap">
                                                    <label class="mr-2 text-default">Offer Ends In:</label>
                                                    <div class="product-countdown countdown-compact"
                                                        data-until="2023, 12, 30" data-compact="true">
                                                        629 days, 11: 59: 52</div>
                                                </div>

                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 80%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <a href="#" class="rating-reviews">(3 Reviews)</a>
                                                    <?= $row1['description'] ?>
                                                </div>

                                                <div
                                                    class="product-form product-variation-form product-size-swatch mb-3">
                                                </div>

                                                <div class="product-variation-price">
                                                    <!-- <span></span> -->
                                                </div>

                                                <div class="product-form container">
                                                <form action="cart.php" method='post'>
                                                <input type="hidden" name="page_id" value="<?php echo $pid; ?>">
                                            <input type="hidden" name="img" value="<?php echo $row9['image']; ?>">
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
                                                        </form>
                                                <div class="social-links-wrapper mt-1">
                                                    <div class="social-links">

                                                    </div>
                                                    <span class="divider d-xs-show"></span>
                                                    <div class="product-link-wrapper d-flex">
                                                        <a href="#"
                                                            class="btn-product-icon btn-wishlist w-icon-heart"></a>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                </div>

                            </div>
                            <button class="swiper-button-prev"></button>
                            <button class="swiper-button-next"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4">
                <div class="widget widget-products widget-products-bordered h-100">
                    <div class="widget-body br-sm h-100">
                        <h4 class="title-sm title-underline font-weight-bolder ls-normal mb-2">Top 20 Best
                            Seller</h4>
                        <div class="swiper">
                            <div class="swiper-container swiper-theme nav-top" data-swiper-options="{
                                        'slidesPerView': 1,
                                        'spaceBetween': 20,
                                        'breakpoints': {
                                            '576': {
                                                'slidesPerView': 2
                                            },
                                            '768': {
                                                'slidesPerView': 3
                                            },
                                            '992': {
                                                'slidesPerView': 1
                                            }
                                        }
                                    }">
                                <div class="swiper-wrapper row cols-lg-1 cols-md-3">
                                    <div class="swiper-slide product-widget-wrap">
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">
                                                <a href="">
                                                    <img src="assets/images/demos/demo1/products/2-1.jpg" alt="Product"
                                                        width="105" height="118" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    Kitchen Cooker
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">&#8360;150.60</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">

                                                <img src="assets/images/demos/demo1/products/2-2.jpg" alt="Product"
                                                    width="105" height="118" />

                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    Professional Pixel Camera
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">&#8360;215.68</ins><del
                                                        class="old-price">&#8360;230.45</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">

                                                <img src="assets/images/demos/demo1/products/2-3.jpg" alt="Product"
                                                    width="105" height="118" />

                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    Sport Women’s Wear
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">&#8360;220.20</ins><del
                                                        class="old-price">&#8360;300.62</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-widget-wrap">
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">

                                                <img src="assets/images/demos/demo1/products/2-4.jpg" alt="Product"
                                                    width="105" height="118" />

                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    Latest Speaker
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">&#8360;250.68</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">

                                                <img src="assets/images/demos/demo1/products/2-5.jpg" alt="Product"
                                                    width="105" height="118" />

                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    Men's Black Wrist Watch
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">&#8360;135.60</ins><del
                                                        class="old-price">&#8360;155.70</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">

                                                <img src="assets/images/demos/demo1/products/2-6.jpg" alt="Product"
                                                    width="105" height="118" />

                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    Wash Machine
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">&#8360;215.68</ins>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide product-widget-wrap">
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">

                                                <img src="assets/images/demos/demo1/products/2-7.jpg" alt="Product"
                                                    width="105" height="118" />

                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    Security Guard
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">&#8360;320.00</ins>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget bb-no">
                                            <figure class="product-media">

                                                <img src="assets/images/demos/demo1/products/2-8.jpg" alt="Product"
                                                    width="105" height="118" />

                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    Apple Super Notecom
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 100%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">&#8360;243.30</ins><del
                                                        class="old-price">&#8360;253.50</del>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product product-widget">
                                            <figure class="product-media">

                                                <img src="assets/images/demos/demo1/products/2-9.jpg" alt="Product"
                                                    width="105" height="118" />

                                            </figure>
                                            <div class="product-details">
                                                <h4 class="product-name">
                                                    HD Television
                                                </h4>
                                                <div class="ratings-container">
                                                    <div class="ratings-full">
                                                        <span class="ratings" style="width: 60%;"></span>
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    <ins class="new-price">&#8360;450.68</ins><del
                                                        class="old-price">&#8360;500.00</del>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="swiper-button-next"></button>
                                <button class="swiper-button-prev"></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End of Deals Wrapper -->
    </div>

    <section class="category-section top-category bg-grey pt-10 pb-10 appear-animate">
        <div class="container pb-2">
            <h2 class="title justify-content-center pt-1 ls-normal mb-5">Top Categories Of The Month</h2>
            <div class="swiper">
                <div class="swiper-container swiper-theme pg-show" data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 5
                                },
                                '992': {
                                    'slidesPerView': 6
                                }
                            }
                        }">
                    <div class="swiper-wrapper row cols-lg-6 cols-md-5 cols-sm-3 cols-2">
                        <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">
                            <img src="assets/images/demos/demo1/categories/2-1.jpg" alt="Category" width="130"
                                height="130">
                            <div class="category-content">
                                <h4 class="category-name">Fashion</h4>
                            </div>
                        </div>
                        <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">

                            <img src="assets/images/demos/demo1/categories/2-2.jpg" alt="Category" width="130"
                                height="130">

                            <div class="category-content">
                                <h4 class="category-name">Furniture</h4>

                            </div>
                        </div>
                        <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">

                            <img src="assets/images/demos/demo1/categories/2-3.jpg" alt="Category" width="130"
                                height="130">

                            <div class="category-content">
                                <h4 class="category-name">Shoes</h4>

                            </div>
                        </div>
                        <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">

                            <img src="assets/images/demos/demo1/categories/2-4.jpg" alt="Category" width="130"
                                height="130">

                            <div class="category-content">
                                <h4 class="category-name">Sports</h4>

                            </div>
                        </div>
                        <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">

                            <img src="assets/images/demos/demo1/categories/2-5.jpg" alt="Category" width="130"
                                height="130">
                            </a>
                            <div class="category-content">
                                <h4 class="category-name">Games</h4>

                            </div>
                        </div>
                        <div class="swiper-slide category category-classic category-absolute overlay-zoom br-xs">

                            <img src="assets/images/demos/demo1/categories/2-6.jpg" alt="Category" width="130"
                                height="130">
                            </a>
                            <div class="category-content">
                                <h4 class="category-name">Computers</h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of .category-section top-category -->

    <div class="container">
        <h2 class="title justify-content-center ls-normal mb-4 mt-10 pt-1 appear-animate">Popular Departments
        </h2>

        <div class="tab tab-nav-boxed tab-nav-outline appear-animate">
            <ul class="nav nav-tabs justify-content-center" role="tablist">
                <li class="nav-item mr-0 mb-2">
                    <a class="nav-link br-sm font-size-md ls-normal active" href="#tab1-4">Brand New</a>
                </li>
                <li class="nav-item mr-2 mb-2">
                    <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-1">Like New</a>
                </li>
                <li class="nav-item mr-2 mb-2">
                    <a class="nav-link br-sm font-size-md ls-normal" href="#tab1-2">Heavily Used</a>
                </li>
                <li class="nav-item mr-2 mb-2">
                    <a class="nav-link br-sm font-size-md ls-normal " href="#tab1-3">Lightly Used</a>
                </li>
            </ul>
        </div>

        <!-- End of Tab -->
        <div class="tab-content product-wrapper appear-animate">

            <div class="tab-pane pt-4" id="tab1-1">

                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    <?php
                    $ret2= "SELECT * FROM product WHERE `pstatus` = 'Like New' ";
                    $result1 = mysqli_query($con, $ret2);
                    $path = "http://localhost/ecom/admin/";
                    while($row1 = mysqli_fetch_array($result1)) {
                    ?>
                    <div class="product text-center">

                        <div class="product-wrap">

                            <figure class="product-media">
                                <a href="product-default.php?pid=<?= $row1['product_id'] ?>">
                                    <img src="<?= $path.$row1['image'] ?>" alt="Product" width="300" height="338" />

                                </a>
                                <div class="product-action-vertical">
                                    <!-- <a href="product-default.php?pid=<?= $row1['product_id'] ?>" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                    <a href="widhlist.php?pid<?= $row1['product_id'] ?>" class="btn-product-icon btn-wishlist w-icon-heart"
                                        title="Add to wishlist"></a>-->

                                </div>
                            </figure>
                            <div class="product-details">

                                <h4 class="product-name"><a href="#"><?= $row1['product_name'] ?></a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!--<a href="#" class="rating-reviews">(1 Reviews)</a>-->
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">&#8360;<?= $row1['price'] ?></ins>
                                </div>

                            </div>
                        </div>
                    </div>

                    <?php }?>
                </div>

            </div>

            <div class="tab-pane pt-4" id="tab1-2">

                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    <?php 
                    $ret1 = "SELECT * FROM product WHERE `pstatus` = 'Heavily Used' LIMIT 10";
                    $result1 = mysqli_query($con, $ret1);
                    $path = "http://localhost/ecom/admin/";
                    while($row1 = mysqli_fetch_array($result1)) {
                    ?>
                    <div class="product text-center">

                        <div class="product-wrap">

                            <figure class="product-media">
                                <a href="product-default.php?pid=<?= $row1['product_id'] ?>">
                                    <img src="<?= $path.$row1['image'] ?>" alt="Product" width="300" height="338" />

                                </a>
                                <div class="product-action-vertical">
                                    <!-- <a href="product-default.php?pid=<?= $row1['product_id'] ?>" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
            <a href="widhlist.php?pid<?= $row1['product_id'] ?>" class="btn-product-icon btn-wishlist w-icon-heart"
                title="Add to wishlist"></a>-->

                                </div>
                            </figure>
                            <div class="product-details">

                                <h4 class="product-name"><a href="#"><?= $row1['product_name'] ?></a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!--<a href="#" class="rating-reviews">(1 Reviews)</a>-->
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">&#8360;<?= $row1['price'] ?></ins>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php }?>

                </div>

            </div>

            <div class="tab-pane pt-4" id="tab1-3">

                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    <?php  
                    $ret1 = "SELECT * FROM product WHERE `pstatus` = 'Lightly Used' LIMIT 10";
                    $result1 = mysqli_query($con, $ret1);
                    $path = "http://localhost/ecom/admin/";
                    while($row1 = mysqli_fetch_array($result1)) {
                    ?>
                    <div class="product text-center">

                        <div class="product-wrap">

                            <figure class="product-media">
                                <a href="product-default.php?pid=<?= $row1['product_id'] ?>">
                                    <img src="<?= $path.$row1['image'] ?>" alt="Product" width="300" height="338" />

                                </a>
                                <div class="product-action-vertical">
                                    <!-- <a href="product-default.php?pid=<?= $row1['product_id'] ?>" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
            <a href="widhlist.php?pid<?= $row1['product_id'] ?>" class="btn-product-icon btn-wishlist w-icon-heart"
                title="Add to wishlist"></a>-->

                                </div>
                            </figure>
                            <div class="product-details">

                                <h4 class="product-name"><a href="#"><?= $row1['product_name'] ?></a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!--<a href="#" class="rating-reviews">(1 Reviews)</a>-->
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">&#8360;<?= $row1['price'] ?></ins>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>

            </div>

            <div class="tab-pane active pt-4" id="tab1-4">

                <div class="row cols-xl-5 cols-md-4 cols-sm-3 cols-2">
                    <?php  $ret1 = "SELECT * FROM product  WHERE `pstatus` = 'Brand New' LIMIT 10";
                $result1 = mysqli_query($con, $ret1);
                $path = "http://localhost/ecom/admin/";
                while($row1 = mysqli_fetch_array($result1)) {?>
                    <div class="product text-center">

                        <div class="product-wrap">

                            <figure class="product-media">
                                <a href="product-default.php?pid=<?= $row1['product_id'] ?>">
                                    <img src="<?= $path.$row1['image'] ?>" alt="Product" width="300" height="338" />

                                </a>
                                <div class="product-action-vertical">
                                    <!--<a href="product-default.php?pid=<?= $row1['product_id'] ?>" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
            <a href="widhlist.php?pid<?= $row1['product_id'] ?>" class="btn-product-icon btn-wishlist w-icon-heart"
                title="Add to wishlist"></a>-->

                                </div>
                            </figure>
                            <div class="product-details">

                                <h4 class="product-name"><a href="#"><?= $row1['product_name'] ?></a>
                                </h4>
                                <div class="ratings-container">
                                    <div class="ratings-full">
                                        <span class="ratings" style="width: 60%;"></span>
                                        <span class="tooltiptext tooltip-top"></span>
                                    </div>
                                    <!--<a href="#" class="rating-reviews">(1 Reviews)</a>-->
                                </div>
                                <div class="product-price">
                                    <ins class="new-price">&#8360;<?= $row1['price'] ?></ins>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>

            <!-- End of Tab Pane -->
        </div>
        <!-- End of Tab Content -->

        <div class="row category-cosmetic-lifestyle appear-animate mb-5">
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed category-banner-1 br-xs">
                    <figure>
                        <img src="assets/images/demos/demo1/categories/3-1.jpg" alt="Category Banner" width="610"
                            height="200" style="background-color: #3B4B48;" />
                    </figure>
                    <div class="banner-content y-50 pt-1">
                        <h5 class="banner-subtitle font-weight-bold text-uppercase">Natural Process</h5>
                        <h3 class="banner-title font-weight-bolder text-capitalize text-white">Cosmetic
                            Makeup<br>Professional</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="banner banner-fixed category-banner-2 br-xs">
                    <figure>
                        <img src="assets/images/demos/demo1/categories/3-2.jpg" alt="Category Banner" width="610"
                            height="200" style="background-color: #E5E5E5;" />
                    </figure>
                    <div class="banner-content y-50 pt-1">
                        <h5 class="banner-subtitle font-weight-bold text-uppercase">Trending Now</h5>
                        <h3 class="banner-title font-weight-bolder text-capitalize">Women's
                            Lifestyle<br>Collection</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Category Cosmetic Lifestyle -->

        <div class="product-wrapper-1 appear-animate mb-5">
            <div class="title-link-wrapper pb-1 mb-4">
                <h2 class="title ls-normal mb-0">Clothing & Apparel</h2>
                <a href="category.php?name=34&category=Fashion"
                    class="font-size-normal font-weight-bold ls-25 mb-0">More
                    Products<i class="w-icon-long-arrow-right"></i></a>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4 mb-4">
                    <div class="banner h-100 br-sm" style="background-image: url(assets/images/demos/demo1/banners/2.jpg); 
                                background-color: #ebeced;">
                        <div class="banner-content content-top">
                            <h5 class="banner-subtitle font-weight-normal mb-2">Weekend Sale</h5>
                            <hr class="banner-divider bg-dark mb-2">
                            <h3 class="banner-title font-weight-bolder ls-25 text-uppercase">
                                New Arrivals<br> <span class="font-weight-normal text-capitalize">Collection</span>
                            </h3>

                        </div>
                    </div>
                </div>
                <!-- End of Banner -->
                <div class="col-lg-9 col-sm-8">
                    <div class="swiper-container swiper-theme" data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                        <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                            <?php
                                $ret3 = "SELECT * FROM product JOIN category ON product.category_id=category.id WHERE category.name = 'Fashion' LIMIT 10 ";
                                $result3 = mysqli_query($con, $ret3);
                                $path = "http://localhost/ecom/admin/";
                                while($row3 = mysqli_fetch_array($result3)) {
                                ?>
                            <div class="swiper-slide product-col">


                                <div class="product-wrap product text-center">

                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="<?= $path.$row3['image'] ?>" alt="Product" width="216"
                                                height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><?= $row3['product_name'] ?></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="#" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">&#8360;<?= $row3['price'] ?></ins><del>
                                                <ins class="old-price">&#8360;<?= $row3['cutoff_price'] ?></del>
                                        </div>
                                    </div>



                                </div>
                                <!--clothing and apperal -->
                            </div>
                            <?php }?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Product Wrapper 1 -->

        <div class="product-wrapper-1 appear-animate mb-8">
            <div class="title-link-wrapper pb-1 mb-4">
                <h2 class="title ls-normal mb-0">Consumer Electric</h2>
                <a href="category.php?name=39&category=Electronics"
                    class="font-size-normal font-weight-bold ls-25 mb-0">More
                    Products<i class="w-icon-long-arrow-right"></i></a>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4 mb-4">
                    <div class="banner h-100 br-sm" style="background-image: url(assets/images/demos/demo1/banners/3.jpg); 
                            background-color: #252525;">
                        <div class="banner-content content-top">
                            <h5 class="banner-subtitle text-white font-weight-normal mb-2">New Collection</h5>
                            <hr class="banner-divider bg-white mb-2">
                            <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">
                                Top Camera <br> <span class="font-weight-normal text-capitalize">Mirrorless</span>
                            </h3>

                        </div>
                    </div>
                </div>
                <!-- End of Banner -->
                <div class="col-lg-9 col-sm-8">
                    <div class="swiper-container swiper-theme" data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                        <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                            <?php
                                $ret4 = "SELECT * FROM product JOIN category ON product.category_id=category.id WHERE category.name = 'Electronics' LIMIT 10 ";
                                $result4 = mysqli_query($con, $ret4);
                                $path = "http://localhost/ecom/admin/";
                                while($row4 = mysqli_fetch_array($result4)) {
                                ?>
                            <div class="swiper-slide product-col">


                                <div class="product-wrap product text-center">

                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="<?= $path.$row4['image'] ?>" alt="Product" width="216"
                                                height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><?= $row4['product_name'] ?></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="#" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">&#8360;<?= $row4['price'] ?></ins><del>
                                                <ins class="old-price">&#8360;<?= $row4['cutoff_price'] ?></del>
                                        </div>
                                    </div>



                                </div>
                                <!--clothing and apperal -->
                            </div>
                            <?php }?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <!-- End of Produts -->
                </div>
            </div>
        </div>
        <!-- End of Product Wrapper 1 -->

        <div class="banner banner-fashion appear-animate br-sm mb-9" style="background-image: url(assets/images/demos/demo1/banners/4.jpg);
                    background-color: #383839;">
            <div class="banner-content align-items-center">
                <div class="content-left d-flex align-items-center mb-3">
                    <div class="banner-price-info font-weight-bolder text-secondary text-uppercase lh-1 ls-25">
                        25
                        <sup class="font-weight-bold">%</sup><sub class="font-weight-bold ls-25">Off</sub>
                    </div>
                    <hr class="banner-divider bg-white mt-0 mb-0 mr-8">
                </div>
                <div class="content-right d-flex align-items-center flex-1 flex-wrap">
                    <div class="banner-info mb-0 mr-auto pr-4 mb-3">
                        <h3 class="banner-title text-white font-weight-bolder text-uppercase ls-25">For Today's
                            Fashion</h3>
                        <p class="text-white mb-0">Use code
                            <span class="text-dark bg-white font-weight-bold ls-50 pl-1 pr-1 d-inline-block">Black
                                <strong>12345</strong></span> to get best offer.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Banner Fashion -->

        <div class="product-wrapper-1 appear-animate mb-7">
            <div class="title-link-wrapper pb-1 mb-4">
                <h2 class="title ls-normal mb-0">Home Appliances</h2>
                <a href="features.php?fid=7&name=HomeAppliances"
                    class="font-size-normal font-weight-bold ls-25 mb-0">More
                    Products<i class="w-icon-long-arrow-right"></i></a>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-4 mb-4">
                    <div class="banner h-100 br-sm" style="background-image: url(assets/images/demos/demo1/banners/5.jpg); 
                            background-color: #EAEFF3;">
                        <div class="banner-content content-top">
                            <h5 class="banner-subtitle font-weight-normal mb-2">Deals And Promotions</h5>
                            <hr class="banner-divider bg-dark mb-2">
                            <h3 class="banner-title font-weight-bolder text-uppercase ls-25">
                                Trending <br> <span class="font-weight-normal text-capitalize">House
                                    Utensil</span>
                        </div>
                    </div>
                </div>
                <!-- End of Banner -->
                <div class="col-lg-9 col-sm-8">
                    <div class="swiper-container swiper-theme" data-swiper-options="{
                                'spaceBetween': 20,
                                'slidesPerView': 2,
                                'breakpoints': {
                                    '992': {
                                        'slidesPerView': 3
                                    },
                                    '1200': {
                                        'slidesPerView': 4
                                    }
                                }
                            }">
                        <div class="swiper-wrapper row cols-xl-4 cols-lg-3 cols-2">
                            <?php
                                $ret5 = "SELECT * FROM product JOIN features ON product.feature_id=features.id WHERE features.name = 'HomeAppliances' LIMIT 10 ";
                                $result5 = mysqli_query($con, $ret5);
                                $path = "http://localhost/ecom/admin/";
                                while($row5 = mysqli_fetch_array($result5)) {
                                ?>
                            <div class="swiper-slide product-col">


                                <div class="product-wrap product text-center">

                                    <figure class="product-media">
                                        <a href="#">
                                            <img src="<?= $path.$row5['image'] ?>" alt="Product" width="216"
                                                height="243" />
                                        </a>
                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-cart w-icon-cart"
                                                title="Add to cart"></a>
                                            <a href="#" class="btn-product-icon btn-wishlist w-icon-heart"
                                                title="Add to wishlist"></a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <h4 class="product-name"><?= $row5['product_name'] ?></h4>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width: 60%;"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="#" class="rating-reviews">(3
                                                reviews)</a>
                                        </div>
                                        <div class="product-price">
                                            <ins class="new-price">&#8360;<?= $row5['price'] ?></ins><del>
                                                <ins class="old-price">&#8360;<?= $row5['cutoff_price'] ?></del>
                                        </div>
                                    </div>



                                </div>
                                <!--clothing and apperal -->
                            </div>
                            <?php }?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <!-- End of Produts -->
                </div>
            </div>
        </div>
        <!-- End of Product Wrapper 1 -->


        <!-- End of Brands Wrapper -->


        <h2 class="title title-underline mb-4 ls-normal appear-animate">Your Recent Views</h2>
        <div class="swiper-container swiper-theme shadow-swiper appear-animate pb-4 mb-8" data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 2,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 3
                        },
                        '768': {
                            'slidesPerView': 5
                        },
                        '992': {
                            'slidesPerView': 6
                        },
                        '1200': {
                            'slidesPerView': 8
                        }
                    }
                }">
            <div class="swiper-wrapper row cols-xl-8 cols-lg-6 cols-md-4 cols-2">
                <div class="swiper-slide product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">
                            <a href="https://www.portotheme.com/html/wolmart/product-defa#">
                                <img src="assets/images/demos/demo1/products/7-1.jpg" alt="Category image" width="130"
                                    height="146" style="background-color: #fff" />
                            </a>
                        </figure>
                        <h4 class="product-name">
                            Women's Fashion Handbag
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">

                            <img src="assets/images/demos/demo1/products/7-2.jpg" alt="Category image" width="130"
                                height="146" style="background-color: #fff" />

                        </figure>
                        <h4 class="product-name">
                            Electric Frying Pan
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">

                            <img src="assets/images/demos/demo1/products/7-3.jpg" alt="Category image" width="130"
                                height="146" style="background-color: #fff" />

                        </figure>
                        <h4 class="product-name">
                            Black Winter Skating
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">

                            <img src="assets/images/demos/demo1/products/7-4.jpg" alt="Category image" width="130"
                                height="146" style="background-color: #fff" />

                        </figure>
                        <h4 class="product-name">
                            HD Television
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">

                            <img src="assets/images/demos/demo1/products/7-5.jpg" alt="Category image" width="130"
                                height="146" style="background-color: #fff" />

                        </figure>
                        <h4 class="product-name">
                            Home Sofa
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">

                            <img src="assets/images/demos/demo1/products/7-6.jpg" alt="Category image" width="130"
                                height="146" style="background-color: #fff" />

                        </figure>
                        <h4 class="product-name">
                            USB Receipt
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">

                            <img src="assets/images/demos/demo1/products/7-7.jpg" alt="Category image" width="130"
                                height="146" style="background-color: #fff" />

                        </figure>
                        <h4 class="product-name">
                            Electric Rice-Cooker
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
                <div class="swiper-slide product-wrap mb-0">
                    <div class="product text-center product-absolute">
                        <figure class="product-media">

                            <img src="assets/images/demos/demo1/products/7-8.jpg" alt="Category image" width="130"
                                height="146" style="background-color: #fff" />

                        </figure>
                        <h4 class="product-name">
                            Table Lamp
                        </h4>
                    </div>
                </div>
                <!-- End of Product Wrap -->
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <!-- End of Reviewed Producs -->
    </div>
    <!--End of Catainer -->
</main>
<!-- End of Main -->

<!--footer-->
<?php 
     include('inc/footer.php');
     ?>