  <footer>
    <div class="container-fluid">
      <?php
      $args = array(
        'theme_location' => 'header-menu',
        'container' => 'nav',
        'container_class' => 'footer-menu col-xs-6 col-sm-6'
        );
      wp_nav_menu( $args );
      ?>

      <div class="location col-xs-6 col-sm-6">
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

      <p class="copyright col-xs-12">© All rights reserved <?php echo date('Y'); ?> </p>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>
