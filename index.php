<?php
include 'funcs/main.php';
$prod = select('select * from lItem');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style/main.css" type="text/css" media="all" />
  <title>Cashier App</title>
</head>

<body>
  <div class="container">
    <h1>Cashier App</h1>
      <ul>
        <?php foreach ($prod as $product): ?>
        <!-- IMPORTANT?
        pan caranya biar button di klik bakal nambah value di input hiddennya
        gimana? pengennya sih pake js tp gtw caranya gmn, cobain pls-->
          <li>
          <form class="products" action="funcs/main.php" method="post">
            <input
              type="hidden"
              name="productName"
              value="<?= $product['barangJual'] ?>" />
            <input
              type="hidden"
              name="price"
              value="<?= $product['harga'] ?>" />
            <button type="submit">
              <?=$product['barangJual'] . "<span>" . $product['harga'] .
              "</span>" ?> 
            </button>
          </form>
          </li>
        <?php endforeach; ?>
      </ul>
            <!-- <button type="submit" id="btn"name="btn">Konfirmasi</button> -->
  </div>
</body>

</html>
