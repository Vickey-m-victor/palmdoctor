<?php
session_start();
include('connection.php');
include('functions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the required fields are provided
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
       // $full_name = $_POST["full_name"];
        if (!empty($email) && !empty($password)) {
            // Define the SQL query to fetch user data by email
            $query = "SELECT * FROM doctor WHERE email = :email LIMIT 1";

            // Prepare the statement
            $stmt = $con->prepare($query);

            if ($stmt) {
                // Bind the email parameter
                $stmt->bindParam(':email', $email);

                // Execute the statement
                $stmt->execute();

                // Fetch the result
                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($result) {
                    // Check if the provided password matches the one in the database
                    if (password_verify($password, $result['password'])) {
                        $_SESSION['user_id'] = $result['user_id'];
                        header("Location: index.php");
                        die();
                    } else {
                        echo "Incorrect password. Please try again.";
                    }
                } else {
                    echo "User with this email does not exist.";
                }
            }
        } else {
            echo "Please enter a valid email and password.";
        }
    } else {
        echo "Please enter valid information.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon2.jpeg">
    <title>PALMDOC</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form action="" class="form-signin" method = "post">
						<div class="account-logo">
                            <img src="assets/img/logo-dark2.png" alt="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" autofocus="" class="form-control" name = "email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name = "password">
                        </div>
                        <div class="form-group text-right">
                            <a href="forgot-password.html">Forgot your password?</a>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary account-btn">Login</button>
                        </div>
                        <div class="text-center register-link">
                            Don’t have an account? <a href="registration2.php">Register Now</a>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- login23:12-->
</html>