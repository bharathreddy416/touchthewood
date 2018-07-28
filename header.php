<html>
  <head>
    <meta charset="utf-8">
    <title>Touch The Wood</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/3.8.0/less.min.js"></script>
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
