
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
            <h1>CATEGORIES</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Category Details</h3>
              </div>
              <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $result = mysqli_query($con,"SELECT * FROM  category");
                    $i=1;
                    while($row = mysqli_fetch_array($result)) {
                  ?>
              <tr id="<?php echo $row["id"]; ?>">
              <td><?php echo $i; ?></td>
              <td><?php echo $row["name"]; ?></td>
			  <td>
				<a href="#editCategoryModal" class="edit" data-toggle="modal">
				<i class="fas fa-edit update" style="color:green" data-toggle="tooltip" 
                data-id="<?php echo $row["id"]; ?>"
                data-category="<?php echo $row["name"]; ?>"
                title="Edit">
                </i>
                </a> ||
                <a href="#deleteCategoryModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="fa fa-trash" style="color:red" data-toggle="tooltip" 
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


	
<!-- Edit Modal HTML -->
<div id="editCategoryModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
        <form id="update_form"  method="POST" enctype="multipart/form-data">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Category</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="id_u" class="form-control" required>					
						<div id="message_u" class="col-lg-14"></div>
                        <div class="form-group">
							<label>Category</label>
                            <input type="text" id="category_u" name="category_u" class="form-control" required>
							<span class="error" id="category_u_err"> </span>
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
<script src="validation/manage-category.js"></script>
<script src="validation/update-category.js"></script>

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