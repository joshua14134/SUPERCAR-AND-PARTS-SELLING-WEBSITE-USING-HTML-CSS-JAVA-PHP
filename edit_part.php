<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login.php');
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM car_parts WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $part = mysqli_fetch_assoc($result);
}

// Handle part update
if (isset($_POST['update'])) {
    $part_name = mysqli_real_escape_string($conn, $_POST['part_name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $update_query = "UPDATE car_parts SET name = '$part_name', price = '$price', description = '$description' WHERE id = $id";
    mysqli_query($conn, $update_query);
    header('location:dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Part</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: hsl(279, 89%, 7%); color: white; margin: 0; padding: 0;">
<div class="container" style="text-align: center; padding: 30px; background: rgba(0, 0, 0, 0.8); border-radius: 8px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); width: 80%; max-width: 600px; margin: auto;">
    <h2>Edit Part</h2>
    <form action="" method="post">
        <input type="text" name="part_name" value="<?php echo htmlspecialchars($part['name']); ?>" required placeholder="Part Name" style="padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc;">
        <input type="text" name="price" value="<?php echo htmlspecialchars($part['price']); ?>" required placeholder="Price" style="padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc;">
        <textarea name="description" required placeholder="Description" style="padding: 10px; margin: 10px 0; border-radius: 5px; border: 1px solid #ccc; width: 100%; resize: none;"><?php echo htmlspecialchars($part['description']); ?></textarea>
        <input type="submit" name="update" value="Update Part" style="padding: 10px 20px; margin: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
    </form>
    <a href="dashboard.php" style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">Back to Dashboard</a>
</div>
</body>
</html>
