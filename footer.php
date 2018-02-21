

            <!-- Foter -->
      <footer class="page-section bg-gray-lighter footer pb-60 ">
          <div class="container">
              
              <!-- Footer Logo -->
              <div class="local-scroll mb-30 wow fadeInUp" data-wow-duration="1.2s">
                  <a href="#top"><img src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/images/logo-footer.png" width="78" height="36" alt="" /></a>
              </div>
              <!-- End Footer Logo -->
              
              <!-- Social Links -->
              <div class="footer-social-links mb-110 mb-xs-60">
                  <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                  <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                  <a href="#" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                  <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                  <a href="#" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
              </div>
              <!-- End Social Links -->  
              
              <!-- Footer Text -->
              <div class="footer-text">
                  
                  <!-- Copyright -->
                  <div class="footer-copy font-alt">
                      <a href="http://themeforest.net/user/theme-guru/portfolio" target="_blank">&copy; Rhythm 2016</a>.
                  </div>
                  <!-- End Copyright -->
                  
                  <div class="footer-made">
                      Made with love for great people.
                  </div>
                  
              </div>
              <!-- End Footer Text --> 
              
           </div>
           
           
           <!-- Top Link -->
           <div class="local-scroll">
               <a href="#top" class="link-to-top"><i class="fa fa-caret-up"></i></a>
           </div>
           <!-- End Top Link -->


            <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
            <p>
              <a href="#">Back to top</a>
            </p>
            
      </footer>
      <!-- End Foter -->
      <?php wp_footer(); ?>
    </div>
      <!-- End Page Wrap -->


      <!-- in theme -->

      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/jquery-1.11.2.min.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/jquery.easing.1.3.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/bootstrap.min.js"></script>        
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/SmoothScroll.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/jquery.scrollTo.min.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/jquery.localScroll.min.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/jquery.viewport.mini.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/jquery.countTo.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/jquery.appear.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/jquery.sticky.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/jquery.parallax-1.1.3.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/jquery.fitvids.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/isotope.pkgd.min.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/imagesloaded.pkgd.min.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/jquery.magnific-popup.min.js"></script>

      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/gmap3.min.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/wow.min.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/masonry.pkgd.min.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/jquery.simple-text-rotator.min.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/all.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/contact-form.js"></script>
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/jquery.ajaxchimp.min.js"></script>      
      <script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/js/jquery.mb.YTPlayer.js"></script>       
      <!--[if lt IE 10]><script type="text/javascript" src="js/placeholder.js"></script><![endif]-->
      <!-- -->

       <script>
          // let value = 0;
          // let lastScrollTop = 0;
          // $( window ).scroll(function(event) {

          //    let st = $(this).scrollTop();
          //    if (st > lastScrollTop){
          //       value += 30;
          //    } else {
          //       value -= 30;
          //    }
          //    lastScrollTop = st;

              
          //     $('.player').css({"transform": "translate3d(0px, " + value + "px, 0px)"});
          // });

           $(window).on('load scroll', function () {
              var scrolled = $(this).scrollTop();
              // $('.mbYTP_wrapper').css({
              //     'transform': 'translate3d(0, ' + -(scrolled * 0.2) + 'px, 0)', // parallax (20% scroll rate)
              //     'opacity': 1 - scrolled / 400 // fade out at 400px from top
              // });
              $('.mbYTP_wrapper').css('transform', 'translate3d(0, ' + (scrolled * 0.25) + 'px, 0)'); // parallax (25% scroll rate)
              //$('#').css('height', 'translate3d(0, ' + -(scrolled * 0.25) + 'px, 0)'); // parallax (25% scroll rate)
              
          });


           // transform: translate3d(0px, 163.5px, 0px);
        </script>

  </body>
</html>
