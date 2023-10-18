
<?php 
include ('inc/header.php');
include ('inc/config.php');
include ('inc/myfunctions.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
        
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 ">
          <div class="card-header">
          <div class="row">
          <div class="col-md-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Seller</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="seller.php" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i>
                Saller
                </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Bid-Out Products</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="bidding-product.php" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i>
                New products 
                </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Bid-Out </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="../all-category.php" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i>
                Start Bidding
                </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-3">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">My Bid</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="../view-mybid.php" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i>
                View my bid
                </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            
            <div class="row">
              <div class="col-md-6">
                <!-- DIRECT CHAT -->
              
                <!--/.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
          
            <!-- /.card -->
          </div>
          <!-- /.col -->

          
            

            

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  
<?php
include('inc/footer.php');
?>

<?php 
        $email=$_SESSION['mail'];
       // $sql = "SELECT * FROM  bidding_product  WHERE winner='$email' ORDER BY timestamp DESC LIMIT 1";
        $sql = "SELECT * FROM notifications WHERE user_id = '$email' ORDER BY timestamp DESC LIMIT 1";
        $result = mysqli_query($con, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $notificationId = $row["id"];
                $message = $row["message"];
                $timestamp = $row["timestamp"];
                $status = $row["status"];
        
              //  echo "<div class='notification'>";
                echo "<script>
             
                $(document).ready(function() {
                    // Create and display the Toast notification when the page loads
                    $(document).Toasts('create', {
                        class: 'bg-success',
                        title: '$timestamp',
                        subtitle: 'winner',
                        body: '$message.'
                    });
                });
               
                
              </script>";
                //echo "</div>";
               
            }
        } else {
            //echo "No notifications.";
        }
        
        ?>