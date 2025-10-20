
<?php
session_start();

// Check if user is logged in
$loggedIn = isset($_SESSION['email']);

// logout function
if(isset($_POST['logout'])) {
    session_destroy(); // Destroy the session
    header("Location: index.php"); // after user log out re direct to the homepage index2.php
    exit();
}
?>

<!DOCTYPE html>
<head>
  <title>Account Details</title>
  <link rel="stylesheet" type="text/css" href="style/navigation.css">
  <link rel="stylesheet" type="text/css" href="style/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style/myaccount.css">
</head>
<body>
<style>
        body{
            background: url('images/bg.jpg');
        }
    </style>
<!-- Navigation Bar -->
<h1>Fashion Haven</h1>
    <header>
        <nav class="navbar">
            <div class="navdiv">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" alt="Fashion Haven Logo"></a>
                </div>
                <ul>
                    <li><a class="activ" href="dashboard.php">Dashboard</a></li>
                    <li><a href="aboutus.php">About us</a></li>
                    <li><a href="store.php">Store</a></li>
                    <li><a href="o&i.php">Order & Inventory</a></li>
                    <li><a href="contactus.php">Contact us</a></li>
                </ul>
                <div class="user-area">
                    <a href="logout.php"><button class="btn">Logout</button></a>
                </div>
            </div>
        </nav>
    </header>
    <div class="search">
        <input type="search" class="search-bar" placeholder="Search...">
    </div>
    <div class="aaa">
        <a href="dashboard.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
    </div>

        <div class="account-container">
            <?php

            
            
            //databse connection
            include 'db_con.php'; 

            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                $sql = "SELECT * FROM users WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    $first_name = $row['first_name'];
                    $last_name = $row['last_name'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $is_admin = $row['check_user'];

                    
                    echo"<h1>Account Details</h1>";
                    
                    echo"<div class='account-info'>";
                    echo"<div class='info-item'>";
                        echo"<label for='name'>First Name:</label>";
                        echo"<p id='name'>$first_name</p>";
                    echo"</div>";
                    echo"<div class='info-item'>";
                        echo"<label for='name'>Last Name:</label>";
                        echo"<p id='name'>$last_name</p>";
                    echo"</div>";
                    echo"<div class='info-item'>";
                        echo"<label for='email'>Email Address:</label>";
                        echo"<p id='email'>$email</p>";
                    echo"</div>";
                    echo"<div class='info-item'>";
                        echo"<label for='phone'>Phone Number:</label>";
                        echo"<p id='phone'>$phone</p>";
                    echo"</div>";
            
                
                    echo"<div class='buttons'>";
                    echo"<a href='employee_edit_account.php'><button class='edit-btn'>Edit Details</button></a>";
                    echo"<form action='delete_myaccount.php' method='post'>";
                    echo"<button type='submit' class='delete-btn' onclick='return confirm('Are you sure you want to delete your account? This action cannot be undone.)'>Delete Account</button>";
                    echo"</form>";
                    echo"<form action='' method='post'>";
                    echo"<button type='submit' name='logout' class='btn-logout1'>LOGOUT</button>";
                    echo"</form>";
                    echo"</div>";
                




                } else {
                    echo "User not found.";
                }
            } else {
                header("Location: loginn.php");
                exit();
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
    


<!-- Footer Section -->
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
