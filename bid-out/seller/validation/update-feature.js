$(document).ready(function () {
    $('#category_u').on('input', function () {
     checkcategory_u();
    });
    
    $('#feature_u').on('input', function () {
        checkfeature_u();
       });
   
       $('#update').click(function (e) {
        e.preventDefault();
        if (!checkcategory_u() ) {
            console.log("er1");
            $("#message_u").html(`<div class="alert alert-warning">Please fill all required field</div>`);

        }else if (!checkcategory_u() || !checkfeature_u()) {
            $("#message_u").html(`<div class="alert alert-warning">Please fill all required field</div>`);
            console.log("er");
        }
        else {
            console.log("ok");
            $("#message_u").html("");
            var form = $('#feature_u_form')[0];
            var data = new FormData(form);
            $.ajax({
                type: "POST",
                url: "save-feature.php",
                data:  data,
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                
                /*beforeSend: function () {
                    $('#update').html('<i class="fa-solid fa-spinner fa-spin"></i>');
                    $('#update').attr("disabled", true);
                    $('#update').css({ "border-radius": "50%" });
                },*/
 
               success: function (data) {
                
                    $('#message_u').html(data);
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
        if ($("#category_u").val() == "") {
            $('#category_u_err').html('Select a category');
            return false;
        } 
        else {
            $('#category_u_err').html('');
            return true;
        }
   
    }
  
    function checkfeature_u() {
        if ($("#feature_u").val() == "") {
            $('#feature_u_err').html('Enter a feature');
            return false;
        } 
        
        else {
            $('#feature_u_err').html('');
            return true;
        }
   
    }