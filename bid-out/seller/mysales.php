
<?php 

include ('inc/header.php');
include ('inc/config.php');
include ('inc/myfunctions.php');

?>
  
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Sales Detalis</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">My Sales Details</h3>
              </div>
              <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Product</th>
                    <th>Low Bid Price</th>
                    <th>Name</th>
                    <th>Bid Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
               $email=$_SESSION['mail'];

              

               $ret10 = "SELECT * FROM seller WHERE Email='$email'";
               $result10 = mysqli_query($con, $ret10);
               
               if ($result10) {
                   $row10 = mysqli_fetch_array($result10);
                   if ($row10) {

                    $sid= $row10['id'];
                    $ret9= "SELECT * FROM  bidding_product JOIN bidding ON  bidding_product.product_id=bidding.product_id WHERE bidding_product.pstatus ='$sid'";
                    $result9 = mysqli_query($con, $ret9);
                    
                    while($row9 = mysqli_fetch_array($result9)) {
                      $bidder_mail = $row9['email']; 
                      $ret11 = "SELECT * FROM login WHERE email='$bidder_mail'";
                      $result11 = mysqli_query($con, $ret11);
                      $row11 = mysqli_fetch_array($result11);
                      $seller_name = $row11['name'];
              ?>
               <tr>
                   <td>
                     <?php echo '<figure><img src="' . $path . $row9['image'] . '" alt="product" width="50" height="50"></figure>'; ?>
                   </td>
                   <td><?php echo $row9["product_name"]; ?></td>
                   <td><?php echo $row9["price"]; ?></td>
                   <td><?php echo $seller_name; ?></td>
                   <td><?php echo $row9["bid_amount"]; ?></td>
                   <td><?php echo $row9["bid_status"]; ?></td>
                   <td>
                   <a href="del-product.php?del=<?php echo $row9["product_id"]; ?>" class="delete" >
                       <i class="fa fa-trash" style="color:red" data-toggle="tooltip" title="Delete"></i>
                   </a>
               </td>
               </tr>
              <?php
                    }
                   } else {
                       echo "No rows found in the 'seller' table for the email: $email";
                   }
               } else {
                   echo "Error executing query: " . mysqli_error($con);
               }

               
               ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php
include ('inc/footer.php');
?>