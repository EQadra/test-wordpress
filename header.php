
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!-- Bootstrap CSS -->
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <!-- Latest Font Awesome (6.x) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
      <?php wp_head(); ?>
     
      <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet"  crossorigin="anonymous">
      
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

  </head>
  <body>
<!-- Banner superior -->
<div class="top-banner">
✨ Discover Your Dream Property with Estatein · <a href="#" class="text-decoration-none text-light">Learn More</a>
</div>



<!-- **************************************************************************************************** -->
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand d-flex align-items-center text-white" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Symbol (1).png" alt="<?php bloginfo('name'); ?>">
      <?php bloginfo('name'); ?>
    </a>

    <!-- Botón toggle para móviles -->
    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'mi-tema' ); ?>">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menú dinámico -->
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'menu-principal',
          'depth'           => 2,
          'container'       => false,
          'menu_class'      => 'navbar-nav',
          'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
          'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
      ?>
    </div>

    <!-- Botón de contacto -->
    <div class="d-none d-lg-block">
      <a href="#formSend" class="btn btn-contact">Contact Us</a>
    </div>
  </div>
</nav>