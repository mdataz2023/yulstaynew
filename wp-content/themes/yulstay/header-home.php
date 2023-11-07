<!doctype html>


<?php
error_reporting(0);
// $zipFolder    = '/home/customer/www/mdataz.com/public_html/yulstaynew/listing-files/';
// $unzipFolder    = '/home/customer/www/mdataz.com/public_html/yulstaynew/listing-files/';
// $backupFolder    = '/home/customer/www/mdataz.com/public_html/yulstaynew/listing-files/backup/';
// $files1 = scandir($zipFolder);
// $pattern = '/[\n]/';
global $wpdb;
$lang = get_bloginfo("language");
$currencyLetterPrefix="";
$currencyLetterSuffix="";
if ($lang == 'en-US'){
    $currencyLetterPrefix="$ ";
}else{
    $currencyLetterSuffix=" $";
}
 ?>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/photoswipe.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <style>
        .active-nav-link-home{
            color: #0093a6 !important;
        }
        .checked {
            color: orange;
        }
    </style>
    <div class="pxp-header fixed-top pxp-animate">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-5 col-md-2">
                    <!-- <a href="<?php bloginfo('url'); ?>/" class="pxp-logo text-decoration-none">Yulstay</a> -->
                    <a href="<?php bloginfo('url'); ?>/" class="pxp-logo text-decoration-none">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/YULSTAY-NAV.png"
                            style="width: 8rem;" alt="">
                    </a>
                </div>
                <div class="col-2 col-md-8 text-center">
                    <ul class="pxp-nav list-inline">
                        <li class="list-inline-item">
                            <a href="<?php bloginfo('url'); ?>/"  <?php if(get_the_ID() == '6' || get_the_ID() == '495') { ?> class="active-nav-link-home"<?php } ?>><?php _e('Home','theme-text-domain'); ?></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="navproperty-home"><?php _e('Properties','theme-text-domain'); ?></a>
                            <ul class="pxp-nav-sub rounded-lg">
                                <li><a href="<?php bloginfo('url'); ?>/residential"><?php _e('Residential','theme-text-domain'); ?></a></li>
                                <li><a href="<?php bloginfo('url'); ?>/multi-residential"><?php _e('Multi Residential','theme-text-domain'); ?></a></li>
                                <li><a href="<?php bloginfo('url'); ?>/rental-property"><?php _e('Rental Property','theme-text-domain'); ?></a></li>
                            </ul>
                        </li>
                        <li class="list-inline-item">
                            <a href="<?php bloginfo('url'); ?>/teams"><?php _e('Team','theme-text-domain'); ?></a>
                        </li>
                        <li class="list-inline-item pxp-is-last"><a href="<?php bloginfo('url'); ?>/contact"><?php _e('Contact Us','theme-text-domain'); ?></a></li>
                        <li class="list-inline-item">
                            <a href="<?php bloginfo('url'); ?>/join-our-team"><?php _e('Join Our Team','theme-text-domain'); ?></a>
                        </li>
                        <!-- <li class="list-inline-item">
                            <a href="#"><?php _e('Yulstay +','theme-text-domain'); ?></a>
                            <ul class="pxp-nav-sub rounded-lg">
                                <li><a href="blog.html"><?php _e('Pod Casts','theme-text-domain'); ?></a></li>
                                <li><a href="single-post.html"><?php _e('Shop','theme-text-domain'); ?></a></li>
                            </ul>
                        </li> -->
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

    <style>
          .wpml-ls-flag{
    width: 19px;
  }

  .wpml-ls-item{
    list-style-type: none;
  }

  #menu-main-lang{
    padding-top: 12px;
    padding-left: 0px;
  }
    </style>