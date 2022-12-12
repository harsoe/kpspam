<?php
require 'functions.php';

// Ambil Id Url
$id = $_GET['id'];

//Query data pelanggan
$p = Query("SELECT * FROM pelanggan WHERE id=$id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Pelanggan</title>
</head>

<body>
  <h3>Detail Mahasiswa </h3>
  <ul>
    <li>nama : <?= $p['nama']; ?> </li>
    <li>Nomor pelanggan: <?= $p['nopel'];  ?></li>
    <li>alamat : <?= $p['alamat'];  ?></li>
    <li>rt :<?= $p['rt'];  ?></li>
    <li>rw :<?= $p['rw'];  ?></li>
    <li>golongan : <?= $p['gol'];  ?></li>
    <li><a href="">Ubah</a> | <a href="hapus.php?id=<?= $p['id']; ?>" onclick=" return confirm ('Apakah Anda yakin ?');">Hapus</a></li>
    <li><a href="index.php">Kembali ke daftar Pelanggan</a></li>
  </ul>
</body>

</html>