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
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>No Pelanggan</th>
      <th>Alamat</th>
      <th>Rt</th>
      <th>Rw</th>
      <th>Gol</th>
      <th>Aksi</th>

    </tr>

    <?php $i = 1;
    foreach ($pelanggan as $p) : ?>

      <tr>
        <td><?= $i++; ?></td>
        <td><?= $p['nama']; ?></td>
        <td><?= $p['nopel']; ?></td>
        <td><?= $p['alamat']; ?></td>
        <td><?= $p['rt']; ?></td>
        <td><?= $p['rw']; ?></td>
        <td><?= $p['gol']; ?></td>
        <td>
          <a href="">ubah</a> |
          <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</body>

</html>