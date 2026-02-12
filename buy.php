<?php
session_start();
require 'config.php';

/* ---------- LOGIN REQUIRED ---------- */
if (!isset($_SESSION['user_id'])) {
    header("Location: login_form.php");
    exit();
}

/* ---------- CART CHECK ---------- */
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "<h2 style='color:white;text-align:center;'>Your cart is empty!</h2>";
    exit();
}

$cart_items = $_SESSION['cart'];
$total = 0;

foreach ($cart_items as $item) {
    $total += $item['price'];
}

/* ---------- PAYMENT PROCESS ---------- */
$success = false;
$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name  = trim($_POST['name']);
    $email = trim($_POST['email']);
    $card  = trim($_POST['card_number']);
    $exp   = trim($_POST['expiry_date']);
    $cvv   = trim($_POST['cvv']);

    if ($name == "" || $email == "" || $card == "" || $exp == "" || $cvv == "") {
        $error = "Please fill all payment fields!";
    } else {
        /* PAYMENT SUCCESS (SIMULATION) */

        // Clear cart after payment
        unset($_SESSION['cart']);

        $success = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>
<link rel="stylesheet" href="assets/css/styles.css">

<style>
body{
    background:hsl(279,89%,7%);
    color:white;
    font-family:Arial;
    margin:0;
}

.container{
    max-width:700px;
    margin:40px auto;
    background:rgba(0,0,0,.85);
    padding:25px;
    border-radius:10px;
    box-shadow:0 0 20px rgba(0,0,0,.6);
}

h2{margin-top:0;}

input{
    width:100%;
    padding:10px;
    margin:8px 0;
    border:none;
    border-radius:5px;
}

.btn{
    background:#4CAF50;
    color:white;
    padding:10px;
    border:none;
    border-radius:5px;
    cursor:pointer;
    width:100%;
}

.btn:hover{background:#45a049;}

.summary{
    background:#111;
    padding:15px;
    margin-bottom:20px;
    border-radius:6px;
}
</style>
</head>

<body>

<div class="container">

<?php if($success): ?>

    <h2>✅ Payment Successful</h2>
    <p>Thank you <b><?php echo htmlspecialchars($name); ?></b>!</p>
    <p>Your order has been placed successfully.</p>

    <a href="parts_page.php" class="btn">Continue Shopping</a>

<?php else: ?>

<h2>Checkout</h2>

<div class="summary">
    <h3>Order Summary</h3>

    <?php foreach ($cart_items as $item): ?>
        <p><?php echo htmlspecialchars($item['name']); ?> — ₹<?php echo number_format($item['price']); ?></p>
    <?php endforeach; ?>

    <hr>
    <h3>Total: ₹<?php echo number_format($total); ?></h3>
</div>

<?php if($error): ?>
<p style="color:red;"><?php echo $error; ?></p>
<?php endif; ?>

<form method="post">

    <input type="text" name="name" placeholder="Cardholder Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="card_number" placeholder="Card Number" required>
    <input type="text" name="expiry_date" placeholder="MM/YY" required>
    <input type="text" name="cvv" placeholder="CVV" required>

    <button type="submit" class="btn">Pay ₹<?php echo number_format($total); ?></button>

</form>

<?php endif; ?>

</div>

</body>
</html>