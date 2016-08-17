<?php
/**
Template Name: Contact
*/

get_header(); ?>



<?php while ( have_posts() ) : the_post(); ?>
  <section id="banner-section-2">
    <div class="parallax-get-in-touch" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/imgs/get-in-touch-bg.jpg">
      <div class="scroll-btn">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-left">
              <h1 class="placeholder-text"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact-info">
    <div class="container">
      <div class="row">
        <div class="col-sm-10">


          <?php echo get_the_content(); ?>

            </div>
          </div>
        </div>
      </section><section id="inquiry-map">
        <div class="container">
          <div class="col-sm-6 margin">
            <h1 class="form-label">Make an enquiry</h1>
            <?php echo do_shortcode('[contact-form-7 id="32" title="Contact form 1"]'); ?>
          </div>
          <div class="col-sm-6"><?php echo do_shortcode('[huge_it_maps id="1"]'); ?></div>
        </div>
      </section>


      <?php

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // End of the loop.
    ?>

            <?php get_footer(); ?>
