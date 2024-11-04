<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $query = "SELECT * FROM user_form WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $user_type = $_POST['user_type'];

    $update = "UPDATE user_form SET name='$name', email='$email', user_type='$user_type' WHERE id='$id'";
    mysqli_query($conn, $update);
    header('location:admin_page.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: hsl(279, 89%, 7%); /* Dark background */
            color: white; /* White text */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full height of the viewport */
            margin: 0;
        }
        .container {
            background: rgba(0, 0, 0, 0.8); /* Semi-transparent black background */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 300px; /* Fixed width */
        }
        input[type="text"], input[type="email"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background: hsl(219, 4%, 15%); /* Input background */
            color: white; /* Input text color */
        }
        input[type="submit"] {
            background-color: #4CAF50; /* Green background */
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%; /* Full width */
        }
        input[type="submit"]:hover {
            background-color: #45a049; /* Darker green on hover */
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Edit User</h2>
    <form action="" method="post">
        <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>
        <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
        <select name="user_type">
            <option value="user" <?php if ($user['user_type'] == 'user') echo 'selected'; ?>>User</option>
            <option value="admin" <?php if ($user['user_type'] == 'admin') echo 'selected'; ?>>Admin</option>
        </select>
        <input type="submit" name="update" value="Update User">
    </form>
</div>

</body>
</html>
