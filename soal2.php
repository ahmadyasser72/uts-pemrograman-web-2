<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Perhitungan Nilai</title>
</head>

<body>
  <h1>Perhitungan Nilai</h1>

  <a href="index.php"> &lt;&lt; Kembali </a>

  <br /><br />

  <form action="soal2-hitung.php" method="post">
    <table border="1">
      <tr>
        <td width="40%"><label for="nama_barang">Nama Barang</label></td>
        <td>
          <input type="text" name="nama_barang" id="nama_barang" placeholder="masukan nama barang..." required />
        </td>
      </tr>
      <tr>
        <td><label for="harga">Harga</label></td>
        <td>
          <input type="number" name="harga" id="harga" placeholder="0" required />
        </td>
      </tr>
      <tr>
        <td><label for="jumlah_beli">Jumlah Beli</label></td>
        <td>
          <input type="number" name="jumlah_beli" id="jumlah_beli" placeholder="0" required />
        </td>
      </tr>
      <tr>
        <td align="right" colspan="2">
          <input type="submit" value="Hitung" name="hitung_harga" />
          <input type="reset" value="Reset" />
        </td>
      </tr>
    </table>
  </form>
</body>

</html>
