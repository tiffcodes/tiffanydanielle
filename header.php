<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
  <link href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway:400,800,300' rel='stylesheet' type='text/css'>
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />


  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<div class="hero">
  <header>
    <div class="container header">
      <h2>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h2>

      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
<!--       <i class='fa fa-bars'></i> -->
    </div> <!-- /.container -->
  </header><!--/.header-->

