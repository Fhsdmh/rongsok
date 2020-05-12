<?php
  require 'koneksi.php'; ?>
  <script src="js/sweetalert2.all.min.js"></script>

<?php
  $conn = open_db();

  $id = $_POST['id'];
  $nama_lengkap = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
  $no_telepon = mysqli_real_escape_string($conn, $_POST['no_telepon']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $alamat_lengkap = mysqli_real_escape_string($conn, $_POST['alamat_lengkap']);
  $saldo = mysqli_real_escape_string($conn, $_POST['saldo']);

  $nama_lengkap = htmlspecialchars($nama_lengkap, ENT_QUOTES);
  $email = htmlspecialchars($email, ENT_QUOTES);
  $alamat_lengkap = htmlspecialchars($alamat_lengkap, ENT_QUOTES);
  $saldo = str_replace( ',', '', $saldo);

  date_default_timezone_set('Asia/Jakarta');
  $created_at = date("Y-m-d H:i:s");

  $sql = "SELECT no_telepon FROM user WHERE no_telepon='$no_telepon'";
  $results = $conn->query($sql);

  mysqli_query($conn, "UPDATE user SET nama_lengkap='$nama_lengkap', no_telepon='$no_telepon', email='$email', alamat_lengkap='$alamat_lengkap', saldo='$saldo' WHERE id='$id'");


$results = $conn->query($sql);

close_db($conn);

header( 'Location: admin.php#ubahdata' );

  ?>