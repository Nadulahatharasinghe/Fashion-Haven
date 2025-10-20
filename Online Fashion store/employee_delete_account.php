<?php
session_start();
include 'db_con.php';

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    // Delete user from the database
    $sql = "DELETE FROM users WHERE email='$email'";
    if (mysqli_query($conn, $sql)) {
        // Logout the user and redirect to the login page after successful deletion
        session_destroy();
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    // Redirect to login page if user is not logged in
    header("Location: loginn.php");
    exit();
}

mysqli_close($conn);
?>
