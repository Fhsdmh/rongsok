<?php
  require 'koneksi.php';

$id = $_GET["id"];

$conn = open_db();

$query_hapus = "DELETE FROM user WHERE id=$id";
$result = $conn->query($query_hapus);

echo "<script type='text/javascript'>
        alert('data berhasil dihapus');
        window.location.href = 'admin.php';
      </script>";
     exit();


close_db($conn);
?>