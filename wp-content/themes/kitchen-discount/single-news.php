

<?php get_header(); ?>

<section id="individual-post">
<div class="container">
	<div class="row">
		<div class="col-md-9">
      <div class="individual-post-content">
        <h1 class="individual-post-title"><?php the_title(); ?></h1>
  			<?php
  			if(have_posts()):
  				while(have_posts()): the_post();
          echo '<p class="individual-post-date">' . mysql2date('jS F Y', $post->post_date) . '</p>';
          echo the_post_thumbnail('full', array('class' => 'individual-post-image'));
  				the_content();
  			endwhile;
  		endif; ?>
      <div class="social-section">
        <span>Share this:</span>
        <ul class="share">
          <li><a href="#" target="_blank"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a></li>
          <li><a href="#" target="_blank"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a></li>
          <li><a href="#" target="_blank"><i class="fa fa-google-plus fa-3x" aria-hidden="true"></i></a></li>
          <li><a href="#" target="_blank"><i class="fa fa-linkedin fa-3x" aria-hidden="true"></i></a></li>
        </ul>
        <div class="back-to-news">
          <a href="/latest-news/" class="back-to-news-btn">
            <i class="fa fa-arrow-left fa-2x"></i><h4>Back to news</h4>
          </a>
        </div>
      </div>
      </div>
	</div>
  <div class="col-md-3">
    <div class="sidebar-content">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
</div>
</section>
<?php
get_footer();
