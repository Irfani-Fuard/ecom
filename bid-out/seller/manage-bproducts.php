
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
            <h1>PRODUCTS</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Details</h3>
              </div>
              <!-- /.card-header -->
           
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Min Bid Price</th>
                    <th>Closing Date and Time</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $result = mysqli_query($con,"SELECT * FROM product");
                  /*  $ret = "SELECT  product.name AS name, category.name AS category,  product.description AS description, 
                    product.price AS price,  product.stock AS stock, product.image AS image, product.id AS id
                    FROM product  
                    JOIN category ON product.category_id=category.id";
                    $result = mysqli_query($con, $ret);
                    /*$ret = "SELECT * FROM  category JOIN product ON category.id=product.category_id";
                    $result = mysqli_query($con, $ret);*/


                    $i=1;
                    while($row = mysqli_fetch_array($result)) {
                  ?>
              <tr id="<?php echo $row["product_id"]; ?>">
              <td><?php echo $i; ?></td>
              <td><?php echo $row["product_name"]; ?></td>
              <?php echo "<td>" . "<img src=".$row['image'].' width=50px height="50px">' . "</td>"; ?>
              <td><?php echo $row["category_id"]; ?></td>
              <td><?php echo $row["description"]; ?></td>
              <td><?php echo $row["price"]; ?></td>
              <td><?php echo $row["stock"]; ?></td>
					    <td>
              <a href="product-view.php?id=<?php echo $row["product_id"]; ?>&name=<?php echo $row["product_name"]; ?>&status=<?php echo $row["cmn_id"]; ?>&cid=<?php echo $row["category_id"]; ?>&price=<?php echo $row["price"]; ?>&cprice=<?php echo $row["cutoff_price"]; ?>&stock=<?php echo $row["stock"]; ?> "><i class="fa fa-eye" aria-hidden="true"></i>
						 </a>
                          
              ||
						  <a href="#editProductModal" class="edit" data-toggle="modal">
							<i class="fas fa-edit update" style="color:green" data-toggle="tooltip" 
                data-id="<?php echo $row["product_id"]; ?>"
                data-pname="<?php echo $row["product_name"]; ?>"
                data-description="<?php echo $row["description"]; ?>"
                data-category ="<?php echo $row["category_id"]; ?>"
                data-price="<?php echo $row["price"]; ?>"
                data-stock="<?php echo $row["stock"]; ?>"
                title="Edit">
            </i>
						</a> ||
						<a href="#deleteProducteModal" class="delete" data-id="<?php echo $row["product_id"]; ?>" data-toggle="modal"><i class="fa fa-trash" style="color:red" data-toggle="tooltip" 
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
<script src="validation/product.js"></script>
<script src="validation/manage-products.js"></script>
<script src="validation/product-update.js"></script>


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
