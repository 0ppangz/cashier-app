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
    <div class="productBox">
      <form 
        autocomplete="off"
        action="funcs/main.php" 
        method="post">
        <label for="namep">Tambahkan produk baru.</label>
        <input 
          class="namep" 
          placeholder="Nama Produk"
          type="text"
          name="productName" 
          id="productName" 
          required="Isi bagian ini" />
        <input 
          placeholder="Harga Produk"
          class="price"
          type="text"
          name="productPrice"
          id="productPrice"
          required="Isi bagian ini" />
        <input 
          type="submit"
          name="send" 
          id="send" 
          value="CONFIRM" />
      </form>
    </div>
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
                <?=$product['harga']?> X
              </p>
              <div class="amount">0</div>
            </div>
            
          </li>
        <?php endforeach; ?>
        <button>KONFIRMASI</button>
      </ul>
            <!-- <button type="submit" id="btn"name="btn">Konfirmasi</button> -->
  </div>
  <script type="text/javascript" charset="utf-8">
    /* Pan, ini caranya biar bisa 
    retrieve textContent 
    dari pName, price, ama amount trus send ke 
    global variablenya php yg $_POST */
    document.querySelectorAll('.btnBox').forEach(button => {
      button.addEventListener('click', function () {
        const products = this.closest('.pList');
        const product = products.querySelector('.pName');
        const price = products.querySelector('.price').textContent;
        const amount = products.querySelector('.amount');
        
        let curAm = parseInt(amount.textContent);
        curAm++;
        amount.textContent = curAm;
        })
    })
  </script>
</body>

</html>
