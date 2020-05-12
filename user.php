<?php
  require 'koneksi.php';
  session_start();
  if(isset($_SESSION['level']))
    {
    }
    else
    {
        header("location:index.php#belumlogin");
    }
    $conn = open_db();
    $sql = "SELECT * FROM user";                                               
    $query = mysqli_query($conn, $sql);                                            
    while ($data = mysqli_fetch_assoc($query))
    {
      $id = $data['id'];
    }
    close_db($conn);

    $conn = open_db();
    $query_edit = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'")or die(mysql_error());
    while ($data = mysqli_fetch_array($query_edit)){
      $saldo = $data['saldo'];
      $saldo = number_format($saldo,0,'.',',');
?>
<!doctype html>
<html lang="en" id="home">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/favicon.ico">
    <link href="css/style-user.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/sweetalert2.css">
    <script src="js/sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

    <title>Rongs-ok</title>
  </head>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/5e14aac027773e0d832c4f65/default';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->
  <body>
    <div class="d-flex" id="wrapper">
      <!-- awal Sidebar -->
      <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><img src="images/logorongsokbeta.svg" alt="logo navbar" width="82" height="47"></div>
        <div class="row">
          <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-order-list" data-toggle="list" href="#list-order" role="tab" aria-controls="home">Order</a>
              <a class="list-group-item list-group-item-action" id="list-harga-list" data-toggle="list" href="#list-harga" role="tab" aria-controls="harga">Harga</a>
              <a class="list-group-item list-group-item-action" id="list-transaksi-list" data-toggle="list" href="#list-transaksi" role="tab" aria-controls="transaksi">Transaksi</a>
              <a class="list-group-item list-group-item-action" id="list-profil-list" data-toggle="list" href="#list-profil" role="tab" aria-controls="profil">Profil</a>
              <a class="list-group-item list-group-item-action" href="logout.php">Keluar</a>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir sidebar  -->

      <!-- awal konten -->
      <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom d-block">
          <button class="btn btn-link" id="menu-toggle"><img src="images/menuopen.svg" alt="logo menu"></button>
          <h5 class="d-block float-right mb-0" style="padding: inherit;">Saldo Anda : Rp. <?php echo $saldo;?></h5>
          <?php
          }
          close_db($conn);
          ?>
        </nav>
          <div class="col-12">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="list-order" role="tabpanel" aria-labelledby="list-order-list">
                belum ada
              </div>
              <div class="tab-pane fade" id="list-harga" role="tabpanel" aria-labelledby="list-harga-list">awf</div>
              <div class="tab-pane fade" id="list-transaksi" role="tabpanel" aria-labelledby="list-transaksi-list">...</div>
              <div class="tab-pane fade" id="list-profil" role="tabpanel" aria-labelledby="list-profil-list">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="card mt-3">
                      <div class="card-header text-center font-weight-bold text-white">
                        PROFIL
                      </div>
                      <div class="card-body">
                        <?php
                        $conn = open_db();
                        $query_edit = mysqli_query($conn, "SELECT * FROM user WHERE id='$id'")or die(mysql_error());
                        while ($data = mysqli_fetch_array($query_edit)){
                        ?>
                        <form action="ubahdatauser.php" method="POST">
                          <input type="hidden" name="id" value = "<?php echo $id;?>">
                          <div class="form-group">
                            <label for="nama lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $data['nama_lengkap'];?>" required oninvalid="this.setCustomValidity('Nama lengkap hanya bisa diisi oleh huruf!')" oninput="setCustomValidity('')" pattern="[A-Za-z ]+">
                          </div>

                          <div class="form-group">
                            <label for="no telepon">No. Telepon</label>
                            <input type="text" id="no_telepon" class="form-control" onkeypress="return angka(event)" name="no_telepon" value="<?php echo $data['no_telepon'];?>" required oninvalid="this.setCustomValidity('Minimal no. telepon 10 digit')" oninput="setCustomValidity('')" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" minlength="10" maxlength = "12">
                          </div>

                          <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['email'];?>" required oninvalid="this.setCustomValidity('Mohon masukkan Email Anda!')" oninput="setCustomValidity('')">
                          </div>

                          <div class="form-group">
                            <label for="alamat lengkap">Alamat lengkap</label>
                            <textarea class="form-control" id="alamat_lengkap" name="alamat_lengkap" required oninvalid="this.setCustomValidity('Mohon masukkan Alamat lengkap Anda!')" oninput="setCustomValidity('')"><?php echo $data['alamat_lengkap'];?></textarea>
                          </div>
                          <div class="modal-footer border-top-0 d-block text-center">  
                            <button type="submit" class="btn btn-primary" value="submit" name="edit-data-user">UBAH DATA</button>
                          </div>
                          <?php 
                          }
                          close_db($conn);
                          ?>    
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  <!-- akhir konten -->
    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
    <script type="text/javascript">
      function angka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
      if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
      return true;
      }
    </script>
    <script>
      $(document).ready(function() {

      if(window.location.href.indexOf('#register') != -1) {
        $('#register').modal('show');
    }
  });
    </script>
    <script>
      $(document).ready(function() {

      if(window.location.href.indexOf('#sudahregister') != -1) {
        swal("Anda telah terdaftar sebelumnya!", "Silahkan klik OK untuk kembali ke halaman login", "info", {

  }).then(function() {
    $('#login').modal('show');
});
    }
  });
    </script>
    <script>
      $(document).ready(function() {

      if(window.location.href.indexOf('#login') != -1) {
        swal("No. telepon Anda telah terdaftar sebelumnya", "Klik OK untuk melanjutkan", "success", {

  }).then(function() {
    $('#masukpassword').modal('show');
});
    }
  });
    </script>
    <script>
      function tampilpassword() {
      var x = document.getElementById("password1");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
    <script>
      function tampilkonfirmasipassword() {
      var x = document.getElementById("konfirmasi_password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
    <script>
      function tampilpassword1() {
      var x = document.getElementById("password2");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
    <script>
        function validate(){

            var a = document.getElementById("password1").value;
            var b = document.getElementById("konfirmasi_password").value;
            if (a!=b) {
               alert("Password dan konfirmasi password tidak sesuai!");
               return false;
            }
        }
     </script>
     <script>
       function checkLetter()
        {
            var validasiHuruf = /^[a-zA-Z ]+$/;
            var namalengkap = document.getElementById("nama_lengkap");
            
            if (namalengkap.value.match(validasiHuruf)) {
            } else {
                alert("Nama lengkap hanya bisa diisi oleh huruf!"); 
            }
        }
     </script>
     <script>
       document.onkeydown = function(e) {
  if(event.keyCode == 123) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
     return false;
  }
  if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
     return false;
  }
}
     </script>
     <script>
        $('.navbar-collapse a').click(function(){
            $(".navbar-collapse").collapse('hide');
        });
    </script>
    <script>
      $(document).ready(function() {

      if(window.location.href.indexOf('#sudahdaftar') != -1) {
        swal("Terima kasih telah mendaftar", "Klik OK untuk melanjutkan", "success", {

  }).then(function() {
    window.location='order.php';
});
    }
  });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

  <script>
      $(document).ready(function() {

      if(window.location.href.indexOf('#ubahdata') != -1) {
        swal("Ubah data berhasil!", "Silahkan klik OK untuk melanjutkan", "success", {
  
  }).then(function() {
    window.location='user.php';
});
    }
  });
    </script>
  </body>
</html>