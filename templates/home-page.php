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
    <section class="home-section bg-gray bg-light-alfa-50 parallax-2" data-background="<?php bloginfo('template_url'); ?>/images/full-width-images/home-bg1.jpg" id="home">
        <div class="js-height-full">
            
            <!-- Hero Content -->
            <div class="home-content container">
  
                <!-- Video BG Init -->
                <div class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=BsafeSHN_II',containment:'#home',autoPlay:true, showControls:false, showYTLogo: false, mute:true, startAt:0, opacity:1}"></div>

               
                 <!-- End Video BG Init -->
                <div class="home-text">
                    
                    <h1 class="hs-line-8 no-transp font-alt mb-50 mb-xs-30">设计 / 开发 / 推广</h1>
                    <h2 class="typewrite font-alt mb-50 mb-xs-30" data-period="2000" data-type='[ "专业的网站设计,开发及推广团队", "有效的互联网营销方案","让您在众多竞争者中脱颖而出！" ]'>
                        <span class="wrap"></span>
                    </h2>
                    <div class="mb-10  local-scroll scrollto-next-section">
                        <a href="#about" class="btn btn-mod btn-large btn-round">了解一下</a>
                    </div>
                    
                    
                </div>
            
            </div><!-- End Hero Content -->
            
            <!-- Scroll Down -->
            <div class="local-scroll scrollto-next-section">
                <a href="#about" class="scroll-down"><i class="fa fa-angle-down scroll-down-icon"></i></a>
            </div>
            <!-- End Scroll Down -->
            
        </div>
    </section>
    <!-- End Home Section -->

    <?php if ( is_active_sidebar( 'home-sections' ) ) : ?>
      <!-- <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary"> -->
        <?php dynamic_sidebar( 'home-sections' ); ?>
      <!-- </div> --><!-- #primary-sidebar -->
    <?php endif; ?>

<?php get_footer(); ?>