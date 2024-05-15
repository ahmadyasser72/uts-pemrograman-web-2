<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Hasil Perhitungan</title>
</head>

<body>
  <h1>Perhitungan Nilai</h1>

  <a href="soal2.php"> &lt;&lt; Kembali </a>

  <br /><br />

  <?php
  if (isset($_POST['hitung_harga'])) {
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $jumlah_beli = $_POST['jumlah_beli'];

    ?>
    <table border="1">
      <tr>
        <td colspan="2">
          <ul>
            <li>Nama Barang : <?= $nama_barang ?> </li>
            <li>Harga Barang : <?= $harga ?> </li>
            <li>Jumlah Barang : <?= $jumlah_beli ?> </li>
            <li>Sub Total :
              <?php
              $sub_total = $harga * $jumlah_beli;
              echo $sub_total;
              ?>
            </li>
          </ul>
        </td>
      </tr>
      <tr>
        <td width="60%">Diskon</td>
        <td>
          <?php
          if ($sub_total > 2_000_000) {
            $diskon = $sub_total * 0.12;
          } else if ($sub_total > 1_000_000) {
            $diskon = $sub_total * 0.08;
          } else {
            $diskon = 0;
          }

          echo $diskon;
          ?>
        </td>
      </tr>
      <tr>
        <td>Harga Total</td>
        <td>
          <?php
          $total_harga = $sub_total - $diskon;
          echo $total_harga;
          ?>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <h3>Keterangan Diskon</h3>
          <ul>
            <li>Pembelian lebih dari 100000 Mendapatkan diskon 8%</li>
            <li>Pembelian lebih dari 200000 Mendapatkan diskon 12%</li>
          </ul>
        </td>
      </tr>
    </table>
    <?php
  }
  ?>
</body>

</html>
