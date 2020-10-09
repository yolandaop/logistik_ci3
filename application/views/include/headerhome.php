<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Logistik DDART</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link href="<?php echo base_url();?>/assets/" rel="icon">
  <link href="<?php echo base_url();?>/assets/" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="<?php echo base_url();?>/template/rapid/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/template/rapid/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/template/rapid/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/template/rapid/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/template/rapid/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/template/css/sb-admin-2.min.css" rel="stylesheet">
 <link href="<?php echo base_url();?>/template/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="<?php echo base_url('index.php/home');?>" class="scrollto"><span>  DDART</span></a></h1>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo base_url('index.php/home');?>">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Pendataan</a></li>
          <li><a href="<?php echo base_url();?>index.php/home/form_permohonan#form">Pendaftaran</a></li>
          <li><a href="#footer">Contact Us</a></li>
          <li><a href="<?php echo base_url();?>index.php/login" 
          <?php 
            if(isset($_SESSION['user'])){
              echo " hidden";
            }
            else if(isset($_SESSION['admin'])){
              echo " hidden";
            }
            ?>
          
           >Admin</a></li>
          <li><a href="<?php echo base_url();?>index.php/login/logout" 
          <?php 
            if(!isset($_SESSION['user'])){
              if(!isset($_SESSION['admin'])){
                echo " hidden";
              }
            }
            ?>
          
           >Logout</a></li>
        </ul>
      </nav><!-- .main-nav -->
    </div>
  </header><!-- #header -->

  
 