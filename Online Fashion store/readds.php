<!DOCTYPE html>
<html>
<head>
    <title>Delivery partner Details</title>
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="Dservice.css">
</head>
<body>
<style>
        body{
            background: url('images/bg.jpg');
        }
    </style>
    <h1>Fashion Haven</h1>
    <header>
        <nav class="navbar">
            <div class="navdiv">
                <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
                <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="store.php">Store</a></li>
                    <li><a href="order.php">Order</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="myaccount.php"><i class="fa fa-user-circle-o" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                    <li><a href="wishlist.php"><i class="fa fa-heart" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                    <li><a href="cart.php"><i class="fa fa-cart-arrow-down" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <br>
    <br>

    <h1>Delivery Service Management </h1>
    <br>
    <br>
    
    <?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fashion_haven"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch delivery data from the database
$sql = "SELECT courier_id, name, phone, email, company_name FROM delivery";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Employee List</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 50px;
            
            
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 20px solid #ddd;
        }
        th {
            background-color:  rgb(144, 186, 251);
            color: white;
            text-align:center;

        }
        .action-btn {
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
            color: white;
            align:center;
            
        }
        .update-btn {
            background-color: #4CAF50;
            
        }
        .delete-btn {
            background-color: #f44336;
            
        }

    </style>
</head>
<body>
    <h2>Delivery Employee List</h2>

    <table border="1">
        <thead>
            <tr>
                <th>Courier ID</th>
                <th>Courier Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Company Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['courier_id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['company_name'] . "</td>";
                    // Action buttons: Update and Delete
                    echo "<td>
                            <a href='Dservice_edit1.php?courier_id=" . $row['courier_id'] . "' class='action-btn update-btn'>Update</a>
                            <a href='Dservice_delete.php?delete_id=" . $row['courier_id'] . "' class='action-btn delete-btn' onclick='return confirm(\"Are you sure you want to delete?\")'>Delete</a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No delivery partner records found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    // Close the connection
    $conn->close();
    ?>
</body>
</html>


<footer class="footer">
    <div class="footer-content">
        <div class="footer-left">
            <div class="footer-image-placeholder"><a href="index.php"><img src="images/logo.png"></a></div>
            <p>Lorem ipsum dolor sit amet, <br>consectetur adipiscing elit.</p>
        </div>
        <div class="footer-center">
            <ul class="footer-links">
                <li><a href="contactus.php">Contact us</a></li>
                <li><a href="tac.php">Terms and Conditions</a></li>
                <li><a href="policy.php">Privacy Policy</a></li>
                <li><a href="faq.php">FAQ</a></li>
            </ul>
            <br><br>
            <div class="footer-social-icons">
                <a href="#" class="social-icon"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="#" class="social-icon"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                <a href="#" class="social-icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                <a href="#" class="social-icon"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#" class="social-icon"><i class="fa fa-envelope-square" aria-hidden="true"></i></a>
                <a href="#" class="social-icon"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#" class="social-icon"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="footer-right">
            <div class="calendar">
                <div class="calendar-header">February 2025</div>
                <div class="calendar-days">
                    <div>Mo Tu We Th Fr Sa Su</div>
                    <div class="calendar-dates">
                        1 2 3 4 5 6 7
                        <br />
                        8 9 10 11 12 13 14
                        <br />
                        15 16 17 18 19 20 21
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>Copyright © 2024 Fashion Haven. All rights reserved.</p>
    </div>
</footer>
</body>
</html>