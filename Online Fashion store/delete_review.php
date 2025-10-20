<?php


include 'db_con.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Delete comment from the database
    $sql = "DELETE FROM review WHERE id = $id";

    // Debugging: Echo the SQL query for checking
    echo "SQL Query: $sql <br>";

    if (mysqli_query($conn, $sql)) {
        // Redirect back to the comments page
        header("Location: review.php");
        exit();
    } else {
        // Error handling
        echo "Error deleting comment: " . mysqli_error($conn);
    }
} else {
    // Redirect if comment_id is not set
    header("Location: review.php");
    exit();
}
?>
