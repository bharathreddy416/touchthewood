<?php get_header(); ?>

    <?php while(have_posts()): the_post(); ?>
      <div class="contact-us" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>)">
		  <div class="container">
			<div class="contact-us-text">
			  <h2><?php the_title(); ?></h2>
			</div>
		  </div>
      </div>

      <div class="contact-info">
		  <div class="container">
			  <div class="row">
					<form class="contact-form col-xs-12 col-sm-6 col-md-5" method="post" action="">
						<div class="field">
						  <input type="text" name="name" placeholder="Name" required />
						</div>
						<div class="field">
						  <input type="email" name="email" placeholder="E-Mail" required />
						</div>
						<div class="field">
						  <input type="tel" name="phone" placeholder="Phone" required />
						</div>
						<div class="field">
						  <input type="text" name="city" placeholder="Your City" required />
						</div>
						<div class="field">
						  <textarea name="message" placeholder="Message" requires></textarea>
						</div>
						<div class="field">
							<input type="submit" name="submit-contact" class="button" value="Send" />
							<input type="hidden" name="hidden" value="1" />
						</div>
					</form>
			  </div>
        </div>
	</div>

    <?php endwhile; ?>

<?php get_footer(); ?>
