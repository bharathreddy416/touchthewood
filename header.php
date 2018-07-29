<html>
  <head>
    <meta charset="utf-8">
    <title>Touch The Wood</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="wp-content/themes/touchthewood/css/bootstap.css">
	  <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
  </head>
  <body class="custom-style">

  <header class="site-header">
    <div class="main-header">
		<div class="container">
			<div class="row">
			  <div class="logo col-xs-3 col-md-3">
				<a href="#<?php echo esc_url( home_url( '/' ) ); ?> ">
				  <img src="<?php echo get_template_directory_uri() ?>/images/logo.png">
				</a>
			  </div>
			  <div class="main-menu col-xs-12 col-md-9">
				<div class="navigation pull-right">
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
		</div>
    </div>
  </header>
