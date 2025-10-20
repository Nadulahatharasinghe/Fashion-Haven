
<?php

session_start();

include 'db_con.php'; // Include the database connection

// Fetch employee data from the database
$sql = "SELECT * FROM users WHERE check_user = '3'";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Manage</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style/employee_manage.css'>
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='js/employee_manage.js'></script>
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

    <h1>Employee Management</h1>

    <div class="table-container">
        <h2>Employee List</h2>
        <table id="employee-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Actions</th>
               
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["first_name"] . "</td>";
                    echo "<td>" . $row["last_name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["password"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>
                            <a href='edit_emp.php?id=".$row['id']."' class='btn-edit'><button class='btn'>Edit</button></a>
                            <a href='delete_employee.php?id=".$row['id']."' class='btn-delete' onclick='return confirm(\"Are you sure?\");'><button class='btn'>Delete</button></a>
                          </td>";
                    echo "</tr>";
                    
                }
            } else {
                echo "<tr><td colspan='6'>No employees found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <div class="form-container">
        <h2>Add New Employee</h2>
        <form id="employee-form" action="add_user.php" method="POST">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" placeholder="first_name" required>
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" placeholder="last_name" required>
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="email" required>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="password" required>
            <label for="phone">Phone</label>
            <input type="tel" name="phone" placeholder="phone" required>
            <label for="role">Role</label>
            <select name="role">
                <option value=3>Fashion Designer</option>
                <option value="3">Delivery Service Provider </option>
                <option value="3">Manager</option>
                <option value="1">Admin</option>
            </select>
            <button type="submit">Add Employee</button>
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