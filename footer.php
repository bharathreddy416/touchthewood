<footer>
  <?php
    $args = array(
      'theme_location' => 'header-menu',
      'container' => 'nav',
    );
    wp_nav_menu( $args );
  ?>

  <div class="location">
    <p>Address: </p>
    <p>Phone number: </p>
  </div>

  <div class="socials">
    <?php
      $args = array(
        'theme_location' => 'social-menu',
        'container' => 'nav',
        'container_class' => 'socials',
        'container_id' => 'socials',
        'link_before' => '<span class="sr-text">',
        'link_after' => '</span>'
      );
      wp_nav_menu( $args );
    ?>
  </div>

  <p class="copyright">All rights reserved <?php echo date('Y'); ?> </p>
  </footer>

  <?php wp_footer(); ?>
	<!-- Latest compiled JavaScript -->
	<script src="wp-content/themes/touchthewood/js/bootstrap.js" type="text/javascript"></script>
  
 </body>
</html>
