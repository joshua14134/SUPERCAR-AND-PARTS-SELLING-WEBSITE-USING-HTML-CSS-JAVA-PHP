<?php
session_start();
require 'config.php';

/* ---------- LOGIN CHECK ---------- */
if (!isset($_SESSION['user_id'])) {
    header("Location: login_form.php");
    exit();
}

/* ---------- GET CART ---------- */
$cart_items = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>My Cart</title>

<style>
body{
    font-family: Arial, sans-serif;
    background-color:hsl(279,89%,7%);
    color:white;
    margin:0;
    padding:0;
}

.container{
    width:90%;
    max-width:900px;
    margin:40px auto;
    background:rgba(0,0,0,0.85);
    padding:25px;
    border-radius:10px;
    box-shadow:0 0 15px rgba(0,0,0,0.6);
}

h1{text-align:center;margin-bottom:20px;}

table{
    width:100%;
    border-collapse:collapse;
    margin-bottom:20px;
}

table th, table td{
    padding:12px;
    border-bottom:1px solid #444;
    text-align:center;
}

table th{
    background:#111;
}

.total{
    text-align:right;
    font-size:20px;
    margin-top:10px;
}

.btn{
    padding:10px 20px;
    background:#4CAF50;
    color:white;
    text-decoration:none;
    border-radius:5px;
    margin:5px;
    display:inline-block;
}

.btn:hover{background:#45a049;}

.empty{
    text-align:center;
    padding:40px;
    font-size:20px;
}
.topbar{
    padding:10px;
    background:#000;
    text-align:right;
}
.topbar a{margin-left:10px;}
</style>
</head>

<body>

<div class="topbar">
<a href="parts_page.php" class="btn">Continue Shopping</a>
<a href="logout.php" class="btn">Logout</a>
</div>

<div class="container">
<h1>🛒 My Cart</h1>

<?php if (empty($cart_items)) : ?>
    <div class="empty">Your cart is empty!</div>
<?php else : ?>

<table>
<tr>
    <th>Item</th>
    <th>Price ($)</th>
</tr>

<?php foreach ($cart_items as $item): 
    $total += $item['price'];
?>
<tr>
    <td><?php echo htmlspecialchars($item['name']); ?></td>
    <td><?php echo number_format($item['price'],2); ?></td>
</tr>
<?php endforeach; ?>

</table>

<div class="total">
<strong>Total: $<?php echo number_format($total,2); ?></strong>
</div>

<div style="text-align:right;">
<a href="process_payment.php" class="btn">Proceed to Payment</a>
</div>

<?php endif; ?>

</div>

</body>
</html>