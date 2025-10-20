<!DOCTYPE html>
<html>
<head>
    <title>Package Details</title>
    <link rel="stylesheet" href="style/o&i.css">
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/packdtail.css">
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
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" alt="Fashion Haven Logo"></a>
                </div>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="aboutus.php">About us</a></li>
                    <li><a href="store.php">Store</a></li>
                    <li><a class="activ" href="o&i.php">Order & Inventory</a></li>
                    <li><a href="contactus.php">Contact us</a></li>
                </ul>
                <div class="user-area">
                    <button class="btn">Logout</button>
                </div>
            </div>
        </nav>
    </header>
    <div class="search">
        <input type="search" class="search-bar" placeholder="Search...">
    </div>
    <!--------------body--------------->
    
    <br>
    <section class="package-details">
        <h1>Package Details</h1>
        
        <div class="package">
            <img src="package-placeholder.png" alt="Package 1 Image">
            <div class="package-info">
                <h2>Package 1</h2>
                <p>Description of the package goes here...</p>
            </div>
            <div class="package-status">
                <p>Rs. 10080.00</p>
                <p>Online Payment</p>
                <button onclick="document.location='approPack.php'" class="approved">Package Approved</button>
            </div>
        </div>
        
        <div class="package">
            <img src="package-placeholder.png" alt="Package 2 Image">
            <div class="package-info">
                <h2>Package 2</h2>
                <p>Description of the package goes here...</p>
            </div>
            <div class="package-status">
                <p>Rs. 970.50</p>
                <p>Cash On Delivery</p>
                <button onclick="document.location='approPack.php'" class="processing">Package Processing</button>
            </div>
        </div>
        
        <div class="package">
            <img src="package-placeholder.png" alt="Package 3 Image">
            <div class="package-info">
                <h2>Package 3</h2>
                <p>Description of the package goes here...</p>
            </div>
            <div class="package-status">
                <p>Rs. 2580.00</p>
                <p>Online Payment</p>
                <button onclick="document.location='approPack.php'" class="approved">Package Approved</button>
            </div>
        </div>
    </section>
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