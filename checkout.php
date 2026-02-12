<?php
session_start();
require 'config.php';

if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
    header("Location: c_cart.php");
    exit();
}

$total = 0;
foreach($_SESSION['cart'] as $item){
    $total += $item['price'] * $item['qty'];
}
?>

<?php include 'header.php'; ?>

<style>
.checkout-box{
    width:60%;
    margin:40px auto;
    background:#1f0033;
    padding:25px;
    border-radius:12px;
    border:1px solid #a855f7;
    color:white;
}
input,select{
    width:100%;
    padding:10px;
    margin:10px 0;
    background:#0f001a;
    border:1px solid #4c1d95;
    color:white;
}
button{
    background:#a855f7;
    border:none;
    padding:12px;
    width:100%;
    color:white;
    cursor:pointer;
}
</style>

<div class="checkout-box">
<h2>💳 Checkout</h2>
<p>Total Amount: <strong>₹<?= $total ?></strong></p>

<form action="process_payment.php" method="POST">
<input type="text" name="name" placeholder="Name on Payment" required>

<select name="method" required>
<option value="card">Card</option>
<option value="upi">UPI</option>
<option value="cod">Cash on Delivery</option>
</select>

<input type="text" name="payment_ref" placeholder="Card / UPI Number" required>

<button type="submit">Confirm Payment</button>
</form>
</div>

<?php include 'footer.php'; ?>