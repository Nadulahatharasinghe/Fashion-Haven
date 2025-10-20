<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <!--Link to css files-->
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" type="text/css" href="style/store.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
    
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
                    <li><a href="myaccount.php"><i class="fa fa-user-circle-o" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                    <li><a href="wishlist.php"><i class="fa fa-heart" style="font-size: 30px;" aria-hidden="true"></i></a></li>
                    <li><i class="fa fa-cart-arrow-down" style="font-size: 30px;" id="cart-icon" data-quantity="0" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="search">
        <input type="search" class="search-bar" placeholder="Search...">
    </div>


    <header>
        <!--cart-->
        <div class="cart">
            <h2 class="cart-title">Your Cart</h2>
            <!--content-->
            <div class="cart-content">
                <div class="cart-box">
                    
                    <div class="detail-box">
                        <div class="cart-product-title"></div>
                        <div class="cart-price"></div>
                        <input 
                            type="number" 
                            name=""
                            id=""
                            value="1"
                            class="cart-quantity" 
                        />
                    </div>
                    <!--Remove Item-->
                    <i class="bx bx-trash-alt cart-remove"></i>
                </div>
            </div>
            <!--Total-->
            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price">Rs 0</div>
            </div>
            <!--Buy Button-->
            <button type="button" class="btn-buy" onclick="window.location.href='payment.php'">Pay Now</button>
            <!-- Button to trigger form -->
            <div class="item-container"></div>
            <div class="item-details"></div>
         
            <!--close cart-->
            <div>
                <i class="bx bx-x" id = "close-cart"></i>
            </div>
        </div>

    </header>

    
        <!--Navigation Bar 2 for dropdown list-->
        <nav class="navbar-main">
        <ul class="nav-links">
        <li class="dropdown">
            <a href="women.php">Women</a>
            <ul class="dropdown-content">
                <li><a href="women.php">New Arrivals</a></li>
                <li><a href="women.php">Cashuals</a></li>
                <li><a href="women.php">Office Wear</a></li>
                <li><a href="women.php">Party Wear</a></li>
                <li><a href="#">Other</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="men.php">Men</a>
            <ul class="dropdown-content">
                <li><a href="men.php">New Arrivals</a></li>
                <li><a href="men.php">Formal Wear</a></li>
                <li><a href="men.php">Cashuals</a></li>
                <li><a href="#">Other</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="kids.php">Kids</a>
            <ul class="dropdown-content">
                <li><a href="kids.php">Boys' Clothing(3-16)</a></li>
                <li><a href="kids.php">Girls' Clothing(3-16)</a></li>
                <li><a href="kids.php">Kids Foot Wear</a></li>
                <li><a href="#">Other</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="store.php">Other</a>
            <ul class="dropdown-content">
                <li><a href="#">Shoes & Bags</a></li>
                <li><a href="#">Beauty & Health</a></li>
                <li><a href="#">Books & Stationery</a></li>
                <li><a href="#">Travel & Luggage</a></li>
            </ul>
        </li>
    </ul>
    </nav>
</nav>
<!--Product-->
<section class="shop-container">
<h2 class="section-title">Shop Products</h2>
<!--Shop Content-->
<div class="shop-content">
<!--Box1-->
<div class="product-box">
    <img src="images/1.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">CASUAL SHORT</h2>
    <span class="price">Rs 1990.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box2-->
<div class="product-box">
    <img src="images/2.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">CASUAL SHORT</h2>
    <span class="price">Rs 1990.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box3-->
<div class="product-box">
    <img src="images/3.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">JOGGER PANT</h2>
    <span class="price">Rs 2699.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box4-->
<div class="product-box">
    <img src="images/4.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">JOGGER PANT</h2>
    <span class="price">Rs 2699.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box5-->
<div class="product-box">
    <img src="images/5.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">JOGGER PANT</h2>
    <span class="price">Rs 2699.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box6-->
<div class="product-box">
    <img src="images/6.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">Women Smart Jeggings</h2>
    <span class="price">Rs 2499.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box7-->
<div class="product-box">
    <img src="images/7.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">Women Traveler Pant</h2>
    <span class="price">Rs 2500.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box8-->
<div class="product-box">
    <img src="images/8.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">Women Traveler Pant</h2>
    <span class="price">Rs 2500.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box9-->
<div class="product-box">
    <img src="images/9.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">Ladies Legins</h2>
    <span class="price">Rs 999.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box10-->
<div class="product-box">
    <img src="images/10.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">Women Smart Jeggings</h2>
    <span class="price">Rs 3500.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box11-->
<div class="product-box">
    <img src="images/13.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">AMY Printed Dress</h2>
    <span class="price">Rs 1899.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box12-->
<div class="product-box">
    <img src="images/12.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">Girls kids 2pcs pajama set</h2>
    <span class="price">Rs 1290.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box13-->
<div class="product-box">
    <img src="images/11.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">Boys Polo T- Shirt</h2>
    <span class="price">Rs 1500.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box14-->
<div class="product-box">
    <img src="images/14.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">Bug junior boys plain casual t-shirt</h2>
    <span class="price">Rs 990.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box15-->
<div class="product-box">
    <img src="images/15.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">Kids Graphic Printed T-Shirt</h2>
    <span class="price">Rs 1900.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box16-->
<div class="product-box">
    <img src="images/16.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">jobbs mens long sleeve hoodie</h2>
    <span class="price">Rs 3990.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box17-->
<div class="product-box">
    <img src="images/17.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">jobbs mens long sleeve hoodie</h2>
    <span class="price">Rs 3990.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box18-->
<div class="product-box">
    <img src="images/18.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">WOMENS CASUAL CO - ORD SET</h2>
    <span class="price">Rs 3290.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box19-->
<div class="product-box">
    <img src="images/19.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">WOMENS CASUAL CO - ORD SET</h2>
    <span class="price">Rs 3290.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box20-->
<div class="product-box">
    <img src="images/20.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">WOMENS CASUAL CO - ORD SET</h2>
    <span class="price">Rs 3290.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>
<!--Box21-->
<div class="product-box">
    <img src="images/21.jpg"
         alt=""
         class="product-img" />
    <h2 class="product-title">WOMENS CASUAL CO - ORD SET</h2>
    <span class="price">Rs 3290.00</span>
    <i class="bx bxs-cart-download add-cart"></i>
</div>

</div>
</section>


<div class="review">
    <a href="add_review.php"><button style="font-size: 18px; margin-left: 92%; margin-bottom: 1%; background-color: rgb(83, 165, 213); border-radius: 10px;">writer Reviews</button></a>
</div>

<div class="fixed-message-icon">
    <a href="issue_display.php" title="Contact Us"><i class="fa fa-envelope" aria-hidden="true"></i></a>
</div>

<!--link to js-->
<script src="js\store.js"></script>

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