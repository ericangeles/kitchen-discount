<?php
/**
Template Name: Contact Page
*/

get_header(); ?>

<section id="banner-section-2">
  <div class="parallax-get-in-touch" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/imgs/get-in-touch-bg.jpg">
    <div class="scroll-btn">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-left">
            <h1 class="placeholder-text">Get in touch</h1>
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
        <p class="contact-desc">We have a load of ideas to improve any kitchen space, get in touch with us to arrange your free, no obligation design visit and allow us demonstrate how we would improve your kitchen and home.</p>
        <div class="icon-content">
          <div class="col-sm-4 padding">
            <p class="icons"><img src="<?php echo get_template_directory_uri(); ?>/imgs/fi-marker.png" alt=""></p>
            <p class="address">49 Wood Street,<br /> Grimsby,<br /> DN32 7BJ</p>
          </div>
          <div class="col-sm-4 padding">
            <p class="icons"><img src="<?php echo get_template_directory_uri(); ?>/imgs/fi-telephone.png" alt=""></p>
            <p class="telephone">01472 351989</p>
          </div>
          <div class="col-sm-4 padding">
            <p class="icons"><img src="<?php echo get_template_directory_uri(); ?>/imgs/fi-clock.png" alt=""></p>
            <p class="time">Mon , Tues , Wed , Fri 9am To 5pm<br /> Thurs 9 am To 8pm</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="inquiry-map">
  <div class="container">
    <div class="col-sm-6 margin">
      <form id="inquiry-form" class="form-horizontal" role="form">
        <fieldset class="form-group">
          <h1 class="form-label">Make an enquiry</h1>
          <label for="">Name</label>
          <input id="inquiry-name" class="form-control required" value="">
        </fieldset>
        <fieldset class="form-group">
          <label for="">Email Address</label>
          <input id="inquiry-email" class="form-control required" value="">
        </fieldset>
        <fieldset class="form-group">
          <label for="">Subject</label>
          <input id="inquiry-subject" class="form-control required" value="">
        </fieldset>
        <fieldset class="form-group">
          <label for="">Message</label>
          <textarea id="inquiry-message" class="form-control required" value=""></textarea>
        </fieldset>
        <button type="submit" class="btn-submit">Submit</button>
      </form>
    </div>
    <div class="col-sm-6">
      <div id="googleMap"></div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
