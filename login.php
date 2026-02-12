<?php
require 'config.php';
session_start();

/* If already logged in → redirect */
if (isset($_SESSION['user_id'])) {
    if ($_SESSION['user_type'] == 'admin') {
        header("Location: dashboard.php");
    } else {
        header("Location: parts_page.php");
    }
    exit();
}

$error = [];

if (isset($_POST['submit'])) {

    $email = trim($_POST['email']);
    $pass  = $_POST['password'];

    /* Prepared statement (secure) */
    $stmt = $conn->prepare("SELECT * FROM user_form WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {

        $row = $result->fetch_assoc();

        if (password_verify($pass, $row['password'])) {

            /* SINGLE LOGIN SESSION FOR WHOLE WEBSITE */
            $_SESSION['user_id']   = $row['id'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_type'] = $row['user_type'];

            /* Redirect by role */
            if ($row['user_type'] == 'admin') {
                header('Location: dashboard.php');
            } else {
                header('Location: parts_page.php');
            }
            exit();

        } else {
            $error[] = "Incorrect password!";
        }

    } else {
        $error[] = "Email not found!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/styles.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: hsl(279, 89%, 7%);
            color: white;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            text-align: center;
            padding: 30px;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            width: 80%;
            max-width: 400px;
        }
        .btn {
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
            display: inline-block;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .error-msg {
            color: red;
            display:block;
            margin-bottom:10px;
        }
        input{
            width:90%;
            padding:10px;
            margin:8px 0;
            border:none;
            border-radius:5px;
        }
    </style>
</head>

<body>
<div class="form-container">
    <form method="post">
        <h3>Login Now</h3>

        <?php
        if (!empty($error)) {
            foreach ($error as $err) {
                echo '<span class="error-msg">'.htmlspecialchars($err).'</span>';
            }
        }
        ?>

        <input type="email" name="email" required placeholder="Enter your email">
        <input type="password" name="password" required placeholder="Enter your password">

        <input type="submit" name="submit" value="Login" class="btn">

        <p>Don't have an account? <a href="register_form.php">Register now</a></p>
    </form>
</div>
</body>
</html>