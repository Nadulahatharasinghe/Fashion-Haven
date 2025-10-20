<!DOCTYPE html>
<html>
<head>
    <title>Delivery Service Manage</title>
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/Dservice.css">
    
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
    <!-- Form for Create/Update -->
    <?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fashion_haven";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch existing data for a specific courier ID
if (isset($_GET['courier_id'])) {
    $courier_id = $_GET['courier_id'];
    
    // Get the current data for this courier
    $selectQuery = "SELECT * FROM delivery WHERE courier_id = $courier_id";
    $result = $conn->query($selectQuery);
    $row = $result->fetch_assoc();
}

// Update the data if the form is submitted
if (isset($_POST['update'])) {
    $name = $_POST['dname'];
    $phone = $_POST['dphone'];
    $email = $_POST['demail'];
    $company_name = $_POST['dcname'];

    // Update query
    $updateQuery = "UPDATE delivery SET name='$name', phone='$phone', email='$email', company_name='$company_name' WHERE courier_id = $courier_id";
    
    if ($conn->query($updateQuery) === TRUE) {
        echo "Record updated successfully.";
        header('Location: readds.php'); // Redirect to the list after updating
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>

<body>

<div class = "form-container">   
    <center><h2>Edit Delivery Service Employee</h2></center>
    <br>
    <br>

    <form id = "adminForm" method="POST" action="">
        <center>
        <label for="name">Courier Name:</label>
        <input type="text" id = "name" name="dname" value="<?php echo $row['name']; ?>" required><br><br>

        <label for="phone">Phone Number:</label>
        <input type="text" id = "phone" name="dphone" value="<?php echo $row['phone']; ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id = "email" name="demail" value="<?php echo $row['email']; ?>" required><br><br>

        <label for="company_name">Company Name:</label>
        <input type="text" id = "cname" name="dcname" value="<?php echo $row['company_name']; ?>" required><br><br>

        <button type="submit" name="update">Update</button>

    </center>
    <br>
    <br>
    </form>
</div> 
      

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