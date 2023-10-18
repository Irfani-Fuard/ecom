<?php
include ('inc/header.php');
include ('inc/config.php');
include ('inc/myfunctions.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Categories</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
              <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Category</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="category_form" method="POST">
              <div class="card-body">
              <div id="message" class="col-lg-14"></div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <input type="text" class="form-control" id="category"  name="category" placeholder="Enter Category">
                  <span class="error" id="category_err"> </span>
                </div>
                <!--<div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>-->
                </div>
                <div class="card-footer">
                <input type="hidden" value="1" name="type">
					    	<button type="submit" id="submitbtn" class="btn btn-primary" name="insertsubmit" >Add</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!--validation-->
<script src="validation/category.js"></script>
<?php
include ('inc/footer.php');
?>







