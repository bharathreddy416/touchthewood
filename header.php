<html>
<head>
	<meta charset="utf-8">
	<title>Touch The Wood</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow" rel="stylesheet">
</head>
<body class="custom-style">

	<header class="site-header">
		<div class="main-header">
			<div class="main-menu">
				<nav class="navbar navbar-inverse container-fluid site-nav">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>                        
						</button>
						<div class="logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<img src="<?php echo get_template_directory_uri() ?>/images/logo.png">
							</a>
						</div>
					</div>
					<?php
					$args= array(
						'theme_locations' => 'header-menu',
						'container' => 'div',
						'menu_class' => 'nav navbar-nav',
						'container_class' => 'collapse navbar-collapse nav-menu',
						'container_id' => 'myNavbar'
						);
					wp_nav_menu( $args );
					?>
				</nav>
			</div>
		</div>
	</header>
