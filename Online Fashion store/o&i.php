<!DOCTYPE html>
<html>
<head>
    <title>Order & Inventory</title>
    <link rel="stylesheet" href="style/o&i.css">
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <main>
        <section class="account-section">
            <!-- <div class="account-info">
                <a href="#"><img src="images/user.png" alt="User Icon"></a>
                <h2>My Account</h2>
            </div> -->

            <div class="cards">
                <div class="card">
                    <h3>Deliveries <span class="flag-icon"><i class="fa fa-flag" aria-hidden="true"></i></span></h3>
                    <ul>
                        <li><a href="#">Upcoming Deliveries</a></li><br><br>
                        <li><a href="#">Order Details</a></li>
                    </ul>
                </div>
                <div class="card">
                    <h3>Suppliers <span class="user-icon"><i class="fa fa-user" aria-hidden="true"></i></span></h3>
                    <ul>
                        <li><a href="#">Supplier Status</a></li>
                    </ul>
                </div>
                <div class="card">
                    <h3>Packagers <span class="box-icon"><i class="fa fa-archive" aria-hidden="true"></i></span></h3>
                    <ul>
                        <li><a href="packDtail.php">Packagers Details</a></li>
                    </ul>
                </div>
            </div>
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
