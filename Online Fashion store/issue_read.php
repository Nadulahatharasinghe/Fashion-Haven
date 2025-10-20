<?php
// Connect to the database
include 'connect.php';

// SQL query to get all issues
$sql = "SELECT * FROM issues";
$result = mysqli_query($con, $sql);


?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Issues</title>
    <link rel="stylesheet" type="text/css" href="style/manage.css"> <!-- Add styles if needed -->
</head>
<body>
<style>
        body{
            background: url('images/bg.jpg');
        }
    </style>
    <h1>Manage Reported Issues</h1>

    <?php
    if (mysqli_num_rows($result) > 0) {
        echo "<table>
                <tr>
                    
                    <th>Order ID</th>
                    <th>Issue Type</th>
                    <th>Description</th>
                    <th>Preferred Resolution</th>
                    <th>Contact Info</th>
                    <th>Action</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    
                    <td>" . $row['order_id'] . "</td>
                    <td>" . $row['issue_type'] . "</td>
                    <td>" . $row['description'] . "</td>
                    <td>" . $row['preferred_resolution'] . "</td>
                    <td>" . $row['contact_info'] . "</td>
                    <td>
                        <button><a href='issue_update.php?updateid=". $row['id'] ."'>Update</a></button>
                        <a href='issue_delete.php?id=" . $row['id'] . "'>Delete</a>
                    </td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "No issues found.";
    }

    // Close the database connection
    mysqli_close($con);
    ?>
    

</body>
</html>
