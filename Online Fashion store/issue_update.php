<?php
   include 'connect.php';
   $id = $_GET['updateid'];
   $sql = "SELECT * FROM issues WHERE id='$id'";
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_assoc($result);
   $id = $row['id'];

   if (isset($_POST['submit'])) {
      $order_id = $_POST['order_id'];
      $issue_type = $_POST['issue_type'];
      $description = $_POST['description'];
      $preferred_resolution = $_POST['preferred_resolution'];
      $contact_info = $_POST['contact_info'];

      $sql = "UPDATE issues SET order_id='$order_id', issue_type='$issue_type', description='$description', preferred_resolution='$preferred_resolution', contact_info='$contact_info' WHERE id='$id'";

      $result = mysqli_query($con, $sql);

      if ($result) {
         echo "<script>alert('Update successful'); window.location.href = 'issue_read.php';</script>";
      } else {
         die(mysqli_error($con));
      }
   }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style/navigation.css">
    <link rel="stylesheet" type="text/css" href="style/footer.css">
    <link rel="stylesheet" type="text/css" href="style/issue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/index.js"></script>
    <script src="js/issue.js"></script>
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

    <div class="search">
        <input type="search" class="search-bar" placeholder="Search...">
    </div>

    <!-- Main Content: Issue Reporting Form -->
    <main>
        <section class="issue-section">
            <h2>Identify Your Issue</h2>
            <form id="issue-form" method="post">
                <!-- Hidden field for issue ID -->
                <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">

                <label for="order_id">Order ID:</label>
                <input type="text" id="order_id" name="order_id" placeholder="Enter your order ID" value="<?php echo $row['order_id']; ?>" required>
                
                <label for="issue_type">Issue Type:</label>
                <select id="issue_type" name="issue_type" required>
                    <option value="damaged-item" <?php if($row['issue_type'] == 'damaged-item') echo 'selected'; ?>>Damaged Item</option>
                    <option value="wrong-item" <?php if($row['issue_type'] == 'wrong-item') echo 'selected'; ?>>Received Wrong Item</option>
                    <option value="delivery-delay" <?php if($row['issue_type'] == 'delivery-delay') echo 'selected'; ?>>Delivery Delay</option>
                    <option value="size-issue" <?php if($row['issue_type'] == 'size-issue') echo 'selected'; ?>>Size Issue</option>
                    <option value="payment-issue" <?php if($row['issue_type'] == 'payment-issue') echo 'selected'; ?>>Payment Issue</option>
                    <option value="other" <?php if($row['issue_type'] == 'other') echo 'selected'; ?>>Other</option>
                </select>

                <label for="description">Description of the Issue:</label>
                <textarea id="description" name="description" placeholder="Describe the issue in detail..." required><?php echo $row['description']; ?></textarea>

                <label for="preferred_resolution">Preferred Resolution:</label>
                <select id="preferred_resolution" name="preferred_resolution" required>
                    <option value="refund" <?php if($row['preferred_resolution'] == 'refund') echo 'selected'; ?>>Refund</option>
                    <option value="exchange" <?php if($row['preferred_resolution'] == 'exchange') echo 'selected'; ?>>Exchange</option>
                    <option value="repair" <?php if($row['preferred_resolution'] == 'repair') echo 'selected'; ?>>Repair</option>
                    <option value="other" <?php if($row['preferred_resolution'] == 'other') echo 'selected'; ?>>Other</option>
                </select>

                <label for="contact_info">Contact Information:</label>
                <input type="email" id="contact_info" name="contact_info" placeholder="Enter your email for follow-up" value="<?php echo $row['contact_info']; ?>" required>
                
                <button type="submit" name="submit">Update</button>
            </form>
        </section>
    </main>
</body>
</html>
