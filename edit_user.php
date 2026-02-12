<?php
require 'config.php';
session_start();

$id=(int)$_GET['id'];

$stmt=$conn->prepare("SELECT * FROM user_form WHERE id=?");
$stmt->bind_param("i",$id);
$stmt->execute();
$user=$stmt->get_result()->fetch_assoc();

if(isset($_POST['update'])){
$stmt=$conn->prepare("
UPDATE user_form SET name=?,email=?,phone=?,address=?,user_type=? WHERE id=?
");
$stmt->bind_param("sssssi",
$_POST['name'],$_POST['email'],$_POST['phone'],$_POST['address'],$_POST['user_type'],$id);
$stmt->execute();

header("Location:dashboard.php");
}
?>