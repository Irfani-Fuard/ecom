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
            <h1>Product Details</h1>
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
                <h3 class="card-title">Product</h3>
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

                <strong>Feature</strong>
                <p class="text-muted p1">
                <?php
                    if(isset($_GET['fid'])){
                        $fid=$_GET['fid'];
                        $result = mysqli_query($con,"SELECT * FROM features WHERE id=$fid");
                        $row = mysqli_fetch_array($result);
                        echo $row['name'];
                    }
                ?>
                </p>
                <hr>

                <strong>Status</strong>
                <p class="text-muted p1">
                <?php
                    if(isset($_GET['pstatus'])){
                        $pstatus=$_GET['pstatus'];
                        echo $pstatus;
                    }
                ?>
                </p>
                <hr>

                <strong>Description</strong>
                <p class="text-muted p1">
                <?php
                    if(isset($_GET['id'])){
                        $id=$_GET['id'];
                        $result = mysqli_query($con,"SELECT * FROM product WHERE product_id=$id");
                        $row = mysqli_fetch_array($result);
                        echo $row['description'];

                    }
                ?>
                </p>
                <hr>

                <strong>Price</strong>
                <p class="text-muted p1">
                <?php
                    if(isset($_GET['price'])){
                    $price = $_GET['price'];
                    echo $price;
                    }
                ?>
                </p>
                <hr> 

                <strong>Cutoff Price</strong>
                <p class="text-muted p1">
                <?php
                    if(isset($_GET['cprice'])){
                    $cprice = $_GET['cprice'];
                    echo $cprice;
                    }
                ?>
                </p>
                <hr>
            
                <strong>Stock</strong>
                <p class="text-muted p1">
                <?php
                    if(isset($_GET['stock'])){
                    $stock = $_GET['stock'];
                    echo $stock;
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
                        $result = mysqli_query($con,"SELECT * FROM product WHERE product_id=$id");
                        $row = mysqli_fetch_array($result);    
                         echo "<td>" . "<img src=".$row['image'].' width=350px height="350px">';} ?>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <div class="row">
                            
                              <?php

                            if (isset($_GET['status'])) {
                              $status = $_GET['status'];
                              $result1 = mysqli_query($con, "SELECT * FROM files WHERE status='$status'");
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