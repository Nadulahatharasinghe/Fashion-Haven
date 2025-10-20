<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <link rel='stylesheet' type='text/css' href='style/register.css'>
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <script src='js/register.js'></script>
</head>
<body>
    <style>
        body{
            background: url('images/faq_b.jpg')no-repeat;
            background-size: cover;
            background-position: center;
        }
    </style>
    <!-- Navigation Bar -->
    <h1>Fashion Haven</h1>
    <header>
        <nav class="navbar" style="background: transparent;">
            <div class="navdiv">
                <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
                <!--<ul class="nav-links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="store.php">Store</a></li>
                    <li><a href="order.php">Order</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="login.html"><i class="fa fa-user-circle-o" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                    <li><a href="wishlist.php"><i class="fa fa-heart" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                    <li><a href="cart.php"><i class="fa fa-cart-arrow-down" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                </ul>-->
            </div>
        </nav>
    </header>


    <div class="wrapper">
        <span class="icon-close">
            <ion-icon name="close"></ion-icon>
        </span>

        <div class="form-box register">
            <h2>Registration</h2>
            <form action="register.php" method="POST">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" id="fname" name="First_name"  required>
                    <label>First name</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" id="lname" name="Last_name"  required>
                    <label>Last name</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" id="email" name="Email"  required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </span>
                    <input type="tel" required name="Phone" pattern="{[0-9]{1}, [0-9]{2}, [0-9]{3}, [0-9]{4}, [0-9]{5}, [0-9]{6}, [0-9]{7}, [0-9]{8}, [0-9]{9}, [0-9]{10}}">
                    <label>Contact number</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name="Password"  required>
                    <label>Password</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">I agree to the terms & conditions</label>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox">Understand the data policy & accept cookie use</label>
                </div>
                <button type="submit" value="register" class="btn">Register</button>
                <div class="login-register">
                    <p>
                        Already have an account?<a href="loginn.php" class="login-link">Login</a>
                    </p>
                </div>
            </form>
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