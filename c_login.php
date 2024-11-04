<?php
@include 'config.php';
session_start(); // Start the session at the beginning

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']); // Sanitize input
    
    $select = "SELECT * FROM user_form WHERE email = '$email' AND password = '$pass'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        // Store user info in session
        $_SESSION['user_id'] = $row['id']; // Store user ID for reference
        $_SESSION['user_name'] = $row['name']; // Store user name

        if ($row['user_type'] == 'admin') {
            $_SESSION['user_type'] = 'admin'; // Store user type
            header('location:admin_page.php');
            exit();
        } elseif ($row['user_type'] == 'user') {
            $_SESSION['user_type'] = 'user'; // Store user type
            header('location:user_page.php');
            exit();
        }
    } else {
        $error[] = 'Incorrect email or password!';
    }
}

// Include header
@include 'header.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

    <!-- Custom CSS file links -->
    <link rel="stylesheet" href="assets/css/styles.css">   
    <link rel="stylesheet" href="assets/css/form.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('assets/img/background1.jpg'); /* Background image */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent image repetition */
        }
        .form-container {
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent background for form */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            color: white; /* Text color */
        }
        .error-msg {
            color: #dc3545; /* Bootstrap danger color for error messages */
        }
        /* Additional styles for buttons and inputs can go here if needed */
    </style>
</head>
<body>
   
<div class="form-container">
    <form action="" method="post">
        <h3>Login Now</h3>
        <?php
        if (isset($error)) {
            foreach ($error as $err) {
                echo '<span class="error-msg">' . htmlspecialchars($err) . '</span>';
            }
        }
        ?>
        <input type="email" name="email" required placeholder="Enter your email" autocomplete="email">
        <input type="password" name="password" required placeholder="Enter your password" autocomplete="current-password">
        <input type="submit" name="submit" value="Login Now" class="form-btn">
        <p>Don't have an account? <a href="register_form.php">Register now</a></p>
    </form>
</div>

</body>
</html>
