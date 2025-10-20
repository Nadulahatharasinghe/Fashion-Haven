<?php
// Database credentials
$servername = "localhost";  // Usually "localhost"
$username = "root";         // Default phpMyAdmin username
$password = "";             // Default phpMyAdmin password
$dbname = "fashion_haven";  // Your database name

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
