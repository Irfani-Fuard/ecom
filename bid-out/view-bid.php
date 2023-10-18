<?php
session_start();

include('inc/header.php'); 
include('inc/config.php');
$pid=$_SESSION['id'];


if(isset($_POST['crt'])){
    $addcart=$_POST['crt'];

     if(isset($_SESSION['cart'])){
            $pid_array=array_column($_SESSION['cart'],"pid");

                if(!in_array($_POST['page_id'],$pid_array)){
                    $index=count($_SESSION['cart']);
                    $item = array(
                        'pid'=> $_POST['page_id'],
                        'pname'=> $_POST['pname'],
                        'price'=> $_POST['price'],
                        'qty'=> $_POST['qty'],
                        'image'=> $_POST['img']
                    );
                    $_SESSION['cart'][$index]=$item;
                  
                    echo "<script>alert('Product Added Successfully!');</script>";
                   // header("product-default.php");

                } else{
                    echo "<script>alert('Product Already Added!');</script>";
                   // header("product-default.php");
                }
        }

        else{
            $item = array(
                'pid'=> $_POST['page_id'],
                'pname'=> $_POST['pname'],
                'price'=> $_POST['price'],
                'qty'=> $_POST['qty'],
                'page_id'=> $_POST['page_id'],
                'image'=> $_POST['img']
                
            );

            $_SESSION['cart'][0]=$item;
            echo "<script>alert('Product Added Successfully!');</script>";
           // header("cart.php");
        }
}

//print_r($_SESSION["cart"]);
?>

        <!-- Start of Main -->
        <main class="main cart">
            <!-- Start of Breadcrumb -->
            <nav class="breadcrumb-nav">
                <div class="container">
                    <ul class="breadcrumb shop-breadcrumb bb-no">
                        <li class="active"><a href="cart.html">Shopping Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="order.html"></a></li>
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
                                        <th class="product-price"><span>Price</span></th>
                                        <th class="product-quantity"><span>Quantity</span></th>
                                        <th class="product-subtotal"><span>Sub Total</span></th>
                                        <th class="product-subtotal"><span>Action</span></th>
                                    </tr>
                                    <?php 
                                    if(isset($_GET['del'])){
                                        foreach( $_SESSION["cart"] as $keys=>$values){
                                            if($values['pid']==$_GET['del']){
                                                unset($_SESSION["cart"][$keys]);

                                            }

                                            }
                                    }
                                    
                                    
                                    ?>
                                </thead>
                                <tbody>
                                <?php 
                                $path = "http://localhost/ecom/admin/";
                                    if(!empty($_SESSION["cart"])){
                                        $total=0;
                                            foreach( $_SESSION["cart"] as $keys=>$values){
                                                $amt= $values['qty'] * $values['price'];
                                                $total+=$amt;
                                        ?>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <div class="p-relative">
                                            
                                                    <figure>
                                                        <img src="<?= $path.$values['image'] ?>" alt="product"
                                                            width="300" height="338">
                                                    </figure>
                                            
                                                <button type="submit" class="btn btn-close"><i
                                                        class="fas fa-times"></i></button>
                                            </div>
                                        </td>
                                  
                                        <td class="product-name">
                                            
                                            <?php echo  "{$values['pname']} "?>
                                            </a>
                                        </td>
                                        <td class="product-price"><span class="amount"> <?php echo  "{$values['price']}"?></span></td>
                                        <td class="product-quantity">
                                            <div class="input-group">
                                                <input class="form-control" type="number" value="<?= $values['qty'] ?>" min="1" max="100000">
                                               
                                            </div>
                                        </td>
                                        <td class="product-subtotal">
                                            <span class="amount"><?php echo  "{$amt}"?></span>
                                        </td>
                                        <td class="product-subtotal">
                                       
                                        <a href="cart.php?del=<?php echo  "{$_SESSION['id']}"?>" class="btn btn-rounded btn-default btn-clear">Remove</a>    
                                    </td>
                                    </tr>
                                   <?php  } }
                                            else{
                                                echo "<script type='text/javascript'>window.top.location='index.php';</script>";

                                            }
                                   ?>
                    
                                </tbody>
                            </table>

                            <div class="cart-action mb-6">
                                <a href="index.php" class="btn btn-dark btn-rounded btn-icon-left btn-shopping mr-auto"><i class="w-icon-long-arrow-left"></i>Continue Shopping</a>
                               
                            </div>
                        </div>
                        <div class="col-lg-4 sticky-sidebar-wrapper">
                            <div class="sticky-sidebar">
                                <div class="cart-summary mb-4">
                                    <h3 class="cart-title text-uppercase">Cart Totals</h3>
                                   <hr class="divider mb-6">
                                    <div class="order-total d-flex justify-content-between align-items-center">
                                        <label>Total</label>
                                        <span class="ls-50"><?php echo  "{$total}"?></span>
                                    </div>
                                    <a href="#"
                                        class="btn btn-block btn-dark btn-icon-right btn-rounded  btn-checkout">
                                        Proceed to checkout<i class="w-icon-long-arrow-right"></i></a>
                                </div>
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