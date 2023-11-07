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

        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
        <div class="pxp-header fixed-top pxp-animate">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-5 col-md-2">
                        <a href="index.html" class="pxp-logo text-decoration-none">resideo.</a>
                    </div>
                    <div class="col-2 col-md-8 text-center">
                        <ul class="pxp-nav list-inline">
                            <li class="list-inline-item">
                                <a href="#">Home</a>
                                <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="index.html">Version 1</a></li>
                                    <li><a href="index-2.html">Version 2</a></li>
                                    <li><a href="index-3.html">Version 3</a></li>
                                    <li><a href="index-4.html">Version 4</a></li>
                                    <li><a href="index-5.html">Version 5</a></li>
                                    <li><a href="index-5.html">Version 5</a></li>
                                    <li><a href="index-6.html">Version 6</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Properties</a>
                                <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="properties.html">All Properties</a></li>
                                    <li><a href="single-property.html">Single Property</a></li>
                                    <li><a href="submit-property.html">Submit New Property</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Agents</a>
                                <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="agents.html">All Agents</a></li>
                                    <li><a href="single-agent.html">Single Agent</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Blog</a>
                                <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="blog.html">All Blog Posts</a></li>
                                    <li><a href="single-post.html">Single Blog Post</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Themes</a>
                                <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="../light/index-2.html">Light</a></li>
                                    <li><a href="../dark/index-2.html">Dark</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item pxp-is-last"><a href="contact.html">Contact Us</a></li>
                            <li class="list-inline-item pxp-has-btns">
                                <div class="pxp-user-btns">
                                    <a href="#" class="pxp-user-btns-signup pxp-signup-trigger">Sign Up</a>
                                    <a href="#" class="pxp-user-btns-login pxp-signin-trigger">Sign In</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-5 col-md-2 text-right">
                        <a href="javascript:void(0);" class="pxp-header-nav-trigger"><span class="fa fa-bars"></span></a>
                        <a href="javascript:void(0);" class="pxp-header-user pxp-signin-trigger"><span class="fa fa-user-o"></span></a>
                    </div>
                </div>
            </div>
        </div>