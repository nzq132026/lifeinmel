<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="text" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/style/images/favicon.png">
<title>Life in Mel - Personal Photography Website</title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style/css/plugins.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/css/navigation.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/revolution-addons/filmstrip/css/revolution.addon.filmstrip.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style/revolution/revolution-addons/typewriter/css/typewriter.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style/type/icons.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style/users.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style/css/color/red.css">
<link href='https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="content-wrapper">
  <header class="header" id="header-main">
    <!-- Main Navbar -->
    <nav class="navbar transparent absolute nav-wrapper-dark inverse-text navbar-expand-lg text-uppercase">
      <div class="container">
        <div class="navbar-header">
          <div class="navbar-brand"><a href="https://www.lifeinmel.com/"><img src="#" srcset="<?php echo get_stylesheet_directory_uri(); ?>/style/images/logo-light.png 1x, <?php echo get_stylesheet_directory_uri(); ?>/style/images/logo-light@2x.png 2x" alt="" /></a></div>
          <div class="navbar-hamburger ml-auto d-lg-none d-xl-none"><button class="hamburger animate" data-toggle="collapse" data-target=".navbar-collapse" id="navbarNavDropdown"><span></span></button></div> 
        </div>
        <?php
          wp_nav_menu( array(   
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarNavDropdown',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ) );
          ?>
          <!-- Social Nav Link -->
          <div class="mr-20 d-none d-lg-block"></div>
          <div class="navbar-divider d-lg-none d-xl-none"></div>
          <ul class="social social-mute social-s">
            <li><a href="https://weibo.com/shippo0714" target="_blank"><i class="fa fa-weibo"></i></a></li>
            <li><a href="https://www.instagram.com/ailurophile_n/" target="_blank"><i class="fa fa-instagram"></i></a></li>
          </ul>
      </div>
    </nav>
  </header>