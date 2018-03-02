<?php
/**
 * Single Blog Page
 *
 * @package WordPress
 * @subpackage Toacy Onepage
 * @since Toacy Onepage 1.0
 */
?>

<?php get_header(); ?>

  <section class="small-section bg-gray-lighter blog-breadcrumbs">
    <div class="relative container align-left">
        
        <div class="row">
            
            <div class="col-md-4">
                <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Blog</h1>
                <div class="hs-line-4 font-alt black">
                    We share our best ideas in our blog
                </div>
            </div>
            
            <div class="col-md-8 mt-30">
                <div class="mod-breadcrumbs font-alt align-right">
                  <?php the_breadcrumb(); ?>
                </div>
                
            </div>
        </div>
        
    </div>
  </section>


    <section class="page-section">
      <div class="container relative">
        <div class="row">
          <!-- Sidebar -->
          <div class="col-sm-4 col-md-3 sidebar">
            <?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
              <?php dynamic_sidebar( 'blog-sidebar' ); ?>
            <?php endif; ?>
          </div>
          <!-- End Sidebar -->

          <div class="col-sm-8 col-md-offset-1">
          <?php while (have_posts()) : the_post(); ?>           
            <!-- Post -->
            <div class="blog-item">
              <!-- Post Title -->
              <h2 class="blog-item-title font-alt"><?php the_title(); ?></h2>
              <!-- Author, Categories, Comments -->
              <div class="blog-item-data">
                <i class="fa fa-clock-o"></i> <?php echo get_the_date(); ?>
                <span class="separator">&nbsp;</span>
              </div>

              <!-- Featured Image -->
              <?php if( has_post_thumbnail() ) : ?>
              <div class="blog-media">
                  <a href="<?php the_permalink();?>"><?php the_post_thumbnail( 'full' ); ?></a>
              </div>
              <?php endif; ?>

              <!-- Text Intro -->
              <div class="blog-item-body">
                <p>
                  <?php the_content(); ?>
                </p>
              </div>
            </div>
            <!-- End Post -->
          <?php endwhile; ?>
            <div class="clearfix mt-40">
                <a href="#" class="blog-item-more left"><i class="fa fa-angle-left"></i>&nbsp;Prev post</a>
                <a href="#" class="blog-item-more right">Next post&nbsp;<i class="fa fa-angle-right"></i></a>
            </div>
          </div>

        </div>
        <!-- End Row -->
      </div>
    </section>

<?php get_footer(); ?>
