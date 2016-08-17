<?php
/**
Template Name: Latest News
*/

get_header(); ?>

<section id="banner-section-2">
  <div class="parallax-get-in-touch" data-parallax="scroll" data-image-src="assets/imgs/get-in-touch-bg.jpg">
    <div class="scroll-btn">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-left">
            <h1 class="placeholder-text">Latest News</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="latest-news">
  <div class="container">
    <div class="row">
      <?php
      $args = array( 'post_type' => 'news', 'posts_per_page' => 4 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();

      echo '<div class="col-sm-6">';
      echo '<div class="post-content margin">';

          if ( has_post_thumbnail() ) :
            the_post_thumbnail('full', array('class' => 'post-img'));
            echo '<h1 class="post-title">';
            echo the_title();
            echo '</h2>';
            echo '<p class="post-date">' . mysql2date('jS F Y', $post->post_date) . '</p>';
          endif;

          echo the_excerpt(); ?>
          <a class="post-btn" href='<?php the_permalink(); ?>' title='<?php the_title_attribute(); ?>'>
            Read more
          </a>




    <?php echo '</div>' ?>
    <?php
    echo '</div>';
  endwhile;
  ?>
  </div>

</div>
</section>

<?php get_footer(); ?>
