<?php
// Database connection 
include 'db_con.php';

session_start();

// Check if user is logged in
$loggedIn = isset($_SESSION['email']);

// Logout function
if(isset($_POST['logout'])) {
    session_destroy(); // Destroy the session
    header("Location: index.php"); // Redirect to the homepage index.php after user logs out
    exit();
}

// Fetch the email of the logged-in user
$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Gather user input from the form
    $Full_name = $_POST['Full_name'];
    // Use the email of the logged-in user
    $Comment = $_POST['Comment_over'];

    // SQL to insert user data into the database
    $sql = "INSERT INTO review (Full_name, Comment_over) 
            VALUES ('$Full_name', '$Comment')";

    // Execute SQL query
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Comment added successfully');</script>";
        // Reload the page to display the newly added comment
        header("Location: review.php");
        exit();
    } else {
        echo "Error: Comment addition failed - " . mysqli_error($conn);
    }
}


// comment view part 

// Get all comments from the table
$sql = "SELECT * FROM review";
$result = mysqli_query($conn, $sql);



?>
<!DOCTYPE html>
<html>
<head>
    <title>Review</title>
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style\review.css">
    
</head>
<body>
<style>
        body{
            background: url('images/bg.jpg');
        }
    </style>
<div>

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


    <h2>REVIEW ARE HERE</h2>
    <?php
    // Display comments
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <div class="comment_container">
            <div class="top">
                <div class="topcomment">
                    Full name : <?php echo $row['Full_name'];?>
                </div>
        
           
            <div class="bottom">
                <?php echo $row['Comment_over'];?>
            </div>
            <div class="buttondel">
                <div class="leftbtn">
                <form action='edit_review.php' method='POST' >
            <input type='hidden' name='id' value='<?php echo $row['id']; ?>'>
            <button type='submit' value='Edit'>Edit Review</button>
        </form>
                </div>
                <div class="rightbtn">
                <form action='delete_review.php' method='POST' onsubmit="return getapproved()">
            <input type='hidden' name='id' value='<?php echo $row['id']; ?>'>
            <button type='submit' name='delete_comment' value='Delete'> Delete Review</button>
        </form>
                </div>
            </div>
        </div>
       
        
        
        <hr>
    <?php
    }
    ?>
</div>

<div class="layout">
    <h4>Add Review</h4>
    <form action="review.php" method="POST" onsubmit="return addcomment()">
        <input type="text" name="Full_name" placeholder="Full Name"><br>
        <!-- Email field is set as read-only hidden -->
        <input type="email" name="email" value="<?php echo $email; ?>" readonly hidden>
        <textarea name="Comment_over" rows="10" cols="50" placeholder="Type your message"></textarea><br>
        <button type="submit">Add Review</button> 
    </form>
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