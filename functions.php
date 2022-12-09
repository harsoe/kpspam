<?php

function Koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'kpspam');
}

function Query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
