<?php
// Assuming you have a session started to identify the logged-in user
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page or handle unauthorized access
    header("Location: login.php");
    exit();
}

// Database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "auth_db";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $course = $_POST["course"];
    $method = $_POST["method"];

    // Upload photo
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["proof"]["name"]);
    move_uploaded_file($_FILES["proof"]["tmp_name"], $target_file);

    // Get user ID from session
    $user_id = $_SESSION['user_id'];

    // Update database with form data
    $sql = "UPDATE user SET course = '$course', method = '$method', proof = '$target_file' WHERE id = $user_id";

    if ($conn->query($sql) === TRUE) {
        echo "Data updated successfully.";
    } else {
        echo "Error updating data: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>