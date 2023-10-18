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
          <h1>Seller</h1>
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
              <h3 class="card-title">Add Seller</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="seller_form" method="POST" >
              <div class="card-body">
              <div id="message" class="col-lg-14"></div>
                <div class="form-group">
							<label>Seller Name</label>
							<input type="text" id="sname" name="sname" class="form-control" required>
							<span class="error" id="sname_err"> </span>
						</div>
						
						<div class="form-group">
							<label>Contact No</label>
							<input type="phone" id="mnumber" name="mnumber" class="form-control" required>
							<span class="error" id="mnumber_err"> </span>
						</div>
						<div class="form-group">
							<label>Address</label>
							<input type="text" id="address" name="address" class="form-control" required>
							<span class="error" id="address_err"> </span>
						</div>	
                        <div class="form-group">
							<label>Email</label>
							<input type="text" id="email" name="email" class="form-control" required>
							<span class="error" id="email_err"> </span>
						</div>
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
<script src="validation/seller.js"></script>
<?php
include ('inc/footer.php');
?>







