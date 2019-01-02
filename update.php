<?php
  $db = new mysqli('127.0.0.1', 'root', 'codigo', 'lavanderia');
  $id = $_POST['id'];
  $code = $_POST['code'];
  $description = $_POST['description'];
  $inventory = $_POST['inventory'];
  $price = $_POST['price'];
  $tickets = $_POST['tickets'];
  $departures = $_POST['departures'];
  $available = $_POST['available'];
  $total = $_POST['total'];
  $sql = "UPDATE inventory_control SET code = '$code', description = '$description', inventory = '$inventory', price = '$price', tickets = '$tickets', departures = '$departures', available = '$available', total = 'total' WHERE id = $id";
  $db->query($sql);

  header('Location: index3.php');
  die();
?>
