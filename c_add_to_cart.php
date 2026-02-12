<?php
session_start();
require 'config.php';

/* Check ID */
if(!isset($_GET['id'])){
    header("Location: index.php");
    exit();
}

$id = (int)$_GET['id'];

/* Fetch product from correct table */
$stmt = $conn->prepare("SELECT id, name, price, image FROM car_parts WHERE id=?");
$stmt->bind_param("i",$id);
$stmt->execute();
$result = $stmt->get_result();

/* If product found */
if($row = $result->fetch_assoc()){

    /* Create cart if not exists */
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }

    /* Check if already in cart */
    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['qty']++;
    }else{
        $_SESSION['cart'][$id] = [
            'id'    => $row['id'],
            'name'  => $row['name'],
            'price' => $row['price'],
            'image' => $row['image'],
            'qty'   => 1
        ];
    }
}

/* Redirect to cart page */
header("Location: c_cart.php");
exit();
?>