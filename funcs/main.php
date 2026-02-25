<?php
// Connectingto database.
include 'conn.php';

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
if (isset($_POST['act'])) {
  $act = $_POST['act'];
  $acts = $_POST['acts'];
  $rsl = [
      'product' => $act,
      'price' => $acts
    ];
  $q = $login->prepare('insert into items (namaBarang,price) values(:product,:price)');
  if ($q->execute($rsl)) {
    header('Location: /cashier-app/index.php');
  }
}

?>