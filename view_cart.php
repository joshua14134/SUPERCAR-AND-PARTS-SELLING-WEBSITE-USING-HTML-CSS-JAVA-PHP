<?php
session_start();
@include 'config.php';

// Assuming cart items are stored in the session
if (!isset($_SESSION['user_id'])) {
    header("Location: c_login.php"); // Redirect to login if not logged in
    exit();
}

// Example cart items (you might fetch these from your database)
$cart_items = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$total = 0;

// Check if cart is empty
if (empty($cart_items)) {
    echo "<h2>Your cart is empty!</h2>";
} else {
    echo "<h2>Your Cart</h2>";
    echo "<ul>";
    foreach ($cart_items as $item) {
        echo "<li>{$item['name']} - $ {$item['price']}</li>";
        $total += $item['price'];
    }
    echo "</ul>";
    echo "<h3>Total: $ {$total}</h3>";
    echo '<a href="payment.php" class="btn">Proceed to Payment</a>';
}
?>
