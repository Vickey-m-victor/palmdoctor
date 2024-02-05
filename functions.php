<?php

/*function check_login($con){

if(isset($_SESSION['user_id'])){
    $id = $_SESSION['user_id'];
    $query = "SELECT * FROM users  WHERE user_id = '$id' LIMIT 1";

$result = mysqli_query($con,$query);
if ($result && mysqli_num_rows($result) > 0){
$user_data = mysqli_fetch_assoc($result);

return $user_data;
}
}
// redirect to login page
header("Location: login.php");
die();
} */

function check_login($con)
{
    if (isset($_SESSION['user_id'])) {
        $id = $_SESSION['user_id'];

        // Use a prepared statement to avoid SQL injection
        $query = "SELECT * FROM users WHERE user_id = :id LIMIT 1";
        $stmt = $con->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Fetch the user data
        $user_data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user_data) {
            return $user_data;
        }
    }

    // Redirect to the login page if no user data is found
    header("Location: login.php");
    die();
}

/* Example usage:
try {
    $pdo = new PDO("mysql:host=localhost;dbname=your_database", "your_username", "your_password");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    session_start();
    $user_data = check_login($con);
    // Your user data is now available in the $user_data variable.
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}*/

function random_num($length)
{

    $text = "";
    if ($length < 5) {
        $length = 5;
    }
    $len = rand(4, $length);

    for ($i = 0; $i < $len; $i++) {
        $text .= rand(0, 9);
    }
    return $text;
}
