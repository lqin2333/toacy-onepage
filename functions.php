<?php

/*============= init css and scripts =============*/
function toacy_script_enqueue()
{
    //wp_enqueue_style('toacystyle-skin', get_template_directory_uri().'/css/skin/skin1.css', array(), '1.0', 'all');
   //wp_enqueue_script('toacyjs', get_template_directory_uri().'/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'toacy_script_enqueue');

/*============= replace default menu class name =============*/
function change_submenu_class($menu)
{
    $menu = preg_replace('/ class="sub-menu"/', '/ class="drop-down" /', $menu);
    return $menu;
}
add_filter('wp_nav_menu', 'change_submenu_class');

/*============= init widgets =============*/
function toacy_onepage_widgets_init()
{
    register_sidebar(array(
      'name'          => "Home Sections",
      'id'            => 'home-sections',
      'description'   => __('Add page widgets here to appear in home page.', 'toacy-onepage'),
      'before_widget' => '<section>',
      'after_widget'  => '</section><hr class="mt-0 mb-0 ">',
      'before_title'  => '<h2 class="section-title font-alt align-left mb-70 mb-sm-40">',
      'after_title'   => '</h2>',
   ));

    register_sidebar(array(
      'name'          => "Blog Sidebar",
      'id'            => 'blog-sidebar',
      'description'   => __('Add widgets here to appear in blog sidebar.', 'toacy-onepage'),
      'before_widget' => '<div class="sidebar-widget">',
      'after_widget'  => '</div>',
   ));

    register_sidebar(array(
      'name'          => "Footer Sidebar",
      'id'            => 'footer-sidebar',
      'description'   => __('Add widgets here to appear in footer.', 'toacy-onepage'),
      'before_widget' => '<div class="footer-widget">',
      'after_widget'  => '</div>',
   ));
}
add_action('widgets_init', 'toacy_onepage_widgets_init');
add_theme_support('post-thumbnails');

/*============= Register and load the widget =============*/
function wpb_load_widget()
{
    register_widget("one_page_section_widget");
    register_widget("one_page_parallax_section_widget");
}
add_action('widgets_init', 'wpb_load_widget');
 
/*============= normal page section =============*/
class one_page_section_widget extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = array( 'classname' => 'widget_page_section', 'description' => __('Show the page in section.', 'toacy-onepage') );
        $control_ops = array( 'width' => 200, 'height' =>250 );
        parent::__construct(false, $name = __('TOACY: Page as section', 'toacy-onepage'), $widget_ops, $control_ops);
    }

    public function form($instance)
    {
        $defaults[ 'menu_id' ] = '';
        $defaults[ 'title' ] = '';
        $defaults[ 'text' ] = '';
        $defaults[ 'page_id' ] = '';
        $defaults[ 'button_text' ] = '';
        $defaults[ 'button_url' ] = '';
        $defaults[ 'button_icon' ] = '';

        $instance = wp_parse_args((array) $instance, $defaults);

        $menu_id = esc_attr($instance[ 'menu_id' ]);
        $title = esc_attr($instance[ 'title' ]);
        $text = esc_textarea($instance['text']);
        $page_id = absint($instance[ 'page_id' ]);
        $button_text = esc_attr($instance[ 'button_text' ]);
        $button_url = esc_url($instance[ 'button_url' ]);
        $button_icon = esc_attr($instance[ 'button_icon' ]); ?>
      <p><?php _e('Note: Enter the Page Section ID and use same for Menu item. Only used for One Page Menu.', 'toacy-onepage'); ?></p>

      <p>
         <label for="<?php echo $this->get_field_id('menu_id'); ?>"><?php _e('Page Section ID:', 'toacy-onepage'); ?></label>
         <input id="<?php echo $this->get_field_id('menu_id'); ?>" name="<?php echo $this->get_field_name('menu_id'); ?>" type="text" value="<?php echo $menu_id; ?>" />
      </p>

      <p>
         <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'toacy-onepage'); ?></label>
         <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
      </p>

      <?php _e('Description:', 'toacy-onepage'); ?>
      <textarea class="widefat" rows="5" cols="20" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>

      <p><?php _e('Select a page to display Title, Excerpt and Featured image.', 'toacy-onepage') ?></p>
      <label for="<?php echo $this->get_field_id('page_id'); ?>"><?php _e('Page', 'toacy-onepage'); ?>:</label>
      <?php wp_dropdown_pages(array( 'show_option_none' =>' ','name' => $this->get_field_name('page_id'), 'selected' => $instance[ 'page_id' ] )); ?>

      <p>
         <label for="<?php echo $this->get_field_id('button_text'); ?>"><?php _e('Button Text:', 'toacy-onepage'); ?></label>
         <input id="<?php echo $this->get_field_id('button_text'); ?>" name="<?php echo $this->get_field_name('button_text'); ?>" type="text" value="<?php echo $button_text; ?>" />
      </p>

      <p>
         <label for="<?php echo $this->get_field_id('button_url'); ?>"><?php _e('Button Redirect Link:', 'toacy-onepage'); ?></label>
         <input id="<?php echo $this->get_field_id('button_url'); ?>" name="<?php echo $this->get_field_name('button_url'); ?>" type="text" value="<?php echo $button_url; ?>" />
      </p>

      <p>
         <label for="<?php echo $this->get_field_id('button_icon'); ?>"><?php _e('Button Icon Class:', 'toacy-onepage'); ?></label>
         <input id="<?php echo $this->get_field_id('button_icon'); ?>" name="<?php echo $this->get_field_name('button_icon'); ?>" placeholder="fa-cog" type="text" value="<?php echo $button_icon; ?>" />
      </p>
      <p>
         <?php
         $url = 'http://fontawesome.io/icons/';
        $link = sprintf(__('<a href="%s" target="_blank">Refer here</a> For Icon Class', 'toacy-onepage'), esc_url($url));
        echo $link; ?>
      </p>
   <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance[ 'menu_id' ] = sanitize_text_field($new_instance[ 'menu_id' ]);
        $instance[ 'title' ] = sanitize_text_field($new_instance[ 'title' ]);

        if (current_user_can('unfiltered_html')) {
            $instance[ 'text' ] =  $new_instance[ 'text' ];
        } else {
            $instance[ 'text' ] = stripslashes(wp_filter_post_kses(addslashes($new_instance[ 'text' ])));
        } // wp_filter_post_kses() expects slashed

        $instance[ 'page_id' ] = absint($new_instance[ 'page_id' ]);
        $instance[ 'button_text' ] = sanitize_text_field($new_instance[ 'button_text' ]);
        $instance[ 'button_url' ] = esc_url_raw($new_instance[ 'button_url' ]);
        $instance[ 'button_icon' ] = sanitize_text_field($new_instance[ 'button_icon' ]);

        return $instance;
    }

    public function widget($args, $instance)
    {
        extract($args);
        extract($instance);

        global $post;
        $menu_id = isset($instance[ 'menu_id' ]) ? $instance[ 'menu_id' ] : '';
        $title = apply_filters('widget_title', isset($instance[ 'title' ]) ? $instance[ 'title' ] : '');
        $text = apply_filters('widget_text', empty($instance[ 'text' ]) ? '' : $instance['text'], $instance);
        $page_id = isset($instance[ 'page_id' ]) ? $instance[ 'page_id' ] : '';
        $button_text = isset($instance[ 'button_text' ]) ? $instance[ 'button_text' ] : '';
        $button_url = empty($instance[ 'button_url' ]) ? '#' : $instance[ 'button_url' ];
        $button_icon = isset($instance[ 'button_icon' ]) ? $instance[ 'button_icon' ] : '';

        $section_id = '';
        if (!empty($menu_id)) {
            $section_id = 'id="' . $menu_id . '"';
        }

        echo $before_widget; ?>
      <div <?php echo $section_id; ?>  class="page-section" >
         <div class="container relative">
               <div class="section-title-wrapper">
                  <?php if (!empty($title)) {
                        echo $before_title . esc_html($title) . $after_title;
                    }
                    if (!empty($text)) {
                        ?>
                                <h4 class="sub-title"><?php echo esc_textarea($text); ?></h4>
                            <?php
                    } ?>
               </div>

               <?php if ($page_id) : ?>
               <div class="page-content-wrapper tg-column-wrapper clearfix">
                  <?php
                  $the_query = new WP_Query('page_id='.$page_id);
        while ($the_query->have_posts()):$the_query->the_post();
        $title_attribute = the_title_attribute('echo=0');

        if (has_post_thumbnail()) {
            ?>
                        <div class="page-image tg-column-2">
                           <?php the_post_thumbnail('full'); ?>
                        </div>
                     <?php
        } ?>

                     <div class="page-content tg-column-2">
                        <?php
                        if (empty($title)) {
                            echo '<h2 class="section-title font-alt align-left mb-70 mb-sm-40">'.get_the_title().'</h2>';
                        }
        // $output = '<h2 class="page-title"> <a href="' . get_permalink() . '" title="' . $title_attribute . '" alt ="' . $title_attribute . '">' . get_the_title() . '</a></h2>';
        $output .= '<div class="section-text mb-50 mb-sm-20">' . '<p>' . the_content() . '</p></div>';

        // $output .= '<div class="page-btn"> <a href="'. get_permalink() . '">' . __( 'Read more', 'toacy-onepage' ) . '</a>';

        if (!empty($button_text)) {
            $output .= '<a href="' . $button_url . '">' . esc_html($button_text) . '<i class="fa ' . $button_icon . '"></i></a>';
        }
        //$output .= '</div>';

        echo $output; ?>
                     </div>
                  <?php endwhile;
        // Reset Post Data
        wp_reset_query(); ?>
            </div><!-- page-content-wrapper  -->
            <?php endif; ?>
      </div><!--  container relative -->
   </div> <!-- page-section -->
   <?php echo $after_widget;
    }
}



