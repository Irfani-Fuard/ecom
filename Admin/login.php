<?php
session_start();
include('inc/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the form was submitted
    if (isset($_POST['username']) && isset($_POST['inputpwd'])) {
        $username = $_POST['username'];
        $password = $_POST['inputpwd'];

        // Sanitize input
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);

        // Hash the password (assuming you stored hashed passwords in the database)
        // $hashedPassword = md5($password);

        // Query the database
        $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $query);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            if ($row) {
                // Valid user, store user data in session
                $_SESSION['aid'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['user_logged_in'] = true;
                // Redirect to the dashboard
                header("Location: dashboard.php");
                exit();
            } else {
                // Invalid user, show an error message
                $_SESSION['error_message'] = "Invalid username or password";
                header("Location: login.php?wrong"); // Redirect back to the login page
                exit();
            }
        } else {
            // Error in the database query
            $_SESSION['error_message'] = "Database error: " . mysqli_error($con);
            header("Location: login.php"); // Redirect back to the login page
            exit();
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="../images/ir3.png">
  <title>Effective Sollution</title>
   <!--validation-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />




  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
      <!--validation-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
       .error input {
    border-color: red;
    border-width: 2px;
}

.success input {
    border-color: green;
    border-width: 2px;
}

.error span {
    color: red;
}

.success span {
    color: green;
}

span.error {
    color: red;
}

i {
    font-weight: 900;
    font-family: 'Font Awesome 5 Free';
}
 /* Add this CSS to your <style> section or external CSS file */
 #username {
    margin-top: 0; /* Remove top margin */
    padding-top: 0; /* Remove top padding */
  }
    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <img src="../images/eslogo.jpg" alt="Girl in a jacket">
    </div>
    <div class="card-body">
      <p class="login-box-msg">Wellcome to effective sollution store</p>
  <?php 
  if(isset($_GET['wrong'])){
    echo "<span class='text-danger'>username or password wrong</span>";
  }
  ?>
      <form id="login" method="post" >
      <div id="message" class="col-lg-14"></div>
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="username" id="username" name="username" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <span class="error" id="username_err"> </span>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" id="inputpwd" name="inputpwd" >
       
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <span class="error" id="passwordError"> </span>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" id="submitbtn">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<!-- <script src="plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
<!-- AdminLTE App -->
<!-- <script src="dist/js/adminlte.min.js"></script> -->
<!--validation -->

<!-- <script src="validation/login.js"></script> -->
<script>
// Function to validate the username
function validateUsername() {
    const username = document.getElementById("username").value;
    const usernameError = document.getElementById("username_err");
    
    if (username !== '') {
        if (username.length < 4) {
            usernameError.textContent = "Username must be at least 4 characters long";
            return false;
        } else {
            usernameError.textContent = "";
            return true;
        }
    } else {
        usernameError.textContent = "Please fill out the field";
        return false;
    }
}

// Function to validate the password
function validatePassword() {
    const password = document.getElementById("inputpwd").value;
    const passwordError = document.getElementById("passwordError");
    
    if (password !== '') {
        if (password.length < 8) {
            passwordError.textContent = "Password must be at least 8 characters long";
            return false;
        } else {
            passwordError.textContent = "";
            return true;
        }
    } else {
        passwordError.textContent = "Please fill out the field";
        return false;
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
        // The form is valid, submit it
        this.submit();
    }
});
</script>
</body>
</html>
