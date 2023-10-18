
function validateForm() {
    var email = document.getElementById('email').value;
    var emailError = document.getElementById('emailError');
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    if (!emailPattern.test(email)) {
        emailError.innerText = "Invalid email format";
        return false;
    } else {
        emailError.innerText = "";
    }

    return true;
}
