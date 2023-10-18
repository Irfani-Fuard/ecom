
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
            <h1>MANAGE IMAGES</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Images</h3>
              </div>
              <!-- /.card-header -->
            <div class="row">
              <div class="col-md-12 offset-md-10">
						    <a href="#addProductModal" class="btn btn-primary pull-left" data-toggle="modal" style="margin-right:5px;"><i class="fa fa-plus-circle"></i>Add</a>
              </div>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Product</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $ret = "SELECT product.name AS product_name, images.image AS photo, images.image_id AS id    
                    FROM images 
                    JOIN product  ON  images.product_id = product.id";
                    $result = mysqli_query($con, $ret);

                    $i=1;
                    while($row = mysqli_fetch_array($result)) {
                  ?>
              <tr id="<?php echo $row["id"]; ?>">
              <td><?php echo $i; ?></td>
              <td><?php echo $row["product_name"]; ?></td>
                <?php echo "<td>" . "<img src=".$row['photo'].' width=50px height="50px">' . "</td>"; ?>
			  <td>
                <a href="#deleteImageModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="fa fa-trash" style="color:red" data-toggle="tooltip" 
                title="Delete"></i></a>
            </td>
            </tr>
              <?php
              $i++;
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
<!--validation-->
<script src="validation/manage-images.js"></script>


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