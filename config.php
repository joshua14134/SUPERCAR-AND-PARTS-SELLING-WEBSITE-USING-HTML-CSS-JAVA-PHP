<?php
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password (leave empty if none)
$dbname = "user_db"; // Your database name

// Create a new mysqli instance
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection and handle potential errors
if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error); // Log the error
    die("Connection failed. Please try again later."); // User-friendly error message
}

// Set the charset to utf8mb4 for better compatibility
if (!$conn->set_charset("utf8mb4")) {
    error_log("Error loading character set utf8mb4: " . $conn->error); // Log charset loading errors
}

// Optional: Set a timeout for connection attempts
$conn->options(MYSQLI_OPT_CONNECT_TIMEOUT, 10);

// Optional: Enable error reporting for development (remove or adjust for production)
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

?>
