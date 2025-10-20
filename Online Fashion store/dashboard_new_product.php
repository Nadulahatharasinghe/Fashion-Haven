<!DOCTYPE html>
<html>
<head>
    <title>New products</title>
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style/product.css">

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

        <!-- new product Content -->
        <div class="container">
            <h1>Upload New Product</h1>
            <form id="productForm">
                <!-- Product Name -->
                <label for="productName">Product Name:</label>
                <input type="text" id="productName" name="productName" placeholder="Enter product name" required>
    
                <!-- Category -->
                <label for="category">Category:</label>
                <select id="category" name="category">
                    <option value="women">Women</option>
                    <option value="men">Men</option>
                    <option value="kids">Kids</option>
                </select>
    
                <!-- Description -->
                <label for="description">Product Description:</label>
                <textarea id="description" name="description" placeholder="Enter product description" rows="4" required></textarea>
    
                <!-- Price -->
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" placeholder="Enter price" required>
    
                <!-- Discount -->
                <label for="discount">Discount:</label>
                <input type="number" id="discount" name="discount" placeholder="Enter discount (optional)">
    

    
                <!-- Quantity -->
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" name="quantity" placeholder="Enter quantity" required>
    
                <!-- Sizes -->
                <label for="size">Available Sizes:</label>
                <input type="text" id="size" name="size" placeholder="Enter sizes (e.g., S, M, L)" required>
    
                <!-- Colors -->
                <label for="color">Available Colors:</label>
                <input type="text" id="color" name="color" placeholder="Enter colors (e.g., Red, Blue)" required>
    
                <!-- Upload Image -->
                <label for="productImage">Product Image:</label>
                <input type="file" id="productImage" name="productImage" accept="image/*" required>
    
                <!-- Submit Button -->
                <button type="submit">Upload Product</button>
            </form>
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