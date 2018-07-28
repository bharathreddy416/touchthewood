
<?php get_header(  ); ?>

  <?php
    $blog_page = get_option( 'page_for_posts');
    $image = get_post_thumbnail_id( $blog_page );
    $image = wp_get_attachment_image_src( $image, 'full');
  ?>

  <div class="hero" style="background-image:url(<?php echo $image[0]; ?>);">
    <div class="hero-text">
      <h2><?php echo get_the_title($blog_page); ?></h2>
    </div>
  </div>
  <div class="hero-content">
    <?php echo do_shortcode('[the-post-grid id="36" title="Work Grid"]'); ?>
  </div>

<?php get_footer(  ); ?>
