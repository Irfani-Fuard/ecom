$(document).ready(function () {
    $('#sname').on('input', function () {
        checkuser();
    });
 
    $('#mnumber').on('input', function () {
        checkmnumber();
    });
    
    $('#address').on('input', function () {
        checkaddress();
    });

    $('#email').on('input', function () {
        checkemail();
    });
   

    $('#submitbtn').click(function () {
        if (!checkuser()) {
            console.log("er1");
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
        } else if ( !checkuser() || !checkmnumber() || !checkaddress() || !checkemail()) {
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
            console.log("er");
        }
        else {
            console.log("ok");
            $("#message").html("");
            var form = $('#seller_form')[0];
            var data = new FormData(form);
            
            $.ajax({
                type: "POST",
                url: "save-seller.php",
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


function checkuser() {
    var pattern = /^[A-Za-z]+$/;
    var user = $('#sname').val();
    var validuser = pattern.test(user);
    if ($('#sname').val().length < 4) {
        $('#sname_err').html('Seller name cannot be empty');
        return false;
    } else if (!validuser) {
        $('#sname_err').html('Seller name should be a-z ,A-Z only');
        return false;
    } else {
        $('#sname_err').html('');
        return true;
    }
}

function checkaddress() {
    if ($("#address").val() == "") {
        $('#address_err').html('Enter your address');
        return false;
       } else {
        $('#address_err').html('');
        return true;
    }
}

function checkemail() {
    var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var email = $('#email').val();
    var validemail = pattern1.test(email);
    if (email == "") {
        $('#email_err').html('Email cannot be empty.');
        return false;
    } else if (!validemail) {
        $('#email_err').html('invalid email');
        return false;
    } else {
        $('#email_err').html('');
        return true;
    }
}

function checkmnumber() {
    var pattern2 = /^\(?(\d{3})\)?[- ]?(\d{3})[- ]?(\d{4})$/
    var mnum = $('#mnumber').val();
    var validmnum = pattern2.test(mnum);

    if ($("#mnumber").val() == "") {
        $('#mnumber_err').html('Mobile number cannot be empty');
        return false;
    } else if (!$.isNumeric($("#mnumber").val())) {
        $('#mnumber_err').html('only number is allowed');
        return false;
   } else if ($('#mnumber').val().length != 10) {
        $('#mnumber_err').html("10 digit required");
        return false;
    }else if (!validmnum) {
        $('#mnumber_err').html('Enver valid mobile number.');
        return false;}
    else {
        $('#mnumber_err').html('');
        return true;
    }
}

