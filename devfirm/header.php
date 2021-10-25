<!doctype html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>DevFirm</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="<?php 
  bloginfo('template_directory') ?>/plugins/bootstrap/bootstrap.min.css">
    <!-- ThemeFisher Icon -->
    <link rel="stylesheet" href="<?php 
  bloginfo('template_directory') ?>/plugins/themefisher-fonts/themefisher-fonts.css">
    <!-- Light Box -->
    <link rel="stylesheet" href="<?php 
  bloginfo('template_directory') ?>/plugins/magnific-popup/magnific-popup.css">
    <!-- animation css -->
    <link rel="stylesheet" href="<?php 
  bloginfo('template_directory') ?>/plugins/animate/animate.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="<?php 
  bloginfo('template_directory') ?>/plugins/slick/slick.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="<?php 
  echo get_template_directory_uri(); ?>/css/style.css">

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map_canvas {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
    </style>
    <script src="<?php 
  bloginfo('template_directory') ?>/plugins/modernizr.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!-- Loader to display before content Load
  <div class="loading">

     <img src="img/loader.gif" alt=""> 

    <div class="windows8 loading-position">
      <div class="wBall" id="wBall_1">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_2">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_3">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_4">
        <div class="wInnerBall"></div>
      </div>
      <div class="wBall" id="wBall_5">
        <div class="wInnerBall"></div>
      </div>
    </div>
  </div> -->


 <!-- Navigation -section
  =========================-->
<nav class="navbar navbar-fixed-top navigation" >
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- header image -->
      <?php 
        $logo= get_header_image(); 
      ?>

      <a class="navbar-brand logo" href="<?php echo site_url(); ?>">
        <img src="<?php echo $logo; ?>" alt="">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <?php 
          wp_nav_menu(
            array(
              'theme_location'=>'primary-menu',
              'menu_class'=>'nav navbar-nav navbar-right menu'
            )
          )
        ?> 
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
