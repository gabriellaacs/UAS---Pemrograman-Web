<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form - Processing</title>
  <link rel="stylesheet" href="process_contact.css">
  <style>
    .notification {
      display: none;
      background-color: #4CAF50;
      color: white;
      text-align: center;
      padding: 10px;
      position: fixed;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      z-index: 999;
    }

    /* Add animation to show notification */
    .show {
      display: block;
      animation: fadeIn 1s;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }
  </style>
</head>

<body>
<?php
// Start the session
session_start();

require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $email, $subject, $message]);

    // Set session flag for successful submission
    $_SESSION['success'] = true;

    // Redirect to index.php after successful submission
    header('Location: contact.php');
    exit; // Ensure the script stops executing after the redirect
} else {
    echo "<h2>Error: Invalid request method</h2>";
    header('Location: contact.php');
    exit; // Ensure the script stops executing after the redirect
}
?>
<?php
// Check if "success" session flag is set and its value is true
if (isset($_SESSION['success']) && $_SESSION['success'] === true) {
    // Unset the session flag to prevent showing the notification on subsequent visits
    unset($_SESSION['success']);
    echo '<div class="notification show">Pesan telah terkirim</div>';
}
?>

</body>

</html>
