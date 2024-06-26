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

  <form action="soal1-hitung.php" method="post">
    <table border="1">
      <tr>
        <td width="40%"><label for="nim">NIM</label></td>
        <td>
          <input type="text" name="nim" id="nim" placeholder="masukan nim..." required />
        </td>
      </tr>
      <tr>
        <td><label for="nama">Nama Lengkap</label></td>
        <td>
          <input type="text" name="nama" id="nama" placeholder="masukan nama..." required />
        </td>
      </tr>
      <tr>
        <td><label for="nilai_absen">Nilai Absen</label></td>
        <td>
          <input type="number" min="0" max="100" name="nilai_absen" id="nilai_absen" placeholder="0" required />
        </td>
      </tr>
      <tr>
        <td><label for="nilai_tugas">Nilai Tugas</label></td>
        <td>
          <input type="number" min="0" max="100" name="nilai_tugas" id="nilai_tugas" placeholder="0" required />
        </td>
      </tr>
      <tr>
        <td><label for="nilai_uts">Nilai UTS</label></td>
        <td>
          <input type="number" min="0" max="100" name="nilai_uts" id="nilai_uts" placeholder="0" required />
        </td>
      </tr>
      <tr>
        <td><label for="nilai_uas">Nilai UAS</label></td>
        <td>
          <input type="number" min="0" max="100" name="nilai_uas" id="nilai_uas" placeholder="0" required />
        </td>
      </tr>
      <tr>
        <td align="right" colspan="2">
          <input type="submit" value="Hitung" name="hitung_nilai" />
          <input type="reset" value="Reset" />
        </td>
      </tr>
    </table>
  </form>
</body>

</html>