/*============= parallax background section =============*/
class one_page_parallax_section_widget extends WP_Widget
{
    public function __construct()
    {
        $widget_ops = array( 'classname' => 'parallax_section', 'description' => __('Show content with parallax background.', 'toacy-onepage') );
        $control_ops = array( 'width' => 200, 'height' =>250 );
        parent::__construct(false, $name = __('TOACY: Parallax background section', 'toacy-onepage'), $widget_ops, $control_ops);
    }

    public function form($instance)
    {
        $defaults[ 'menu_id' ] = '';
        $defaults[ 'title' ] = '';
        $defaults[ 'text' ] = '';
        $defaults[ 'page_id' ] = '';
        $defaults[ 'button_text' ] = '';
        $defaults[ 'button_url' ] = '';
        $defaults[ 'button_icon' ] = '';

        $instance = wp_parse_args((array) $instance, $defaults);

        $menu_id = esc_attr($instance[ 'menu_id' ]);
        $title = esc_attr($instance[ 'title' ]);
        $text = esc_textarea($instance['text']);
        $page_id = absint($instance[ 'page_id' ]);
        $button_text = esc_attr($instance[ 'button_text' ]);
        $button_url = esc_url($instance[ 'button_url' ]);
        $button_icon = esc_attr($instance[ 'button_icon' ]); ?>
      <p><?php _e('Note: Enter the Page Section ID and use same for Menu item. Only used for One Page Menu.', 'toacy-onepage'); ?></p>

      <p>
         <label for="<?php echo $this->get_field_id('menu_id'); ?>"><?php _e('Page Section ID:', 'toacy-onepage'); ?></label>
         <input id="<?php echo $this->get_field_id('menu_id'); ?>" name="<?php echo $this->get_field_name('menu_id'); ?>" type="text" value="<?php echo $menu_id; ?>" />
      </p>

      <p>
         <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'toacy-onepage'); ?></label>
         <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
      </p>

