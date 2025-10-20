<?php
session_start();
include 'db_con.php';

if (isset($_SESSION['email'])) {
    // Process the form submission to update user details
    // Retrieve and sanitize form data
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']); // Updated to include email
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    // Update user details in the database
    $old_email = $_SESSION['email'];
    $sql = "UPDATE users SET first_name='$first_name', last_name='$last_name', email='$email', phone='$phone' WHERE email='$old_email'";
    if (mysqli_query($conn, $sql)) {
        // Update session variable if email is changed
        $_SESSION['email'] = $email;
        // Redirect back to the profile page after successful update
        header("Location: myaccount.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
} else {
    // Redirect to login page if user is not logged in
    header("Location: loginn.php");
    exit();
}

mysqli_close($conn);
?>
