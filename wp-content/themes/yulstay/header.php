<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?osaiduu">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?pas">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?lokas">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?asdsdd">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?asld">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?asdpo">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/photoswipe.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/default-skin/default-skin.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?sadswq">

        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="pxp-header fixed-top pxp-animate pxp-no-bg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-5 col-md-2">
                        <a href="<?php bloginfo('url'); ?>/" class="pxp-logo text-decoration-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/yulstay-logo.png" style="width: 6rem;" alt="">
                        </a>
                        <!-- <a href="<?php bloginfo('url'); ?>/"></a> -->
                    </div>
                    <div class="col-2 col-md-8 text-center">
                        <ul class="pxp-nav list-inline">
                            <li class="list-inline-item">
                                <a href="<?php bloginfo('url'); ?>/">Home</a>
                                <!-- <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="index.html">Version 1</a></li>
                                    <li><a href="index-2.html">Version 2</a></li>
                                    <li><a href="index-3.html">Version 3</a></li>
                                    <li><a href="index-4.html">Version 4</a></li>
                                    <li><a href="index-5.html">Version 5</a></li>
                                    <li><a href="index-6.html">Version 6</a></li>
                                </ul> -->
                            </li>
                            <li class="list-inline-item">
                            <span style="text-transform: uppercase; font-weight: 700; color: #000; text-decoration: none;">Properties</span>
                                <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="<?php bloginfo('url'); ?>/residential">Residential</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/multi-residential">Multi Residential</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/rental-property">Rental + Management</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php bloginfo('url'); ?>/teams">Team</a>
                            </li>
                                <!-- <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="agents.html">All Agents</a></li>
                                    <li><a href="single-agent.html">Single Agent</a></li>
                                </ul> -->
                            
                            <li class="list-inline-item pxp-is-last"><a href="<?php bloginfo('url'); ?>/contact">Contact Us</a></li>
                            <!-- <li class="list-inline-item pxp-has-btns">
                                <div class="pxp-user-btns">
                                    <a href="#" class="pxp-user-btns-signup pxp-signup-trigger">Sign Up</a>
                                    <a href="#" class="pxp-user-btns-login pxp-signin-trigger">Sign In</a>
                                </div>
                            </li> -->
                            <li class="list-inline-item">
                                <a href="<?php bloginfo('url'); ?>/join-our-team">Join Our Team</a>
                                <!-- <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="../light/index.html">Light</a></li>
                                    <li><a href="../dark/index.html">Dark</a></li>
                                </ul> -->
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Yulstay +</a>
                                <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="blog.html">Pod Casts</a></li>
                                    <li><a href="single-post.html">Shop</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item">
                            <?php
                                if (has_nav_menu('main-lang')) {
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'main-lang',
                                            'menu_class'     => 'main-lang', 
                                        )
                                    );
                                }
                            ?>
                            </li>
                        </ul>
                    </div>
                    <div class="col-5 col-md-2 text-right">
                        <a href="javascript:void(0);" class="pxp-header-nav-trigger"><span class="fa fa-bars"></span></a>
                        <!-- <a href="javascript:void(0);" class="pxp-header-user pxp-signin-trigger"><span class="fa fa-user-o"></span></a> -->
                        
                    </div>
                </div>
            </div>
        </div>