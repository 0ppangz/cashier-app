<?php
include 'funcs/save.php';

// Retrieve data.
$data = json_decode(file_get_contents('funcs/data.json'),true);
// Debug
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style/main.css" type="text/css" media="all" />
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1>Detail Pesanan</h1>
    <ul class="details">
      <?php 
      $total = [];
      foreach ($data as $dat): ?>
        <li>
          <?=$dat['name'] . ' - ' . $dat['price'] . ' x' . $dat['amount']?>
        </li>
      <?php 
        $total[] = $dat['price'] * $dat['amount'];
      endforeach;
      $grandTotal = array_sum($total);
      ?>
    </ul>
    <p><b>Total:</b> <?=$grandTotal?></p>
    <form
      action="funcs/main.php" 
      method="POST">
      <input class="konf"type="submit" name="sent" id="send" value="KONFIRMASI" />
    </form>
  </div>
</body>
</html>