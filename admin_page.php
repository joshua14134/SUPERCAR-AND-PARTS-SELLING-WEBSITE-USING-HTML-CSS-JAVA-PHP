<?php

@include 'config.php';

session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
}

// Fetch user data
$query = "SELECT * FROM user_form";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>

    <!-- Custom CSS file link -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('assets/img/ADMIN.jpg'); /* Background image */
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent image repetition */
            margin: 0;
        }
        .container {
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent container */
            padding: 20px;
            border-radius: 8px;
            border: 2px solid black; /* Black border */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 80%; /* Adjust width as needed */
            max-width: 800px; /* Max width for larger screens */
            color: white; /* Updated text color to white */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            color: white; /* Ensure table text is white */
        }
        table, th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #444; /* Darker background for headers */
        }
        .btn {
            padding: 10px 15px;
            margin: 5px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            display: inline-block; /* Ensure buttons are displayed inline */
        }
        .logout-btn {
            display: block; /* Make logout button take full width */
            margin-top: 20px; /* Add some space above */
        }
    </style>
</head>
<body>

<div class="container">

    <div class="content">
        <h3>Hi, <span>admin</span></h3>
        <h1>Welcome <span><?php echo $_SESSION['admin_name']; ?></span></h1>
        <p>This is an admin page</p>

        <!-- User data table -->
        <h2>User Data</h2>
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>User Type</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                      <td>{$row['name']}</td>
                      <td>{$row['email']}</td>
                      <td>{$row['user_type']}</td>
                      <td>
                          <a href='edit_user.php?id={$row['id']}' class='btn'>Edit</a>
                          <a href='delete_user.php?id={$row['id']}' class='btn' onclick='return confirm(\"Are you sure you want to delete this user?\");'>Delete</a>
                      </td>
                  </tr>";
            }
            ?>
            </tbody>
        </table>
        <a href="logout.php" class="btn logout-btn">Logout</a> <!-- Logout button at the end -->
    </div>

</div>

</body>
</html>
