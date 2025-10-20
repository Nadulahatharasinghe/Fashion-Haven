<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $order_id = mysqli_real_escape_string($con, $_POST['order-id']);
    $issue_type = mysqli_real_escape_string($con, $_POST['issue-type']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $preferred_resolution = mysqli_real_escape_string($con, $_POST['preferred-resolution']);
    $contact_info = mysqli_real_escape_string($con, $_POST['contact-info']);

    // SQL query to insert the issue
    $sql = "INSERT INTO issues (order_id, issue_type, description, preferred_resolution, contact_info) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $sql);

    if ($stmt) {
        // Bind the parameters to the query
        mysqli_stmt_bind_param($stmt, "sssss", $order_id, $issue_type, $description, $preferred_resolution, $contact_info);

        // Execute the query
        if (mysqli_stmt_execute($stmt)) {
            $message = "Issue reported successfully.";
        } else {
            $message = "Error reporting issue: " . mysqli_stmt_error($stmt);
        }
        mysqli_stmt_close($stmt);
    } else {
        $message = "Error preparing statement: " . mysqli_error($con);
    }

    mysqli_close($con);
} else {
    $message = "Invalid request.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Popup Message</title>
    <style>
        /* Overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        /* Popup box */
        .popup {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            text-align: center;
            width: 300px;
        }

        /* Button */
        .popup button {
            padding: 10px 20px;
            background-color: #28a745;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .popup button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <!-- Popup Overlay -->
    <div class="overlay" id="popupOverlay">
        <div class="popup">
            <p class="popup-message"><?php echo $message; ?></p>
            <button onclick="closePopup()">OK</button>
        </div>
    </div>

    <script>
        // Close the popup and go back to the previous page
        function closePopup() {
            document.getElementById('popupOverlay').style.display = 'none';
            window.history.back(); // Redirect to the previous page
        }
    </script>
</body>
</html>
