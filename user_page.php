<?php
session_start();
require 'config.php';

/* ---------- LOGIN PROTECTION ---------- */
if (!isset($_SESSION['user_id'])) {
    header("Location: login_form.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>User Dashboard</title>

<style>
body{
    font-family: Arial, sans-serif;
    background-color: hsl(279, 89%, 7%);
    color:white;
    margin:0;
    padding:0;
}

/* ---------- TOP BAR ---------- */
.topbar{
    width:100%;
    background:#000;
    padding:12px 20px;
    box-sizing:border-box;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.topbar span{
    font-size:14px;
}

.container{
    text-align:center;
    padding:30px;
    background:rgba(0,0,0,0.85);
    border-radius:10px;
    box-shadow:0 0 20px rgba(0,0,0,0.6);
    width:90%;
    max-width:600px;
    margin:80px auto;
}

h1{margin-bottom:10px;}

.btn{
    padding:10px 20px;
    margin:10px;
    text-decoration:none;
    background:#4CAF50;
    color:white;
    border-radius:5px;
    display:inline-block;
    transition:0.3s;
}

.btn:hover{
    background:#45a049;
    transform:scale(1.05);
}
</style>
</head>

<body>

<!-- TOP BAR -->
<div class="topbar">
    <span>Logged in as: <b><?php echo htmlspecialchars($_SESSION['user_name']); ?></b></span>
    <a href="logout.php" class="btn">Logout</a>
</div>

<!-- MAIN CONTENT -->
<div class="container">
    <h1>Welcome <?php echo htmlspecialchars($_SESSION['user_name']); ?> 👋</h1>

    <p>Enjoy browsing cars, parts, and services.</p>

    <a href="index.php" class="btn">Home</a>
    <a href="parts_page.php" class="btn">View Parts</a>
    <a href="service.php" class="btn">Book Service</a>
    <a href="c_cart.php" class="btn">My Cart</a>
</div>

</body>
</html>