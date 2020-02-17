<?php
  require 'koneksi.php'; 
  ?>

<?php
  $conn = open_db();


if( isset($_POST["lanjutkan"]) )
{

  $no_telepon = $_POST["no_telepon"];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $sql = "SELECT * from user where no_telepon = '".$no_telepon."'";
  $data = mysqli_query($conn,$sql);
  $numrows = mysqli_num_rows($data);
  
  if($numrows  == 1){
    $row = mysqli_fetch_assoc($data);
    if(password_verify($password,$row['password'])){
      echo "oke";
    }
    else{
      echo "$password";
    }
  }
  else{
    echo "gagal";
  }
}

?>