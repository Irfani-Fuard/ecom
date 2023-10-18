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
                    <h1>Bid-Out</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Bidding Products</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="product_form" method="POST">
                            <div class="card-body">
                                <div id="message" class="col-lg-14"></div>
                                <div class="row">
                                    <div class="col-md-6">
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
                                                <option value="<?php echo $item['id'];?>"><?php echo $item['name'];?>
                                                </option>
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
                                            <label for="feature">Features</label>
                                            <select class="form-control" name="feature" id="feature">
                                                <?php echo   $name_list; ?>
                                            </select>
                                            <span class="error" id="feature_err"> </span>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea id="description" name="description" class="form-control"
                                                required></textarea>
                                            <span class="error" id="description_err"> </span>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Seller</label>
                                            <select class="form-control" name="status" id="status">
                                                <option value="">--Select--</option>
                                                <?php
                                          $seller = getAll("seller");

                                          if(mysqli_num_rows($seller) > 0){
                                              foreach($seller as $sel){
                                           ?>
                                                <option value="<?php echo $sel['id'];?>">
                                                    <?php echo $sel['Seller_name'];?>
                                                </option>
                                                <?php
                                                  }
                                              } 
                                              else {
                                                echo "No category available!";
                                              }
                                              ?>
                                            </select>
                                            <span class="error" id="status_err"> </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="photo">Featured Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" id="photo" name="photo" class="custom-file-input"
                                                        accept="image/*">
                                                    <label class="custom-file-label" for="photo">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                            <span class="error" id="photo_err"> </span>
                                        </div>
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
                                            <label>Minimum Price for Bidding</label>
                                            <input type="text" id="price" name="price" class="form-control" required>
                                            <span class="error" id="price_err"> </span>
                                        </div>
                                       <!-- <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" id="date" name="date" class="form-control" required>
                                            <span class="error" id="date_err"> </span>
                                        </div>-->

                                        <div class="form-group">
                                            <label>Bid Closing Date & Time</label>
                                            <input type="datetime-local" id="time" name="time" class="form-control"
                                                step="1" required>
                                            <span class="error" id="time_err"> </span>
                                        </div>
                                        <div class="form-group float-right">
                                            <input type="hidden" value="1" name="type">
                                            <button type="submit" id="submitbtn" class="btn btn-primary "
                                                name="insertsubmit">Proceed</button>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->

</div>
<!-- /.content-wrapper -->

<!-- /.control-sidebar -->
<script>
$(document).ready(function() {
    $("#category").on("change", function() {
        var categoryid = $("#category").val();
        var getURL = "get-category.php?category_id=" + categoryid;
        $.get(getURL, function(data, status) {
            $("#feature").html(data);
        });
    });

    $("#category_u").on("change", function() {
        var category_uid = $("#category_u").val();
        var getURL = "get-update-category.php?cat_uid=" + category_uid;
        $.get(getURL, function(data, status) {
            $("#feature_u").html(data);
        });
    });



});
</script>
<script src="validation/product.js"></script>
<?php
include ('inc/footer.php');
?>
<!--validation-->
<!--Dynamic Dropdownlist -->