<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Fashion Haven</title>
    <!--Link to css files-->
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" type="text/css" href="style/order.css">
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
 </head>
 <body>
 <style>
        body{
            background: url('images/bg.jpg');
        }
    </style>
    <div class="logo"><a href="index.php"><img src="images/logo.png"></a></div>
    <h1>Fashion Haven Online Store - Payments and Orders</h1>
        <!-- Payment Section -->
        <div class="section">
            <h2>Payment</h2>
            <p class="secure-info">All transactions are secure and encrypted.</p>
            <div class="payment-option">
                <input type="radio" name="payment" id="cardpay" checked>
                <label for="webxpay">Card Payment</label>
                <div class="payment-logo">
                    <img src="https://img.icons8.com/color/48/000000/visa.png" alt="Visa">
                    <img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" alt="MasterCard">
                    <img src="https://img.icons8.com/color/48/000000/amex.png" alt="American Express">
                    <img src="https://img.icons8.com/color/48/000000/paypal.png" alt="PayPal">
                    <span>+1</span>
                </div>
            </div>
                 <div class="payment-option">
                <input type="radio" name="payment" id="cod">
                <label for="cod">Cash on Delivery (COD)</label>
            </div>
            <div class="payment-option">
                <input type="radio" name="payment" id="onlineBanking">
                <label for="onlineBanking">Online Banking</label>
            </div>
        </div>
         <!-- Summary Section -->
        <div class="summary-section">
            <div>
                <h2>Order Summary</h2>
                <div style="display: flex; align-items: center;">
                <img src="img/8.jpg" 
                    alt="" 
                    style="width: 50px; height: 50px; border-radius: 4px; margin-right: 10px;">
                    <div>
                        <p>Cashuals</p>
                        <small>White / S</small>
                    </div>
                </div>
            </div>

            <input type="text" placeholder="Discount code">
            <button>Apply</button>

            <div style="margin-top: 20px;">
                <p>Subtotal: Rs 2,750.00</p>
                <p>Shipping: Rs 350.00</p>
                <p class="total">Total: Rs 3,100.00</p>
                <button type="button" class="btn-buy" onclick="window.location.href='success.html'">Pay Now</button>
            </div>
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