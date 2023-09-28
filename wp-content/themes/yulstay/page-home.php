<!doctype html>
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

        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

<div class="pxp-header fixed-top pxp-animate">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-5 col-md-2">
                        <!-- <a href="<?php bloginfo('url'); ?>/" class="pxp-logo text-decoration-none">Yulstay</a> -->
                        <a href="<?php bloginfo('url'); ?>/" class="pxp-logo text-decoration-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/yulstay-logo.png" style="height: 2.75rem;" alt="">
                        </a>
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
                                <a href="#">Properties</a>
                                <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="<?php bloginfo('url'); ?>/residential">Residential</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/multi-residential">Multi Residential</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/rental-property">Rental Property</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php bloginfo('url'); ?>/team">Team</a>
                                <!-- <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="agents.html">All Agents</a></li>
                                    <li><a href="single-agent.html">Single Agent</a></li>
                                </ul> -->
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Yulstay</a>
                                <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="blog.html">All Blog Posts</a></li>
                                    <li><a href="single-post.html">Single Blog Post</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item pxp-is-last"><a href="<?php bloginfo('url'); ?>/contact">Contact Us</a></li>
                            <li class="list-inline-item pxp-has-btns">
                                <div class="pxp-user-btns">
                                    <a href="#" class="pxp-user-btns-signup pxp-signup-trigger">Sign Up</a>
                                    <a href="#" class="pxp-user-btns-login pxp-signin-trigger">Sign In</a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <a href="<?php bloginfo('url'); ?>/join-our-team">Join Our Team</a>
                                <!-- <ul class="pxp-nav-sub rounded-lg">
                                    <li><a href="../light/index.html">Light</a></li>
                                    <li><a href="../dark/index.html">Dark</a></li>
                                </ul> -->
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

        <div class="pxp-content">
            <div class="pxp-hero vh-100">
                <div class="pxp-hero-bg pxp-cover pxp-cover-bottom">
                    <video autoplay loop muted playsinline>
                        <source src="<?php echo get_template_directory_uri(); ?>/images/Yulstay.mp4" type="video/mp4">
                        <!-- You can add additional source elements for different video formats (e.g., WebM, Ogg) -->
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="pxp-hero-opacity"></div>
                <div class="pxp-hero-caption">
                    <div class="container">
                        <!-- <h1 class="text-white">Find your future home</h1> -->
                        <a href="<?php bloginfo('url'); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/yulstay-logo.png" style="width: 40rem;" alt=""></a>
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
                                <div class="pxp-agents-1-item-fig pxp-cover" style="background-image: url(<?php echo $attachment_image; ?>); background-position: top center"></div>
                            </div>
                            <?php } ?>
                            <div class="pxp-agents-1-item-details rounded-lg">
                                <div class="pxp-agents-1-item-details-name"><?php the_title(); ?></div>
                                <div class="pxp-agents-1-item-details-email"><span class="fa fa-phone"></span> (123) 456-7890</div>
                                <div class="pxp-agents-1-item-details-spacer"></div>
                                <div class="pxp-agents-1-item-cta text-uppercase">More Details</div>
                            </div>
                            <div class="pxp-agents-1-item-rating"><span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></div>
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

                <a href="<?php bloginfo('url'); ?>/team" class="pxp-primary-cta text-uppercase mt-1 mt-md-4 pxp-animate">See All Agents</a>
            </div>

            <div class="pxp-services pxp-cover mt-100 pt-100 mb-200" style="background-image: url(<?php echo $home_why_choose_us_section_backgroud_image; ?>); background-position: 50% 60%;">
                <h2 class="text-center pxp-section-h2"><?php echo $home_why_choose_us_section_title; ?></h2>
                <p class="pxp-text-light text-center"><?php echo $home_why_choose_us_section_description; ?></p>

                <div class="container">
                    <div class="pxp-services-container rounded-lg mt-4 mt-md-5">
                        <a href="properties.html" class="pxp-services-item">
                            <div class="pxp-services-item-fig">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-1.svg" alt="...">
                            </div>
                            <div class="pxp-services-item-text text-center">
                                <div class="pxp-services-item-text-title">Find your future home</div>
                                <div class="pxp-services-item-text-sub">We help you find a new home by offering<br>a smart real estate experience</div>
                            </div>
                            <div class="pxp-services-item-cta text-uppercase text-center">Learn More</div>
                        </a>
                        <a href="agents.html" class="pxp-services-item">
                            <div class="pxp-services-item-fig">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-2.svg" alt="...">
                            </div>
                            <div class="pxp-services-item-text text-center">
                                <div class="pxp-services-item-text-title">Experienced agents</div>
                                <div class="pxp-services-item-text-sub">Find an agent who knows<br>your market best</div>
                            </div>
                            <div class="pxp-services-item-cta text-uppercase text-center">Learn More</div>
                        </a>
                        <a href="properties.html" class="pxp-services-item">
                            <div class="pxp-services-item-fig">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-3.svg" alt="...">
                            </div>
                            <div class="pxp-services-item-text text-center">
                                <div class="pxp-services-item-text-title">Buy or rent homes</div>
                                <div class="pxp-services-item-text-sub">Millions of houses and apartments in<br>your favourite cities</div>
                            </div>
                            <div class="pxp-services-item-cta text-uppercase text-center">Learn More</div>
                        </a>
                        <a href="submit-property.html" class="pxp-services-item">
                            <div class="pxp-services-item-fig">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/service-icon-4.svg" alt="...">
                            </div>
                            <div class="pxp-services-item-text text-center">
                                <div class="pxp-services-item-text-title">List your own property</div>
                                <div class="pxp-services-item-text-sub">Sign up now and sell or rent<br>your own properties</div>
                            </div>
                            <div class="pxp-services-item-cta text-uppercase text-center">Learn More</div>
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
                        <div>
                            <a href="single-property.html" class="pxp-prop-card-1 rounded-lg">
                                <div class="pxp-prop-card-1-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);"></div>
                                <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                                <div class="pxp-prop-card-1-details">
                                    <div class="pxp-prop-card-1-details-title">Chic Apartment in Downtown</div>
                                    <div class="pxp-prop-card-1-details-price">$890,000</div>
                                    <div class="pxp-prop-card-1-details-features text-uppercase">2 BD <span>|</span> 2 BA <span>|</span> 920 SF</div>
                                </div>
                                <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                            </a>
                        </div>

                        <div>
                            <a href="single-property.html" class="pxp-prop-card-1 rounded-lg">
                                <div class="pxp-prop-card-1-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);"></div>
                                <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                                <div class="pxp-prop-card-1-details">
                                    <div class="pxp-prop-card-1-details-title">Colorful Little Apartment</div>
                                    <div class="pxp-prop-card-1-details-price">$2,675</div>
                                    <div class="pxp-prop-card-1-details-features text-uppercase">1 BD <span>|</span> 1 BA <span>|</span> 500 SF</div>
                                </div>
                                <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                            </a>
                        </div>

                        <div>
                            <a href="single-property.html" class="pxp-prop-card-1 rounded-lg">
                                <div class="pxp-prop-card-1-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);"></div>
                                <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                                <div class="pxp-prop-card-1-details">
                                    <div class="pxp-prop-card-1-details-title">Cozy Two Bedroom Apartment</div>
                                    <div class="pxp-prop-card-1-details-price">$960,000</div>
                                    <div class="pxp-prop-card-1-details-features text-uppercase">2 BD <span>|</span> 2 BA <span>|</span> 870 SF</div>
                                </div>
                                <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                            </a>
                        </div>

                        <div>
                            <a href="single-property.html" class="pxp-prop-card-1 rounded-lg">
                                <div class="pxp-prop-card-1-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);"></div>
                                <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                                <div class="pxp-prop-card-1-details">
                                    <div class="pxp-prop-card-1-details-title">Beautiful House in Marina</div>
                                    <div class="pxp-prop-card-1-details-price">$5,198,000</div>
                                    <div class="pxp-prop-card-1-details-features text-uppercase">5 BD <span>|</span> 4.5 BA <span>|</span> 3,945 SF</div>
                                </div>
                                <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                            </a>
                        </div>

                        <div>
                            <a href="single-property.html" class="pxp-prop-card-1 rounded-lg">
                                <div class="pxp-prop-card-1-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);"></div>
                                <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                                <div class="pxp-prop-card-1-details">
                                    <div class="pxp-prop-card-1-details-title">Modern Residence</div>
                                    <div class="pxp-prop-card-1-details-price">$7,995</div>
                                    <div class="pxp-prop-card-1-details-features text-uppercase">4 BD <span>|</span> 1.5 BA <span>|</span> 2,240 SF</div>
                                </div>
                                <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                            </a>
                        </div>

                        <div>
                            <a href="single-property.html" class="pxp-prop-card-1 rounded-lg">
                                <div class="pxp-prop-card-1-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);"></div>
                                <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                                <div class="pxp-prop-card-1-details">
                                    <div class="pxp-prop-card-1-details-title">Luxury Mansion</div>
                                    <div class="pxp-prop-card-1-details-price">$5,430,000</div>
                                    <div class="pxp-prop-card-1-details-features text-uppercase">4 BD <span>|</span> 5 BA <span>|</span> 5,200 SF</div>
                                </div>
                                <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                            </a>
                        </div>
                    </div>

                    <a href="<?php echo $home_properties_section_page_link; ?>" class="pxp-primary-cta text-uppercase mt-4 mt-md-5 pxp-animate">Browse All</a>
                </div>
            </div>

            <div class="pxp-cta-1 pxp-cover mt-100 pt-300" style="background-image: url(<?php echo $home_search_section_background_image; ?>); background-position: 50% 60%;">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="pxp-cta-1-caption pxp-animate-in">
                                <h2 class="pxp-section-h2"><?php echo $home_search_section_title; ?></h2>
                                <p class="pxp-text-light"><?php echo $home_search_section_description; ?></p>
                                <a href="<?php echo $home_search_section_link; ?>" class="pxp-primary-cta text-uppercase mt-3 mt-md-5 pxp-animate">Search Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-100">
                <h2 class="pxp-section-h2">Explore Our Neighborhoods</h2>
                <p class="pxp-text-light">Browse our comprehensive neighborhood listings</p>

                <div class="row mt-4 mt-md-5">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <a href="properties.html" class="pxp-areas-1-item rounded-lg">
                            <div class="pxp-areas-1-item-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);"></div>
                            <div class="pxp-areas-1-item-details">
                                <div class="pxp-areas-1-item-details-area">Bluemont</div>
                                <div class="pxp-areas-1-item-details-city">Arlington, VA</div>
                            </div>
                            <div class="pxp-areas-1-item-counter"><span>324 Properties</span></div>
                            <div class="pxp-areas-1-item-cta text-uppercase">Explore</div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <a href="properties.html" class="pxp-areas-1-item rounded-lg">
                            <div class="pxp-areas-1-item-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);"></div>
                            <div class="pxp-areas-1-item-details">
                                <div class="pxp-areas-1-item-details-area">Overlake</div>
                                <div class="pxp-areas-1-item-details-city">Redmond, WA</div>
                            </div>
                            <div class="pxp-areas-1-item-counter"><span>158 Properties</span></div>
                            <div class="pxp-areas-1-item-cta text-uppercase">Explore</div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <a href="properties.html" class="pxp-areas-1-item rounded-lg">
                            <div class="pxp-areas-1-item-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);"></div>
                            <div class="pxp-areas-1-item-details">
                                <div class="pxp-areas-1-item-details-area">College Terrace</div>
                                <div class="pxp-areas-1-item-details-city">Palo Alto, CA</div>
                            </div>
                            <div class="pxp-areas-1-item-counter"><span>129 Properties</span></div>
                            <div class="pxp-areas-1-item-cta text-uppercase">Explore</div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <a href="properties.html" class="pxp-areas-1-item rounded-lg">
                            <div class="pxp-areas-1-item-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);"></div>
                            <div class="pxp-areas-1-item-details">
                                <div class="pxp-areas-1-item-details-area">Inner Sunset</div>
                                <div class="pxp-areas-1-item-details-city">San Francisco, CA</div>
                            </div>
                            <div class="pxp-areas-1-item-counter"><span>129 Properties</span></div>
                            <div class="pxp-areas-1-item-cta text-uppercase">Explore</div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <a href="properties.html" class="pxp-areas-1-item rounded-lg">
                            <div class="pxp-areas-1-item-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);"></div>
                            <div class="pxp-areas-1-item-details">
                                <div class="pxp-areas-1-item-details-area">Upper West Side</div>
                                <div class="pxp-areas-1-item-details-city">New York City, NY</div>
                            </div>
                            <div class="pxp-areas-1-item-counter"><span>324 Properties</span></div>
                            <div class="pxp-areas-1-item-cta text-uppercase">Explore</div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <a href="properties.html" class="pxp-areas-1-item rounded-lg">
                            <div class="pxp-areas-1-item-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-gallery.jpg);"></div>
                            <div class="pxp-areas-1-item-details">
                                <div class="pxp-areas-1-item-details-area">Marina District</div>
                                <div class="pxp-areas-1-item-details-city">San Francisco, CA</div>
                            </div>
                            <div class="pxp-areas-1-item-counter"><span>158 Properties</span></div>
                            <div class="pxp-areas-1-item-cta text-uppercase">Explore</div>
                        </a>
                    </div>
                </div>

                <a href="properties.html" class="pxp-primary-cta text-uppercase mt-2 mt-md-4 pxp-animate">Explore Neighborhoods</a>
            </div>

        </div>


<?php get_footer(); ?>