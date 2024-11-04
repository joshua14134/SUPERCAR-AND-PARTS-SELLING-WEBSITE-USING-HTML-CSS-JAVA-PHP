<?php
@include 'config.php';
session_start();

// Fetch car parts from the database
$query = "SELECT * FROM car_parts";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Database query failed: " . mysqli_error($conn));
}

// Check for a message in the session
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']); // Clear the message after displaying
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Parts</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <?php include 'header.php'; ?>

    <div style="text-align: right; margin: 20px;">
        <a href="dashboard.php" style="padding: 10px; background-color: #4CAF50; color: white; border-radius: 5px;">Admin Dashboard</a>
    </div>

    <div style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <h2 style="text-align: center;">Car Parts</h2>

        <?php if ($message): ?>
            <div style="background-color: #4CAF50; color: white; padding: 10px; margin: 10px 0; text-align: center; border-radius: 5px;">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>

        <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px;">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div style="flex: 1 1 calc(33.333% - 20px); padding: 10px; background-color: rgba(255, 255, 255, 0.1); border-radius: 8px; box-sizing: border-box;">
                    <img src="assets/img/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" style="width: 150px;">
                    <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                    <p>Price: $<?php echo htmlspecialchars($row['price']); ?></p>
                    <p><?php echo htmlspecialchars($row['description']); ?></p>
                    <form action="c_add_to_cart.php?id=<?php echo $row['id']; ?>" method="POST">
                        <input type="number" name="quantity" value="1" min="1" style="width: 50px;">
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>