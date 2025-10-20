<?php
// Include the database connection file
include 'db_con.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather user input from the form
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];
    $Password = $_POST['Password'];
    
    // if nomal user defult get value 2
    $check_user = 2;

    // Insert the data into the database
    $sql = "INSERT INTO users (First_name, Last_name, Email, Phone, Password, check_user) 
    VALUES ('$First_name', '$Last_name', '$Email', '$Phone', '$Password', '$check_user')";

    // Execute SQL query
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registration successful');</script>";
        echo "<script>alert('Please enter User credentials to login here ');</script>";
        header("Location: loginn.php");
         
        exit();
    } else {
        echo "Error: " . $sql . "<br>";
    }
}
    // Close the connection
    mysqli_close($conn);

?>
