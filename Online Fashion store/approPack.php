<!DOCTYPE html>
<html>
<head>
    <title>Approved Package</title>
    <link rel="stylesheet" href="style/o&i.css">
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/approPack.css">
</head>
<style>
        body{
            background: url('images/bg.jpg');
        }
    </style>
<body background="images/body.jpeg">
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
                    <a href="logout.php"><button class="btn">Logout</button></a>
                </div>
            </div>
        </nav>
    </header>
    <div class="search">
        <input type="search" class="search-bar" placeholder="Search...">
        
    </div>
    <!--------------body--------------->
    <br>
    <br>
    <h2><center>Approved Packages</center></h2>
    <br>
   
    <div >
        <div  ></div>
        <div>
            
            <div style="float: left;">
                <fieldset id="f1" style="width: 800px; height: 1000px ; margin-left: 30px; margin-right: 30px; margin-bottom: 30px;">

                    <center><img id ="sec" src="images/user.png" width="150px" height="150px" alt="customer photo"></a></center><br>
                    <center><P>Costomer Details</P></center>
                    <p>Payment Method : <input type="text" class="txt1" name="peyme"  required readonly></p><br>
                    <p>Payment Type : <input type="text" class="txt1" name="peyty" value="#" required readonly></p><br>
                    <p>Postal Code : <input type="text" class="txt1" name="poco" value="#" required readonly></p><br>
                    <p>Location : <input type="text" class="txt" name="loca" value="#" required readonly></p><br>
                    <p>Email : <input type="text" class="txt" name="email" value="#" required readonly></p><br>
                    <p>Contact Number : <input type="text" class="txt1" name="conu" value="#" required readonly></p><br><br>
                    <label for="deliveryDate">Delivery Date:</label>
                    <input type="date" id="deliveryDate" name="deliveryDate"><br><br>
                    <label for="receiveDate">Receive Date:</label>
                    <input type="date" id="receiveDate" name="receiveDate">

                </fieldset>  
            </div>
            <div>
                <fieldset id="f1" style="width: 800px; height: 1000px ; margin-left: 30px; margin-right: 30px; margin-bottom: 30px;" >

                    <center><img id ="sec" src="images/user.png" width="150px" height="150px" alt="deliver photo"></a></center><br>
                    <center><P>Delivery Partner</P></center>
                    <p>Courier Name: <input type="text" class="txt1" name="peyme" value="#" required readonly></p><br><br>
                    <p>Payment ID : <input type="text" class="txt1" name="peyme" value="#" required readonly></p><br><br>
                    <p>Payment Phone Number : <input type="text" class="txt1" name="peyme" value="#" required readonly></p><br><br>
                    <p>Email : <input type="text" class="txt" name="peyme" value="#" required readonly></p><br><br>
                    <p>Company Name : <input type="text" class="txt1" name="peyme" value="#" required readonly></p><br><br>
                    <center><select name = "streum" id ="dp">
                        <option value="Delivery Partner">Delivery Partner 1</option>
                        <option value="Delivery Partner">Delivery Partner 2</option>
                        <option value="Delivery Partner">Delivery Partner 3</option>
                    </select><br><br>
                    <input onclick="document.location='Dservice.php'" type="button" id ="b3" value="ADD">
                    <input onclick="document.location='readds.php'" type="button" id ="b3" value="EDIT"></center>
                   
                    

                </fieldset>
            </div>
                
            <center><input type="button" id ="b3" value="SEND EMAIL"></center>

        </div>
        <div></div> 
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