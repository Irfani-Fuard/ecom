<?php
session_start();
include('config.php');

if (isset($_POST['submit'])) {
    // Retrieve user inputs
    $email = $_POST["email1"];
    $password = $_POST["password1"];



    // Perform validation
    $errors = array();

    // Check if username/email is empty
  print_r($email);
  print_r($password);
}




?>

<div class="login-popup">
    <div class="tab tab-nav-boxed tab-nav-center tab-nav-underline">
        <ul class="nav nav-tabs text-uppercase" role="tablist">
            <li class="nav-item">
                <a href="#sign-in" class="nav-link active">Sign In</a>
            </li>
            <li class="nav-item">
                <a href="#sign-up" class="nav-link">Sign Up</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="sign-in">
            <form action="assets/ajax/user-login.php" method="POST" >
                <div class="form-group">
                    <label for="email1">Email:</label>
                    <input type="email" id="email1" name="email1" class="form-control" required>
                    <span id="emailError" style="color: red;"></span>
                </div>
                <div class="form-group">
                    <label for="password1">Password:</label>
                    <input type="password" id="password1" name="password1" class="form-control" required>
                    <span id="passwordError" style="color: red;"></span>
                </div>
                <div class="form-checkbox d-flex align-items-center justify-content-between">
                  
                    <a href="#">Last your password?</a>
                </div>
                <input type="submit" name="submit" value="Sign In">
            </div>
            </form>

            <!--user registration form -->
            <div class="tab-pane" id="sign-up">
            <form action="assets/ajax/registration-code.php" method="POST" onsubmit="return validateRegistrationForm();">
           <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control">
                <span id="nameError" style="color: red;"></span>
           </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="mail" name="email" class="form-control">
                <span id="mailError" style="color: red;"></span>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="pass" name="password" class="form-control" >
                <span id="passError" style="color: red;"></span>
            </div>

            <input type="submit" name="submit" value="Register">
        </form>

            <script>
           function validateRegistrationForm() {
    const name = document.getElementById('name').value;
    const nameError = document.getElementById('nameError');
    const namePattern = /^[A-Za-z]+$/;

    const email = document.getElementById('mail').value;
    const emailError = document.getElementById('mailError');
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    const password = document.getElementById('pass').value;
    const passwordError = document.getElementById('passError');
    // Update the password pattern to require uppercase letters, lowercase letters, symbols, and numbers
    const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&_-]+$/;

    // Validate the name
    if (!namePattern.test(name)) {
        nameError.innerText = "Invalid user name";
        return false;
    } else {
        nameError.innerText = "";
    }

    // Validate the email
    if (!emailPattern.test(email)) {
        emailError.innerText = "Invalid email format";
        return false;
    } else {
        emailError.innerText = "";
    }

    // Validate the password
    if (password.trim() === "") {
        passwordError.innerText = "Password Field is required";
        return false;
    } else if (!passwordPattern.test(password)) {
        passwordError.innerText = "Password must contain uppercase letters, lowercase letters, symbols, and numbers";
        return false;
    } else {
        passwordError.innerText = "";
    }

    return true;
}




           /* function validateRegistrationForm() {
              
                var email = document.getElementById('email').value;
                var emailError = document.getElementById('emailError');
                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

                var password = document.getElementById('password').value;
                var passwordError = document.getElementById('passwordError');
                var passwordPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

             
                if (!emailPattern.test(email)) {
                    emailError.innerText = "Invalid email format";
                    return false;
                } else {
                    emailError.innerText = "";
                }

                /*if (!passwordPattern.test(password)) {
                    passwordError.innerText = "Password must contain uppercase letters, lowercase letters, symbols and numbers";
                    return false;
                } 
                
                else {
                    passwordError.innerText = "";
                }*/


                /*return true;
            }*/
            </script>