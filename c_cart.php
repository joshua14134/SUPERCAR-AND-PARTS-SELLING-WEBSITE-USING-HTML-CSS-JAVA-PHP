<?php
session_start();
@include 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: c_login.php"); // Redirect to login
    exit();
}

$cart = $_SESSION['cart'] ?? [];
$total = 0;

// Get the logged-in user's name
$user_name = $_SESSION['user_name'] ?? 'User';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: hsl(279, 89%, 7%);
            color: white;
            margin: 0;
            padding: 0; /* Remove default padding */
            display: flex; /* Use flexbox for layout */
            flex-direction: column; /* Stack elements vertically */
            align-items: center; /* Center items horizontally */
            justify-content: center; /* Center items vertically */
            height: 100vh; /* Full viewport height */
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.8);
            width: 100%; /* Make header full width */
            position: fixed; /* Position it at the top */
            top: 0; /* Align to top */
            left: 0; /* Align to left */
            z-index: 1000; /* Ensure it stays on top */
        }
        .header h1 {
            margin: 0;
        }
        .logout-btn {
            padding: 10px 15px;
            background-color: #ff4c4c;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .logout-btn:hover {
            background-color: #e63939;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 30px;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            width: 80%;
            max-width: 800px;
            margin-top: 70px; /* Space between header and container */
        }
        .btn {
            padding: 10px 20px;
            margin: 10px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
            text-decoration: none;
        }
        .btn:hover {
            background-color: #45a049;
        }
        ul {
            list-style-type: none;
            padding: 0;
            width: 100%;
        }
        li {
            margin: 10px 0;
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: space-between; /* Space between image and text */
        }
        img {
            width: 50px;
            height: auto;
            margin-right: 15px;
            border-radius: 5px;
        }
        .remove-link {
            color: #ff4c4c;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Your Cart</h1>
        <div>
            <span>Welcome, <?php echo htmlspecialchars($user_name); ?>!</span>
            <form action="c_logout.php" method="post" style="display: inline;">
                <button type="submit" class="logout-btn">Logout</button>
            </form>
        </div>
    </div>

    <div class="container">
        <?php if (empty($cart)): ?>
            <p>Your cart is empty. Please add items.</p>
        <?php else: ?>
            <ul>
                <?php
                foreach ($cart as $part_id => $quantity) {
                    $query = "SELECT * FROM car_parts WHERE id = $part_id";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_assoc($result);
                    
                    if ($row) {
                        $total += $row['price'] * $quantity;
                ?>
                    <li>
                        <div style="display: flex; align-items: center;">
                            <img src="assets/img/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
                            <div>
                                <strong><?php echo htmlspecialchars($row['name']); ?></strong> (Quantity: <?php echo $quantity; ?>)
                            </div>
                        </div>
                        <a href="c_remove_from_cart.php?id=<?php echo $part_id; ?>" class="remove-link">Remove</a>
                    </li>
                <?php 
                    }
                } 
                ?>
            </ul>
            <p>Total: $<?php echo number_format($total, 2); ?></p>
            <a href="c_checkout.php" class="btn">Proceed to Checkout</a>
        <?php endif; ?>
    </div>
</body>
</html>
