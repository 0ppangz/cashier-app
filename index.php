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
        <!-- IMPORTANT? pan caranya biar button 
        di klik bakal nambah value di input 
        hiddennya gimana? 
        pengennya sih pake js tp gtw caranya gmn, 
        cobain pls-->
        <?php foreach ($prod as $product): ?>
          <li class="pList">
            <div class="btnBox">
              <p class="pName">
                <?=$product['barangJual']?>
              </p>
              <p class="price">
                <?=$product['harga']?>
              </p>
            </div>
            
            <div class="amount">0</div>
          </li>
        <?php endforeach; ?>
      </ul>
            <!-- <button type="submit" id="btn"name="btn">Konfirmasi</button> -->
  </div>
  <script type="text/javascript" charset="utf-8">
    document.querySelectorAll('.btnBox').forEach(button => {
      button.addEventListener('click', function () {
        const products = this.closest('.pList');
        
        const price = parseInt(products.querySelector('.price').textContent);
        const amount = products.querySelector('.amount');
        
        let curAm = parseInt(amount.textContent);
        
        amount.textContent = curAm + price;
        
      })
    })
  </script>
</body>

</html>
