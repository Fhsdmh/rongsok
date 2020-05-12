<?php
  require 'koneksi.php';
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
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/sweetalert2.css">
    <script src="js/sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
  <body style="margin-top: 30px;" oncontextmenu="return false;">
    <!-- awal navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #f6f6f6;">
      <div class="container">
        <a class="navbar-brand" href="index.php" style="margin-right: 150px;">
          <img src="images/logorongsokbeta.svg" alt="logo navbar" width="82" height="47">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active" style="padding-right: 50px;">
              <a class="nav-link" href="#home" class="page-scroll" style="color: #0c1e2d;">Beranda</a>
            </li>
            <li class="nav-item active" style="padding-right: 50px;">
              <a class="nav-link" href="#daftarharga" class="page-scroll" style="color: #0c1e2d;">Daftar Harga</a>
            </li>
            <li class="nav-item active" style="padding-right: 50px;">
              <a class="nav-link" href="#contactus" class="page-scroll" style="color: #0c1e2d;">Hubungi Kami</a>
            </li>
            <li class="nav-item active"style="padding-right: 50px;">
              <a class="nav-link" href="termsandconditions.php" class="page-scroll" style="color: #0c1e2d;">Tentang Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

      <!-- awal modal mulai jual -->
      <div class="modal fade bd-example-modal-md" id="login" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title" id="exampleModalCenterTitle">RongsokID</h5>
              <h6 class="modal-title2">Satu akun untuk semua akses</h6>
            </div>

            <div class="modal-body">
              <form action="pass.php" method="post">
                <div class="form-group">
                  <label for="no_telepon">No. Telepon</label>
                  <input type="text" id="no_telepon" class="form-control" placeholder="Masukkan no. telepon Anda" onkeypress="return angka(event)" name="no_telepon" required oninvalid="this.setCustomValidity('Minimal no. telepon 10 digit')" oninput="setCustomValidity('')" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" minlength="10" maxlength = "12" style="margin-bottom: 5px;">
                  <label for="password">Password</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input" onclick="tampilpassword1()">
                      </div>
                    </div>
                    <input type="password" class="form-control" id="password2" name="password" placeholder="Masukkan Password Anda" required oninvalid="this.setCustomValidity('Password minimal 8 digit dan wajib terdiri dari huruf besar, huruf kecil, angka!')" oninput="setCustomValidity('')" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8">
                  </div>
                </div>
                <div class="forgot text-center">
                      <p>Belum punya akun? <button class="btn btn-link" type="button" data-toggle="modal" data-dismiss="modal" data-target="#register">Daftar</button></p>
                    </div>
                </div>
                <div class="modal-body2">
                  <button type="submit" class="btn" id="lanjutkan" name="lanjutkan">LANJUTKAN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir modal mulai jual -->

      <!-- awal modal masuk password -->
      <div class="modal fade bd-example-modal-md" id="masukpassword" tabindex="-1" role="dialog" aria-labelledby="masukpassword" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title" id="exampleModalCenterTitle">RongsokID</h5>
              <h6 class="modal-title2">Satu akun untuk semua akses</h6>
            </div>

            <div class="modal-body">
              <form action="pass.php" method="post">
                <div class="form-group">
                  <label for="password">Password</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input" onclick="tampilpassword1()">
                      </div>
                    </div>
                    <input type="password" class="form-control" id="password2" name="password" placeholder="Masukkan Password Anda" required oninvalid="this.setCustomValidity('Password minimal 8 digit dan wajib terdiri dari huruf besar, huruf kecil, angka!')" oninput="setCustomValidity('')" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8">
                  </div>
                  <small id="passwordhelp" class="form-text text-muted">Password minimal 8 digit dan wajib terdiri dari huruf besar, huruf kecil, angka</small>
                </div>

                <div class="modal-body2">
                  <button type="submit" class="btn" id="lanjutkan1" name="lanjutkan1">LANJUTKAN</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir modal masuk password -->

      <!-- modal register -->
    <div class="modal fade bd-example-modal-md" id="register" tabindex="-1" role="dialog" aria-labelledby="register" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title" id="exampleModalCenterTitle">RongsokID</h5>
              <h6 class="modal-title2">Satu akun untuk semua akses</h6>
            </div>

          <div class="modal-body" style="margin-top: 0px;">
            <form action="register.php" method="POST" onsubmit="return validate();">
                <div class="form-group">
                  <p style="font-weight: normal;">Silahkan lengkapi form di bawah ini untuk melanjutkan</p>
                  <label for="nama lengkap">Nama Lengkap</label>
                  <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama lengkap Anda" required oninvalid="this.setCustomValidity('Nama lengkap hanya bisa diisi oleh huruf!')" oninput="setCustomValidity('')" pattern="[A-Za-z ]+">
                </div>

                <div class="form-group">
                  <label for="no telepon">No. Telepon</label>
                  <input type="text" id="no_telepon" class="form-control" onkeypress="return angka(event)" name="no_telepon" placeholder="Masukkan No. telepon Anda" required oninvalid="this.setCustomValidity('Minimal no. telepon 10 digit')" oninput="setCustomValidity('')" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" minlength="10" maxlength = "12">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Anda" required oninvalid="this.setCustomValidity('Mohon masukkan Email Anda!')" oninput="setCustomValidity('')">
                  <small id="emailhelp" class="form-text text-muted">Masukkan Email dengan benar dan sertakan @ (contoh@example.com)</small>
                </div>

                <div class="form-group">
                  <label for="alamat lengkap">Alamat lengkap</label>
                  <textarea class="form-control" id="alamat_lengkap" name="alamat_lengkap" placeholder="Masukkan Alamat lengkap Anda" required oninvalid="this.setCustomValidity('Mohon masukkan Alamat lengkap Anda!')" oninput="setCustomValidity('')"></textarea>
                  <small id="alamathelp" class="form-text text-muted">Mohon sertakan juga RT/RW Anda</small>
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input" onclick="tampilpassword()">
                      </div>
                    </div>
                    <input type="password" class="form-control" id="password1" name="password" placeholder="Masukkan Password Anda" required oninvalid="this.setCustomValidity('Password minimal 8 digit dan wajib terdiri dari huruf besar, huruf kecil, angka!')" oninput="setCustomValidity('')" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8">
                  </div>
                  <small id="passwordhelp" class="form-text text-muted">Password minimal 8 digit dan wajib terdiri dari huruf besar, huruf kecil, angka</small>
                </div>

                <div class="form-group">
                  <label for="konfirmasi password">Konfirmasi Password</label>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <input type="checkbox" aria-label="Checkbox for following text input" onclick="tampilkonfirmasipassword()">
                      </div>
                    </div>
                    <input type="password" class="form-control" id="konfirmasi_password" name="konfirmasi_password" placeholder="Konfirmasi ulang Password Anda" required oninvalid="this.setCustomValidity('Password dan konfirmasi password tidak sama!')" oninput="setCustomValidity('')" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" minlength="8">
                  </div>
                </div>

                <div class="modal-body2">
                  <p style="margin-bottom: 0px;">Dengan klik lanjutkan, Anda menyetujui</p>
                  <p style="margin-bottom: 20px;"><a href="termsandconditions.php">Syarat dan Ketentuan</a> yang telah ditentukan oleh <img src="images/katarongsokkecil9.jpg" style="vertical-align: sub;"></a></p>
                  <button type="submit" class="btn" value="submit" name="register">LANJUTKAN</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir modal register -->


    <!-- awal jumbotron -->
    <section class="jumbotron" id="jumbotron">
    <div class="container">
    <div class="row">
      <div class="col-sm-8">
      <h1>Jual barang bekas</h1>
      <h1>lebih berkelas</h1>
      <h1>di mana pun</h1>
      <h1 style="margin-bottom: 14px;">kapan pun.</h1>
      <p><img src="images/katarongsokkecil9.jpg"> merupakan platform yang menyediakan sarana</p>
      <p style="margin-bottom: 25px;">untuk memudahkan kamu dalam menjual barang bekas (rongsok)</p>
      <button type="button" class="btn" data-toggle="modal" data-target="#login" style="font-weight: bold;">Mulai Jual</button>
    </div>

      <div class="col-sm-4">
        <img src="images/animasijumbotron.svg" alt="animasi jumbo tron">
      </div>
    </div>
    </div>
    </section>
    <!-- akhir jumbotron -->


    <!-- awal daftar harga -->
    <section class="daftarharga" id="daftarharga">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h5>Daftar Harga</h5>
          </div>

          <div class="col-sm-3 thumbnail">
            <img src="images/pricelist1.svg" alt="gambar pricelist 1">
            <p style="margin-top: 10px;margin-bottom: 0px;padding-right: 62px;">Plastik</p>
            <p style="padding-right: 65px;">(botol, gelas)</p>
          </div>

          <div class="col-sm-3 thumbnail">
            <img src="images/pricelist2.svg" alt="gambar pricelist 2">
            <p style="margin-bottom: 0px;margin-top: 21px;padding-right: 75px;">Bahan Besi</p>
            <p style="padding-right: 75px;">(setrika, tiang)</p>
          </div>

          <div class="col-sm-3 thumbnail">
            <img src="images/pricelist3.svg" alt="gambar pricelist 3">
            <p style="margin-bottom: 0px;margin-top: 16px;padding-right: 80px;">Bahan Kertas HVS</p>
            <p style="padding-right: 77px;">(buku, laporan)</p>
          </div>

          <div class="col-sm-3 thumbnail">
            <img src="images/pricelist4.svg" alt="gambar pricelist 4">
            <p style="margin-bottom: 0px;margin-top: 7px;padding-right: 65px;">Kertas lain</p>
            <p style="padding-right: 60px;">(kardus, sampul buku)</p>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir Daftar Harga -->

    <!-- awal Hubungi Kami -->
    <section class="contactus" id="contactus">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2>Hubungi Kami</h2>
            <hr>
            <p>Email : rongsok.ind@gmail.com</p>
          </div>

          <div class="col-sm-12">
            <a href="https://www.facebook.com/rongsok.ind.9" target="_blank">
              <img src="images/facebook.svg" alt="icon fb">
            </a>
            <a href="https://www.instagram.com/rongsok.ind/?hl=id" target="_blank">
              <img src="images/instagram.svg" alt="icon ig">
            </a>
            <a href="http://line.me/ti/p/~rongs-ok" target="_blank">
              <img src="images/line.svg" alt="icon line">
            </a>
            <a href="https://www.twitter.com" target="_blank">
              <img src="images/twitter.svg" alt="icon twitter">
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir Hubungi Kami -->

    <!-- awal footer -->
    <section class="footer" id="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <img src="images/logofooter.svg" alt="logo footer">
            <p style="margin-bottom: 0px;">Copyright &copy; 2020 <img src="images/katarongsokkecil10.jpg" style="margin-top: 20px;"></p>
            <p>All right reserved</p>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir footer -->



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

      if(window.location.href.indexOf('#passsalah') != -1) {
        swal("Password yang Anda masukkan salah!", "Silahkan klik OK untuk kembali ke halaman login", "error", {

  }).then(function() {
    $('#login').modal('show');
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
    $('#login').modal('show');
});
    }
  });
    </script>
    <script>
      $(document).ready(function() {

      if(window.location.href.indexOf('#belumlogin') != -1) {
        swal("Anda belum melakukan login!", "Silahkan klik OK untuk melanjutkan", "error", {

  }).then(function() {
    $('#login').modal('show');
});
    }
  });
    </script>
  </body>
</html>