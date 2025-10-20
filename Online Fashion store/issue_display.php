<?php include 'connect.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
	<link rel="stylesheet" type="text/css" href="style/issue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/index.js"></script>
	<script src="js/issue.js"></script>
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
                <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
                <ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a class="activ" href="store.php">Store</a></li>
                    <li><a href="order.php">Order</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="myaccount.phpl"><i class="fa fa-user-circle-o" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                    <li><a href="wishlist.php"><i class="fa fa-heart" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                    <li><a href="cart.php"><i class="fa fa-cart-arrow-down" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="search">
        <input type="search" class="search-bar" placeholder="Search...">
        
    </div>
    

	<!-- Main Content: Issue Reporting Form -->
    <main>
        <section class="issue-section">
            <h2>Identify Your Issue</h2>
            <form id="issue-form" action="issue_insert.php" method="POST">
                <label for="order-id">Order ID:</label>
                <input type="text" id="order-id" name="order-id" placeholder="Enter your order ID" required>
                
                <label for="issue-type">Issue Type:</label>
                <select id="issue-type" name="issue-type" required>
                    <option value="damaged-item">Damaged Item</option>
                    <option value="wrong-item">Received Wrong Item</option>
                    <option value="delivery-delay">Delivery Delay</option>
                    <option value="size-issue">Size Issue</option>
                    <option value="payment-issue">Payment Issue</option>
                    <option value="other">Other</option>
                </select>

                <label for="description">Description of the Issue:</label>
                <textarea id="description" name="description" placeholder="Describe the issue in detail..." required></textarea>

                <label for="preferred-resolution">Preferred Resolution:</label>
                <select id="preferred-resolution" name="preferred-resolution" required>
                    <option value="refund">Refund</option>
                    <option value="exchange">Exchange</option>
                    <option value="repair">Repair</option>
                    <option value="other">Other</option>
                </select>

                <label for="contact-info">Contact Information:</label>
                <input type="email" id="contact-info" name="contact-info" placeholder="Enter your email for follow-up" required>
                
                <button type="submit">Submit Issue</button>
            </form>
        </section>

        <!-- Problem Resolution and Communication -->
        <section class="problem-resolution">
            <h2>Problem Resolution & Communication</h2>
            <p>Our team will review your issue within 24 hours and contact you via email or phone for follow-up. Based on the complexity, we aim to resolve most issues within 3-5 business days.</p>
        </section>

        <!-- Estimated Expedited Delivery Windows -->
        <section class="delivery-estimates">
            <h2>Estimated Expedited Delivery Windows</h2>
            <table>
                <thead>
                    <tr>
                        <th>Location</th>
                        <th>Expedited Delivery (2-3 Days)</th>
                        <th>Standard Delivery (5-7 Days)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>USA</td>
                        <td>2-3 Business Days</td>
                        <td>5-7 Business Days</td>
                    </tr>
                    <tr>
                        <td>Canada</td>
                        <td>3-4 Business Days</td>
                        <td>7-10 Business Days</td>
                    </tr>
                    <tr>
                        <td>Europe</td>
                        <td>3-5 Business Days</td>
                        <td>7-12 Business Days</td>
                    </tr>
                    
                </tbody>
            </table>
        </section>
    </main>
    <!-- Main Content: Issue Reporting Form -->
<main>
    <section class="issue-section">
        

        
        <!-- Button to manage reported issues -->
        <button onclick="window.location.href='issue_read.php';">Manage Reported Issues</button>
    </section>
</main>

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
   
