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
            
            <div class="col-md-8">
                <h1 class="hs-line-11 font-alt mb-20 mb-xs-0">Blog</h1>
                <div class="hs-line-4 font-alt black">
                    We share our best ideas in our blog
                </div>
            </div>
            
            <div class="col-md-4 mt-30">
                <div class="mod-breadcrumbs font-alt align-right">
                    <a href="#">Home</a>&nbsp;/&nbsp;<a href="#">Blog</a>&nbsp;/&nbsp;<span>Classic</span>
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
            
            <!-- Search Widget -->
            <div class="widget">
              <form class="form-inline form" role="form">
                <div class="search-wrap">
                  <button class="search-button animate" type="submit" title="Start Search">
                    <i class="fa fa-search"></i>
                  </button>
                  <input type="text" class="form-control search-field" placeholder="Search...">
                </div>
              </form>
            </div>
            <!-- End Search Widget -->
            
            <!-- Widget -->
            <div class="widget">
              <h5 class="widget-title font-alt">Categories</h5>
              <div class="widget-body">
                <ul class="clearlist widget-menu">
                  <li>
                    <a href="#" title="">Branding</a>
                    <small>
                      - 7
                    </small>
                  </li>
                  <li>
                    <a href="#" title="">Design</a>
                    <small>
                      - 15
                    </small>
                  </li>
                  <li>
                    <a href="#" title="">Development</a>
                    <small>
                      - 3
                    </small>
                  </li>
                  <li>
                    <a href="#" title="">Photography</a>
                    <small>
                      - 5
                    </small>
                  </li>
                  <li>
                    <a href="#" title="">Other</a>
                    <small>
                      - 1
                    </small>
                  </li>
                </ul>
              </div>
            </div>
            <!-- End Widget -->

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
