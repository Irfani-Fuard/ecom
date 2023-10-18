$(document).ready(function () {
    $('#product').on('input', function () {
     checkproduct();
    });
    
    $('#image').on('input', function () {
        checkimage();
       });
   
       $('#submitbtn').click(function (e) {
        e.preventDefault();
        if (!checkproduct() ) {
            console.log("er1");
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);

        }else if (!checkproduct() || !checkimage()) {
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
            console.log("er");
        }
        else {
            console.log("ok");
            $("#message").html("");
            var form = $('#image_form')[0];
            var data = new FormData(form);
            $.ajax({
                type: "POST",
                url: "save-image.php",
                data:  data,
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                
                /*beforeSend: function () {
                    $('#submitbtn').html('<i class="fa-solid fa-spinner fa-spin"></i>');
                    $('#submitbtn').attr("disabled", true);
                    $('#submitbtn').css({ "border-radius": "50%" });
                },*/
 
               success: function (data) {
                
                    $('#message').html(data);
                    Swal.fire(
                     'Good job!',
                     'Image Inserted Successfully!',
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
 
    function checkproduct() {
        if ($("#product").val() == "") {
            $('#product_err').html('Select a product');
            return false;
        } 
        else {
            $('#product_err').html('');
            return true;
        }
   
    }
  
    function checkimage() {
        if ($("#image").val() == "") {
            $('#image_err').html('Select an image');
            return false;
        } 
        else {
            $('#image_err').html('');
            return true;
        }
   
    }