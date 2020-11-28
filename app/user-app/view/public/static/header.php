<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Vezir Nakliyat</title>
  <meta content="<?php echo $config["site_description"] ?>" name="description">
  <meta content="<?php echo $config["site_keywords"] ?>" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo  publicUrl('assets/img/logo.png')?>" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo  publicUrl('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo  publicUrl('assets/vendor/icofont/icofont.min.css')?>" rel="stylesheet">
  <link href="<?php echo  publicUrl('assets/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
  <link href="<?php echo  publicUrl('assets/vendor/animate.css/animate.min.css')?>" rel="stylesheet">
  <link href="<?php echo  publicUrl('assets/vendor/venobox/venobox.css')?>" rel="stylesheet">
  <link href="<?php echo  publicUrl('assets/vendor/owl.carousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
  <link href="<?php echo  publicUrl('assets/vendor/aos/aos.css')?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo  publicUrl('assets/css/style.css')?>" rel="stylesheet">

<!-- Font Awesome -->
<link href="<?php echo publicAdminUrl("vendors/font-awesome/css/font-awesome.min.css")?>" rel="stylesheet">
</head>

<body id="body">

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="fa fa-phone"></i> <strong><?php echo $config["phone1"] ?></strong>
        
        <i class="fa fa-phone"></i><strong><?php echo $config["phone2"] ?> </strong>

      </div>
      <div class="social-links float-right">
        <a href="https://wa.me/<?php echo "9".str_replace(" ","", $config["phone1"] ); ?>" class="twitter"><i class="fa fa-whatsapp"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        
         <h1 ><a href="<?php url() ?>"><span><img src="<?php echo publicUrl('img/logo.png')?>" alt=""  class="img-fluid"><span class="logo-text" ><span class="hide-logo" ><?php echo $config["company_name"]?></span></span> </span></a></h1> 

      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li ><a href="#body">Anasayfa</a></li>
          <li><a href="#hizmetlerimiz">Hizmetlerimiz</a></li>
          <li><a href="#iletisim">İletişim</a></li>
          <li><a href="#hakkimizda">Hakkımızda</a></li>
          <li><a href="#galeri">Galeri</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->