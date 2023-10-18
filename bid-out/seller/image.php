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
          <h1>Images</h1>
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
              <h3 class="card-title">Add Image</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="image_form" method="POST">
              <div class="card-body">
              <div id="message" class="col-lg-14"></div>
              <div class="form-group">
                <label>Product</label>
                <select class="form-control" id="product" name="product">
                <option value="">--Select--</option>
                <?php
                $product = getAll("product");

                if(mysqli_num_rows($product) > 0){
                    foreach($product  as $item){
                        ?>
                         <option value="<?php echo $item['id'];?>"><?php echo $item['name'];?></option>
                        <?php
                    }
                  } 
                     else {
                    echo "No product available!";
                 }
                ?>
                </select>
                <span class="error" id="product_err"> </span>
                </div>
                <div class="form-group">
                  <label for="image">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" id="image" name="image" class="custom-file-input" accept="image/*">
                      <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                  <span class="error" id="image_err"> </span>
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
<<script src="validation/image.js"></script>
<?php
include ('inc/footer.php');
?>







