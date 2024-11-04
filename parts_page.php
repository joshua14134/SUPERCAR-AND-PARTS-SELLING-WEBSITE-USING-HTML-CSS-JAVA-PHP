<?php
@include 'config.php';
session_start();

// Fetch car parts from the database
$query = "SELECT * FROM car_parts";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Database query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Car Parts</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: hsl(279, 89%, 7%); /* Dark background */
            color: white; /* White text */
            margin: 0;
            padding: 0;
            position: relative; /* Set position for absolute child elements */
        }
        .container {
            text-align: center;
            padding: 30px;
            background: rgba(0, 0, 0, 0.8); /* Semi-transparent black background */
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            margin: 20px auto; /* Centered container */
            width: 80%; /* Responsive width */
            max-width: 800px; /* Max width for larger screens */
        }
        .parts__list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
        }
        .part-container {
            flex: 1 1 calc(33.333% - 20px);
            box-sizing: border-box;
            max-width: calc(33.333% - 20px);
            padding: 10px;
            background-color: rgba(255, 255, 255, 0.1); /* Light background for parts */
            border-radius: 8px;
        }
        .btn {
            padding: 10px 20px;
            margin: 10px;
            text-decoration: none;
            background-color: #4CAF50; /* Green background */
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s; /* Smooth transition for hover effect */
            display: inline-block; /* Ensures buttons are inline */
        }
        .btn:hover {
            background-color: #45a049; /* Darker green on hover */
        }
        .admin-dashboard-btn {
            position: absolute; /* Absolute positioning */
            top: 20px; /* Distance from the top */
            right: 20px; /* Distance from the right */
            z-index: 1000; /* Ensures it appears above other elements */
        }
    </style>
</head>
<body>
    <nav class="nav container">
        <a href="" class="nav__logo">
            <i class="ri-roadster-fill"></i>
            THE SUPER WHEEL
        </a>
        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item">
                    <a href="index.php" class="nav__link active-link">Home</a>
                </li>
                <li class="nav__item">
                    <a href="about.php" class="nav__link">About</a>
                </li>
                <li class="nav__item">
                    <a href="popular.php" class="nav__link">Super Cars</a>
                </li>
                <li class="nav__item">
                    <a href="c_login.php" class="nav__link">Login</a>
                </li>
                <li class="nav__item">
                    <a href="c_parts.php" class="nav__link">Parts</a>
                </li>
                <li class="nav__item">
                    <a href="service.php" class="nav__link">Service</a>
                </li>
                <li class="nav__item">
                    <a href="c_cart.php" class="nav__link"><i class="ri-shopping-cart-line"></i></a>
                </li>
            </ul>
            <div class="nav__close" id="nav-close">
                <i class="ri-close-line"></i>
            </div>
        </div>
        <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line"></i>
        </div>
    </nav>

    <a href="dashboard.php" class="btn admin-dashboard-btn">Admin Dashboard</a>

    <div class="container">
        <h2>Car Parts</h2>
        <div class="parts__list">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="part-container">
                    <img src="assets/img/<?php echo htmlspecialchars($row['image']); ?>" 
                         alt="<?php echo htmlspecialchars($row['name']); ?>" 
                         style="width: 150px;">
                    <h3><?php echo htmlspecialchars($row['name']); ?></h3>
                    <p>Price: $<?php echo htmlspecialchars($row['price']); ?></p>
                    <p><?php echo htmlspecialchars($row['description']); ?></p>
                    <?php if (isset($_SESSION['user_id'])): // Check if user is logged in ?>
                        <a href="c_add_to_cart.php?id=<?php echo $row['id']; ?>" class="btn">Add to Cart</a>
                    <?php else: ?>
                        <a href="c_login.php" class="btn">Login to Add to Cart</a>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</body>
</html>
