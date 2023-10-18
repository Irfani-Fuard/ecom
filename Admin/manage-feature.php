
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
            <h1>FEATURES</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Features Details</h3>
              </div>
              <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>S.no</th>
                    <th>Category</th>
                    <th>Feature</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                $ret = "SELECT features.name AS feature_name, category.name AS category_name, features.id AS id, features.category_id 
                        FROM features 
                        JOIN category ON features.category_id = category.id";
                $result = mysqli_query($con, $ret);

                $i = 1;
                while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr id="<?php echo $row["id"]; ?>">
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["category_name"]; ?></td>
                    <td><?php echo $row["feature_name"]; ?></td>
                    <td>
            <a href="#editCategoryModal" class="edit" data-toggle="modal">
                <i class="fas fa-edit update" style="color:green" data-toggle="tooltip" 
                data-id="<?php echo $row["id"]; ?>"
                data-feature="<?php echo $row["feature_name"]; ?>"
                data-category="<?php echo $row["category_name"]; ?>"
                title="Edit"></i>
            </a> ||
            <a href="#deleteCategoryModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal">
                <i class="fa fa-trash" style="color:red" data-toggle="tooltip" title="Delete"></i>
            </a>
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
        <form id="feature_u_form"  method="POST">
					<div class="modal-header">						
						<h4 class="modal-title">Edit Category</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					</div>
					<div class="modal-body">
						<input type="hidden" id="id_u" name="id_u" class="form-control" required>					
						<div id="message_u" class="col-lg-14"></div>
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
                  <label for="feature_u">Feature</label>
                  <input type="text" class="form-control" id="feature_u" name="feature_u">
                  <span class="error" id="feature_u_err"> </span>
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
<script src="validation/manage-feature.js"></script>
<script src="validation/update-feature.js"></script>
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