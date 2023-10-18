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

    $('#description').on('input', function () {
       checkdescription();
   });

   $('#status').on('input', function () {
    checkstatus();
   });
   
   $('#photo').on('input', function () {
       checkphoto();
   });

   /*$('#date').on('input', function () {
       checkdate();
   });*/

   $('#time').on('input', function () {
    checktime();
   });
  

   $('#submitbtn').click(function () {


       if (!checkproduct()) {
           console.log("er1");
           $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
       } else if (!checkproduct() || !checkcategory() || !checkfeature() || !checkdescription() || !checkstatus() || !checkphoto() || !checktime()) {
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
        $('#status_err').html('Select a Seller');
        return false;
    } else {
        $('#status_err').html('');
        return true;
    }

   }
 
   function checkproduct() {
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
   if ($("#photo").val() == "") {
       $('#photo_err').html('Select a photo');
       return false;
   }
   else {
       $('#photo_err').html('');
       return true;
   }
}

/*function checkdate() {
   if ($("#date").val() == "") {
       $('#date_err').html('Enter date');
       return false;
  }
    else {
       $('#date_err').html('');
       return true;
   }
}*/

function checktime() {
    var userDateTime = new Date($('#time').val()).getTime();
    var currentDateTime = new Date().getTime();
    if ($("#time").val() == "") {
        $('#time_err').html('Enter time');
        return false;
   } else if (userDateTime < currentDateTime) {
    $('#time_err').text('Entered date and time is older than the current date and time.');
  } 
    else {
        $('#time_err').html('');
        return true;
    }
 }