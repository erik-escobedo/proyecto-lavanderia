<?php
$db = new mysqli('127.0.0.1', 'root', 'codigo', 'lavanderia');
$avios = $_POST['avios'];
$fabricks = $_POST['fabrics'];
$existence = $_POST['existence'];
$tickets = $_POST['tickets'];
$departures = $_POST['departures'];
$sql = "INSERT INTO manual_inventary (avios,fabrics,existence,tickets,departures) VALUES('$avios', '$fabricks', '$existence', '$tickets', '$departures')";
$db->query($sql);
header('location: report_for_manual_inventary.php');
die();
 ?>
