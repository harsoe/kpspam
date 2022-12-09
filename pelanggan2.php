<?php
require 'functions.php';
$pelanggan = Query("SELECT * FROM pelanggan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3> DAFTAR PELANGGAN KP SPAM </h3>
  <a href="tambah.php">Tambah Data Pelanggan</a>
  <br><br>


  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>No Pelanggan</th>
      <th>Aksi</th>

    </tr>

    <?php $i = 1;
    foreach ($pelanggan as $p) : ?>

      <tr>
        <td><?= $i++; ?></td>
        <td><?= $p['nama']; ?></td>
        <td><?= $p['nopel']; ?></td>
        <td>
          <a href="detail.php?id=<?= $p['id']; ?>">Lihat Detail</Details></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>