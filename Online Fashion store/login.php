<?php
session_start();

//adding databse connection

include 'db_con.php';


// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather user input from the form
    $email = $_POST['username'];
    $password = $_POST['password'];

    // SQL to check if the user exists in the database
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

    // Execute SQL query
    $result = mysqli_query($conn, $sql);

    // Check if a row was returned
    if (mysqli_num_rows($result) == 1) {
        // Fetch user data
        $user = mysqli_fetch_assoc($result);
        
        // Check if the user is an admin
        if ($user['check_user'] == 1) {
            // Admin user, redirect to admin dashboard
            $_SESSION['email'] = $email;
            header("Location: dashboard.php");
            
            exit();
        }
        if($user['check_user'] == 3){
            $_SESSION['email'] = $email;
            header("Location: dashboard.php");
            exit();
        } else {
            // Regular user, redirect to index2.php
            $_SESSION['email'] = $email;
            header("Location: store.php");
            exit();
        //if rec manager login to edit job details    
        }
    } else {
        // Invalid credentials
        echo "<script>alert('Invalid email or password');
        window.location.href = 'login.php';
        </script>";
        
    }
}

// Close database connection
mysqli_close($conn);
?>