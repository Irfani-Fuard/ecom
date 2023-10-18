$(document).ready(function () {
    $('#category').on('input', function () {
     checkcategory();
    });
    
    $('#submitbtn').click(function (e) {
        e.preventDefault();
 
        if (!checkcategory() ) {
            console.log("er1");
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
        }
        else {
            console.log("ok");
            $("#message").html("");
            var form = $('#category_form')[0];
            var data = new FormData(form);
            $.ajax({
                type: "POST",
                url: "category-code.php",
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
        var pattern = /^[A-Za-z]+$/;
        var category = $('#category').val();
        var validcategory = pattern.test(category);
        if ($("#category").val() == "") {
            $('#category_err').html('Enter a category');
            return false;
        } 
         if (!validcategory) {
            $('#category_err').html('Invalid category');
            return false;
        } 
        else {
            $('#category_err').html('');
            return true;
        }
   
    }
  
 