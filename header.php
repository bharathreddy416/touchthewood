<html>
  <head>
    <meta charset="utf-8">
    <title>Touch The Wood</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>

  <header class="site-header">
    <div class="main-header">
      <div class="logo">
        <a href="#<?php echo esc_url( home_url( '/' ) ); ?> ">
          <img src="<?php echo get_template_directory_uri() ?>/images/logo.png">
        </a>
      </div>
      <div class="main-menu">
        <div class="navigation">
          <?php
            $args= array(
              'theme_locations' => 'header-menu',
              'container' => 'nav',
              'container_class' => 'site-nav',
            );
            wp_nav_menu( $args );
          ?>
        </div>
      </div>
    </div>
  </header>
