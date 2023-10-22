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
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900" rel="stylesheet">
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

    <?php
    /*
        Template Name: Home
    */
    ?>

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
                        <img src="<?php echo get_template_directory_uri(); ?>/images/yulstay-logo.png"
                            style="height: 2.75rem;" alt="">
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

    <div class="pxp-content">
        <div class="pxp-hero vh-100">
            <div class="pxp-hero-bg pxp-cover pxp-cover-bottom">
                <video class="home-video" autoplay loop muted playsinline>
                    <source src="https://mdataz.com/yulstaynew/wp-content/uploads/2023/10/Home-Video-Bg-1.mp4" type="video/mp4">
                    <!-- You can add additional source elements for different video formats (e.g., WebM, Ogg) -->
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="pxp-hero-opacity"></div>
            <div class="pxp-hero-caption">
                <div class="container">
                    <!-- <h1 class="text-white">Find your future home</h1> -->
                    <a href="<?php bloginfo('url'); ?>/">
                        <img class="yulstay-image" src="<?php echo get_template_directory_uri(); ?>/images/yulstay-logo.png" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- <div class="pxp-hero vh-100">
                <div class="pxp-hero-bg pxp-cover pxp-cover-bottom" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-big.jpg);"></div>
                <div class="pxp-hero-opacity"></div>
                <div class="pxp-hero-caption">
                    <div class="container">
                        <h1 class="text-white">Find your future home</h1>

                        <form class="pxp-hero-search mt-4" action="properties.html">
                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <select class="custom-select">
                                            <option selected>Buy</option>
                                            <option value="1">Rent</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control pxp-is-address" placeholder="Enter address...">
                                        <span class="fa fa-search"></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->

        <?php

            $home_banner_title = get_field('home_banner_title');
            $home_team_section_title = get_field('home_team_section_title');
            $home_team_section_description = get_field('home_team_section_description');
            $home_team_section_link = get_field('home_team_section_link');
            $home_why_choose_us_section_backgroud_image = get_field('home_why_choose_us_section_backgroud_image');
            $home_why_choose_us_section_title = get_field('home_why_choose_us_section_title');
            $home_why_choose_us_section_description = get_field('home_why_choose_us_section_description');
            $home_properties_section_title = get_field('home_properties_section_title');
            $home_properties_section_descripton = get_field('home_properties_section_descripton');
            $home_properties_section_page_link = get_field('home_properties_section_page_link');
            $home_search_section_background_image = get_field('home_search_section_background_image');
            $home_search_section_title = get_field('home_search_section_title');
            $home_search_section_description = get_field('home_search_section_description');
            $home_search_section_link = get_field('home_search_section_link');
            $home_page_testimonial_background_image = get_field('home_page_testimonial_background_image');
            $home_page_testimonial_title = get_field('home_page_testimonial_title');
            $home_page_testimonial_description = get_field('home_page_testimonial_description');
            $home_page_testimonial_link = get_field('home_page_testimonial_link');

            ?>

        <div class="container mt-100">
            <h2 class="pxp-section-h2"><?php echo $home_team_section_title; ?></h2>
            <p class="pxp-text-light"><?php echo $home_team_section_description; ?></p>

            <div class="row mt-4 mt-md-5">
                <?php $the_query = new WP_Query( array('post_type' =>'team','posts_per_page' => '4',  'post__not_in'   => array( $id),) );?>
                <?php if ( have_posts())   : while ( $the_query->have_posts() ) : $the_query->the_post();?>

                <?php
										$thumbnail_id = get_post_thumbnail_id();
										$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
										$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);

                    $categories = get_the_category();

										?>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a href="<?php the_permalink(); ?>" class="pxp-agents-1-item">
                        <?php if ( has_post_thumbnail() ) {
                                $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
                                //echo '<link rel="preload" as="image" href="' . esc_attr( $attachment_image ) . '">';
                            ?>
                        <div class="pxp-agents-1-item-fig-container rounded-lg">
                            <div class="pxp-agents-1-item-fig pxp-cover"
                                style="background-image: url(<?php echo $attachment_image; ?>); background-position: top center">
                            </div>
                        </div>
                        <?php } ?>
                        <div class="pxp-agents-1-item-details rounded-lg">
                            <div class="pxp-agents-1-item-details-name"><?php the_title(); ?></div>
                            <div class="pxp-agents-1-item-details-email"><span class="fa fa-phone"></span>
                                <?php echo get_field('team_member_telephone'); ?></div>
                            <div class="pxp-agents-1-item-details-spacer"></div>
                            <div class="pxp-agents-1-item-cta text-uppercase"><?php _e('More Details','theme-text-domain'); ?></div>
                        </div>
                        <div class="pxp-agents-1-item-rating"><span><span class="fa fa-star"></span><span
                                    class="fa fa-star"></span><span class="fa fa-star"></span><span
                                    class="fa fa-star"></span><span class="fa fa-star"></span></span></div>
                    </a>
                </div>
                <?php endwhile; endif; ?>
                <!-- <div class="col-sm-12 col-md-6 col-lg-3">
                        <a href="single-agent.html" class="pxp-agents-1-item">
                            <div class="pxp-agents-1-item-fig-container rounded-lg">
                                <div class="pxp-agents-1-item-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-agent.jpg); background-position: top center"></div>
                            </div>
                            <div class="pxp-agents-1-item-details rounded-lg">
                                <div class="pxp-agents-1-item-details-name">Alayna Becker</div>
                                <div class="pxp-agents-1-item-details-email"><span class="fa fa-phone"></span> (456) 123-7890</div>
                                <div class="pxp-agents-1-item-details-spacer"></div>
                                <div class="pxp-agents-1-item-cta text-uppercase">More Details</div>
                            </div>
                            <div class="pxp-agents-1-item-rating"><span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span></span></div>
                        </a>
                    </div> -->
            </div>

            <a href="<?php bloginfo('url'); ?>/team" class="pxp-primary-cta text-uppercase mt-1 mt-md-4 pxp-animate"><?php _e('See All Agents','theme-text-domain'); ?></a>
        </div>

        <div class="pxp-testim-1 pt-100 pb-100 mt-100 pxp-cover" style="background-image: url(images/ph-big.jpg);">
                <div class="pxp-testim-1-intro">
                    <h2 class="pxp-section-h2"><?php echo $home_team_section_title; ?></h2>
                    <p class="pxp-text-light"><?php echo $home_team_section_description; ?></p>
                    <a href="#" class="pxp-primary-cta text-uppercase mt-2 mt-md-3 mt-lg-5 pxp-animate">Read All Stories</a>
                </div>
                <div class="pxp-testim-1-container mt-4 mt-md-5 mt-lg-0">
                    <div class="owl-carousel pxp-testim-1-stage">
                            <?php $the_query = new WP_Query( array('post_type' =>'team','posts_per_page' => '10',  'post__not_in'   => array( $id),) );?>
                            <?php if ( have_posts())   : while ( $the_query->have_posts() ) : $the_query->the_post();?>

                            <?php
                                                $thumbnail_id = get_post_thumbnail_id();
                                                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                                                $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);

                            $categories = get_the_category();

                            ?>
                        <div>
                            <a href="<?php the_permalink(); ?>">
                                <div class="pxp-testim-1-item" style="height: 270px;">
                                    <?php if ( has_post_thumbnail() ) {
                                        $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
                                        //echo '<link rel="preload" as="image" href="' . esc_attr( $attachment_image ) . '">';
                                    ?>
                                    <div class="pxp-testim-1-item-avatar pxp-cover" style="background-image: url(<?php echo $attachment_image; ?>)"></div>
                                    <?php } ?>
                                    <div class="pxp-testim-1-item-name"><?php the_title(); ?></div>
                                    <div class="pxp-testim-1-item-location"><span class="fa fa-phone"></span> <?php echo get_field('team_member_telephone'); ?></div>
                                    <div class="pxp-testim-1-item-message">the exserpt</div>
                                </div>
                            </a>
                        </div>
                            <?php endwhile; endif; ?>
                        <!-- <div>
                            <div class="pxp-testim-1-item">
                                <div class="pxp-testim-1-item-avatar pxp-cover" style="background-image: url(images/ph-avatar.jpg)"></div>
                                <div class="pxp-testim-1-item-name">Rebecca Eason</div>
                                <div class="pxp-testim-1-item-location">Washington, MD</div>
                                <div class="pxp-testim-1-item-message">And it’s no wonder Resideo has shaken things up: As anyone who’s ever tried to rent or buy property in Washington knows, the experience is loaded with pain points.</div>
                            </div>
                        </div>
                        <div>
                            <div class="pxp-testim-1-item">
                                <div class="pxp-testim-1-item-avatar pxp-cover" style="background-image: url(images/ph-avatar.jpg)"></div>
                                <div class="pxp-testim-1-item-name">Kenneth Spiers</div>
                                <div class="pxp-testim-1-item-location">Cleveland, OH</div>
                                <div class="pxp-testim-1-item-message">While Resideo functions like a traditional broker, the company's promise is using technology to reduce the time and friction of  buying and selling house or apartment.</div>
                            </div>
                        </div>
                        <div>
                            <div class="pxp-testim-1-item">
                                <div class="pxp-testim-1-item-avatar pxp-cover" style="background-image: url(images/ph-avatar.jpg)"></div>
                                <div class="pxp-testim-1-item-name">Susanne Weil</div>
                                <div class="pxp-testim-1-item-location">Cambridge, MA</div>
                                <div class="pxp-testim-1-item-message">And it’s no wonder Resideo has shaken things up: As anyone who’s ever tried to rent or buy property in Cambridge knows, the experience is loaded with pain points.</div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

        <div class="pxp-services pxp-cover mt-100 pt-100 mb-200"
            style="background-image: url(<?php echo $home_why_choose_us_section_backgroud_image; ?>); background-position: 50% 60%;">
            <h2 class="text-center pxp-section-h2"><?php echo $home_why_choose_us_section_title; ?></h2>
            <p class="pxp-text-light text-center"><?php echo $home_why_choose_us_section_description; ?></p>


            <div class="container">
                <div class="pxp-services-container rounded-lg mt-4 mt-md-5">
                <a href="properties.html" class="pxp-services-item">
                            <div class="pxp-services-item-fig">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-1.svg" alt="...">
                            </div>
                            <div class="pxp-services-item-text text-center">
                                <div class="pxp-services-item-text-title"><?php _e('Find your future home','theme-text-domain'); ?></div>
                                <div class="pxp-services-item-text-sub"><?php _e('We help you find a new home by offering','theme-text-domain'); ?><br><?php _e('a smart real estate experience','theme-text-domain'); ?></div>
                            </div>
                            <div class="pxp-services-item-cta text-uppercase text-center"><?php _e('Learn More','theme-text-domain'); ?></div>
                        </a>
                        <a href="agents.html" class="pxp-services-item">
                            <div class="pxp-services-item-fig">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-2.svg" alt="...">
                            </div>
                            <div class="pxp-services-item-text text-center">
                                <div class="pxp-services-item-text-title"><?php _e('Experienced agents','theme-text-domain'); ?></div>
                                <div class="pxp-services-item-text-sub"><?php _e('Find an agent who knows','theme-text-domain'); ?><br><?php _e('your market best','theme-text-domain'); ?></div>
                            </div>
                            <div class="pxp-services-item-cta text-uppercase text-center"><?php _e('Learn More','theme-text-domain'); ?></div>
                        </a>
                        <a href="properties.html" class="pxp-services-item">
                            <div class="pxp-services-item-fig">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-3.svg" alt="...">
                            </div>
                            <div class="pxp-services-item-text text-center">
                                <div class="pxp-services-item-text-title"><?php _e('Buy or rent homes','theme-text-domain'); ?></div>
                                <div class="pxp-services-item-text-sub"><?php _e('Millions of houses and apartments in','theme-text-domain'); ?><br><?php _e('your favourite cities','theme-text-domain'); ?></div>
                            </div>
                            <div class="pxp-services-item-cta text-uppercase text-center"><?php _e('Learn More','theme-text-domain'); ?></div>
                        </a>
                        <a href="submit-property.html" class="pxp-services-item">
                            <div class="pxp-services-item-fig">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-4.svg" alt="...">
                            </div>
                            <div class="pxp-services-item-text text-center">
                                <div class="pxp-services-item-text-title"><?php _e('List your own property','theme-text-domain'); ?></div>
                                <div class="pxp-services-item-text-sub"><?php _e('Sign up now and sell or rent','theme-text-domain'); ?><br><?php _e('your own properties','theme-text-domain'); ?></div>
                            </div>
                            <div class="pxp-services-item-cta text-uppercase text-center"><?php _e('Learn More','theme-text-domain'); ?></div>
                        </a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="container-fluid pxp-props-carousel-right mt-100">
            <h2 class="pxp-section-h2"><?php echo $home_properties_section_title; ?></h2>
            <p class="pxp-text-light"><?php echo $home_properties_section_descripton; ?></p>
            <div class="pxp-props-carousel-right-container mt-4 mt-md-5">
                <div class="owl-carousel pxp-props-carousel-right-stage">

                    <?php
                        $datas = $wpdb->get_results("SELECT i.*,p.ID FROM INSCRIPTIONS i join wp_posts p on p.post_content=i.NO_INSCRIPTION where post_type='residential'  and i.CODE_STATUT='EV' limit 2", OBJECT );
                        foreach ($datas as $inscriptionsData) {
                    $results = $wpdb->get_row(" SELECT * FROM PHOTOS where  NO_INSCRIPTION = '".$inscriptionsData->NO_INSCRIPTION ."' limit 1", OBJECT );
				?>
                    <div>
                        <a href="<?php echo get_permalink( $inscriptionsData->ID );?>"
                            class="pxp-prop-card-1 rounded-lg">
                            <div class="pxp-prop-card-1-fig pxp-cover"
                                style="background-image: url(<?php  echo $results->PhotoURL;?>);">
                            </div>
                            <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                            <div class="pxp-prop-card-1-details">
                                <div class="pxp-prop-card-1-details-title"><?php
                             $REGION_CODE = $wpdb->get_row("SELECT r.*,REGION_CODE,m.DESCRIPTION FROM MUNICIPALITES m JOIN REGIONS r ON m.REGION_CODE = r.CODE where m.CODE='".$inscriptionsData->MUN_CODE."' ", OBJECT );
                             if ($lang == 'en-US'){
                                echo $REGION_CODE->DESCRIPTION;
                             }else{
                                echo $REGION_CODE->DESCRIPTION;
                             }
                              ?></div>
                                <div class="pxp-prop-card-1-details-price">
                                    <?php  echo $currencyLetterPrefix."".number_format($inscriptionsData->PRIX_DEMANDE).''.$currencyLetterSuffix;?></div>
                                <div class="pxp-prop-card-1-details-features text-uppercase">
                                    <?php  echo $inscriptionsData->NB_CHAMBRES;?> BD <span>|</span>
                                    <?php echo $inscriptionsData->NB_CHAMBRES_HORS_SOL;?> BA
                                    <span>|</span>
                                    <?php echo $inscriptionsData->SUPERFICIE_HABITABLE." ".$inscriptionsData->UM_SUPERFICIE_HABITABLE;?>
                                </div>
                            </div>
                            <div class="pxp-prop-card-1-details-cta text-uppercase"><?php _e('View Details','theme-text-domain'); ?></div>
                        </a>
                    </div>
                    <?php
                       $postIndex++;
                    } ?>
                    <?php
                        $datas = $wpdb->get_results("SELECT i.*,p.ID FROM INSCRIPTIONS i join wp_posts p on p.post_content=i.NO_INSCRIPTION where post_type='rental-property'  and i.CODE_STATUT='EV' limit 2", OBJECT );
                        foreach ($datas as $inscriptionsData) {
                    $results = $wpdb->get_row(" SELECT * FROM PHOTOS where  NO_INSCRIPTION = '".$inscriptionsData->NO_INSCRIPTION ."' limit 1", OBJECT );
				?>
                    <div>
                        <a href="<?php echo get_permalink( $inscriptionsData->ID );?>"
                            class="pxp-prop-card-1 rounded-lg">
                            <div class="pxp-prop-card-1-fig pxp-cover"
                                style="background-image: url(<?php  echo $results->PhotoURL;?>);">
                            </div>
                            <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                            <div class="pxp-prop-card-1-details">
                                <div class="pxp-prop-card-1-details-title">
                                <?php
                             $REGION_CODE = $wpdb->get_row("SELECT r.*,REGION_CODE,m.DESCRIPTION FROM MUNICIPALITES m JOIN REGIONS r ON m.REGION_CODE = r.CODE where m.CODE='".$inscriptionsData->MUN_CODE."' ", OBJECT );
                             if ($lang == 'en-US'){
                                echo $REGION_CODE->DESCRIPTION;
                             }else{
                                echo $REGION_CODE->DESCRIPTION;
                             }
                              ?></div>
                                <div class="pxp-prop-card-1-details-price">
                                    <?php  echo $currencyLetterPrefix."".number_format($inscriptionsData->PRIX_LOCATION_DEMANDE).''.$currencyLetterSuffix;?></div>
                                <div class="pxp-prop-card-1-details-features text-uppercase">
                                    <?php  echo $inscriptionsData->NB_CHAMBRES;?> BD <span>|</span>
                                    <?php echo $inscriptionsData->NB_CHAMBRES_HORS_SOL;?> BA
                                    <span>|</span>
                                    <?php echo $inscriptionsData->SUPERFICIE_HABITABLE." ".$inscriptionsData->UM_SUPERFICIE_HABITABLE;?>
                                </div>
                            </div>
                            <div class="pxp-prop-card-1-details-cta text-uppercase"><?php _e('View Details','theme-text-domain'); ?></div>
                        </a>
                    </div>
                    <?php
                       $postIndex++;
                    } ?>
                    <?php
                        $datas = $wpdb->get_results("SELECT i.*,p.ID FROM INSCRIPTIONS i join wp_posts p on p.post_content=i.NO_INSCRIPTION where post_type='multi-residential'  and i.CODE_STATUT='EV' limit 2", OBJECT );
                        foreach ($datas as $inscriptionsData) {
                    $results = $wpdb->get_row(" SELECT * FROM PHOTOS where  NO_INSCRIPTION = '".$inscriptionsData->NO_INSCRIPTION ."' limit 1", OBJECT );
				?>
                    <div>
                        <a href="<?php echo get_permalink( $inscriptionsData->ID );?>"
                            class="pxp-prop-card-1 rounded-lg">
                            <div class="pxp-prop-card-1-fig pxp-cover"
                                style="background-image: url(<?php  echo $results->PhotoURL;?>);">
                            </div>
                            <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                            <div class="pxp-prop-card-1-details">
                                <div class="pxp-prop-card-1-details-title">
                                <?php
                             $REGION_CODE = $wpdb->get_row("SELECT r.*,REGION_CODE,m.DESCRIPTION FROM MUNICIPALITES m JOIN REGIONS r ON m.REGION_CODE = r.CODE where m.CODE='".$inscriptionsData->MUN_CODE."' ", OBJECT );
                             if ($lang == 'en-US'){
                                echo $REGION_CODE->DESCRIPTION;
                             }else{
                                echo $REGION_CODE->DESCRIPTION;
                             }
                              ?></div>
                                <div class="pxp-prop-card-1-details-price">
                                    <?php  echo $currencyLetterPrefix."".number_format($inscriptionsData->PRIX_DEMANDE).''.$currencyLetterSuffix;?></div>
                                <div class="pxp-prop-card-1-details-features text-uppercase">
                                    <?php  echo $inscriptionsData->NB_CHAMBRES;?> BD <span>|</span>
                                    <?php echo $inscriptionsData->NB_CHAMBRES_HORS_SOL;?> BA
                                    <span>|</span>
                                    <?php echo $inscriptionsData->SUPERFICIE_HABITABLE." ".$inscriptionsData->UM_SUPERFICIE_HABITABLE;?>
                                </div>
                            </div>
                            <div class="pxp-prop-card-1-details-cta text-uppercase"><?php _e('View Details','theme-text-domain'); ?></div>
                        </a>
                    </div>
                    <?php
                       $postIndex++;
                    } ?>

                </div>

                <a href="<?php echo $home_properties_section_page_link; ?>"
                    class="pxp-primary-cta text-uppercase mt-4 mt-md-5 pxp-animate"><?php _e('Browse All','theme-text-domain'); ?></a>
            </div>
        </div>

        <div hidden class="pxp-cta-1 pxp-cover mt-100 pt-300"
            style="background-image: url(<?php echo $home_search_section_background_image; ?>); background-position: 50% 60%;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="pxp-cta-1-caption pxp-animate-in">
                            <h2 class="pxp-section-h2"><?php echo $home_search_section_title; ?></h2>
                            <p class="pxp-text-light"><?php echo $home_search_section_description; ?></p>
                            <a href="<?php echo $home_search_section_link; ?>"
                                class="pxp-primary-cta text-uppercase mt-3 mt-md-5 pxp-animate"><?php _e('Search Now','theme-text-domain'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-100">
            <h2 class="pxp-section-h2">Explore Our Neighborhoods</h2>
            <p class="pxp-text-light">Browse our comprehensive neighborhood listings</p>

            <div class="row mt-4 mt-md-5">

            <?php
               $cities = $wpdb->get_results("
               SELECT
                    r.*,i.NO_INSCRIPTION
                FROM
                    MUNICIPALITES m
                        JOIN
                    REGIONS r ON r.CODE = m.REGION_CODE
                        JOIN
                    INSCRIPTIONS i ON m.CODE = i.MUN_CODE
                    JOIN wp_posts p on p.post_content=i.NO_INSCRIPTION
                GROUP BY r.CODE ", OBJECT );
               foreach ($cities as $city) {
                $results = $wpdb->get_row(" SELECT * FROM PHOTOS where  NO_INSCRIPTION = '".$city->NO_INSCRIPTION ."' limit 1", OBJECT );

            ?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="<?php echo site_url()."/properties?city=".$city->CODE;?>" class="pxp-areas-1-item rounded-lg">
                        <div class="pxp-areas-1-item-fig pxp-cover"
                            style="background-image: url(<?php  echo $results->PhotoURL;?>);">
                        </div>
                        <div class="pxp-areas-1-item-details">
                            <div class="pxp-areas-1-item-details-area"><?php
                            if ($lang == 'en-US'){
                                echo $city->DESCRIPTION_ANGLAISE;
                             }else{
                                echo $city->DESCRIPTION_FRANCAISE;
                             }
                            ?></div>
                            <!-- <div class="pxp-areas-1-item-details-city">Arlington, VA</div> -->
                        </div>
                        <div class="pxp-areas-1-item-counter"><span><?php


                    $COUNT_REGION = $wpdb->get_row("
                    SELECT
                        count(m.REGION_CODE) as COUNT_REGION,r.*

                      FROM
                      MUNICIPALITES m
                      JOIN
                  REGIONS r ON r.CODE = m.REGION_CODE
                              JOIN
                              INSCRIPTIONS i ON m.CODE = i.MUN_CODE
                              JOIN wp_posts p on p.post_content=i.NO_INSCRIPTION
                        WHERE
                          i.CODE_STATUT = 'EV' AND m.REGION_CODE='".$city->CODE ."'", OBJECT );
                        echo $COUNT_REGION->COUNT_REGION;
                        ?> <?php _e('Properties','theme-text-domain'); ?></span></div>
                        <div class="pxp-areas-1-item-cta text-uppercase"><?php _e('Explore','theme-text-domain'); ?></div>
                    </a>
                </div>
<?php }
                ?>

            </div>

            <!-- <a href="properties.html" class="pxp-primary-cta text-uppercase mt-2 mt-md-4 pxp-animate">Explore
                Neighborhoods</a> -->
        </div>

        <div class="pxp-testim-1 pt-100 pb-100 mt-100 pxp-cover" style="background-image: url(<?php echo $home_page_testimonial_background_image; ?>);">
            <div class="pxp-testim-1-intro">
                <h2 class="pxp-section-h2"><?php echo $home_page_testimonial_title; ?></h2>
                <p class="pxp-text-light"><?php echo $home_page_testimonial_description; ?></p>
                <a href="<?php echo $home_page_testimonial_link; ?>" class="pxp-primary-cta text-uppercase mt-2 mt-md-3 mt-lg-5 pxp-animate"><?php _e('Read All Stories','theme-text-domain'); ?></a>
            </div>
            <div class="pxp-testim-1-container mt-4 mt-md-5 mt-lg-0">
                <div class="owl-carousel pxp-testim-1-stage">
                    <?php $the_query = new WP_Query( array('post_type' =>'testimonial','posts_per_page' => '20',  'post__not_in'   => array( $id),) );?>
                                    <?php if ( have_posts())   : while ( $the_query->have_posts() ) : $the_query->the_post();?>

                                        <?php
                                            $thumbnail_id = get_post_thumbnail_id();
                                            $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                                            $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);

                        $categories = get_the_category();

										?>
                    <div>
                        <div class="pxp-testim-1-item">
                            <?php if ( has_post_thumbnail() ) {
                                $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
                                //echo '<link rel="preload" as="image" href="' . esc_attr( $attachment_image ) . '">';
                            ?>
                                <div class="pxp-testim-1-item-avatar pxp-cover" style="background-image: url(<?php echo $attachment_image; ?>)"></div>
                            <?php } ?>
                            <div class="pxp-testim-1-item-name"><?php the_title(); ?></div>
                            <div class="pxp-testim-1-item-location">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <div class="pxp-testim-1-item-message"><?php the_content(); ?></div>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                    <!-- <div>
                        <div class="pxp-testim-1-item">
                            <div class="pxp-testim-1-item-avatar pxp-cover"
                                style="background-image: url(images/ph-avatar.jpg)"></div>
                            <div class="pxp-testim-1-item-name">Rebecca Eason</div>
                            <div class="pxp-testim-1-item-location">Washington, MD</div>
                            <div class="pxp-testim-1-item-message">And it’s no wonder Resideo has shaken things up: As
                                anyone who’s ever tried to rent or buy property in Washington knows, the experience is
                                loaded with pain points.</div>
                        </div>
                    </div>
                    <div>
                        <div class="pxp-testim-1-item">
                            <div class="pxp-testim-1-item-avatar pxp-cover"
                                style="background-image: url(images/ph-avatar.jpg)"></div>
                            <div class="pxp-testim-1-item-name">Kenneth Spiers</div>
                            <div class="pxp-testim-1-item-location">Cleveland, OH</div>
                            <div class="pxp-testim-1-item-message">While Resideo functions like a traditional broker,
                                the company's promise is using technology to reduce the time and friction of buying and
                                selling house or apartment.</div>
                        </div>
                    </div>
                    <div>
                        <div class="pxp-testim-1-item">
                            <div class="pxp-testim-1-item-avatar pxp-cover"
                                style="background-image: url(images/ph-avatar.jpg)"></div>
                            <div class="pxp-testim-1-item-name">Susanne Weil</div>
                            <div class="pxp-testim-1-item-location">Cambridge, MA</div>
                            <div class="pxp-testim-1-item-message">And it’s no wonder Resideo has shaken things up: As
                                anyone who’s ever tried to rent or buy property in Cambridge knows, the experience is
                                loaded with pain points.</div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

    </div>


    <?php get_footer(); ?>