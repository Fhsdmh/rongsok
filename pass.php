<?php
  require 'koneksi.php'; ?>

<?php
  $conn = open_db();


  if( isset($_POST["lanjutkan1"]) ){

  $password = $_POST["password"];

  $data = mysqli_query($conn, "SELECT * FROM user WHERE password = '$password'");


  if( mysqli_num_rows($data) == 1){
  	echo "<script type='text/javascript'>
  			window.location='order.php';
		</script>";
  	exit;

  } else{
  	echo "<script type='text/javascript'>
  			alert('gagal')
		</script>";
    exit;
  }

}

close_db($conn);

  ?>