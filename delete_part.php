<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "DELETE FROM car_parts WHERE id = $id";
    mysqli_query($conn, $query);
    header('location: parts_page.php');
    exit();
}
?>
