<?php
session_start();
require 'config.php';

if(!isset($_SESSION['cart'])){
    header("Location: index.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$name    = $_POST['name'];
$method  = $_POST['method'];
$ref     = $_POST['payment_ref'];

$total = 0;
foreach($_SESSION['cart'] as $item){
    $total += $item['price'] * $item['qty'];
}

/* Save Order */
$stmt = $conn->prepare("INSERT INTO orders(user_id,payment_name,payment_method,payment_ref,total_amount)
VALUES(?,?,?,?,?)");

$stmt->bind_param("isssd",$user_id,$name,$method,$ref,$total);
$stmt->execute();

$order_id = $stmt->insert_id;

/* Save Items */
foreach($_SESSION['cart'] as $item){

    $stmt2 = $conn->prepare("INSERT INTO order_items(order_id,part_name,price,qty)
    VALUES(?,?,?,?)");

    $stmt2->bind_param("isdi",
        $order_id,
        $item['name'],
        $item['price'],
        $item['qty']
    );
    $stmt2->execute();
}

/* Clear Cart */
unset($_SESSION['cart']);

header("Location: thankyou.php?order=".$order_id);
exit();
?>