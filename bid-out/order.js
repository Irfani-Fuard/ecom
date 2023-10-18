$(document).ready(function () {
     $('#fname').on('input', function () {
        checkuserfname();
    });

    $('#lname').on('input', function () {
        checkuserlname();
    });

    $('#address').on('input', function () {
        checkaddress();
    });

    $('#district').on('input', function () {
        checkdistrict();
    });
  
    $('#mnumber').on('input', function () {
        checkmnumber();
    });

    $('#email').on('input', function () {
        checkemail();
    });
    
      $('#submitbtn').click(function () {


        if (!checkuserfname()) {
            console.log("er1");
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
        } else if (!checkuserfname() || !checkuserlname() || !checkaddress()|| !checkdistrict() || !checkmnumber() || !email()) {
            $("#message").html(`<div class="alert alert-warning">Please fill all required field</div>`);
            console.log("er");
        }
        else {
            console.log("ok");
            $("#message").html("");
            var form = $('#order')[0];
            var data = new FormData(form);
            $.ajax({
                type: "POST",
                url: "save-order.php",
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
                        swal("Good job!", "Data Saved !", "success");
                     
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


function checkuserlname() {
    var pattern = /^[a-zA-z]*$/;
    var lname = $('#lname').val();
    var lname = pattern.test(lname);
    if ($('#lname').val().length < 4) {
        $('#lname_err').html('Enter your last name');
        return false;
    } else if (!lname) {
        $('#lname_err').html('last name should be a-z ,A-Z, only');
        return false;
    } else {
        $('#lname_err').html('');
        return true;
    }
}

function checkuserfname() {
    var pattern = /^[a-zA-z]*$/;
    var fname = $('#fname').val();
    var fname = pattern.test(fname);
    if ($('#fname').val().length < 4) {
        $('#fname_err').html('Enter your first name');
        return false;
    } else if (!fname) {
        $('#fname_err').html('first name should be a-z ,A-Z, only');
        return false;
    } else {
        $('#fname_err').html('');
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

function checkdistrict() {
  
    if ($("#district").val() == "") {
        $('#district_err').html('Enter your district');
        return false;
       } else {
        $('#district_err').html('');
        return true;
    }
}


function checkmnumber() {
   
    if ($("#mnumber").val() == "") {
        $('#mnumber_err').html('Mobile number cannot be empty');
        return false;
    } else if (!$.isNumeric($("#mnumber").val())) {
        $('#mnumber_err').html('only number is allowed');
        return false;
    } else if ($('#mnumber').val().length != 10) {
        $('#mnumber_err').html("10 digit required");
        return false;
    }
    else {
        $('#mnumber_err').html('');
        return true;
    }
}

function checkemail() {
    var pattern1 = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var email = $('#email').val();
    var validemail = pattern1.test(email);
    if (email == "") {
        $('#email').html('Email cannot be empty.');
        return false;
    } else if (!validemail) {
        $('#email').html('invalid email');
        return false;
    } else {
        $('#email').html('');
        return true;
    }
}