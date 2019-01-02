<?php
$db = new mysqli('127.0.0.1', 'root', 'codigo', 'inventario');
$code = $_POST['code'];
$client = $_POST['client'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$sql = "DELETE FROM datos";
$db->query($sql);
header('location: index2.html');
die();
 ?>