      <?php _e('Description:', 'toacy-onepage'); ?>
      <textarea class="widefat" rows="5" cols="20" id="<?php echo $this->get_field_id('text'); ?>" name="<?php echo $this->get_field_name('text'); ?>"><?php echo $text; ?></textarea>

      <p><?php _e('Select a page to display Title, Excerpt and Featured image.', 'toacy-onepage') ?></p>
      <label for="<?php echo $this->get_field_id('page_id'); ?>"><?php _e('Page', 'toacy-onepage'); ?>:</label>
      <?php wp_dropdown_pages(array( 'show_option_none' =>' ','name' => $this->get_field_name('page_id'), 'selected' => $instance[ 'page_id' ] )); ?>

      <p>
         <label for="<?php echo $this->get_field_id('button_text'); ?>"><?php _e('Button Text:', 'toacy-onepage'); ?></label>
         <input id="<?php echo $this->get_field_id('button_text'); ?>" name="<?php echo $this->get_field_name('button_text'); ?>" type="text" value="<?php echo $button_text; ?>" />
      </p>

      <p>
         <label for="<?php echo $this->get_field_id('button_url'); ?>"><?php _e('Button Redirect Link:', 'toacy-onepage'); ?></label>
         <input id="<?php echo $this->get_field_id('button_url'); ?>" name="<?php echo $this->get_field_name('button_url'); ?>" type="text" value="<?php echo $button_url; ?>" />
      </p>

