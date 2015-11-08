<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tiffany Danielle Front-End Developer</title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
  <link href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<div class="hero">
  <header>
    <div class="container2 header">
      <div class="tiffany wow fadeInLeft animated">
        <img src=" <?php echo get_template_directory_uri(); ?>/tiffanydaniellelighter.png">
      </div> <!-- /tiffany -->

      <div class="navigation animated fadeInRight wow">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
      </div>
      <div class='fa fa-bars'></div>
    </div> <!-- /.container -->
  </header><!--/.header-->

