<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us </title>
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style/contactus.css">
    <link rel="stylesheet" type="text/css" href="style/terms.css">
    <script src="js/contact.js"></script>
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
                    <li><a class="activ" href="contactus.php">Contact Us</a></li>
                    <li><a href="myaccount.php"><i class="fa fa-user-circle-o" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                    <li><a href="wishlist.php"><i class="fa fa-heart" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                    <li><a href="cart.php"><i class="fa fa-cart-arrow-down" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>
<br>
    <div class="contact-section">
        <h2>Contact Us</h2>
        <br>
        <div class="contact-info">

            <div class="item">
                <img src="images/tel.jpeg " width="30px" height="30px" >
                <p>Tel:+9475863124</p>
            </div>
            
            <div class="item">
                <img src="images/mail.png" width="30px" height="30px">
                <p>Email: fashionhaven@gmail.com</p>
            </div>

            <div class="item">
                <img src="images/location.png" width="30px" height="=30px">
                <p>Location: 123/4 , Fashion road , Sri Lanka</p>
            </div>

            <div class="social-icons">
                <a href="#"><img src="images/facebook.png" ></a>
                <a href="#"><img src="images/insta.png"></a>
                <a href="#"><img src="images/whatsapp.png"></a>
                <a href="#"><img src="images/twitter.png"></a>
            </div>
        </div>
    </div>

<div class="contact-container">
    <div class="contact-form">
        <form action="/submit_contact" method="post">
            <!DOCTYPE html>
            <html>
            <head>
                <title>Contact Form</title>
            </head>
            <body>
                <!-- Contact Form -->
                <form>
                    <label for="name"><b>Name</b></label>  
                    <input class="half-width" type="text" id="name" name="name" placeholder="Your Name">
            
                    <br>
                    <label for="contact"><b>Contact Number</b></label>
                    <input class="half-width" type="text" id="contact" name="contact" placeholder="Contact Number">
            <br>
                    <label for="email"><b>Email</b></label>
                    <input type="email" id="email" name="email" placeholder="mail@example.com">
            <br>
                    <label for="comment"><b>Your comment</b></label>
                    <textarea id="comment" name="comment" placeholder="Type your comments"></textarea>
            
                    <button type="submit">Submit</button>
                </form>
            
            </body>
            </html>
            
        </form>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31698.600994455737!2d79.93117632308699!3d6.730128989278556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae24f1483fcefa7%3A0xc2c5fad048463a95!2sFashion%20Haven!5e0!3m2!1sen!2slk!4v1727013498136!5m2!1sen!2slk"></iframe>
    </div>
    </div>
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


