<?php

function Koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'kpspam');
}

function Query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);

  // Jika Hasilnya hanya 1 Data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function tambah($data)
{
  $conn = koneksi();
  $nama = $data['nama'];
  $nopel = $data['nopel'];
  $alamat = $data['alamat'];
  $rt = $data['rt'];
  $rw = $data['rw'];
  $gol = $data['gol'];

  $query = "INSERT INTO pelanggan VALUES 
    (null,'$nama','$nopel','$alamat','$rt','$rw','$gol')";


  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
