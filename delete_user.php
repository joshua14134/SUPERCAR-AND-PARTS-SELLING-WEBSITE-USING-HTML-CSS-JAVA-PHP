<?php
require 'config.php';
session_start();

if($_SESSION['user_type']!='admin'){ exit(); }

$id=(int)$_GET['id'];

$stmt=$conn->prepare("DELETE FROM user_form WHERE id=?");
$stmt->bind_param("i",$id);
$stmt->execute();

header("Location:dashboard.php");