<?php

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "Data berhasil ditambahkan!";
  } else {
    echo "Data Gagal ditambahkan!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Pelanggan</title>
</head>

<body>
  <h3> Form Tambah Data Pelanggan</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label>
          Nama :
          <input type="text" name="Nama" autofocus required>
        </label>
      </li>
    </ul>

    <ul>
      <li>
        <label>
          No Pelanggan :
          <input type="text" name="nopel">
        </label>
      </li>
    </ul>
    <ul>
      <li>
        <label>
          Alamat :
          <input type="text" name="alamat">
        </label>
      </li>
    </ul>
    <ul>
      <li>
        <label>
          RT :
          <input type="text" name="rt">
        </label>
      </li>
    </ul>
    <ul>
      <li>
        <label>
          RW :
          <input type="text" name="rw">
        </label>
      </li>
    </ul>
    <ul>
      <li>
        <label>
          Golongan :
          <input type="text" name="gol">
        </label>
      </li>
    </ul>
    <ul>
      <button type="submit" name="tambah">Tambah Data </button>
    </ul>


  </form>

</body>

</html>