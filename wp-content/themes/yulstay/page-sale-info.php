<?php
/*
	Template Name: Sale Info
*/
get_header();

$sale_info_page_title = get_field('sale_info_page_title');
$sale_info_page_description = get_field('sale_info_page_description');
$sale_info_page_section_one_image = get_field('sale_info_page_section_one_image');
$sale_info_page_section_one_title = get_field('sale_info_page_section_one_title');
$sale_info_page_section_one_description = get_field('sale_info_page_section_one_description');
$sale_info_page_section_two_image = get_field('sale_info_page_section_two_image');
$sale_info_page_section_two_title = get_field('sale_info_page_section_two_title');
$sale_info_page_section_two_description = get_field('sale_info_page_section_two_description');
$sale_info_page_section_three_image = get_field('sale_info_page_section_three_image');
$sale_info_page_section_three_title = get_field('sale_info_page_section_three_title');
$sale_info_page_section_three_description = get_field('sale_info_page_section_three_description');
$sale_info_page_section_four_image = get_field('sale_info_page_section_four_image');
$sale_info_page_section_four_title = get_field('sale_info_page_section_four_title');
$sale_info_page_section_four_description = get_field('sale_info_page_section_four_description');
// $sale_info_page_section_five_title = get_field('sale_info_page_section_five_title');
// $sale_info_page_section_five_description = get_field('sale_info_page_section_five_description');

?>

        <div class="pxp-content">
            <div class="pxp-services-h pt-100 pb-100">
                <div class="container">
                    <h2 class="pxp-section-h2"><?php echo $sale_info_page_title; ?></h2>
                    <p class="pxp-text-light info-des"><?php echo $sale_info_page_description; ?></p>
                    <a href="<?php bloginfo('url'); ?>/sale-form" class="pxp-primary-cta text-uppercase pxp-animate"><span class="fa fa-phone"></span> <?php _e('sale Team','theme-text-domain'); ?></a>

                    <div class="pxp-services-h-container mt-4 mt-md-5">
                        <div class="pxp-services-h-fig pxp-cover pxp-animate-in rounded-lg" style="background-image: url(<?php echo $sale_info_page_section_one_image; ?>);"></div>
                        <div class="pxp-services-h-items pxp-animate-in ml-0 ml-lg-5 mt-4 mt-md-5 mt-lg-0">
                        <h2 class="pxp-section-h2"><?php echo $sale_info_page_section_one_title; ?></h2>
                        <p class="pxp-is-address" style="padding-top: 12px;"><?php echo $sale_info_page_section_one_description; ?></p>

                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="pxp-cta-3 mt-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="pxp-cta-3-image pxp-cover rounded-lg" style="background-image: url(<?php echo $sale_info_page_section_two_image; ?>);"></div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <h2 class="pxp-section-h2 mt-3 mt-md-5 mt-lg-0"><?php echo $sale_info_page_section_two_title; ?></h2>
                            <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $sale_info_page_section_two_description; ?></p>
                            
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div> -->

            <div class="pxp-cta-4 mt-100 mb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <div class="text-center">
                                <h2 class="pxp-section-h2"><?php echo $sale_info_page_section_two_title; ?></h2>
                                <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $sale_info_page_section_two_description; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="container">
                            <div class="pxp-contact-hero-offices" style="padding-bottom: 0px; padding-top: 0px;">
                                <h2 class="pxp-contact-hero-offices-title"><?php echo $join_our_team_page_list_section_title; ?></h2>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                    <?php if( have_rows('sales_info_page_section_two_list') ): $s= 1; $a=0; ?>

                                    <?php while( have_rows('sales_info_page_section_two_list') ): the_row() ;
                                            $i++;
                                                    $sales_info_page_section_two_list_item = get_sub_field('sales_info_page_section_two_list_item');
                                            ?>
                                            <div style="display:flex; gap:6px;">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#00AEC5" class="bi bi-plus" viewBox="0 0 16 16">
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="pxp-is-address"><?php echo $sales_info_page_section_two_list_item; ?></p>
                                                </div>
                                            </div>
                                        
                                        <?php endwhile; endif; ?>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                    <?php if( have_rows('sales_info_page_section_two_list_column_two') ): $s= 1; $a=0; ?>

                                    <?php while( have_rows('sales_info_page_section_two_list_column_two') ): the_row() ;
                                            $i++;
                                                    $sales_info_page_section_two_list_column_two_item = get_sub_field('sales_info_page_section_two_list_column_two_item');
                                            ?>
                                        
                                        <div style="display:flex; gap:6px;">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#00AEC5" class="bi bi-plus" viewBox="0 0 16 16">
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="pxp-is-address"><?php echo $sales_info_page_section_two_list_column_two_item; ?></p>
                                                </div>
                                            </div>
                                        <?php endwhile; endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>

            <div class="pxp-cta-3 mt-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4">
                            <h2 class="pxp-section-h2 mt-3 mt-md-5 mt-lg-0"><?php echo $sale_info_page_section_three_title; ?></h2>
                            <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $sale_info_page_section_three_description; ?></p>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5 order-first order-lg-last">
                            <div class="pxp-cta-3-image pxp-cover rounded-lg" style="background-image: url(<?php echo $sale_info_page_section_three_image; ?>);"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pxp-cta-3 mt-100 mb-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="pxp-cta-3-image pxp-cover rounded-lg" style="background-image: url(<?php echo $sale_info_page_section_four_image; ?>);"></div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <h2 class="pxp-section-h2 mt-3 mt-md-5 mt-lg-0"><?php echo $sale_info_page_section_four_title; ?></h2>
                            <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $sale_info_page_section_four_description; ?></p>
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>

            <!-- <div class="pxp-cta-4 mt-200 mb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <div class="text-center">
                                <h2 class="pxp-section-h2"><?php echo $sale_info_page_section_five_title; ?></h2>
                                <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $sale_info_page_section_five_description; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?lasjkj"></script>

<?php get_footer(); ?>