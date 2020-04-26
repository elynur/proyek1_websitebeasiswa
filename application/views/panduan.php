<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Beasiswa Bidiksiba</title>

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url() ?>assets/css/sb-admin.css" rel="stylesheet">
</head>
<style>
  .carousel-item {
    height: 80vh;
    min-height: 350px;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }
  .carousel-inner > .item > img,.carousel-inner > .item > img { 
    width: 80%; 
    height: 60%; 
    margin: auto;
  }
    .grid-container {
      display: grid;
      grid-template-columns: auto auto;
      background-color: white;
      padding: 10px;
  }
  .grid-item {
      background-color: white;
      border: ;
      padding: 20px;
      font-size: 30px;
      text-align: center;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
  <div class="container">
    <a class="navbar-brand" href="welcome" style="font-size: 20px">BEASISWA PENDIDIKAN BUKIT ASAM</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="home" style="width: 50px; font-size: 14px;">Home
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="about" style="width: 100px; font-size: 14px;">Tentang Kami</a>
          <span class="sr-only">(current)</span>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="panduan" style="width: 60px; font-size: 14px;">Panduan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login" style="width: 50px; font-size: 14px;">Login</a>
        </li>
      </ul>
    </div>
    <!--  kotak pencarian -->
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary" type="button">Search</button>
        </div>
      </div>

  </div>
</nav>
<header>
  <div class="container">
  <br>
  <div id="WJSlider" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#WJSlider" data-slide-to="0" class="active"></li>
      <li data-target="#WJSlider" data-slide-to="1"></li>
      <li data-target="#WJSlider" data-slide-to="2"></li>
      <li data-target="#WJSlider" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="https://awsimages.detik.net.id/visual/2019/04/24/94c05e5a-3d1d-4dad-a45a-4981c52891bf.jpeg?w=650" alt="slide1" width="460" height="345">
        <div class="carousel-caption">
          <h3>Judul Gambar 1</h3>
          <p>Ini adalah deskripsi singkat dari judul gambar yang pertama.</p>
        </div>
      </div>

      <div class="item">
        <img src="http://2.bp.blogspot.com/-ALtD6Bm6UMs/VqoxO7UHsUI/AAAAAAAAAVQ/uBjZO0kMhUM/s1600/WJslider2.jpg" alt="slide2" width="460" height="345">
        <div class="carousel-caption">
          <h3>Judul Gambar 2</h3>
          <p>Ini adalah deskripsi singkat dari judul gambar yang ke dua.</p>
        </div>
      </div>
  
      <div class="item">
        <img src="https://1.bp.blogspot.com/-p21ay8Fj1hI/VqoxQNDBq2I/AAAAAAAAAVY/WbR_j-6wsMA/s1600/WJslider3.jpg" alt="slide3" width="460" height="345">
        <div class="carousel-caption">
          <h3>Judul Gambar 3</h3>
          <p>Ini adalah deskripsi singkat dari judul gambar yang ke tiga.</p>
        </div>
      </div>

      <div class="item">
        <img src="https://2.bp.blogspot.com/-bDWPKal5PCc/VqoxQ_CeeYI/AAAAAAAAAVk/JJyu2hZ9VjY/s1600/WJslider4.jpg" alt="slide4" width="460" height="345">
        <div class="carousel-caption">
          <h3>Judul Gambar 4</h3>
          <p>Ini adalah deskripsi singkat dari judul gambar yang ke empat.</p>
        </div>
      </div>
 <!-- Left and right controls -->
    <a class="left carousel-control" href="#WJSlider" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Kembali</span>
    </a>
    <a class="right carousel-control" href="#WJSlider" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Lanjut</span>
    </a>
    </div>
</header>

<!-- Page Content -->
<section class="py-5">
  <div class="container">
    <h1 class="font-weight-light">Halo Sowongers</h1>
    <div class="row">
    
        <div class="card ml-3" style="width: 16rem; max-height: 15rem;">
          <div class="card-body">
          <h3>sdjkasdbfvh</h3>
          <a href="" class="btn btn-danger">Daftar Sekarang</a>
              
          </div>
        </div>
    </div>

    <div class="grid-container">
      <div class="grid-item">1</div>
      <div class="grid-item">2</div>
      <div class="grid-item">3</div>
      <div class="grid-item">4</div>  
      <div class="grid-item">5</div>
      <div class="grid-item">6</div>  
      <div class="grid-item">7</div>
      <div class="grid-item">8</div>
    </div>

  </div>
</section>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js')?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js')?>"></script>

<!-- Page level plugin JavaScript-->
<script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.js')?>"></script>
<script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.js')?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/js/sb-admin.min.js')?>"></script>

</body>

</html>