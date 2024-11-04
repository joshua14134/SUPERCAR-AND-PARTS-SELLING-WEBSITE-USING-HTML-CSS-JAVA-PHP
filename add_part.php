<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login.php');
    exit();
}

if (isset($_POST['submit'])) {
    $part_name = mysqli_real_escape_string($conn, $_POST['part_name']);
    $image = mysqli_real_escape_string($conn, $_FILES['image']['name']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // Move the uploaded file to the desired directory
    move_uploaded_file($_FILES['image']['tmp_name'], "assets/img/$image");

    // Insert part into the database
    $insert = "INSERT INTO car_parts (name, image, price, description) VALUES ('$part_name', '$image', '$price', '$description')";
    mysqli_query($conn, $insert);
    
    header('location: dashboard.php');
    exit();
}
?>
