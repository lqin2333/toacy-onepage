<?php
/**
 * Blog Category Page
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

        <!-- Posts List -->
        <div class="col-sm-8 col-md-offset-1">
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>           
            <!-- Post -->
            <div class="blog-item">
              
              <!-- Post Title -->
              <h2 class="blog-item-title font-alt"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
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
                  <?php the_excerpt(); ?>
                </p>
              </div>
              
              <!-- Read More Link -->
              <div class="blog-item-foot">
                  <a href="<?php the_permalink();?>" class="btn btn-mod btn-round  btn-small">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
            <!-- End Post -->
            <?php endwhile; ?>
          <?php endif; ?> 

          <!-- Pagination -->
          <div class="pagination">
            <a href=""><i class="fa fa-angle-left"></i></a>
            <a href="" class="active">1</a>
            <a href="">2</a>
            <a href="">3</a>
            <a class="no-active">...</a>
            <a href="">9</a>
            <a href=""><i class="fa fa-angle-right"></i></a>
          </div>
          <!-- Pagination End -->
        </div>
        <!-- End Posts List -->

        

      </div><!-- End Row -->

    </div><!-- End Container -->
  </section>



<?php get_footer(); ?>
