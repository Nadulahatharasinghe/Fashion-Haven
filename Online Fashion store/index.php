<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/index.js"></script>
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
                    <li><a class="activ" href="index.php">Home</a></li>
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
    <!-- <div class="search">
        <input type="search" class="search-bar" placeholder="Search...">
        
    </div> -->

<!--------------body--------------->
    <!-- Main Slider Section -->
     
    <j>
        <input checked type="radio" name="s" style="background-image: url('images/h1.png');"  title="Picture 1">
        <input type="radio" name="s" style="background-image: url('images/h2.png');" title="Picture 2">
        <input type="radio" name="s" style="background-image: url('images/h3.png');" title="Picture 3">
        <input type="radio" name="s" style="background-image: url('images/h4.png');" title="Picture 4">
        <input type="radio" name="s" style="background-image: url('images/h5.png');" title="Picture 5">
    </j>

    <!-- Categories Section -->
    <section class="categories">
        <button id="btn1">Women</button>
        <button id="btn2">Men</button>
        <button id="btn3">Kids</button>
    </section>

    <!-- Products Section WOMAN-->
    <div class="item">
        <h2 id="men">NEW MENs CLOTHING</h2><br>
        <div class="item-grid">
            <a href="store.php"><div class="item-card">
                <img src="images/1.jpg" alt="Product 1">
                <p>CASUAL SHORT</p>
                <h2>Rs.1,990.00</h2>
            </div></a>
            <a href="store.php"><div class="item-card">
                <img src="images/2.jpg" alt="Product 2">
                <p>CASUAL SHORT</p>
                <h2>Rs.1,990.00</h2>
            </div></a>
            <a href="store.php"><div class="item-card">
                <img src="images/3.jpg" alt="Product 3">
                <p>JOGGER PANT</p>
                <h2>Rs.2,699.00</h2>
            </div></a>
            <a href="store.php"><div class="item-card">
                <img src="images/4.jpg" alt="Product 4">
                <p>JOGGER PANT</p>
                <h2>Rs.2,699.00</h2>
            </div></a>
            <a href="store.php"><div class="item-card">
                <img src="images/5.jpg" alt="Product 5">
                <p>JOGGER PANT</p>
                <h2>Rs.2,699.00</h2>
            </div></a>
        </div>
    </div>

    <div class="item">
        <h2 id="women">NEW WOMANs CLOTHING</h2><br>
        <div class="item-grid">
            <a href="store.php"><div class="item-card">
                <img src="images/9.jpg" alt="Product 6">
                <p>Ladies Legins</p>
                <h2>Rs.999.00</h2>
            </div></a>
            <a href="store.php"><div class="item-card">
                <img src="images/6.jpg" alt="Product 7">
                <p>Women Smart Jeggings</p>
                <h2>Rs.2,499.00</h2>
            </div></a>
            <a href="store.php"><div class="item-card">
                <img src="images/7.jpg" alt="Product 8">
                <p>Women Traveler Pant</p>
                <h2>Rs.2,500.00</h2>
            </div></a>
            <a href="store.php"><div class="item-card">
                <img src="images/8.jpg" alt="Product 9">
                <p>Women Traveler Pant</p>
                <h2>Rs.2,500.00</h2>
            </div></a>
            <a href="store.php"><div class="item-card">
                <img src="images/9.jpg" alt="Product 10">
                <p>Ladies Legins</p>
                <h2>Rs.999.00</h2>
            </div></a>
        </div>
    </div>

    <div class="item">
        <h2 id="kids">NEW KIDS CLOTHING</h2><br>
        <div class="item-grid">
            <a href="store.php"><div class="item-card">
                <img src="images/13.jpg" alt="Product 11">
                <p>AMY Printed Dress</p>
                <h2>Rs.1,899.00</h2>
            </div></a>
            <a href="store.php"><div class="item-card">
                <img src="images/12.jpg" alt="Product 12">
                <p>Girls kids 2pcs pajama set</p>
                <h2>Rs.1,290.00</h2>
            </div></a>
            <a href="store.php"><div class="item-card">
                <img src="images/11.jpg" alt="Product 13">
                <p>Boys Polo T- Shirt</p>
                <h2>Rs.1,500.00</h2>
            </div></a>
            <a href="store.php"><div class="item-card">
                <img src="images/14.jpg" alt="Product 14">
                <p>Bug junior boys plain casual t-shirt</p>
                <h2>Rs.990.00</h2>
            </div></a>
            <a href="store.php"><div class="item-card">
                <img src="images/15.jpg" alt="Product 15">
                <p>Kids Graphic Printed T-Shirt</p>
                <h2>Rs.1,900.00</h2>
            </div></a>       
        </div>
     </div>

<!--offer-->
<div class="container mt-5">
    <div class="row">
      <div class="col-12">
        <article class="blog-card">
          <div class="blog-card__background">
            <div class="card__background--wrapper">
              <div class="card__background--main">
                <img src="images/s3.png">  
                <div class="card__background--layer"></div>
              </div>
            </div>
          </div>
          <div class="blog-card__head">
            <span class="date__box">
              <span class="date__day">11</span>
              <span class="date__month">JAN</span>
            </span>
          </div>
          <div class="blog-card__info">
            <h5>NEW OFFER</h5>
            <p>BUY 2 GET 10% | BUY 3 GET 15%</p>
            <a href="#" class="btn btn--with-icon"><i class="btn-icon fa fa-long-arrow-right"></i>READ MORE</a>
          </div>
        </article>
      </div>
    </div>
  </div>
  
  <section class="detail-page">
    <div class="container mt-5">
      
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

    <!--JavaScript for Heading button Controls-->
    <script>
        // Function to scroll to the women 
   {function scrollToHeading() {
        document.getElementById('women').scrollIntoView({ behavior: 'smooth' });
    }
    // Add an event listener to the button to call the function when clicked
    document.getElementById('btn1').addEventListener('click', scrollToHeading);}
    
    // Function to scroll to the men 
    {function scrollToHeading() {
        document.getElementById('men').scrollIntoView({ behavior: 'smooth' });
    }
    document.getElementById('btn2').addEventListener('click', scrollToHeading);}

    // Function to scroll to the kids 
    {function scrollToHeading() {
        document.getElementById('kids').scrollIntoView({ behavior: 'smooth' });
    }
    document.getElementById('btn3').addEventListener('click', scrollToHeading);}
    
    </script>
    
</body>
</html>