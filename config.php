<?php
$host = "localhost";
$user = "root"; // Default MySQL user
$password = ""; // Leave empty if no password is set
$dbname = "cybercafe"; // Ensure this matches your actual database name

// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // Uncomment for debugging
    // echo "Database Connected Successfully!";
}
?>
