<?php
/**
Template Name: Landing Page
*/

 get_header(); ?>

<section id="banner-section">
      <div class="parallax-window-banner" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/imgs/banner-img.jpg">
        <div class="banner-text slideIn-up">
          <h1 class="banner-title">Welcome to Kitchen Discount Grimsby</h1>
          <p class="banner-sub-title">Designing and installing affordable kitchens for over 40 years.</p>
          <a href="#" class="banner-btn">View our kitchen range</a>
        </div>
        <div class="scroll-btn">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/imgs/btn-scroll-banner.png" alt=""></a>
        </div>
      </div>
    </section>

    <section id="what-we-do" class="what-we-do-001">
      <div class="container">
        <div class="row">
          <h1 class="we-do-title">What we do</h1>
          <div class="col-sm-6 padding">
            <div class="effect-container">
              <div class="modern-kitchen m-bottom">
                <div class="modern-text">
                  <p class="modern-title">
                    Modern Kitchens
                  </p>
                  <a href="#" class="modern-btn">View Modern</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 padding">
            <div class="effect-container">
              <div class="traditional-kitchen m-bottom">
                <div class="traditional-text">
                  <p class="traditional-title">
                    Traditional Kitchens
                  </p>
                  <a href="/traditional-kitchens/" class="traditional-btn">View Traditional</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 padding">
            <div class="effect-container">
              <div class="appliances m-bottom">
                <div class="appliances-text">
                  <p class="appliances-title">
                    Appliances
                  </p>
                  <a href="" class="appliances-btn">View Appliances</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 padding">
            <div class="effect-container">
              <div class="accessories m-bottom">
                <div class="accessories-text">
                  <p class="accessories-title">
                    Accessories
                  </p>
                  <a href="" class="accessories-btn">View Accessories</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 padding">
            <div class="effect-container">
              <div class="worktops m-bottom">
                <div class="worktops-text">
                  <p class="worktops-title">
                    Worktops
                  </p>
                  <a href="" class="worktops-btn">View Worktops</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="our-brands">
      <div class="container">
        <div class="row">
          <h1 class="our-brands-title">Our Brands</h1>
          <div id="owl-brands" class="owl-carousel owl-theme">
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/imgs/schuller.png" alt="Schuller"></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/imgs/bosch.png" alt="Bosch"></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/imgs/belling.png" alt="Belling"></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/imgs/neff.png" alt="Neff"></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/imgs/hotpoint.png" alt="Hotpoint"></div>
          </div>
        </div>
      </div>
    </section>

    <section id="about-us">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <div class="about-us-content">
              <h1 class="about-us-title">
                Kitchen design in Grimsby
              </h1>
              <p class="lead">Kitchen Discount Grimsby has been designing and installing affordable rigid carcass kitchens from Schüller for over 40 years. </p>
              <p>Our experience in the industry, competitive pricing and commitment to exceptional workmanship culminates in a high quality discount kitchen designed to stand the test of time.</p>
              <p class="m-bottom">Every aspect of your beautiful new Schüller kitchen is crafted from scratch to make your life easier, so our team of experienced designers use every ounce of their expertise and know how to deliver a functional kitchen to be proud of.</p>
              <a href="#" class="about-us-btn">Find Out More About Us</a>
            </div>
          </div>
          <div class="col-sm-6 m-top padding">
            <div class="showroom-img">
              <div class="showroom-text">
                <h1 class="showroom-title">
                  Showroom image
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="parallax-window-cta" data-calibrate-y="false" data-calibrate-x="false" data-parallax="scroll" data-image-src="assets/imgs/cta-bg.png">
      <div class="cta-content">
        <div class="content-container">
          <h1 class="cta-title">
            Start your journey towards a new Schüller kitchen today
          </h1>
          <p class="cta-contact">
            Call 01472 351 989 for more information
          </p>
          <a href="/contact/" class="cta-btn">
            Get in touch
          </a>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
