<?php

function touchthewood_save_contacts(){
    global $wpdb;
    if(isset($_POST['submit-contact']) && ($_POST['hidden'] == "1")){
      $name = sanitize_text_field($_POST['name']);
      $email = sanitize_email($_POST['email']);
      $phone = sanitize_text_field($_POST['phone']);
      $city = sanitize_text_field($_POST['city']);
      $message = sanitize_text_field($_POST['message']);

      $table = $wpdb->prefix .'contact';
      var_dump($table);

      $data = array(
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'city' => $city,
        'message' => $message
      );

      $format = array(
        '%s',
        '%s',
        '%s',
        '%s',
        '%s'
      );

      $wpdb->show_errors();
      $wpdb->insert($table, $data, $format);

      $url = get_page_by_title( 'Contact Us' );
      wp_redirect( get_permalink( $url ) );
      exit();

    }
}

add_action( 'init', 'touchthewood_save_contacts');

 ?>
