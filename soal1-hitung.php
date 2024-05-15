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

  <a href="soal1.php"> &lt;&lt; Kembali </a>

  <br /><br />

  <?php
  if (isset($_POST['hitung_nilai'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $nilai_absen = $_POST['nilai_absen'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];

    ?>
    <table border="1">
      <tr>
        <td width="40%">NIM</td>
        <td>
          <?php echo $nim ?>
        </td>
      </tr>
      <tr>
        <td>Nama Lengkap</td>
        <td>
          <?php echo $nama ?>
        </td>
      </tr>
      <tr>
        <td>Nilai</td>
        <td>
          <ul>
            <li> Absen : <?php echo $nilai_absen ?> </li>
            <li> Tugas : <?php echo $nilai_tugas ?> </li>
            <li> UTS : <?php echo $nilai_uts ?> </li>
            <li> UAS : <?php echo $nilai_uas ?> </li>
          </ul>
        </td>
      </tr>
      <tr>
        <td>Nilai Rata-rata</td>
        <td>
          <?php
          $nilai_rata_rata =
            ($nilai_absen * 0.1)
            + ($nilai_tugas * 0.2)
            + ($nilai_uts * 0.3)
            + ($nilai_uas * 0.4);
          echo $nilai_rata_rata;
          ?>
        </td>
      </tr>
      <tr>
        <td>Predikat</td>
        <td>
          <?php
          if ($nilai_rata_rata >= 80) {
            $predikat = 'A';
          } else if ($nilai_rata_rata >= 70) {
            $predikat = 'B';
          } else if ($nilai_rata_rata >= 60) {
            $predikat = 'C';
          } else if ($nilai_rata_rata >= 50) {
            $predikat = 'D';
          } else {
            $predikat = 'E';
          }

          echo $predikat;
          ?>
        </td>
      </tr>
      <tr>
        <td>Status</td>
        <td>
          <?php
          if ($nilai_rata_rata >= 70) {
            $status = 'LULUS';
          } else if ($nilai_rata_rata >= 60) {
            $status = 'UJIAN ULANG';
          } else {
            $status = 'TIDAK LULUS';
          }

          echo $status;
          ?>
        </td>
      </tr>
    </table>

    <h3>Keterangan :</h3>
    <table border="1" style="font-size: 12px">
      <tr>
        <td>Persentase Nilai Rata-rata :</td>
        <td>Keterangan Predikat :</td>
        <td>Keterangan Status :</td>
      </tr>
      <tr>
        <td>
          <ul>
            <li>Nilai Absen : 10%</li>
            <li>Nilai Tugas : 20%</li>
            <li>Nilai UTS : 30%</li>
            <li>Nilai UAS : 40%</li>
          </ul>
        </td>
        <td>
          <ul>
            <li> >= 80 : A</li>
            <li> >= 70 : B</li>
            <li> >= 60 : C</li>
            <li> >= 50 : D</li>
            <li> &lt; 50 : E</li>
          </ul>
        </td>
        <td>
          <ul>
            <li> >= 70 : LULUS</li>
            <li> >= 60 : UJIAN ULANG</li>
            <li> &lt; 60 : TIDAK LULUS</li>
          </ul>
        </td>
      </tr>
    </table>
    <?php
  }
  ?>
</body>

</html>
