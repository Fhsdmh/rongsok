<?php
  require 'koneksi.php'; ?>
  <script src="js/sweetalert2.all.min.js"></script>

<?php
  $conn = open_db();


  if( isset($_POST["lanjutkan1"]) ){

  $no_telepon = $_POST["no_telepon"];

  $hasil = mysqli_query($conn, "SELECT * FROM user WHERE no_telepon = '$no_telepon'");


  if( mysqli_num_rows($hasil) == 1){
  	echo "<script type='text/javascript'>
  			window.location='index.php#login';
		</script>";
  	exit;

  } else{
  	echo "<script type='text/javascript'>
  			window.location='index.php#register';
		</script>";
  }

}

close_db($conn);

  ?>