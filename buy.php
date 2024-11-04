<link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/myCustom.css">
<?php
// process_payment.php

// Function to simulate payment processing
function process_payment($product, $quantity, $name, $email, $card_number, $expiry_date, $cvv) {
    // In a real application, you would use a payment gateway API here
    // This is just a placeholder function to simulate payment success

    // Basic validation (for simulation purposes)
    if (empty($product) || empty($quantity) || empty($name) || empty($email) || empty($card_number) || empty($expiry_date) || empty($cvv)) {
        return false;
    }

    // Simulate successful payment processing
    return true;
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];

    // Process the payment
    $payment_success = process_payment($product, $quantity, $name, $email, $card_number, $expiry_date, $cvv);

    if ($payment_success) {
        echo "<h1>Payment Successful</h1>";
        echo "<p>Thank you for your purchase, $name!</p>";
        echo "<p>Product: $product</p>";
        echo "<p>Quantity: $quantity</p>";
        echo "<p>A confirmation email has been sent to $email.</p>";
    } else {
        echo "<h1>Payment Failed</h1>";
        echo "<p>There was an issue with your payment. Please try again.</p>";
    }
} else {
    // Display the form if not submitted
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Buy Product</title>
    </head>
    <body>
        <h1>Buy Product</h1>
        <form method="post">
            <label for="product">Product:</label>
            <input type="text" name="product" id="product" required>

                <!-- Add other products here -->
            </select>
            <br><br>

            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" min="1" required>
            <br><br>

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <br><br>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <br><br>

            <label for="card_number">Card Number:</label>
            <input type="text" name="card_number" id="card_number" required>
            <br><br>

            <label for="expiry_date">Expiry Date:</label>
            <input type="text" name="expiry_date" id="expiry_date" required placeholder="MM/YY">
            <br><br>

            <label for="cvv">CVV:</label>
            <input type="text" name="cvv" id="cvv" required>
            <br><br>

            <button type="submit">Buy Now</button>
        </form>
    </body>
    </html>
    <?php
}
?>