      <p>
         <label for="<?php echo $this->get_field_id('button_icon'); ?>"><?php _e('Button Icon Class:', 'toacy-onepage'); ?></label>
         <input id="<?php echo $this->get_field_id('button_icon'); ?>" name="<?php echo $this->get_field_name('button_icon'); ?>" placeholder="fa-cog" type="text" value="<?php echo $button_icon; ?>" />
      </p>
      <p>
         <?php
         $url = 'http://fontawesome.io/icons/';
        $link = sprintf(__('<a href="%s" target="_blank">Refer here</a> For Icon Class', 'toacy-onepage'), esc_url($url));
        echo $link; ?>
      </p>
   <?php
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance[ 'menu_id' ] = sanitize_text_field($new_instance[ 'menu_id' ]);
        $instance[ 'title' ] = sanitize_text_field($new_instance[ 'title' ]);

        if (current_user_can('unfiltered_html')) {
            $instance[ 'text' ] =  $new_instance[ 'text' ];
        } else {
            $instance[ 'text' ] = stripslashes(wp_filter_post_kses(addslashes($new_instance[ 'text' ])));
        } // wp_filter_post_kses() expects slashed

        $instance[ 'page_id' ] = absint($new_instance[ 'page_id' ]);
        $instance[ 'button_text' ] = sanitize_text_field($new_instance[ 'button_text' ]);
        $instance[ 'button_url' ] = esc_url_raw($new_instance[ 'button_url' ]);
        $instance[ 'button_icon' ] = sanitize_text_field($new_instance[ 'button_icon' ]);

        return $instance;
    }

    public function widget($args, $instance)
    {
        extract($args);
        extract($instance);

        global $post;
        $menu_id = isset($instance[ 'menu_id' ]) ? $instance[ 'menu_id' ] : '';
        $title = apply_filters('widget_title', isset($instance[ 'title' ]) ? $instance[ 'title' ] : '');
        $text = apply_filters('widget_text', empty($instance[ 'text' ]) ? '' : $instance['text'], $instance);
        $page_id = isset($instance[ 'page_id' ]) ? $instance[ 'page_id' ] : '';
        $button_text = isset($instance[ 'button_text' ]) ? $instance[ 'button_text' ] : '';
        $button_url = empty($instance[ 'button_url' ]) ? '#' : $instance[ 'button_url' ];
        $button_icon = isset($instance[ 'button_icon' ]) ? $instance[ 'button_icon' ] : '';

        $section_id = '';
        if (!empty($menu_id)) {
            $section_id = 'id="' . $menu_id . '"';
        }

        if ($page_id) :
         $the_query = new WP_Query('page_id='.$page_id);
        while ($the_query->have_posts()):$the_query->the_post();

        $background_url = get_site_url().'/wp-content/themes/toacy-onepage/images/full-width-images/section-bg-2.jpg';
        if( has_post_thumbnail()){
           $background_url = get_the_post_thumbnail_url();
        }
        echo $before_widget; ?>
            <div <?php echo $section_id; ?>  class="page-section banner-section bg-dark"   
               style="background-image: url('<?php echo $background_url; ?>');">

                <div class="container relative">
                    <div class="section-title-wrapper">
                        <?php if (!empty($title)) {
                            echo $before_title . esc_html($title) . $after_title;
                        }
                        if (!empty($text)) {
                        ?>
                                <h4 class="sub-title"><?php echo esc_textarea($text); ?></h4>
                        <?php } ?>
                    </div>
                        <?php
                        $output .= the_content();
                        if (!empty($button_text)) {
                            $output .= '<a href="' . $button_url . '">' . esc_html($button_text) . '<i class="fa ' . $button_icon . '"></i></a>';
                        }
                        echo $output; 
                        ?>
               </div><!--  container relative -->
            </div> <!-- page-section -->
         <?php endwhile;
        // Reset Post Data
        wp_reset_query(); ?>
      <?php endif; ?>
   <?php echo $after_widget;
    }
}


