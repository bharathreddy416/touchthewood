<?php

// Link to the database page file
require get_template_directory() . '/inc/database.php';

// Link to the contact page file
require get_template_directory() . '/inc/contact-us.php';

function touchthewood_setup(){
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'touchthewood_setup' );

function touchthewood_styles(){
  //Adding Stylesheets
  wp_register_style( 'style', get_template_directory_uri() . '/css/custom.css', array(), '1.0' );
	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '3.3.7' );
  wp_register_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0' );
  wp_register_style( 'less', get_template_directory_uri() . '/less/custom.less', array(), '3.8.0' );

  //Enqueue the style
  wp_enqueue_style( 'style' );
	wp_enqueue_style( 'bootstrap' );
  wp_enqueue_style( 'fontawesome' );
  wp_enqueue_style( 'less' );

  //Adding scripts
  wp_register_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true );
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '3.3.7', true );

  //Enqueue the scripts
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'scripts' );
	wp_enqueue_script( 'bootstrap' );
}
add_action( 'wp_enqueue_scripts', 'touchthewood_styles' );

//Add Menus
function touchthewood_menus(){
  register_nav_menus( array(
    'header-menu' => __('Header Menu'),
    'social-menu' => __('Social Menu')
  ) );
}
add_action( 'init', 'touchthewood_menus' );


 ?>
