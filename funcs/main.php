<?php
// Connectingto database.
include 'conn.php';

// Retrieve data from database.
function select($sel) {
  global $login;
  $resl = $login->query($sel);
  
  $rows = [];
  while ($row = $resl->fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $row;
  }
  return $rows;
}

// Adding products & price to database

if (isset($_POST['productName'], $_POST['price'])) {
  $act = $_POST;
  $rsl = [
      'product' => $act['productName'],
      'price' => $act['price']
    ];
  $q = $login->prepare('insert into items (namaBarang,price) values(:product,:price)');
  if ($q->execute($rsl)) {
    header('Location: /cashier-app/index.php');
  }
}

// Function to add data from user input to database.
function addProduct() {
  global $login;
  $rslt = [
     'product' => $_POST['productName'],
     'price' => $_POST['productPrice']
    ];
  $p = $login->prepare("iNSERT INTO lItem
  (barangJual,harga) 
  VALUES(:product,:price)");
  if ($p->execute($rslt)) {
    header('Location: /cashier-app/index.php');
  }
}

if (isset($_POST['send'])) {
  addProduct();
}
?>