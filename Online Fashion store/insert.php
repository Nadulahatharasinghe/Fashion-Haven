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

// Check if the form is submitted 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cid = $_POST['did'];
    $name = $_POST['dname'];
    $phone = $_POST['dphone'];
    $email = $_POST['demail'];
    $cname = $_POST['dcname'];

    // Insert data into the database
    $sql = "INSERT INTO delivery (courier_id, name, phone, email, company_name)
            VALUES ('$cid', '$name', '$phone', '$email', '$cname')";

    if ($conn->query($sql) === TRUE) {
        echo "Delivery employee added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}

?>
