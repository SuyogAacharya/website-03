<?php
// MySQL database credentials for localhost
$servername = "localhost"; // Change to your localhost servername if different
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password if any
$dbname = "trial"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input to prevent SQL injection
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $password = $conn->real_escape_string($_POST['password']);

    // Hash the password for better security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and bind the SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO registration (full_name, email, phone_number, password) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        die("Error: " . $conn->error); // Check for errors in the prepared statement
    }

    $stmt->bind_param("ssss", $username, $email, $phone, $hashed_password);
    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        header("Location: login_page.html"); // Redirect to index.html after successful registration
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close prepared statement
    $stmt->close();
}

// Close database connection
$conn->close();
?>
