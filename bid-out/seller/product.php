
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
            <h1>BID PRODUCTS</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Bid Product Details</h3>
              </div>
              <!-- /.card-header -->
            <div class="row">
              
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Sno</th>
                  <th>Product</th>
                    <th class="product-name"><span>Name</span></th>
                    <th>Category</th>
                    <th>Description</th>
                    <th class="product-price"><span>Low Bid Price</span></th>
                    <th class="product-quantity"><span>Bid Price</span></th>
                    <th class="product-subtotal"><span>Bid End Time</span></th>
                    <th class="product-subtotal"><span>Bid Status</span></th>
                    <th class="product-subtotal"><span>Action</span></th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    //$result = mysqli_query($con,"SELECT * FROM product");
                    $ret = "SELECT  * 
                      FROM  bidding_product
                      JOIN category ON bidding_product.category_id = category.id
                      JOIN bidding ON bidding_product.product_id=bidding.product_id";
                    
                    $result = mysqli_query($con, $ret);
                    $i=1;
                    while($row = mysqli_fetch_array($result)) {
                      $status = $row['bid_status'];
                      $color = ($status === 'active') ? 'green' : 'red';

                 ?>
              <tr>
              <td><?php echo $i; ?></td>
              <?php //echo "<td>" . "<img src=".$row['image'].' width=50px height="50px">' . "</td>"; ?>
              <td class="product-thumbnail">
                  <div class="p-relative">
                  <figure>
                      <img src="<?= $path.$row['image'] ?>" alt="product"
                          width="50px" height="50px">
                  </figure>
                  </div>
              </td>              
              <td><?php echo $row["product_name"]; ?></td>
              <td><?php echo $row["name"]; ?></td>
              <td><?php echo $row["description"]; ?></td>
              <td><?php echo $row["price"]; ?></td>
              <td><?php echo $row["bid_amount"]; ?></td>
              <td><?php echo $row["time"]; ?></td>
              <td class="product-subtotal">
              <?php echo '<span style="color: ' . $color . ';">' . $row['bid_status'] . '</span>';?>
              </td>

					    <td>
              <a href="product-view.php?id=<?php echo $row["product_id"]; ?>&name=<?php echo $row["product_name"]; ?>&status=<?php echo $row["bid_status"]; ?>&cname=<?php echo $row["name"]; ?>&price=<?php echo $row["price"]; ?>&pstatus=<?php echo $row["pstatus"]; ?>&price=<?php echo $row["price"]; ?>&bid_amount=<?php echo $row["bid_amount"]; ?>&time=<?php echo $row["time"]; ?>&cmn=<?php echo $row["cmn_id"]; ?> "><i class="fa fa-eye" aria-hidden="true"></i>
						 </a>
               ||
              <a href="del-bidproduct.php?del=<?php echo  $row['product_id']; ?>">  
              <i class="fa fa-trash" style="color:red" title="Delete"></i></a>
              
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

<!--Dynamic Dropdownlist -->
<script>
$(document).ready(function(){
			$("#category").on("change", function(){
				var categoryid = $("#category").val();
				var getURL     = "get-category.php?category_id=" + categoryid;
				$.get(getURL, function(data, status){
					$("#feature").html(data);
				});
			});

      $("#category_u").on("change", function(){
				var category_uid = $("#category_u").val();
				var getURL     = "get-update-category.php?cat_uid=" + category_uid;
				$.get(getURL, function(data, status){
					$("#feature_u").html(data);
				});
			});



    });	
</script>

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