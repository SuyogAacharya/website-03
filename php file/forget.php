<?php
// Include your database connection code here
$servername = "localhost"; // Change to your localhost servername if different
$username = "root"; // Change to your MySQL username
$password = ""; // Change to your MySQL password if any
$dbname = "trial"; // Change to your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $phone = $_POST["phone"];

    // Validate form data (you can add more validation if needed)
    if (empty($email) || empty($phone)) {
        echo "Please fill in all fields.";
    } else {
        // Check if the user with the given email and phone exists in the database
        $sql = "SELECT * FROM users WHERE email = ? AND phone = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            // Print out the SQL error message
            echo "Error: " . $conn->error;
        } else {
            $stmt->bind_param("ss", $email, $phone);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // User exists, generate and send the password reset link
                $user = $result->fetch_assoc();

                // Generate a unique token
                $token = bin2hex(random_bytes(32));

                // Store the token in the database
                $updateTokenSql = "UPDATE users SET reset_token = ? WHERE id = ?";
                $updateTokenStmt = $conn->prepare($updateTokenSql);

                if (!$updateTokenStmt) {
                    // Print out the SQL error message
                    echo "Error: " . $conn->error;
                } else {
                    $updateTokenStmt->bind_param("si", $token, $user['id']);
                    $updateTokenStmt->execute();
                    $updateTokenStmt->close();

                    // Send the reset link to the user's email (you need to implement this part)
                    $resetLink = "https://yourwebsite.com/reset_password.php?token=" . $token;
                    // Implement email sending logic here, e.g., using the mail() function

                    // Display success message
                    echo "Password reset link sent. Check your email or phone.";
                }
            } else {
                // User does not exist
                echo "Invalid email or phone number.";
            }

            $stmt->close(); // Close the prepared statement
        }
    }
}

// Close the database connection
$conn->close();
?>
