<!-- ======= Hero Section ======= -->
<section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <br>
          <div <?php 
            if(isset($_SESSION['user'])){
              echo " hidden";
            }
            ?>>
          <h2>Selamat datang <br>di Platform Bantuan Sosial <span>DDART UNDIP</span></h2>
          </div>
          <h2
          <?php 
            if(!isset($_SESSION['user'])){
              echo " hidden";
            }
            ?>>Selamat datang Admin<br><span>DDART UNDIP</span></h2>
        </div>

        <div class="col-md-5  intro-img order-md-last order-first">
          <img src="<?php echo base_url();?>/assets/img/undraw.svg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

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
        <h3>Login Admin Sistem</h3>
      </div>

      <form class="login100-form validate-form" action="login/cek_login" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-devices" src=></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
          
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
							<a class="txt1" >Case Sensitive</a>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">Login</button>
					</div>

					
				</form>
    </div>
  </div>
</div>

</section><!-- End About Section -->

