<?php
session_start();
@include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: c_login.php"); // Redirect to login
    exit();
}

$cart = $_SESSION['cart'] ?? [];
$total = 0;

// Calculate total from the cart
foreach ($cart as $part_id => $quantity) {
    $query = "SELECT * FROM car_parts WHERE id = $part_id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $total += $row['price'] * $quantity; // Calculate total
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Clear the cart after the order
    unset($_SESSION['cart']);
    header("Location: c_thank_you.php"); // Redirect to thank you page
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: hsl(279, 89%, 7%);
            color: white;
            margin: 0;
            padding: 0;
            position: relative;
        }
        .container {
            text-align: center;
            padding: 30px;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            margin: 20px auto;
            width: 80%;
            max-width: 400px;
        }
        .btn {
            padding: 10px 20px;
            margin: 10px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Checkout</h2>
        <form method="POST">
            <h3>Shipping Address</h3>
            <input type="text" name="address" required placeholder="Enter your shipping address">
            <p>Total: $<?php echo number_format($total, 2); ?></p>
            <button type="submit" class="btn">Confirm Order</button>
        </form>
    </div>
</body>
</html>
