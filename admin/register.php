<?php
session_start();
include('connection.php');
include('functions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Check if the required fields are provided
    if (isset($_POST["user_name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["mobile"]) && isset($_POST["id"])) {
        $user_name = $_POST["user_name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $mobile = $_POST["mobile"];
        $id = $_POST["id"];

        if (!empty($user_name) && !empty($password) && !empty($email) && !empty($mobile) && !empty($id)) {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Generate a user ID or use your preferred method
            $user_id = random_num(5); // Assuming random_num is defined

            $query = "INSERT INTO doctor (user_id, user_name, email, mobile, id, password) VALUES(:user_id, :user_name, :email, :mobile, :id, :password)";

            try {
                // Prepare the statement
                $stmt = $con->prepare($query);

                // Bind parameters with correct names
                $stmt->bindParam(':user_id', $user_id);
                $stmt->bindParam(':user_name', $user_name); // Changed :full_name to :user_name
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':mobile', $mobile);
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':password', $hashed_password);


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


<!-- register24:03-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Medical & Hospital</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper  account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form action="" class="" method="post">
                        <div class="account-logo">
                            <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="user_name">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>National ID</label>
                            <input type="text" class="form-control" name="id">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" class="form-control" name="mobile">
                        </div>
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox"> I have read and agree the Terms & Conditions
                            </label>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" type="submit">Signup</button>
                        </div>
                        <div class="text-center login-link">
                            Already have an account? <a href="login.html">Login</a>
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


<!-- register24:03-->

</html>