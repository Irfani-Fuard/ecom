$(document).ready(function () {
      
   $('#pname').on('input', function () {
       checkproduct();
   });

   $('#category').on('input', function () {
    checkcategory();
   });

   $('#feature').on('input', function () {
    checkfeature();
   });

   $('#status').on('input', function () {
    checkstatus();
   });

   $('#description').on('input', function () {
       checkdescription();
   });
   
   $('#photo').on('input', function () {
       checkphoto();
   });

   $('#price').on('input', function () {
       checkprice();
   });

   $('#stock').on('input', function () {
    checkstock();
   });
  

   $('#submitbtn').click(function () {


       if (!checkproduct()) {
           console.log("er1");
           $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
       } else if (!checkproduct() || !checkcategory() || !checkfeature() || !checkstatus() || !checkdescription() || !checkphoto() || !checkprice() || !checkstock()) {
           $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
           console.log("er");
       }
       else {
           console.log("ok");
           $("#message").html("");
           var form = $('#product_form')[0];
           var data = new FormData(form);
           $.ajax({
               type: "POST",
               url: "save-product.php",
               data:  data,
               processData: false,
               contentType: false,
               cache: false,
               async: false,
               
               beforeSend: function () {
                   $('#submitbtn').html('<i class="fa-solid fa-spinner fa-spin"></i>');
                   $('#submitbtn').attr("disabled", true);
                   $('#submitbtn').css({ "border-radius": "50%" });
               },

              success: function (data) {
               
                   $('#message').html(data);
                   $("#addProductModal").modal("hide");
                   console.log($last_id);
                   Swal.fire(
                    'Good job!',
                    'Data Saved!',
                    'success'
                  );
                    
                     },
              
              complete: function () {
                   setTimeout(function(){
                      window.location.reload();
                    }, 1800);
                 
               }
           });
       }
   });
});

   function checkcategory() {
       if ($("#category").val() == "") {
           $('#category_err').html('Select a category');
           return false;
       } else {
           $('#category_err').html('');
           return true;
       }
  
   }

   function checkfeature() {
    if ($("#feature").val() == "") {
        $('#feature_err').html('Select a feature');
        return false;
    } else {
        $('#feature_err').html('');
        return true;
    }

   }

   function checkstatus() {
    if ($("#status").val() == "0") {
        $('#status_err').html('Select a status');
        return false;
    } else {
        $('#status_err').html('');
        return true;
    }

   }
 
   function checkproduct() {
    var pname = $('#pname').val();
       if ($("#pname").val() == "") {
           $('#pname_err').html('Enter product name');
           return false;
       } 
 
       else {
           $('#pname_err').html('');
           return true;
       }
   }
  

function checkdescription() {
   if ($("#description").val() == "") {
       $('#description_err').html('Enter a description');
       return false;
   } 
   else {
       $('#description_err').html('');
       return true;
   }
}

function checkphoto() {
   var $photo = $('#photo').val();
   if ($("#photo").val() == "") {
       $('#photo_err').html('Select a photo');
       return false;
   }
   else {
       $('#photo_err').html('');
       return true;
   }
}

function checkprice() {
    var pattern = /^[0-9]+$/;
    var price = $('#price').val();
    var validprice  = pattern.test(price);
   if ($("#price").val() == "") {
       $('#price_err').html('Enter price');
       return false;
  }
  if (!validprice) {
    $('#price_err').html('Invalid price');
    return false;
  }
   else {
       $('#price_err').html('');
       return true;
   }
}

function checkstock() {
    if ($("#stock").val() == "") {
        $('#stock_err').html('Enter stock');
        return false;
   }
    else {
        $('#stock_err').html('');
        return true;
    }
 }