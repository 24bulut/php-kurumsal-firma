<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title><?php echo $cfg["site_title"] ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo publicAdminUrl("vendors/bootstrap/dist/css/bootstrap.min.css")?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo publicAdminUrl("vendors/font-awesome/css/font-awesome.min.css")?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo publicAdminUrl("vendors/nprogress/nprogress.css")?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo publicAdminUrl("vendors/iCheck/skins/flat/green.css")?>" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo publicAdminUrl("vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css")?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo publicAdminUrl("vendors/jqvmap/dist/jqvmap.min.css")?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo publicAdminUrl("vendors/bootstrap-daterangepicker/daterangepicker.css")?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo publicAdminUrl("build/css/custom.min.css")?>" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo url() ?>" class="site_title"><i class="fa fa-home"></i> <span><?php echo  $cfg["company_name"] ?></span></a>
            </div>

            <div class="clearfix"></div>

           

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>menü</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo adminUrl("site-config") ?>" ><i class="fa fa-cog"></i>Site ayarları </a></li>
                  <li><a href="<?php echo adminUrl("about-us") ?>" ><i class="fa fa-cog"></i>Hakkımızda </a></li>
                  <li><a href="<?php echo adminUrl("services") ?>" ><i class="fa fa-cog"></i>Hizmetlerimiz </a></li>
                  <li><a href="<?php echo adminUrl("contact") ?>" ><i class="fa fa-cog"></i>İletişim </a></li>
                  <li><a href="<?php echo adminUrl("galery") ?>" ><i class="fa fa-cog"></i>Galeri </a></li>
                  <li><a href="<?php echo adminUrl("slider") ?>" ><i class="fa fa-cog"></i>Slider </a></li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    İşlemler
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="javascript:;">Destek:abdurrahim.3078@gmail.com</a>
                    <a class="dropdown-item"  href="<?php echo adminUrl("auth?logout=true") ?>"><i class="fa fa-sign-out pull-right"></i> Çıkış</a>
                  </div>
                </li>

      
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->


        <div class="right_col" role="main">
            
		