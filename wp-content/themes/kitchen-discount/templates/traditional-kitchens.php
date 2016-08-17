<?php
/**
Template Name: Traditional Kitchens
*/

get_header(); ?>

<section id="banner-section-2">
    <div class="parallax-window-banner-2-traditional" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/imgs/traditional-bg.png">
      <div class="scroll-btn">
        <div class="container">
          <div class="row">
            <div class="schuller-text"><?php the_title(); ?></div>
            <div class="schuller-logo">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/schuller-logo.png" alt="Schuller Kitchens for life" />
            </div>
          </div>
        </div>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/imgs/btn-scroll-banner.png" alt=""></a>
      </div>
    </div>
  </section>

  <section id="traditional-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h1>Traditional Kitchens by Schüller</h1>
          <p>If your home is decorated in a more traditional style, Schüller has a high quality fitted kitchen range to suit. </p>
          <p>Solid wood or painted wood doors blend perfectly with a traditional home and create a beautiful kitchen where your family can gather over their evening meal or linger over Sunday breakfast. </p>
          <a href="#">Get in touch</a>
        </div>
        <div class="col-sm-6">
          <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/imgs/traditional-section-img.png" alt="" />
        </div>
      </div>
    </div>
  </section>

  <section id="traditional-kitchen-range">
    <div class="container">
      <h1>Our traditional kitchen range</h1>
      <div class="row">
        <figure class="col-sm-4">
          <a href="<?php echo get_template_directory_uri(); ?>/imgs/img-frame-1.jpg" itemprop="contentUrl" data-size="900x1236">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/image-frame-1.png" class="img-responsive i-block" alt="">
          </a>
        </figure>
        <figure class="col-sm-4">
          <a href="<?php echo get_template_directory_uri(); ?>/imgs/img-frame-2.jpg" itemprop="contentUrl" data-size="1236x900">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/image-frame-2.png" class="img-responsive i-block" alt="">
          </a>
        </figure>
        <figure class="col-sm-4">
          <a href="<?php echo get_template_directory_uri(); ?>/imgs/img-frame-3.jpg" itemprop="contentUrl" data-size="900x1236">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/image-frame-3.png" class="img-responsive i-block" alt="">
          </a>
        </figure>
        <figure class="col-sm-4 margin-t">
          <a href="<?php echo get_template_directory_uri(); ?>/imgs/img-frame-4.jpg" itemprop="contentUrl" data-size="1236x900">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/image-frame-4.png" class="img-responsive i-block" alt="">
          </a>
        </figure>
        <figure class="col-sm-4 n-margin-t">
          <a href="<?php echo get_template_directory_uri(); ?>/imgs/img-frame-5.jpg" itemprop="contentUrl" data-size="900x1236">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/image-frame-5.png" class="img-responsive i-block" alt="">
          </a>
        </figure>
        <figure class="col-sm-4 margin-t">
          <a href="<?php echo get_template_directory_uri(); ?>/imgs/img-frame-6.jpg" itemprop="contentUrl" data-size="1236x900">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/image-frame-6.png" class="img-responsive i-block" alt="">
          </a>
        </figure>
      </div>
    </div>
  </section>

  <div class="parallax-window-cta" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/imgs/cta-bg.png">
    <div class="cta-content">
      <div class="content-container">
        <h1 class="cta-title">
          Start your journey towards a new Schüller kitchen today
        </h1>
        <p class="cta-contact">
          Call 01472 351 989 for more information
        </p>
        <a href="#" class="cta-btn">
          Get in touch
        </a>
      </div>
    </div>
  </div>

  <section id="testimonials">
    <div class="testimonials-bg">
      <div class="container">
        <div class="row">
          <div id="owl-testimonials" class="owl-carousel owl-theme">
            <div class="item">
              <p class="testi-name">
                Ida Stephens — Noir Project
              </p>
              <p class="testi">
                “Conversations can be a tricky business. Sometimes, decoding what is said with what is meant is difficult at best. However, communication is a necessary tool in todays world. It’s often been the case were one party completely miscommunicates to another due to a misunderstanding between parties.”
              </p>
            </div>
            <div class="item">
              <p class="testi-name">
                Ida Stephens — Noir Project
              </p>
              <p class="testi">
                “Conversations can be a tricky business. Sometimes, decoding what is said with what is meant is difficult at best. However, communication is a necessary tool in todays world. It’s often been the case were one party completely miscommunicates to another due to a misunderstanding between parties.”
              </p>
            </div>
            <div class="item">
              <p class="testi-name">
                Ida Stephens — Noir Project
              </p>
              <p class="testi">
                “Conversations can be a tricky business. Sometimes, decoding what is said with what is meant is difficult at best. However, communication is a necessary tool in todays world. It’s often been the case were one party completely miscommunicates to another due to a misunderstanding between parties.”
              </p>
            </div>
            <div class="item">
              <p class="testi-name">
                Ida Stephens — Noir Project
              </p>
              <p class="testi">
                “Conversations can be a tricky business. Sometimes, decoding what is said with what is meant is difficult at best. However, communication is a necessary tool in todays world. It’s often been the case were one party completely miscommunicates to another due to a misunderstanding between parties.”
              </p>
            </div>
            <div class="item">
              <p class="testi-name">
                Ida Stephens — Noir Project
              </p>
              <p class="testi">
                “Conversations can be a tricky business. Sometimes, decoding what is said with what is meant is difficult at best. However, communication is a necessary tool in todays world. It’s often been the case were one party completely miscommunicates to another due to a misunderstanding between parties.”
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
