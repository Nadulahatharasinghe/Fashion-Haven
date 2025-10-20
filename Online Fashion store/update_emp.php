<?php



include 'db_con.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_edit = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['check_user'];

    // Update user details in the database
    $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', email = '$email_edit', phone = '$phone' check_user = '$role' WHERE email = $email_edit";

    

    if (mysqli_query($conn, $sql)) {
        
        echo "
        <script>
        alert('User details updated successfully.');
        </script>";
        
         // redirect to admin-dashboard
         header("Location: employee_manage.php");
         exit();
    } else {
        echo "Error updating user details: " . mysqli_error($conn);
    }
}

?>