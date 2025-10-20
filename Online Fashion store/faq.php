<!DOCTYPE html>
<html>
<head>
    <title>FAQ</title>
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" type="text/css" href="style/faq.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.main.css'>
    
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



<!--------------body--------------->


    <br>
    <div class="container">
        <h1>Support</h1>
    
        <h2>Frequently Asked Questions</h2>
        <div class="faq">
            <h3>Do you provide International delivery?</h3>
            <p>Yes, international delivery is available. When you check out your order, please specify the location to determine the shipping cost.</p>
        </div>
        <div class="faq">
            <h3>How do I return an item?</h3>
            <p>Visit the RETURN section above for more information. If you need additional assistance, please submit an inquiry via our CONTACT page.</p>
        </div>
        <div class="faq">
            <h3>What is your returns policy?</h3>
            <p>We strive for your satisfaction. Specific information is provided in the RETURN section.</p>
        </div>
        <div class="faq">
            <h3>How do I track my order?</h3>
            <p>Log into the customer portal to review your order's history and tracking information. Be sure to enter your email account so that you may receive notifications virtually as well.</p>
        </div>
        <div class="faq">
            <h3>What are your delivery options?</h3>
            <p>Delivery options are available via courier service, United States Postal Service, and other options. Depending on your location, we will assist you in selecting a delivery option.</p>
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
    
    <script>
        // FAQ toggle functionality
        const faqs = document.querySelectorAll('.faq h3');
        faqs.forEach(faq => {
            faq.addEventListener('click', () => {
                const answer = faq.nextElementSibling;
                answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
            });
        });
    </script>

</body>
</html>