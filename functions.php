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
