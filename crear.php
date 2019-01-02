<?php
$db = new mysqli('127.0.0.1', 'root', 'codigo', 'lavanderia');
$code = $_POST['code'];
$description = $_POST['description'];
$inventory = $_POST['inventory'];
$price = $_POST['price'];
$tickets = $_POST['tickets'];
$departures = $_POST['departures'];
$available = $_POST['available'];
$total = $_POST['total'];
$sql = "INSERT INTO inventory_control (code,description,inventory,price,tickets,departures,available,total) VALUES('$code', '$description', '$inventory', '$price', '$tickets', '$departures', '$available', '$total')";
$db->query($sql);
header('location: index2.php');
die();
 ?>
