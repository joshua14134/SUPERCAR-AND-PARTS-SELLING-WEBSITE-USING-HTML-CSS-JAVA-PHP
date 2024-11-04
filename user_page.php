<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['user_name'])) {
    header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('assets/img/USER.jpg'); /* Background image */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent image repetition */
            color: white; /* White text */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full height of the viewport */
        }
        .container {
            text-align: center;
            padding: 30px;
            background: rgba(0, 0, 0, 0.8); /* Semi-transparent black background */
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            width: 80%; /* Responsive width */
            max-width: 600px; /* Max width for larger screens */
        }
        h3, h1, p {
            margin: 10px 0; /* Space between elements */
        }
        .btn {
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            background-color: #4CAF50; /* Green background */
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s; /* Smooth transition for hover effect */
            display: inline-block; /* Ensures buttons are inline */
        }
        .btn:hover {
            background-color: #45a049; /* Darker green on hover */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="content">
        <h3>Hi, <span>user</span></h3>
        <h1>Welcome <span><?php echo htmlspecialchars($_SESSION['user_name']); ?></span></h1>
        <p>Enjoy the car search</p>
        <a href="login_form.php" class="btn">Login</a>
        <a href="register_form.php" class="btn">Register</a>
        <a href="logout.php" class="btn">Logout</a>
        <a href="index.php" class="btn">Home</a>
    </div>
</div>

</body>
</html>
