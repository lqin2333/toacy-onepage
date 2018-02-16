<?php get_header(); ?>



        <?php if ( is_active_sidebar( 'home-sections' ) ) : ?>
          <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
            <?php dynamic_sidebar( 'home-sections' ); ?>
          </div><!-- #primary-sidebar -->
        <?php endif; ?>
<?php get_footer(); ?>
