<?php
  require 'koneksi.php'; 
  ?>

<?php
  $conn = open_db();


if( isset($_POST["lanjutkan"]) )
{  

  $no_telepon = $_POST["no_telepon"];
  $password = $_POST['password'];

  $sql = "SELECT * from user where no_telepon = '".$no_telepon."'";
  $data = mysqli_query($conn,$sql);
  $numrows = mysqli_num_rows($data);
  
  if($numrows == 1){
    $row = mysqli_fetch_assoc($data);
    if(password_verify($password, $row['password'])){
      echo "<script type='text/javascript'>
        window.location='user.php';
    </script>";
    exit;
    }
    else{
      echo "gagal";
    }
  }
  else{
    echo "as";
  }
}

?>