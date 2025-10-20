
<?php
session_start();

// Check if user is logged in
$loggedIn = isset($_SESSION['email']);

// logout function
if(isset($_POST['logout'])) {
    session_destroy(); // Destroy the session
    header("Location: index.php"); // after user log out re direct to the homepage index2.php
    exit();
}
?>
<?php
//database connection
include 'db_con.php';

?>
<?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather user input from the form
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
   
    

   


    // SQL to insert user data into the database
    $sql = "INSERT INTO users (first_name, last_name, email, phone, password, check_user) 
            VALUES ('$first_name', '$last_name', '$email', '$phone', '$password', '$role')";

    // Execute SQL query
    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('Employee added successful.');
        </script>";

        // redirect to manage employee page
        header("Location: employee_manage.php");
        exit();
    }
    else {
        echo "Error deleting user: " . mysqli_error($conn);
    }

}


// Close database connection
mysqli_close($conn);
?>
