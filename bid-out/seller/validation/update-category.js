$(document).ready(function () {
    $('#category_u').on('input', function () {
     checkcategory_u();
    });
    
    $('#update').click(function () {
 
 
        if (!checkcategory_u() ) {
            console.log("er1");
            $("#message_u").html(`<div class="alert alert-warning">Please fill all required field</div>`);
        }
        else {
            console.log("ok");
            $("#message_u").html("");
            var form = $('#update_form')[0];
            var data = new FormData(form);
            $.ajax({
                type: "POST",
                url: "category-code.php",
                data:  data,
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                
                beforeSend: function () {
                    $('#update').html('<i class="fa-solid fa-spinner fa-spin"></i>');
                    $('#update').attr("disabled", true);
                    $('#update').css({ "border-radius": "50%" });
                },
 
               success: function (data) {
                    $('#message_u').html(data);
                    $("#editCategoryModal").modal("hide");
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
 
    function checkcategory_u() {
        var pattern = /^[A-Za-z]+$/;
        var category_u = $('#category_u').val();
        var validcategory_u = pattern.test(category_u);
        if ($("#category_u").val() == "") {
            $('#category_u_err').html('Enter a category');
            return false;
        } 
         if (!validcategory_u) {
            $('#category_u_err').html('Invalid category');
            return false;
        } 
        else {
            $('#category_u_err').html('');
            return true;
        }
   
    }
  
 