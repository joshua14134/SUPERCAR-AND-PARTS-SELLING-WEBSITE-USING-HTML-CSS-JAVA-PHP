<?php
session_start();

if (isset($_GET['id'])) {
    $part_id = $_GET['id'];

    // Check if the cart exists
    if (isset($_SESSION['cart'][$part_id])) {
        unset($_SESSION['cart'][$part_id]); // Remove item
    }

    header("Location: c_cart.php"); // Redirect to cart
    exit();
}
