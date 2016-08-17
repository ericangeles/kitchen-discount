<section id="footer">
    <div class="container padding">
      <div class="row">
        <div class="col-sm-6">
          <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/imgs/footer-logo.png" class="img-responsive i-block margin" alt="Kitchen Discount"></a>
          <p class="footer-address">49 Wood St, Grimsby, <span class="postal-county">South Humberside</span> <span class="post-code">DN32 7BJ</span></p>
          <p class="footer-tel">T: 01472 351989</p>
          <p class="footer-gmap"><a href="#" class="underline">Find us on google map ></a></p>
          <ul class="footer-social">
            <li><a href="#" target="_blank"><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-facebook fa-3x" aria-hidden="true"></i></a></li>
            <li><a href="#" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a></li>
          </ul>
          <p class="footer-copyright">&#169; 2016 Kitchen Discount Grimsby | Designed and developed by <a href="http://www.boxedred.com/" target="_blank">Boxed Red</a></p>
        </div>
        <div class="col-sm-6 footer-right">
          <div class="col-sm-4">
            <ul>
              <li><a class="underline" href="#">German Kitchens</a></li>
              <li><a class="underline" href="#">Appliances</a></li>
              <li><a class="underline" href="#">News</a></li>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul>
              <li><a class="underline" href="#">Modern Kitchens</a></li>
              <li><a class="underline" href="#">Worktops</a></li>
              <li><a class="underline" href="#">Our Showroom</a></li>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul>
              <li><a class="underline" href="/traditional-kitchens/">Traditional Kitchens</a></li>
              <li><a class="underline" href="">Accessories</a></li>
              <li><a class="underline" href="/contact/">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Root element of PhotoSwipe. Must have class pswp. -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
    It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

      <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
      <!-- don't modify these 3 pswp__item elements, data is added later on. -->
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>

      <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
      <div class="pswp__ui pswp__ui--hidden">

        <div class="pswp__top-bar">

          <!--  Controls are self-explanatory. Order can be changed. -->

          <div class="pswp__counter"></div>

          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

          <button class="pswp__button pswp__button--share" title="Share"></button>

          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

          <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
          <!-- element will get class pswp__preloader active when preloader is running -->
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div>

        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
        </button>

        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
        </button>

        <div class="pswp__caption">
          <div class="pswp__caption__center"></div>
        </div>

      </div>

    </div>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/dist/js/jquery.min.js"><\/script>')</script>
  <script src="<?php echo get_template_directory_uri(); ?>/dist/js/photoswipe.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/dist/js/photoswipe-ui-default.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/dist/js/parallax.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/dist/js/owl.carousel.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/dist/js/script.js"></script>
  </body>
	<?php wp_footer(); ?>
</html>
