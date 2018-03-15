<!DOCTYPE html>
<html>
    <head>
        <title><?php echo get_the_title(); ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Roman Kirichik">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/images/apple-touch-icon-114x114.png">
        
        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/css/style.css">
        <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/css/style-responsive.css">
        <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/css/animate.min.css">
        <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/css/vertical-rhythm.min.css">
        <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/css/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/css/fontawesome-all.min.css">
        <!-- <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="<?php echo get_site_url(); ?>/wp-content/themes/toacy-onepage/style.css">
        <!-- <link rel="stylesheet" href="css/main.min.css">  -->

        <?php wp_head(); ?>

    </head>
    <body class="appear-animate">

       <!-- Page Loader -->        
        <div class="page-loader">
            <div class="loader">Loading...</div>
        </div>
        <!-- End Page Loader -->
        <!-- Page Wrap -->
        <div class="page" id="top">

        <!-- Navigation panel -->
        <nav class="main-nav transparent stick-fixed">
            <div class="full-wrapper relative clearfix">
                <div class="nav-logo-wrap local-scroll">
                    <a href="#top" class="logo">
                        <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="seed tech" />
                    </a>
                </div>
                <div class="mobile-nav">
                    <i class="fa fa-bars"></i>
                </div>
                <!-- Main Menu -->      
                    <?php
                        wp_nav_menu( array(
                            'menu'              => 'main-menu',
                            'theme_location'    => 'main-menu',
                            'depth'             => 3,
                            'container'         => 'div',
                            'container_class'   => 'inner-nav desktop-nav',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'clearlist scroll-nav local-scroll',
                            )
                        );
                    ?>  
            </div>
        </nav>
        <!-- End Navigation panel -->




  

        


