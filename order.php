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

  <div class="container" style="max-width: 600px;">
     <div class="modal-content">
      <div class="modal-body" style="margin-top: 0px;">
        <a class="navbar-brand" href="index.php" style="margin: auto;display: block;">
          <img src="images/logorongsokbeta.svg" alt="logo navbar" width="82" height="47">
        </a>
        <h2 class="modal-title" style="color: #0c1e2d;text-align: center;">Form Order</h2>
        <form action="" method="POST" onsubmit="return validate();" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email Anda" required oninvalid="this.setCustomValidity('Mohon masukkan Email Anda!')" oninput="setCustomValidity('')">
              <small id="emailhelp" class="form-text text-muted">Masukkan Email dengan benar dan sertakan @ (contoh@example.com)</small>
            </div>
            <label for="jenis">Jenis barang bekas</label>
            <div class="input-group mb-3">
              <select class="custom-select" id="inputGroupSelect01" required oninvalid="this.setCustomValidity('Mohon pilih Jenis barang bekas Anda!')" oninput="setCustomValidity('')">
              <option value="" disable selected>Pilih jenis barang bekas Anda</option>
              <option value="1">Bahan plastik</option>
              <option value="2">Bahan besi</option>
              <option value="3">Kertas HVS</option>
              <option value="4">Kertas lainnya</option>
              <option value="5">Campuran</option>
              <option value="6">Lainnya</option>
              </select>
            </div>

                  <label for="upload">Upload foto barang bekas</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required oninvalid="this.setCustomValidity('Mohon upload foto barang bekas Anda!')" oninput="setCustomValidity('')">
                    <label class="custom-file-label" for="inputGroupFile01">Upload foto barang bekas Anda</label>
                  </div>
                  <small id="emailHelp" class="form-text text-muted">Maksimal file gambar sebesar 3 MB</small>
                </div>
              <div class="modal-body2">
                <p style="margin-bottom: 0px;font-weight: normal;">Dengan klik lanjutkan, Anda menyetujui</p>
                <p style="margin-bottom: 20px;font-weight: normal;"><a href="termsandconditions.php">Syarat dan Ketentuan</a> yang telah ditentukan oleh <img src="images/katarongsokkecil9.jpg" style="vertical-align: sub;"></a></p>
                <button type="submit" class="btn" value="submit" name="register">LANJUTKAN</button>
              </div>
          </form>
      </div>
    </div>
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
    <script>
      $(document).ready(function() {

      if(window.location.href.indexOf('#login') != -1) {
      swal("No. telepon Anda telah terdaftar sebelumnya!", "klik OK untuk melanjutkan", "success", {
});
    }
  });
    </script>
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
  </body>
</html>