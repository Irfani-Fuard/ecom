$(document).ready(function () {  
    $('#pname_u').on('input', function () {
        checkproduct_u();
    });
 
    $('#category_u').on('input', function () {
     checkcategory_u();
    });
 

    $('#status_u').on('input', function () {
        checkstatus_u();
       });

       
    $('#feature_u').on('input', function () {
        checkfeature_u();
       });

    $('#description_u').on('input', function () {
        checkdescription_u();
    });
    
    $('#photo_u').on('input', function () {
        checkphoto_u();
    });
 
    $('#price_u').on('input', function () {
        checkprice_u();
    });
 
    $('#cprice_u').on('input', function () {
        checkcprice_u();
    });
 
    $('#stock_u').on('input', function () {
     checkstock_u();
    });
 
    $('#update').click(function () {
 
 
        if (!checkproduct_u()) {
            console.log("er1");
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
        } else if (!checkproduct_u() ||  !checkcategory_u() || !checkfeature_u() || !checkstatus_u() || !checkdescription_u() || !checkphoto_u() || !checkprice_u() || !checkcprice_u() || !checkstock_u()) {
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
            console.log("er");
        }
        else {
            console.log("ok");
            $("#message").html("");
            var form = $('#edit_form')[0];
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
                    $('#update').html('<i class="fa-solid fa-spinner fa-spin"></i>');
                    $('#update').attr("disabled", true);
                    $('#update').css({ "border-radius": "50%" });
                },
 
               success: function (data) {
                    $('#message').html(data);
                    $("#editProductModal").modal("hide");
                    Swal.fire(
                        'Data Saved!',
                        'Your data has updated!',
                        'success'
                      )
                     
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
    } else {
        $('#category_u_err').html('');
        return true;
    }

}

function  checkfeature_u() {
    if ($("#feature_u").val() == "") {
        $('#feature_u_err').html('Select a feature');
        return false;
    } else {
        $('#feature_u_err').html('');
        return true;
    }

}

function  checkstatus_u() {
    if ($("#status_u").val() == "") {
        $('#status_u_err').html('Select a status');
        return false;
    } else {
        $('#status_u_err').html('');
        return true;
    }

}

function checkproduct_u() {
    if ($("#pname_u").val() == "") {
        $('#pname_u_err').html('Enter product name');
        return false;
    } else {
        $('#pname_u_err').html('');
        return true;
    }
}


function checkdescription_u() {
if ($("#description_u").val() == "") {
    $('#description_u_err').html('Enter a description');
    return false;
} 
else {
    $('#description_u_err').html('');
    return true;
}
}

function checkphoto_u() {
if ($("#photo_u").val() == "") {
    $('#photo_u_err').html('Select a photo');
    return false;
}
else {
    $('#photo_u_err').html('');
    return true;
}
}

function checkprice_u() {
if ($("#price_u").val() == "") {
    $('#price_u_err').html('Enter price');
    return false;
}
else {
    $('#price_u_err').html('');
    return true;
}
}

function checkcprice_u() {
    if ($("#cprice_u").val() == "") {
        $('#cprice_u_err').html('Enter price');
        return false;
    }
    else {
        $('#cprice_u_err').html('');
        return true;
    }
    }

function checkstock_u() {
 if ($("#stock_u").val() == "") {
     $('#stock_u_err').html('Enter stock');
     return false;
}
 else {
     $('#stock_u_err').html('');
     return true;
 }
}