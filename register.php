<?php
  require 'koneksi.php'; ?>
  <script src="js/sweetalert2.all.min.js"></script>

<?php
  $conn = open_db();


  if( isset($_POST["register"]) ){

  $nama_lengkap = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
  $no_telepon = mysqli_real_escape_string($conn, $_POST['no_telepon']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $alamat_lengkap = mysqli_real_escape_string($conn, $_POST['alamat_lengkap']);
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $konfirmasi_password = password_hash($_POST['konfirmasi_password'], PASSWORD_DEFAULT);

  $nama_lengkap = htmlspecialchars($nama_lengkap, ENT_QUOTES);
  $email = htmlspecialchars($email, ENT_QUOTES);
  $alamat_lengkap = htmlspecialchars($alamat_lengkap, ENT_QUOTES);

  date_default_timezone_set('Asia/Jakarta');
  $created_at = date("Y-m-d H:i:s");

  $sql = "SELECT no_telepon FROM user WHERE no_telepon='$no_telepon'";
  $results = $conn->query($sql);

if($results->num_rows == 0)
{
  $sql = "INSERT INTO user (created_at, nama_lengkap, no_telepon, email, alamat_lengkap, password, konfirmasi_password) VALUES ('$created_at','$nama_lengkap','$no_telepon','$email','$alamat_lengkap','$password','$konfirmasi_password')";
} else{
  echo 
  "<script type='text/javascript'>
        window.location='index.php#sudahregister';
    </script>";
}


}
$results = $conn->query($sql);

close_db($conn);

  ?>