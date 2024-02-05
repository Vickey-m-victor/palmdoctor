<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "toor";
    $dbname = "mediplus";

    try {
        // Create a PDO instance
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Convert the date format from MM/DD/YYYY to YYYY-MM-DD
        $converted_date = date('Y-m-d', strtotime($_POST['appointment_date']));

        // Prepare the SQL statement for insertion
        $stmt = $conn->prepare("INSERT INTO Appointments (name, email, phone, department, doctor, appointment_date, message) 
                                VALUES (:name, :email, :phone, :department, :doctor, :appointment_date, :message)");

        // Bind parameters from the form data to the prepared statement
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':phone', $_POST['phone']);
        $stmt->bindParam(':department', $_POST['department']);
        $stmt->bindParam(':doctor', $_POST['doctor']);
        $stmt->bindParam(':appointment_date', $converted_date);
        $stmt->bindParam(':message', $_POST['message']);

        // Execute the prepared statement to insert data
        $stmt->execute();

        // Redirect to a success page or do further processing
        header("Location: success.php");
        exit();
    } catch(PDOException $e) {
        // Handle database errors here
        echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $conn = null;
}
?>
