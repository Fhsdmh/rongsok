<?php
  require 'koneksi.php';
?>
<!doctype html>
<html lang="en">
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
  <body>
    <!-- awal navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #f6f6f6;">
      <div class="container">
        <a class="navbar-brand" href="index.php" style="margin-right: 150px;">
          <img src="images/logonav.svg" alt="logo navbar" width="82" height="47">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active" style="padding-right: 50px;">
              <a class="nav-link" href="index.php" style="color: #0c1e2d;">Beranda</a>
            </li>
            <li class="nav-item active" style="padding-right: 50px;">
              <a class="nav-link" href="index.php#daftarharga" style="color: #0c1e2d;">Daftar Harga</a>
            </li>
            <li class="nav-item active" style="padding-right: 50px;">
              <a class="nav-link" href="index.php#contactus" style="color: #0c1e2d;">Hubungi Kami</a>
            </li>
            <li class="nav-item active"style="padding-right: 50px;">
              <a class="nav-link" href="termsandconditions.php" style="color: #0c1e2d;">Tentang Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <div class="text">
      <nav style="margin-top: 150px;">
        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="padding-left: 10px;border-bottom: 1px solid #e6e8ea;">
          <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="true">Tentang Kami</a>
          <a class="nav-item nav-link" id="nav-tc-tab" data-toggle="tab" href="#nav-tc" role="tab" aria-controls="nav-tc" aria-selected="false">Syarat dan Ketentuan</a>
          <a class="nav-item nav-link" id="nav-pp-tab" data-toggle="tab" href="#nav-pp" role="tab" aria-controls="nav-pp" aria-selected="false">Kebijakan Privasi</a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent" style="text-align: center;">
        <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <p class="h1" style="margin-top: 20px;">Tentang Kami</p>
        </div>
        <div class="tab-pane fade" id="nav-tc" role="tabpanel" aria-labelledby="nav-tc-tab">
          <p class="h1" style="margin-top: 20px;">Syarat dan Ketentuan</p>
          <blockquote class="blockquote">
            <p class="mb-0">mulai dari 1 Februari 2020</p>
          </blockquote>
          <br>
          <p class="h4">Selamat datang di www.rongsok.id</p>
          <ul class="list-unstyled" style="padding: 0px 30px;text-align: justify;">
            <li>Dengan mendaftar dan/atau menggunakan situs www.rongsok.id, maka pengguna dianggap telah membaca, mengerti, memahami dan menyetujui semua isi dalam Syarat & ketentuan. Syarat & ketentuan ini merupakan bentuk kesepakatan yang dituangkan dalam sebuah perjanjian yang sah antara Pengguna dengan Pihak Rongsok. Jika pengguna tidak menyetujui salah satu, sebagian, atau seluruh isi Syarat & ketentuan, maka pengguna tidak diperkenankan menggunakan layanan di www.rongsok.id.</li>
          </ul>
          <ul class="list-unstyled" style="text-align:justify;margin-top: 30px;">
              <ul>
                <li style="font-weight: bold;font-size: 20px;">KETENTUAN UMUM</li>
              </ul>
            </li>
            <li style="padding: 0px 70px;">Ketentuan Penggunaan ini adalah perjanjian antara pengguna (“Anda”) dan Rongsok (“Kami”). Ketentuan Penggunaan ini mengatur akses dan penggunaan Anda atas situs web www.rongsok.id, konten dan produk yang disediakan oleh Kami (selanjutnya, secara bersama-sama disebut sebagai “Sistem”), serta pemesanan, pembayaran atau penggunaan layanan yang tersedia pada Sistem.</li>
          </ul>
          <ul class="list-unstyled" style="text-align:justify;">
              <ul>
                <li style="font-weight: bold;font-size: 20px;">PENGUNAAN SISTEM</li>
              </ul>
            </li>
            <li style="padding: 0px 70px;">Akses dan penggunaan Sistem tunduk pada Ketentuan Penggunaan ini.</li>
            <p></p>
            <li style="padding: 0px 70px;">Anda mempunyai kebebasan penuh untuk memilih menggunakan Sistem atau tidak, atau berhenti menggunakan Sistem.</li>
            <p></p>
            <li style="padding: 0px 70px;">Kami hanya memfasilitasi Anda untuk menemukan berbagai Layanan yang Anda perlukan dengan menyediakan Sistem. Semua Layanan disediakan secara langsung oleh pihak ketiga independen yang setuju menjadi penyedia layanan Kami dengan skema kemitraan.</li>
            <p></p>
            <li style="padding: 0px 70px;">Ketika memesan Layanan, Sistem akan menghubungkan Anda dengan Penyedia Layanan yang tersedia di sekitar lokasi Anda. Dengan demikian, beberapa Layanan tidak dapat digunakan bila Anda tidak mengaktifkan fitur penentuan lokasi.</li>
            <p></p>
            <li style="padding: 0px 70px;">Selanjutnya, jika Penyedia Layanan menerima pesanan Anda, Kami akan menginformasikan status pesanan Anda melalui Sistem.</li>
          </ul>
        </div>
        <div class="tab-pane fade" id="nav-pp" role="tabpanel" aria-labelledby="nav-pp-tab">
          <p class="h1" style="margin-top: 20px;">Kebijakan Privasi</p>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="js/script.js"></script>
  </body>
</html>