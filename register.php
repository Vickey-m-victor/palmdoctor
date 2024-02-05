<?php
session_start();
include('connection.php');
include('functions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the required fields are provided
    if (isset($_POST["full_name"]) && isset($_POST["password"]) && isset($_POST["email"]) && isset($_POST["occupation"])) {
        $full_name = $_POST["full_name"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $occupation = $_POST["occupation"];

        if (!empty($full_name) && !empty($password) && !empty($email) && !empty($occupation)) {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Generate a user ID or use your preferred method
            $user_id = random_num(5); // Assuming random_num is defined

            $query = "INSERT INTO users (user_id, full_name, email, occupation, password) VALUES(:user_id, :full_name, :email, :occupation, :password)";
            
            try {
                // Prepare the statement
                $stmt = $con->prepare($query);

                // Bind parameters
                $stmt->bindParam(':user_id', $user_id);
                $stmt->bindParam(':full_name', $full_name);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':occupation', $occupation);
                $stmt->bindParam(':password', $hashed_password); // Store the hashed password

                // Execute the statement
                $stmt->execute();

                // Redirect to the login page
                header("Location: login.php");
                die();
            } catch (PDOException $e) {
                // Handle database errors
                echo "Database Error: " . $e->getMessage();
            }
        } else {
            echo "Please enter valid information";
        }
    } else {
        echo "Please enter valid information";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PALMDOC | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="icon" href="img/favicon2.jpeg" />
  <link rel="stylesheet" href="css/adminlte.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css" />
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index.html"><b>PALM</b>DOC</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="" method="post">
      <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name = "full_name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
        <select name="occupation" class="form-control">
                    <option value="1">Select Occupation</option>
                    <option value="Doctor">Doctor</option>
                    <option value="Patient">Patient</option>
                  </select>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name = "email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name = "password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fa fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fa fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>

      <a href="login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div><!--
<!-- /.register-box -->

<!-- jQuery -->
<!--<script src="js/jquery.min.js"></script>-->
<!-- Bootstrap 4 -->
<!--<script src="js/bootstrap.bundle.min.js"></script>-->
<!-- AdminLTE App -->
<!--<script src="js/adminlte.min.js"></script>-->
</body>
</html>
