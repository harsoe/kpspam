<?php
require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo  "<script>
        alert('Data berhasil dihapus');
        document.location.href='index.php';    
  </script>";
} else {
  echo "Data Gagal dihapus!";
}
