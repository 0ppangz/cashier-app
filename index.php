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
      <?php foreach ($prod as $product): ?>
        <li class="pList">
          <div class="btnBox">
            <p class="pName">
              <?= $product['barangJual'] ?>
            </p>
            <p class="price">
              <?= $product['harga'] ?> X
            </p>
            <div class="amount">0</div>
          </div>

        </li>
      <?php endforeach; ?>
      <a href="detail.php">
        <button class="konf">KONFIRMASI</button>
      </a>
    </ul>
  </div>
  <script type="text/javascript" charset="utf-8">
    

    const data = {};
    document.querySelectorAll('.btnBox').forEach(button => {
      button.addEventListener('click', function() {
        
        // Init 
        const products = this.closest('.pList');
        const product = products.querySelector('.pName');
        const price = products.querySelector('.price');
        const amount = products.querySelector('.amount');

        // bikin identifier biar bisa diupdate
        const productId = product.textContent
          .trim()
          .toLowerCase()
          .replaceAll(' ', '_')
          .replace(/[^a-zA-Z0-9_]/g, '')

        let curAm = parseInt(amount.textContent);
        curAm++;
        amount.textContent = curAm;

        // store object ke variablenya
        data[productId] = {
          name: product.textContent.trim(),
          price: parseInt(price.textContent.trim()),
          amount: parseInt(amount.textContent)
        }
        
        // ngitung total harga
        // https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/reduce
        const priceSum = Object.values(data).reduce((acc, item) => acc + (item.price * item.amount), 0)
        
        // Store object ke variable.
        const val = Object.values(data);
        
        // Send object ke data.json
        fetch('funcs/save.php', {
          "method" : "POST",
          "headers" : {
            "Content-Type" : "application.json"
          },
          body: JSON.stringify(val)
        })
        // Debug
        /*.then(res => {
          return res.text();
        }).then(data => {
          document.getElementById('json').innerHTML = data;
        })*/
        
        // biar format mata uang (ada RP nya)
        const priceFormatted = Intl.NumberFormat('id-ID', {
          style: "currency",
          currency: "IDR"
        }).format(priceSum)
        document.getElementById('price-total').textContent = `Total:
        Rp${priceSum}`
      });
    });
  </script>
</body>

</html>
