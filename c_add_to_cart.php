<?php
session_start();
@include 'config.php';

if (isset($_GET['id'])) {
    $itemId = $_GET['id'];
    $quantity = $_POST['quantity'] ?? 1;

    // Assuming you have a cart session variable
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Check if the item is already in the cart
    if (isset($_SESSION['cart'][$itemId])) {
        $_SESSION['cart'][$itemId] += $quantity; // Update quantity if exists
    } else {
        $_SESSION['cart'][$itemId] = $quantity; // Add new item
    }

    // Set a success message
    $_SESSION['message'] = "Item added to cart successfully!";

    // Redirect to c_cart.php
    header("Location: c_parts.php");
    exit();
}
?>
