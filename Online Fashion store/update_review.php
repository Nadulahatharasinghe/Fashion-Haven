<?php
include 'db_con.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Gather updated user input from the form
    $Full_name = $_POST['Full_name'];
    $Comment_over = $_POST['Comment_over'];

    // Update the comment in the database
    $sql = "UPDATE review SET Full_name='$Full_name', Comment_over='$Comment_over' WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: review.php"); // Redirect back to the comments page
        exit();
    } else {
        echo "Error updating comment: " . mysqli_error($conn);
    }
} else {
    header("Location: review.php"); // Redirect if comment_id is not set
    exit();
}
?>
