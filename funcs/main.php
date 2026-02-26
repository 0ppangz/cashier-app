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

var_dump($_POST);

/*if (isset($_POST)) {
  $act = $_POST;
  var_dump($act);
  $rsl = [
      'product' => $act,
      'price' => $acts
    ];
  $q = $login->prepare('insert into items (namaBarang,price) values(:product,:price)');
  if ($q->execute($rsl)) {
    header('Location: /cashier-app/index.php');
  }
}
*/
?>