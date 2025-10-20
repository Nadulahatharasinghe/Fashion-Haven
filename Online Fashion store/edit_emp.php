<?php
include 'db_con.php';

// Check if 'id'
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']); 

    // Fetch existing employee data
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);

    // Check if the employee
    if ($result->num_rows > 0) {
        $employee = $result->fetch_assoc();
    } else {
        echo "No employee found with the provided ID.";
        exit();
    }
} else {
    echo "Successfully deleted employee.";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email_edit = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['check_user'];

    // Update user details in the database
    $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', email = '$email_edit', phone = '$phone', check_user = '$role' WHERE id = $id";
    

    if (mysqli_query($conn, $sql)) {
        
        echo "
        <script>
        alert('User details updated successfully.');
        </script>";
        
         // redirect to admin-dashboard
         header("Location: employee_manage.php");
         exit();
    } else {
        echo "Error updating user details: " . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
    <link rel="stylesheet" type="text/css" href="style\edit_e_u.css">
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
        <a href="employee_manage.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
    </div>

<h1>Edit Employee</h1>

<form method="POST" action="">
    <label for="name">First Name</label>
    <input type="text" id="name" name="first_name" value="<?php echo $employee['first_name']; ?>" required>
    <label for="name">Last Name</label>
    <input type="text" id="name" name="last_name" value="<?php echo $employee['last_name']; ?>" required>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="<?php echo $employee['email']; ?>" required>
    <label for="phone">Phone</label>
    <input type="tel" id="phone" name="phone" value="<?php echo $employee['phone']; ?>" required>
    
   
    <label for="role">Role</label>
        <select id="check_user" name="check_user" required>
            <option value="2" <?php if($employee['check_user'] == '2') echo 'selected'; ?>>User</option>
            <option value="3" <?php if($employee['check_user'] == '3') echo 'selected'; ?>>Fashion Designer</option>
            <option value="3" <?php if($employee['check_user'] == '3') echo 'selected'; ?>>Delivery Service Provider</option>
            <option value="3" <?php if($employee['check_user'] == '3') echo 'selected'; ?>>Manager</option>
            <option value="1" <?php if($employee['check_user'] == '1') echo 'selected'; ?>>Admin</option>
        </select>

    <button type="submit">Update Employee</button>
 
</form>


    

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

</body>
</html>

<?php
$conn->close();
?>