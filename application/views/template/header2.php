<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Siswa</title>
  <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?= base_url() ?>assets/css/sb-admin.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/themify-icons.css" />

<script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script>
</head>
<body id="page-top">
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1 " href="">Beasiswa Bidiksiba</a>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <a class="btn btn-dark" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->

    
       
    <ul class="sidebar navbar-nav">

    	<li class="nav-item">
    		<a class="nav-link" href="<?php echo base_url('DashboardSiswa') ?>">
    			<i class="fas fa-users"></i>
    			<span>Home</span></a>
    	</li>
    	<li class="nav-item">
    		<a class="nav-link" href="<?php echo base_url('BiodataSiswa') ?>">
    			<i class="fas fa-users"></i>
    			<span>Data Diri</span></a>
    	</li>
    	<li class="nav-item">
    		<a class="nav-link" href="<?php echo base_url('IsiBeasiswa') ?>">
    			<i class="fas fa-book-open"></i>
    			<span>Data Beasiswa</span></a>
    	</li>
    	<li class="nav-item">
    		<a class="nav-link" href="<?php echo base_url('UploadBerkas') ?>">
    			<i class="fas fa-users"></i>
    			<span>Upload Berkas</span></a>
    	</li>
    </ul>
    <div id="content-wrapper">