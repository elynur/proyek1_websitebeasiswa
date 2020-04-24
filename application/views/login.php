<!-- <?=
form_open('login/proses_login');
?> -->
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login Page</title>

  <!-- Plugin for fontawesome -->
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.css')?>" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('assets/css/sb-admin.css')?>" rel="stylesheet">

</head>

<body class="bg-white">
<br><br><br><br>
  <div class="container" style=" margin-top: 50px">
    <div class="card card-login bg-light mx-auto mt-5">
      <div class="card-header" style="color: #; text-align: center;"><h2>LOGIN</h2></div>
      <div class="card-body">
      <?php 
        form_open('login/proses_login');
      ?>
      <form action="<?php echo base_url('login/proses_login'); ?>" method="post">		
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required="required" autofocus="autofocus">
              <label for="inputEmail">Username</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <button type="submit" class="btn btn-success btn-lg float-right" id="btnlogin" style="padding:3px 8px;">Login</button>
          <small class="smallSignUp text-muted" style="margin-top=20px;">Apakah anda punya akun? <a href="<?= base_url().'register' ?>">Daftar Disini</a></small>
        </form> 
        <?php 
        form_close();
        ?>

      </div>
    </div>
  </div>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger fixed-top">
  <div class="container">
    <a class="navbar-brand" href="welcome" style="margin-left:380px;">BEASISWA PENDIDIKAN BUKIT ASAM</a>
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      
  </div>
</nav>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js')?>"></script>
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

</body>

</html>
<!-- <?=
form_close();
?> -->