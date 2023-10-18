$(document).ready(function () {
    $('#category').on('input', function () {
     checkcategory();
    });
    
    $('#feature').on('input', function () {
        checkfeature();
       });
   
       $('#submitbtn').click(function (e) {
        e.preventDefault();
        if (!checkcategory() ) {
            console.log("er1");
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);

        }else if (!checkcategory() || !checkfeature()) {
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
            console.log("er");
        }
        else {
            console.log("ok");
            $("#message").html("");
            var form = $('#feature_form')[0];
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
        if ($("#category").val() == "") {
            $('#category_err').html('Select a category');
            return false;
        } 
        else {
            $('#category_err').html('');
            return true;
        }
   
    }
  
    function checkfeature() {
        if ($("#feature").val() == "") {
            $('#feature_err').html('Enter a feature');
            return false;
        } 
         
        else {
            $('#feature_err').html('');
            return true;
        }
   
    }