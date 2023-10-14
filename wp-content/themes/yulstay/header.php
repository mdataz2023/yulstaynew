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
    <style>
        .active-nav-link{
            color: #0093a6 !important;
        }
    </style>
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
                                <a href="<?php bloginfo('url'); ?>/" <?php if(get_the_ID() == '6') { ?> class="active-nav-link"<?php } ?>><?php _e('Home','theme-text-domain'); ?></a>
                            </li>
                            <li class="list-inline-item">
                            <span class="navproperty" <?php if (get_the_ID() == '34' || get_the_ID() == '36' || get_the_ID() == '38' || get_the_ID() == '476' || get_the_ID() == '541' || get_the_ID() == '542') { ?> style="color: #0093a6 !important;" <?php } ?>><?php _e('Properties','theme-text-domain'); ?></span>
                                <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="<?php bloginfo('url'); ?>/residential" <?php if(get_the_ID() == '34' || get_the_ID() == '476') { ?> class="active-nav-link"<?php } ?>><?php _e('Residential','theme-text-domain'); ?></a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/multi-residential" <?php if(get_the_ID() == '38' || get_the_ID() == '541') { ?> class="active-nav-link"<?php } ?>><?php _e('Multi Residential','theme-text-domain'); ?></a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/rental-property" <?php if(get_the_ID() == '36' || get_the_ID() == '542') { ?> class="active-nav-link"<?php } ?>><?php _e('Rental + Management','theme-text-domain'); ?></a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php bloginfo('url'); ?>/teams" <?php if(get_the_ID() == '549' || get_the_ID() == '551') { ?> class="active-nav-link"<?php } ?>><?php _e('Team','theme-text-domain'); ?></a>
                            </li>
                            <li class="list-inline-item pxp-is-last"><a href="<?php bloginfo('url'); ?>/contact" <?php if(get_the_ID() == '8' || get_the_ID() == '543') { ?> class="active-nav-link"<?php } ?>><?php _e('Contact Us','theme-text-domain'); ?></a></li>
                            <li class="list-inline-item">
                                <a href="<?php bloginfo('url'); ?>/join-our-team" <?php if(get_the_ID() == '76' || get_the_ID() == '544') { ?> class="active-nav-link"<?php } ?>><?php _e('Join Our Team','theme-text-domain'); ?></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><?php _e('Yulstay +','theme-text-domain'); ?></a>
                                <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="blog.html"><?php _e('Pod Casts','theme-text-domain'); ?></a></li>
                                    <li><a href="single-post.html"><?php _e('Shop','theme-text-domain'); ?></a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item">
                            <!-- <?php
                                if (has_nav_menu('main-lang')) {
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'main-lang',
                                            'menu_class'     => 'main-lang', 
                                        )
                                    );
                                }
                            ?> -->
                            <?php
                            if (has_nav_menu('main-lang')) {
                                $menu_items = wp_get_nav_menu_items('main-lang');

                                foreach ($menu_items as $item) {
                                    if ($item->title === 'English') {
                                        $item->title = 'EN';
                                    } elseif ($item->title === 'French') {
                                        $item->title = 'FN';
                                    }
                                }

                                // Display the modified menu
                                wp_nav_menu(
                                    array(
                                        'menu' => $menu_items,
                                        'menu_class' => 'main-lang',
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