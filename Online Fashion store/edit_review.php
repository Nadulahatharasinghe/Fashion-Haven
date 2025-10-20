
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
<?php
//database connection

include 'db_con.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Fetch comment details from the database

    $sql = "SELECT * FROM review WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    // Display a form to edit the comment
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Edit Review</title>
        <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style\edit_review.css">

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
                    <li><a class="activ" href="store.php">Store</a></li>
                    <li><a href="order.php">Order</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="myaccount.php"><i class="fa fa-user-circle-o" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                    <li><a href="wishlist.php"><i class="fa fa-heart" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                    <li><a href="cart.php"><i class="fa fa-cart-arrow-down" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="search">
        <input type="search" class="search-bar" placeholder="Search...">
        
    </div>

    <div class="aaa">
        <a href="review.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
    </div>

    <div class="layout">
        <h2>Edit Review</h2>
        <form action="update_review.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="text" name="Full_name" value="<?php echo $row['Full_name']; ?>" placeholder="Full Name"><br>
            <textarea name="Comment_over" rows="10" cols="50"><?php echo $row['Comment_over']; ?></textarea><br>
            <button type="submit">Update Review</button>
        </form>
    </div>
    
    
    </div>
    </body>
    </html>
    <?php
    mysqli_close($conn);
} else {
    header("Location: review.php"); // Redirect if comment_id is not set
    exit();
}
?>
