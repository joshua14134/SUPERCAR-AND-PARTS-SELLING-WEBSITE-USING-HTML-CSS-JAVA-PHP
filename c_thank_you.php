<?php
session_start(); // Ensure the session is started
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank You</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: hsl(279, 89%, 7%);
            color: white;
            margin: 0;
            padding: 0;
            position: relative;
        }
        .container {
            text-align: center;
            padding: 30px;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            margin: 20px auto;
            width: 80%;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Thank You!</h2>
        <p>Your order has been confirmed. We appreciate your business!</p>
        <a href="index.php" class="btn">Return to Home</a>
        <br>
        <a href="c_logout.php" class="btn">Logout</a> <!-- Logout link -->
    </div>
</body>
</html>