/*
* Custom Categories Widget
* ONLY ONE LEVEL
*/
class Toacy_Categories_Widget extends WP_Widget
{
    public function Toacy_Categories_Widget()
    {
        $widget_ops = array( 'classname' => 'widget_categories', 'description' => __("My list or dropdown of categories") );
        $this->WP_Widget('my_categories', __('TOACY: Categories'), $widget_ops);
    }

    public function widget($args, $instance)
    {
        extract($args);

        $title = apply_filters('widget_title', empty($instance['title']) ? __('Categories') : $instance['title']);
        $c = $instance['count'] ? '1' : '0';
        $h = $instance['hierarchical'] ? '1' : '0';


        echo $before_widget;

        echo '<h5 class="widget-title font-alt">'.$title.'</h5>';

        $categories = get_categories(); ?>
      <ul class="clearlist widget-menu ">

      <?php 
            foreach ($categories as $categorie) {
                echo "<li class='fist-upper'><a href='#' title=''>".$categorie->cat_name."</a>\r";
                if ($c) {
                    echo "<small>- ".$categorie->category_count."</small>";
                }
                echo "</li>";
            } ?>
      </ul>

      <?php 
            echo $after_widget;
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['count'] = $new_instance['count'] ? 1 : 0;
        $instance['hierarchical'] = $new_instance['hierarchical'] ? 1 : 0;
        return $instance;
    }

    public function form($instance)
    {
        //Defaults
        $instance = wp_parse_args((array) $instance, array( 'title' => ''));
        $title = esc_attr($instance['title']);
        $count = isset($instance['count']) ? (bool) $instance['count'] :false;
        $hierarchical = isset($instance['hierarchical']) ? (bool) $instance['hierarchical'] : false; ?>
        <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>

        <input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('count'); ?>" name="<?php echo $this->get_field_name('count'); ?>"<?php checked($count); ?> />
        <label for="<?php echo $this->get_field_id('count'); ?>"><?php _e('Show post counts'); ?></label><br />

        <input type="checkbox" class="checkbox" id="<?php echo $this->get_field_id('hierarchical'); ?>" name="<?php echo $this->get_field_name('hierarchical'); ?>"<?php checked($hierarchical); ?> />
        <label for="<?php echo $this->get_field_id('hierarchical'); ?>"><?php _e('Show hierarchy'); ?></label></p>
<?php
    }
}

add_action('widgets_init', create_function('', "register_widget('Toacy_Categories_Widget');"));









/**
 * Generate breadcrumbs
 */
function the_breadcrumb()
{
    $sep = ' / ';
  
    if (!is_front_page()) {
        
        // Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;
        
        // Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single()) {
            the_category('title_li=');
        } elseif (is_archive() || is_single()) {
            if (is_day()) {
                printf(__('%s', 'text_domain'), get_the_date());
            } elseif (is_month()) {
                printf(__('%s', 'text_domain'), get_the_date(_x('F Y', 'monthly archives date format', 'text_domain')));
            } elseif (is_year()) {
                printf(__('%s', 'text_domain'), get_the_date(_x('Y', 'yearly archives date format', 'text_domain')));
            } else {
                _e('Blog Archives', 'text_domain');
            }
        }
        
        // If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
        
        // If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
        
        // if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()) {
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ($page_for_posts_id) {
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }
  
        echo '</div>';
    }
}