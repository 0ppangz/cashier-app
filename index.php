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
    <form action="funcs/main.php" method="post" accept-charset="utf-8">
      <ul>
        <?php foreach ($prod as $product): ?>
        <!-- NOTE BUAT IPAN
        pan caranya biar button di klik bakal nambah value di input hiddennya
        gimana? pengennya sih pake js tp gtw caranya gmn, cobain pls-->
          <li>
            <input
              type="hidden"
              name="acts"
              id="act"
              value="<?= $product['harga'] ?>" />
            <button
              type="submit"
              name="act"
              value="<?= $product['barangJual'] ?>">
              <?= $product['barangJual'] ?> <?= $product['harga'] ?>
            </button>
          </li>
        <?php endforeach; ?>
      </ul>
            <button type="submit" name="btn">Konfirmasi</button>
    </form>
  </div>
</body>

</html>
