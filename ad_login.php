<?php
@include 'config.php';
session_start();

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, $_POST['password']);

    $select = "SELECT * FROM user_form WHERE email = '$email' AND user_type = 'admin'";
    $result = mysqli_query($conn, $select);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        
        // Direct password comparison (not secure)
        if ($row['password'] === $pass) {
            $_SESSION['admin_name'] = $row['name'];
            header('location: dashboard.php');
            exit();
        } else {
            $error[] = 'Incorrect email or password!';
        }
    } else {
        $error[] = 'Incorrect email or password!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #282c34;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background: rgba(0, 0, 0, 0.8);
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
        }
        h3 {
            margin-bottom: 20px;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        input[type="email"]:focus, input[type="password"]:focus {
            background-color: rgba(255, 255, 255, 0.3);
            outline: none;
        }
        .form-btn {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-btn:hover {
            background-color: #45a049;
        }
        .error-msg {
            color: #ff4c4c;
            margin-bottom: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<link rel="stylesheet" href="assets/css/styles.css">
    <div class="form-container">
        <form action="" method="post">
            <h3>Admin Login</h3>
            <?php if (isset($error)) { 
                foreach ($error as $err) { 
                    echo '<span class="error-msg">' . htmlspecialchars($err) . '</span>'; 
                } 
            } ?>
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="submit" name="submit" value="Login" class="form-btn">
        </form>
    </div>
</body>
</html>
