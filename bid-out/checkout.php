<?php
session_start();
include('inc/header.php');
include('inc/config.php');

?>

        <!-- Start of Main -->
        <main class="main checkout">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="passed">Shopping Cart</li>
                        <li class="active">Checkout</li>
                        <li>Order Complete</li>
                    </ul>
                </div>
            </nav>
            <!-- End of Breadcrumb -->


            <!-- Start of PageContent -->
            <div class="page-content">
                <div class="container">
        
                    <form class="form checkout-form" action="#" method="post" id="order">
                        <div class="row mb-9">
                            <div class="col-lg-7 pr-lg-4 mb-4">
                                <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                                    Billing Details
                                </h3>
                                <div class="row gutter-sm">
                                <div id="message" class="col-lg-14"></div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>First name *</label>
                                            <input type="text" id="fname" name="fname" class="form-control form-control-md" >
							                <span class="error" id="fname_err"> </span>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label>Last name *</label>
                                            <input type="text" id="lname" name="lname" class="form-control form-control-md" >
							                <span class="error" id="lname_err"> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address *</label>
                                    <input type="text" id="address" name="address" class="form-control form-control-md" >
							        <span class="error" id="address_err"> </span>
                                </div>
                                <div class="row gutter-sm">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ZIP *</label>
                                            <input type="text" id="zip" name="zip" class="form-control form-control-md" >
							                <span class="error" id="zip_err"> </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>District *</label>
                                            <div class="select-box">
                                                <select name="district" class="form-control form-control-md">
                                                    <option value="default" selected="selected">--Select--</option>
                                                    <option value="Ampara">Ampara</option>
                                                    <option value="Anuradhapura">Anuradhapura</option>
                                                    <option value="Badulla">Badulla</option>
                                                    <option value="Batticaloa">Batticaloa</option>
                                                    <option value="Colombo">Colombo</option>
                                                    <option value="Galle">Galle</option>
                                                    <option value="Gampaha">Gampaha</option>
                                                    <option value="Hambantota">Hambantota</option>
                                                    <option value="Jaffna">Jaffna</option>
                                                    <option value="Kalutara">Kalutara</option>
                                                    <option value="Kandy">Kandy</option>
                                                    <option value="Kegalle">Kegalle</option>
                                                    <option value="Kurunegala">Kurunegala</option>
                                                    <option value="Mannar">Mannar</option>
                                                    <option value="Matale">Matale</option>
                                                    <option value="Matara">Matara</option>
                                                    <option value="Monaragala">Monaragala</option>
                                                    <option value="Mullaitivu">Mullaitivu</option>
                                                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                                    <option value="Puttalam">Puttalam</option>
                                                    <option value="Ratnapura">Ratnapura</option>
                                                    <option value="Ratnapura">Ratnapura</option>
                                                    <option value="Vavuniya">Vavuniya</option>
                                                </select>
                                                <span class="error" id="district_err"> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-7">
                                    <label>Contact No *</label>
                                    <input type="text" id="mnumber" name="mnumber" class="form-control form-control-md" >
                                    <span class="error" id="mnumber_err"> </span>
                                </div>
                                <div class="form-group mb-7">
                                    <label>Email address *</label>
                                    <input type="text" id="email" name="email" class="form-control form-control-md" >
							        <span class="error" id="email_err"> </span>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="order-notes">Order notes (optional)</label>
                                    <textarea class="form-control mb-0" id="order-notes" name="order-notes" cols="30"
                                        rows="4"
                                        placeholder="Notes about your order, e.g special notes for delivery"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-5 mb-4 sticky-sidebar-wrapper">
                                <div class="order-summary-wrapper sticky-sidebar">
                                    <h3 class="title text-uppercase ls-10">Your Order</h3>
                                    <div class="order-summary">
                                    <table class="shop-table cart-table mb-8">
                                <thead>
                                    <tr>
                                        <th class="product-name"><span>Name</span></th>
                                        <th class="product-price"><span>Price</span></th>
                                        <th class="product-quantity"><span>Quantity</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                // $url = "http://localhost/";
                                $path = "http://localhost/ecom/admin/";
                                    if(!empty($_SESSION["cart"])){
                                        $total=0;
                                            foreach( $_SESSION["cart"] as $keys=>$values){
                                                $amt= $values['qty'] * $values['price'];
                                                $total+=$amt;
                                        ?>
                                    <tr>
                                        <td class="product-name">
                                            <?php echo  "{$values['pname']} "?>
                                            </a>
                                        </td>
                                        <td class="product-price"><span class="amount"> <?php echo  "{$values['price']}"?></span></td>
                                        <td class="product-quantity">
                                            <div class="input-group" style="text-align:center;">
                                            <span class="amount" ><?= $values['qty'] ?></span>
                                               
                                            </div>
                                        </td>
                                    
                                       
                                    </td>
                                    </tr>
                                   <?php  } }
                                            else{
                                                echo "<script type='text/javascript'>window.top.location='index.php';</script>";

                                            }
                                   ?>
                                        </tbody>
                                    </table>
                                      
                                   <div class="cart-summary ">
                                   <h3 class="title text-uppercase ls-10">Total</h3>
                                   <hr class="divider mb-6">
                                    <div class="order-total d-flex justify-content-between align-items-center">
                                        <label><strong>Total</strong></label>
                                        <span class="ls-50"><strong><?php echo  "{$total}"?></strong></span>
                                    </div>
                                        <div class="payment-methods" id="payment_method">
                                            <h4 class="title font-weight-bold ls-25 pb-0 mb-1">Payment Methods</h4>
                                            <div class="accordion payment-accordion">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#cash-on-delivery" class="collapse">Direct Bank Transfor</a>
                                                    </div>
                                                    <div id="cash-on-delivery" class="card-body expanded">
                                                        <p class="mb-0">
                                                            Make your payment directly into our bank account. 
                                                            Please use your Order ID as the payment reference. 
                                                            Your order will not be shipped until the funds have cleared in our account.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#payment" class="expand">Check Payments</a>
                                                    </div>
                                                    <div id="payment" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="#delivery" class="expand">Cash on delivery</a>
                                                    </div>
                                                  
                                                </div>
                                                <div class="card p-relative">
                                                    <div class="card-header">
                                                        <a href="#paypal" class="expand">Paypal</a>
                                                    </div>
                                                    <a href="https://www.paypal.com/us/webapps/mpp/paypal-popup" class="text-primary paypal-que" 
                                                        onclick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal',
                                                        'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); 
                                                        return false;">What is PayPal?
                                                    </a>
                                                    <div id="paypal" class="card-body collapsed">
                                                        <p class="mb-0">
                                                            Pay via PayPal, you can pay with your credit cart if you
                                                            don't have a PayPal account.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group place-order pt-6">
                                            <button type="submit" class="btn btn-dark btn-block btn-rounded" id="submitbtn">Place Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End of PageContent -->
        </main>
        <script src="order.js"></script>
        <!-- End of Main -->
        <?
        include("inc/footer.php");
        ?>