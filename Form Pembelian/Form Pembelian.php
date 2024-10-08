<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Pembelian</title>
  </head>
  <body>
    <h1>Form Pembelian</h1>
    <form method="post">
      <label for="jumlah">Jumlah Pembelian:</label>
      <input type="number" id="jumlah" name="jumlah" min="1" required><br><br>
      <label for="harga">Harga Satuan:</label>
      <input type="number" id="harga" name="harga" min="1" required><br><br>
      <button type="submit" name="hitung">Hitung Total Pembayaran</button>
    </form>
    <br>
      <?php
          if(isset($_POST['hitung'])){
            $jumlah = $_POST['jumlah'];
            $harga = $_POST['harga'];
            $total;
            if ($jumlah >= 10) {
              $total = $jumlah * $harga * 0.75; //diskon 25%
            } else {
              $total = $jumlah * $harga;
            }
            echo "Total Pembayaran: Rp " . $total;
          }
      ?>
  </body>
</html>