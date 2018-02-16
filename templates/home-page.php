<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Toacy Onepage
 * @since Toacy Onepage 1.0
 */
?>
<?php get_header(); ?>

    <!-- Home Section -->
    <section class="home-section bg-gray bg-light-alfa-50 parallax-2" data-background="<?php bloginfo('template_url'); ?>/images/full-width-images/section-bg-7.jpg" id="home">
        <div class="js-height-full">
            
            <!-- Hero Content -->
            <div class="home-content container">
  
            <!-- Video BG Init -->
            <div class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=BsafeSHN_II',containment:'#home',autoPlay:true, showControls:false, showYTLogo: false, mute:true, startAt:0, opacity:1}">
            </div>
             <!-- End Video BG Init -->
  
                <div class="home-text">
                    
                    <h1 class="hs-line-8 no-transp font-alt mb-50 mb-xs-30">
                        Branding / Design / Development / Photo
                    </h1>
                    
                    <h2 class="hs-line-14 font-alt mb-50 mb-xs-30">
                        We love design
                    </h2>
                    
                    <div class="local-scroll">
                        <a href="#about" class="btn btn-mod btn-medium btn-round hidden-xs">See More</a>
                        <span class="hidden-xs">&nbsp;</span>
                        <a href="pages-pricing-1.html" class="btn btn-mod btn-medium btn-round">Get Pricing</a>
                    </div>
                    
                </div>
            </div>
            <!-- End Hero Content -->
            
            <!-- Scroll Down -->
            <div class="local-scroll">
                <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
            </div>
            <!-- End Scroll Down -->
            
        </div>
    </section>
    <!-- End Home Section -->

    <?php if ( is_active_sidebar( 'home-sections' ) ) : ?>
      <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'home-sections' ); ?>
      </div><!-- #primary-sidebar -->
    <?php endif; ?>

<?php get_footer(); ?>