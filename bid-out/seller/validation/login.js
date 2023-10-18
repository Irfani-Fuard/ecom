  // Function to validate the username
  function validateUsername() {
    const username = document.getElementById("username").value;
    const usernameError = document.getElementById("username_err");
    
    if(username != ''){
        if (username.length < 4) {
            usernameError.textContent = "Username must be at least 4 characters long";
            return false;
        } else {
            usernameError.textContent = "";
            return true;
        }
    }else{
        usernameError.textContent = "Please Fill Out The Field";
        return false;
    }
  
}

// Function to validate the password
function validatePassword() {
    const password = document.getElementById("inputpwd").value;
    const passwordError = document.getElementById("passwordError");
     if(password != ''){
    if (password.length < 8) {
        passwordError.textContent = "Password must be at least 8 characters long";
        return false;
    } else {
        passwordError.textContent = "";
        return true;
    } 
    }else{
        passwordError.textContent = "Please Fill Out The Field";
    }
}

// Form submission handler
document.getElementById("login").addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent the form from submitting by default
    
    // Perform validation
    const isUsernameValid = validateUsername();
    const isPasswordValid = validatePassword();

    // Check if both username and password are valid
    if (isUsernameValid && isPasswordValid) {
        alert("Login successful!");  
        window.location.href = "dashboard.php";      
        // You can redirect the user to another page or perform other actions here
    } else {
        alert("Something Went Wrong PLease Try Again Later.");
    }
});