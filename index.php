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
  <body style="margin-top: 30px;">
    <!-- awal navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #f6f6f6;">
      <div class="container">
        <a class="navbar-brand" href="#home" style="margin-right: 150px;">
          <img src="images/logonav.svg" alt="logo navbar" width="82" height="47">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active" style="padding-right: 50px;">
              <a class="nav-link" href="#home" style="color: #0c1e2d;">Beranda</a>
            </li>
            <li class="nav-item active" style="padding-right: 50px;">
              <a class="nav-link" href="#daftarharga" style="color: #0c1e2d;">Daftar Harga</a>
            </li>
            <li class="nav-item active" style="padding-right: 50px;">
              <a class="nav-link" href="#contactus" style="color: #0c1e2d;">Hubungi Kami</a>
            </li>
            <li class="nav-item active"style="padding-right: 50px;">
              <a class="nav-link" href="" style="color: #0c1e2d;">Tentang</a>
            </li>
          </ul>
            <button type="button" class="btn mr-3" data-toggle="modal" data-target="#exampleModalCenter">Masuk</button>
            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter3">Daftar</button>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- awal trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalCenterTitle">RongsokID</h5>
            <h6 class="modal-title2">Satu akun untuk semua akses</h6>
          </div>
          <div class="modal-body">
            <form>
              <div class="form-group">
                <label for="formGroupExampleInput1">Email</label>
                <input type="email" class="form-control" placeholder="Masukkan Email" required oninvalid="this.setCustomValidity('Mohon masukkan Email Anda!')" oninput="setCustomValidity('')">
                <small id="emailHelp" class="form-text text-muted">Masukkan Email dengan benar dan sertakan @ (contoh@example.com)</small>
              </div>

              <div class="form-group">
                <label for="formGroupExampleInput2">Password</label>
                <input type="password" class="form-control" placeholder="Masukkan Password Anda" required oninvalid="this.setCustomValidity('Mohon masukkan Password Anda!')" oninput="setCustomValidity('')">
              </div>

              <div class="modal-body2">
                <button type="submit" class="btn">MASUK</button>
              </div>
            </form>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#exampleModalCenter2" aria-hidden="true">Lupa Password?</button>
          </div>
          <p>Belum memiliki akun? <button type="button" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#exampleModalCenter3" aria-hidden="true">Daftar</button></p>
        </div>
      </div>
    </div>
    <!-- akhir trigger modal -->

    <!-- modal lupa password -->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalCenterTitle">RongsokID</h5>
            <h6 class="modal-title2">Satu akun untuk semua akses</h6>
          </div>

          <div class="modal-body">
            <form>
              <div class="form-group">
                <p>Lupa Password?</p>
                <p style="font-weight: normal;">Untuk mendapatkan password baru, masukkan email yang Anda gunakan saat pendaftaran akun Rongsok</p>
                <label for="formGroupExampleInput3">Email</label>
                <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Email Anda" required oninvalid="this.setCustomValidity('Mohon masukkan Email Anda!')" oninput="setCustomValidity('')">
                <small id="emailHelp" class="form-text text-muted">Masukkan Email dengan benar dan sertakan @ (contoh@example.com)</small>
              </div>

              <div class="modal-body2">
                <button type="submit" class="btn">GANTI PASSWORD</button>
              </div>
            </form>
          </div>

          <div class="modal-footer">
            <p>Belum memiliki akun? <button type="button" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#exampleModalCenter3" aria-hidden="true">Daftar</button></p>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir modal lupa password -->

    <!-- awal modal daftar -->
      <div class="modal fade bd-example-modal-md" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle3" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title" id="exampleModalCenterTitle">RongsokID</h5>
              <h6 class="modal-title2">Satu akun untuk semua akses</h6>
            </div>

            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput4">Nama Lengkap</label>
                  <input type="text" class="form-control" placeholder="Masukkan Nama lengkap Anda" required oninvalid="this.setCustomValidity('Mohon masukkan Nama lengkap Anda!')" oninput="setCustomValidity('')">
                </div>

                <div class="form-group">
                  <label for="formGroupExampleInput5">No. Telepon</label>
                  <input type="number" class="form-control" placeholder="Masukkan No. telepon Anda" required oninvalid="this.setCustomValidity('Mohon masukkan No. telepon Anda!')" oninput="setCustomValidity('')">
                </div>

                <div class="form-group">
                  <label for="formGroupExampleInput6">Email</label>
                  <input type="email" class="form-control" placeholder="Masukkan Email Anda" required oninvalid="this.setCustomValidity('Mohon masukkan Email Anda!')" oninput="setCustomValidity('')">
                  <small id="emailHelp" class="form-text text-muted">Kami tidak akan memberi tahu siapapun tentang Email Anda</small>
                </div>

                <div class="form-group">
                  <label for="formGroupExampleInput7">Alamat lengkap</label>
                  <textarea class="form-control" placeholder="Masukkan Alamat lengkap Anda" required oninvalid="this.setCustomValidity('Mohon masukkan Alamat lengkap Anda!')" oninput="setCustomValidity('')"></textarea>
                  <small id="emailHelp" class="form-text text-muted">Mohon sertakan juga RT/RW Anda</small>
                </div>

                <div class="form-group">
                  <label for="formGroupExampleInput8">Password</label>
                  <input type="password" class="form-control" placeholder="Masukkan Password Anda" required oninvalid="this.setCustomValidity('Mohon masukkan Password Anda!')" oninput="setCustomValidity('')">
                  <small id="emailHelp" class="form-text text-muted">Gunakan password yang kuat, minimal 1-8 karakter dan sertakan angka</small>
                </div>

                <div class="form-group">
                  <label for="formGroupExampleInput9">Konfirmasi Password</label>
                  <input type="password" class="form-control" placeholder="Konfirmasi ulang Password Anda" required oninvalid="this.setCustomValidity('Mohon masukkan ulang Password Anda!')" oninput="setCustomValidity('')">
                </div>

                <div class="modal-body2">
                  <p style="margin-bottom: 0px;">Dengan klik daftar, kamu menyetujui</p>
                  <p style="margin-bottom: 20px;"><a href="index.php">Syarat dan Ketentuan</a> yang telah ditentukan oleh <a href="index.php"><img src="images/katarongsokkecil9.jpg" style="vertical-align: sub;"></a></p>
                  <button type="submit" class="btn">DAFTAR</button>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <p>Sudah memiliki akun? <button type="button" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#exampleModalCenter" aria-hidden="true">Masuk</button></p>
            </div>
          </div>
        </div>
      </div>
      <!-- akhir modal daftar -->


      <!-- awal modal mulai jual -->
      <div class="modal fade bd-example-modal-md" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle4" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-scrollable" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
              <h5 class="modal-title" id="exampleModalCenterTitle">RongsokID</h5>
              <h6 class="modal-title2">Satu akun untuk semua akses</h6>
            </div>

            <div class="modal-body">
              <form>
                <div class="form-group">
                  <label for="formGroupExampleInput10">Nama Lengkap</label>
                  <input type="text" class="form-control" placeholder="Masukkan Nama lengkap Anda" required oninvalid="this.setCustomValidity('Mohon masukkan Nama lengkap Anda!')" oninput="setCustomValidity('')">
                </div>

                <div class="form-group">
                  <label for="formGroupExampleInput11">No. Telepon</label>
                  <input type="number" class="form-control" placeholder="Masukkan No. telepon Anda" required oninvalid="this.setCustomValidity('Mohon masukkan No. telepon Anda!')" oninput="setCustomValidity('')">
                </div>

                <div class="form-group">
                  <label for="formGroupExampleInput12">Email</label>
                  <input type="email" class="form-control" placeholder="Masukkan Email Anda" required oninvalid="this.setCustomValidity('Mohon masukkan Email Anda!')" oninput="setCustomValidity('')">
                  <small id="emailHelp" class="form-text text-muted">Kami tidak akan memberi tahu siapapun tentang Email Anda</small>
                </div>

                <div class="form-group">
                  <label for="formGroupExampleInput13">Alamat lengkap</label>
                  <textarea class="form-control" placeholder="Masukkan Alamat lengkap Anda" required oninvalid="this.setCustomValidity('Mohon masukkan Alamat lengkap Anda!')" oninput="setCustomValidity('')"></textarea>
                  <small id="emailHelp" class="form-text text-muted">Mohon sertakan juga RT/RW Anda</small>
                </div>

                <div class="form-group">
                  <label for="formGroupExampleInput14">Jenis barang bekas</label>
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

                  <label for="formGroupExampleInput15">Upload foto barang bekas</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" required oninvalid="this.setCustomValidity('Mohon upload foto barang bekas Anda!')" oninput="setCustomValidity('')">
                    <label class="custom-file-label" for="inputGroupFile01">Upload foto barang bekas Anda</label>
                  </div>
                  <small id="emailHelp" class="form-text text-muted">Maksimal file gambar sebesar 3 MB</small>
                </div>

                <div class="modal-body2">
                  <p style="margin-bottom: 0px;">Dengan klik Jemput, kamu menyetujui</p>
                  <p style="margin-bottom: 20px;"><a href="index.php">Syarat dan Ketentuan</a> yang telah ditentukan oleh <a href="index.php"><img src="images/katarongsokkecil9.jpg" style="vertical-align: sub;"></a></p>
                  <button type="submit" class="btn">JEMPUT</button>
                </div>
              </form>
            </div>
            <div class="modal-footer" style="padding-bottom: 0px;">
              <p>Sudah memiliki akun? <button type="button" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#exampleModalCenter" aria-hidden="true">Masuk</button></p>
            </div>
            <p>Belum memiliki akun? <button type="button" class="btn btn-link" data-dismiss="modal" data-toggle="modal" data-target="#exampleModalCenter3" aria-hidden="true">Daftar</button></p>
          </div>
        </div>
      </div>
      <!-- akhir modal mulai jual -->


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
      <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter4">Mulai Jual</button>
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

          <div class="col-sm-3">
            <img src="images/pricelist1.svg" alt="gambar pricelist 1">
            <p style="margin-top: 10px;margin-bottom: 0px;padding-right: 62px;">Plastik</p>
            <p style="padding-right: 65px;">(botol, gelas)</p>
          </div>

          <div class="col-sm-3">
            <img src="images/pricelist2.svg" alt="gambar pricelist 2">
            <p style="margin-bottom: 0px;margin-top: 21px;padding-right: 75px;">Bahan Besi</p>
            <p style="padding-right: 75px;">(setrika, tiang)</p>
          </div>

          <div class="col-sm-3">
            <img src="images/pricelist3.svg" alt="gambar pricelist 3">
            <p style="margin-bottom: 0px;margin-top: 16px;padding-right: 80px;">Bahan Kertas HVS</p>
            <p style="padding-right: 77px;">(buku, laporan)</p>
          </div>

          <div class="col-sm-3">
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
  </body>
</html>