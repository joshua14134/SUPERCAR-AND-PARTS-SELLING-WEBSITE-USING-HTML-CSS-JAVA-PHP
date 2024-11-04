<?php
@include 'config.php';
session_start();

if (!isset($_SESSION['admin_name'])) {
    header('location:login_form.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']); // Escape the ID to prevent SQL injection
    $delete = "DELETE FROM user_form WHERE id='$id'";
    
    if (mysqli_query($conn, $delete)) {
        header('location:admin_page.php');
        exit();
    } else {
        // Optionally handle error
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    // Optionally handle case where ID is not set
    echo "No user ID specified for deletion.";
}
?>
