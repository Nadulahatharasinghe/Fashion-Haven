<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fashion_haven"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete functionality
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $deleteQuery = "DELETE FROM delivery WHERE courier_id = $delete_id";
    
    if ($conn->query($deleteQuery) === TRUE) {
        echo "Record deleted successfully";

        // Redirect to readds.php after successful deletion
        header("Location: readds.php");
        exit(); 
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Fetch delivery data from the database
$sql = "SELECT courier_id, name, phone, email, company_name FROM delivery";
$result = $conn->query($sql);
?>
