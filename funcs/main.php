<?php
// Checking if there's a $_SESSION.
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
// Connectingto database.
include 'conn.php';

// Retrieve data from database.
function select($sel) {
  global $login;
  $resl = $login->query($sel);
  $rows = [];
  while ($row = $resl->fetch(PDO::FETCH_ASSOC)) {
    $rows[] = $row;
  } return $rows;
}

// Adding products & price to database

if (isset($_POST['sent'])) {
  // Retrieve data from data.json 
  $acts = json_decode(file_get_contents('data.json'),true);
  foreach ($acts as $act){
    $rsl = [
        'product' => $act['name'],
        'price' => $act['price'],
        'amount' => $act['amount']
      ];
    $q = $login->prepare('
      INSERT INTO items
      (namaBarang,price,amount)
      VALUES(:product,:price,:amount)');
    $q->execute($rsl);
  } 
  // Redirect ke index.php setelah selesai
  header('Location: /cashier-app/index.php');
}

// Function to add data from user input to database.
function addProduct() {
  global $login;
  $rslt = [
     'product' => $_POST['productName'],
     'price' => $_POST['productPrice']
    ];
  
  // MySQL query.
  $p = $login->prepare("
  iNSERT INTO lItem
  (barangJual,harga) 
  VALUES(:product,:price)");
  // Redirect ke index.php jika berhasil
  if ($p->execute($rslt)) {
    header('Location: /cashier-app/index.php');
  }
}

// Run addProduct Fn.
if (isset($_POST['send'])) {
  addProduct();
}
?>