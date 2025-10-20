<!DOCTYPE html>
<html>
<head>
    <title>customer messages</title>
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style/messages.css">

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

    <br>

    <!--customer messages content-->
    <div class="message-section">
        <h2>Pre-Purchase Inquiries</h2>
        <div class="message">
            <h3>Customer Message</h3>
            <p>Can you tell me if this dress is available in size M?</p>
            <textarea placeholder="Type your response..."></textarea>
            <button>Send Response</button>
        </div>
    </div>

    <div class="message-section">
        <h2>Order Status Updates</h2>
        <div class="message">
            <h3>Customer Message</h3>
            <p>Has my order been shipped yet? I haven't received a tracking number.</p>
            <textarea placeholder="Type your response..."></textarea>
            <button>Send Response</button>
        </div>
    </div>

    <div class="message-section">
        <h2>Post-Purchase Communication</h2>
        <div class="message">
            <h3>Customer Message</h3>
            <p>I'd like to return a pair of shoes I bought. What’s the process?</p>
            <textarea placeholder="Type your response..."></textarea>
            <button>Send Response</button>
        </div>
    </div>

    <div class="message-section">
        <h2>Customer Support</h2>
        <div class="message">
            <h3>Customer Message</h3>
            <p>I think I received the wrong item in my order. Can you help?</p>
            <textarea placeholder="Type your response..."></textarea>
            <button>Send Response</button>
        </div>
    </div>

    <div class="message-section">
        <h2>Promotional Messages</h2>
        <div class="message">
            <h3>Customer Message</h3>
            <p>What promotions do you have going on right now?</p>
            <textarea placeholder="Type your response..."></textarea>
            <button>Send Response</button>
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