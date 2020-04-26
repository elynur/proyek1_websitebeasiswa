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
        <li class="nav-item active">
          <a class="nav-link" href="about" style="width: 100px; font-size: 14px;">Tentang Kami</a>
          <span class="sr-only">(current)</span>
        </li>
        <li class="nav-item">
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
      <div class="grid-item">
        <img src="https://lh3.googleusercontent.com/proxy/0su8dU2J22mzzM-YGep9bFj53CxSjMj6wPf6P8m58YvYHvKKzorqNz32_yQCcTAGoUE3KdfDjIJTQFBEFI5H9QGXEOXJLOvipAjSwOLcsYVU40c">
      </div>
      <div class="grid-item"></div>
      <div class="grid-item"></div>
      <div class="grid-item">
        <img src="data:image/jpeg;base64,/9j/
        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"
        style="width : 500px; height:300px"
        >
      </div>  
     
      <div class="grid-item">
        <img src="https://maklumatnews.com/wp-content/uploads/2019/05/IMG-20190526-WA0014.jpg" style="width:550px; height: 300px">
      </div>
      <div class="grid-item"></div>  
      <div class="grid-item"></div>
      <div class="grid-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTsEpYkw-1xamYKuq3qAOeSyHg34lR_r-lIHTOC0rxVbNzRkBI9&usqp=CAU" style="width:550px; height: 300px">
      </div>
    </div>

  </div>
</section>
<!-- Bootstrap core JavaScript-->
<script src="http://localhost:/proyek/assets/vendor/datatables/jquery.dataTables.js"></script>
<script src="http://localhost:/proyek/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="http://localhost:/proyek/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="http://localhost:/proyek/assets/vendor/datatables/jquery.dataTables.js"></script>
<script src="http://localhos:t/proyek/assets/vendor/datatables/dataTables.bootstrap4.js"></script>

<!-- Custom scripts for all pages-->
<script src="http://localhost:/proyek/assets/js/sb-admin.min.js"></script>

</body>

</html>