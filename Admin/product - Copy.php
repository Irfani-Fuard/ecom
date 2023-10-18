
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
                    <th>Name</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
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


	<!-- Add Modal HTML -->
	<div id="addProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			
			<form id="product_form"  method="POST" enctype='multipart/form-data'>
					<div class="modal-header">						
						<h4 class="modal-title">Add Product</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
					<div id="message" class="col-lg-14"></div>
            <div class="form-group">
						<label>Product Name</label>
							<input type="text" id="pname" name="pname" class="form-control" required>
							<span class="error" id="pname_err"> </span>
						</div>			
						<div class="form-group">
							<label>Category</label>
							<select class="form-control" id="category" name="category">
                <option value="">--Select--</option>
                <?php
                $categories = getAll("category");

                if(mysqli_num_rows($categories) > 0){
                    foreach($categories as $item){
                        ?>
                         <option value="<?php echo $item['name'];?>"><?php echo $item['name'];?></option>
                        <?php
                    }
                } 
                else {
                  echo "No category available!";
                }
                ?>
              </select>
								<span class="error" id="category_err"> </span>
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea id="description" name="description" class="form-control" required></textarea>
							<span class="error" id="description_err"> </span>
						</div>
						<!--<div class="form-group">
							<label for="photo">Featured Image</label>
							<input type="file" id="photo" name="photo" accept="image/*">
							<span class="error" id="photo_err"> </span>
						</div>-->
            <div class="form-group">
                  <label for="photo">Featured Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" id="photo" name="photo" class="custom-file-input" accept="image/*">
                      <label class="custom-file-label" for="photo">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                  <span class="error" id="photo_err"> </span>
             </div>
                <!--multiple images -->
                <!--<div class="container">
                  <div class="form-group">
                  <input type="file" name="file[]" id="file" multiple>
                  </div> 
                </div>-->

                <div class="form-group">
                  <label for="file">Add more images</label>
                  <div class="input-group">
                    <div class="custom-file">
                    <input type="file" name="file[]" id="file" multiple>
                      <label class="custom-file-label" for="file">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                  <span class="error" id="file_err"> </span>
             </div>
                <!--multiple images -->
                
            <div class="form-group">
							<label>Price</label>
							<input type="number" id="price" name="price" class="form-control" required>
							<span class="error" id="price_err"> </span>
						</div>	
            <div class="form-group">
							<label>Cutoff Price</label>
							<input type="number" id="cprice" name="cprice" class="form-control" required>
							<span class="error" id="cprice_err"> </span>
						</div>				

            <div class="form-group">
							<label>Stock</label>
							<input type="text" id="stock" name="stock" class="form-control" required>
							<span class="error" id="stock_err"> </span>
						</div>				
					</div>
					<div class="modal-footer">
					    <input type="hidden" value="1" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<button type="submit" id="submitbtn" class="btn btn-primary" name="insertsubmit" >Add</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<!--end of add modal-->
<!-- Edit Modal HTML -->
<div id="editProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
			
      <form id="edit_form"  method="POST" enctype="multipart/form-data">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Product</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="id_u" class="form-control" required>					
						<div id="message_u" class="col-lg-14"></div>
             <div class="form-group">
							<label>Product Name</label>
              <input type="text" id="pname_u" name="pname_u" class="form-control" required>
							<span class="error" id="pname_u_err"> </span>
						</div>		
            <div class="form-group">
							<label>Category</label>
              <select class="form-control" id="category_u" name="category_u">
                <option value="">--Select--</option>
                <?php
                $categories = getAll("category");

                if(mysqli_num_rows($categories) > 0){
                    foreach($categories as $item){
                        ?>
                         <option value="<?php echo $item['id'];?>"><?php echo $item['name'];?></option>
                        <?php
                    }
                } 
                else {
                  echo "No category available!";
                }
                ?>
              </select>

								<span class="error" id="category_u_err"> </span>
						</div>
						<div class="form-group">
							<label>Description</label>
							<input type="text" id="description_u" name="description_u" class="form-control" required>
							<span class="error" id="description_u_err"> </span>
						</div>
						<div class="form-group">
							<label for="photo_u">Choose a Photo!</label>
							<input type="file" id="photo_u" name="photo_u" accept="image/*">
							<span class="error" id="photo_u_err"> </span>
						</div>	
            <div class="form-group">
							<label>Price</label>
							<input type="text" id="price_u" name="price_u" class="form-control" required>
							<span class="error" id="price_u_err"> </span>
						</div>				
            <div class="form-group">
							<label>Stock</label>
							<input type="text" id="stock_u" name="stock_u" class="form-control" required>
							<span class="error" id="stock_u_err"> </span>
						</div>			        
					</div>
					<div class="modal-footer">
					<input type="hidden" value="2" name="type">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
            <button type="button" class="btn btn-primary" id="update">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--end of edit modal-->


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