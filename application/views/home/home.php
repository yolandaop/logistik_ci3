<!-- ======= Hero Section ======= -->
<section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <br>
          <div <?php 
            if(isset($_SESSION['user']) || isset($_SESSION['admin'])){
              echo " hidden";
            }
            ?>>
          <h2>Selamat datang <br>di Platform Bantuan Sosial <span>DDART UNDIP</span></h2>
          </div>
          <h2
          <?php 
            if(!isset($_SESSION['user'])){
              if(!isset($_SESSION['admin'])){
                echo " hidden";
              }
            }
            ?>>Selamat datang Admin<br><span>DDART UNDIP</span></h2>
        </div>

        <div class="col-md-5  intro-img order-md-last order-first">
          <img src="<?php echo base_url();?>/assets/img/undraw.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section>

  <main id="main">
  <section id="about" class="about">

<div class="container">
  <div class="row">

    <div class="col-lg-5 col-md-6">
      <div class="about-img">
        <img src="<?php echo base_url();?>/assets/img/ddart.png">
      </div>
    </div>

    <div class="col-lg-7 col-md-6">
      <div class="about-content">
        <h3>Platform logistik DDART merupakan bentuk pengabdian Universitas Diponegoro untuk COVID 19.<br><br> Masyarakat ataupun instansi yang membutuhkan bantuan dapat mengajukan permohonan bantuan logistik pada menu "FORM PERMOHONAN".</h3>
      </div>
    </div>
  </div>
</div>

</section><!-- End About Section -->

 <!-- ======= Services Section ======= -->
 <section id="services" class="services section-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-lg-3 col-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box" 
            <?php 
            if(isset($_SESSION['admin'])){
              echo " hidden";
            }
            ?>>
              <div class="icon" style="background: #fff0da;"><i class="fa fa-people-carry" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="<?php echo base_url('index.php/home/pemohon_bantuan#tabel');?>">Pemohon Bantuan</a></h4>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box" 
            <?php 
            if(isset($_SESSION['admin'])){
              echo " hidden";
            }
            ?>>
              <div class="icon" style="background: #e6fdfc;"><i class="fa fa-truck" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="<?php echo base_url('index.php/home/distribusi#tabel');?>">Bantuan Terdistribusi</a></h4>
            </div>
          </div>
          <div class="col-md-3 col-lg-3 col-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box" 
            <?php 
            if(isset($_SESSION['admin'])){
              echo " hidden";
            }
            ?>>
              <div class="icon" style="background: #eafde7;"><i class="fa fa-boxes" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="<?php echo base_url('index.php/home/bantuan_tersedia#tabel');?>">Bantuan Tersedia</a></h4>
            </div>
          </div>

          <div class="col-md-3 col-lg-3 col-6 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box" 
            <?php 
            if(isset($_SESSION['admin'])){
              echo " hidden";
            }
            ?>>
              <div class="icon" style="background: #e1eeff;"><i class="fa fa-file" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="<?php echo base_url('index.php/home/form_permohonan#form');?>">Form Permohonan</a></h4>
            </div>
          </div>

        <!-- ADMIN MENU -->

        <div class="container">
        <div class="row">
          <div class="col-lg-2">
          </div>
          <div class="col-md-4 col-lg-4 col-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box" 
            <?php 
            if(!isset($_SESSION['admin'])){
              echo " hidden";
            }
            ?>>
              <div class="icon" style="background: #fceef3;"><i class="fas fa-donate" style="color: #ff689b;"></i></div>
              <h1 class="title"><a href="<?php echo base_url('index.php/admin/bantuan_masuk#tabel');?>">CRUD Pemberi Bantuan</a></h1>
             </div>
          </div>
          <div class="col-md-4 col-lg-4 col-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box" 
            <?php 
            if(!isset($_SESSION['admin'])){
              echo " hidden";
            }
            ?>>
              <div class="icon" style="background: #fff0da;"><i class="fa fa-people-carry" style="color: #e98e06;"></i></div>
              <h4 class="title"><a href="<?php echo base_url('index.php/admin/pemohon_bantuan#tabel');?>">CRUD Pemohon Bantuan</a></h4>
            </div>
          </div>
          <div class="col-lg-2">
          </div>
          <div class="col-md-4 col-lg-4 col-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box" 
            <?php 
            if(!isset($_SESSION['admin'])){
              echo " hidden";
            }
            ?>>
              <div class="icon" style="background: #e6fdfc;"><i class="fa fa-truck" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="<?php echo base_url('index.php/admin/distribusi#tabel');?>">CRUD Bantuan Terdistribusi</a></h4>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box" 
            <?php 
            if(!isset($_SESSION['admin'])){
              echo " hidden";
            }
            ?>>
              <div class="icon" style="background: #eafde7;"><i class="fa fa-boxes" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a href="<?php echo base_url('index.php/admin/bantuan_tersedia#tabel');?>">CRUD Bantuan Tersedia</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-6 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box" 
            <?php 
            if(!isset($_SESSION['admin'])){
              echo " hidden";
            }
            ?>>
              <div class="icon" style="background: #e1eeff;"><i class="fa fa-file" style="color: #2282ff;"></i></div>
              <h4 class="title"><a href="<?php echo base_url('index.php/admin/form_distribusi#form');?>">Form Distribusi</a></h4>
            </div>
          </div>
          
        </div>

          <div class="col-lg-2">
          </div>
          <div class="col-md-12 col-lg-12 col-12 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box"
            <?php 
            if(!isset($_SESSION['admin'])){
              echo " hidden";
            }
            ?>
            
            >
              <div class="icon" style="background: #e6fdfc;"><i class="fa fa-save" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a href="<?php echo base_url('index.php/admin/update_stok_bantuan#tabel');?>">Update Stok (Admin)</a></h4>
            </div>
          </div>
          </div>

          
        </div>
     
 

