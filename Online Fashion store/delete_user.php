<?php

//adding databse connection

include 'db_con.php';


// Check if ID parameter is set
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete user from the database
    $sql = "DELETE FROM users WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "
        <script>
        alert('User deleted successfully.');
        </script>";
        
        // redirect to admin-dashboard
        header("Location: user_account_manage.php");
        exit();
       
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
}

// Close database connection
mysqli_close($conn);
?>
