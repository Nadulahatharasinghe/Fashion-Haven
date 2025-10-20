<?php
include 'connect.php';

$id = $_GET['id'];

// SQL query to delete the issue
$sql = "DELETE FROM issues WHERE id = $id";

if (mysqli_query($con, $sql)) {
    $message = "Issue deleted successfully.";
} else {
    $message = "Error deleting issue: " . mysqli_error($con);
}

mysqli_close($con);
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
            display: none;
            justify-content: center;
            align-items: center;
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

        /* Popup message */
        .popup-message {
            margin-bottom: 15px;
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
<style>
        body{
            background: url('images/bg.jpg');
        }
    </style>
    <!-- Popup Overlay -->
    <div class="overlay" id="popupOverlay">
        <div class="popup">
            <p class="popup-message"><?php echo $message; ?></p>
            <button onclick="closePopup()">OK</button>
        </div>
    </div>

    <script>
        // Display the popup
        document.getElementById('popupOverlay').style.display = 'flex';

        // Close the popup and go back to the previous page
        function closePopup() {
            document.getElementById('popupOverlay').style.display = 'none';
            window.history.back(); // Go to the previous page
        }
    </script>
</body>
</html>
