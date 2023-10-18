<?php 
include ('inc/header.php');
include ('inc/config.php');
include ('inc/myfunctions.php');

if(isset($_POST['id'])){
    $id = $_POST['id'];

    $sql = "SELECT * FROM product WHERE product_id=$id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<br> id: ". $row["description"].  "<br>";
      
    } 
}

?>

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Bid Product Details</h1>
          </div>
         </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

           

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Bid Product</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong>Name</strong>
                <p class="text-muted">
                <?php
                    if(isset($_GET['name'])){
                    $name = $_GET['name'];
                    echo $name;
                    }
                ?>
                </p>
                <hr>

                <strong>Category</strong>
                <p class="text-muted p1">
                <?php
                    if(isset($_GET['cname'])){
                        $cname=$_GET['cname'];
                        echo $cname;
                    }
                ?>
                </p>
               
                <hr>

                <strong>Seller Name</strong>
                <p class="text-muted p1">
                <?php
                    if(isset($_GET['pstatus'])){
                        $pstatus=$_GET['pstatus'];
                        $result = mysqli_query($con,"SELECT * FROM seller WHERE id=$pstatus");
                        $row = mysqli_fetch_array($result);
                        echo $row['Seller_name'];
                    }
                ?>
                </p>
                <hr>

                <strong>Description</strong>
                <p class="text-muted p1">
                <?php
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $result = mysqli_query($con,"SELECT * FROM bidding_product WHERE product_id=$id");
                        $row = mysqli_fetch_array($result);
                        echo $row['description'];

                    }
                ?>
                </p>
                <hr>

                <strong>Minimum Bid Price</strong>
                <p class="text-muted p1">
                <?php
                    if(isset($_GET['price'])){
                    $price = $_GET['price'];
                    echo $price;
                    }
                ?>
                </p>
                <hr>

                <strong>Bid Price</strong>
                <p class="text-muted p1">
                <?php
                    if(isset($_GET['bid_amount'])){
                        $bid_amount=$_GET['bid_amount'];
                        echo $bid_amount;
                    }
                ?>
                </p>
                <hr> 

                <strong>Closing Date & Time</strong>
                <p class="text-muted p1">
                <?php
                    if(isset($_GET['time'])){
                    $time = $_GET['time'];
                    echo $time;
                    }

                   
                ?>
                </p>
                <hr>
            
                <strong>Bid Status</strong>
                <p class="text-muted p1">
                <?php
                    if(isset($_GET['status'])){
                    $status= $_GET['status'];
                    $color = ($status === 'active') ? 'green' : 'red';
                    echo '<span style="color: ' . $color . ';">' . $status . '</span>';
                    }
                ?>
                </p>
                <hr>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-header p-2 ">
                <ul class="nav nav-pills">
                  <li class="card-title ">Product Images</li>

                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                     
                      <!-- /.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                        <?php
                        if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $result = mysqli_query($con,"SELECT * FROM bidding_product  WHERE product_id=$id");
                        $row = mysqli_fetch_array($result);    
                         echo "<td>" . "<img src=".$row['image'].' width=350px height="350px">';} ?>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            
                              <?php

                            if(isset($_GET['cmn'])){
                             $cmn = $_GET['cmn'];
                             $result1 = mysqli_query($con, "SELECT * FROM  bidding_images  WHERE status='$cmn'");
                              while ($row1 = mysqli_fetch_array($result1)) {
                                echo '<div class="col-sm-6">';
                                  echo '<img class="images" src="upload/' . $row1['file_name'] . '" width="150px">';
                                  echo '</div>';
                              }
                              } ?>
                            
                            <!-- /.col -->
                            <div class="col-sm-6">
                              <!-- <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
                              <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo"> -->
                            </div>
                            <!-- /.col -->
                          </div>
                          <!-- /.row -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.post -->
                  </div>
                </div>
                  </div>

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include ('inc/footer.php');
?>