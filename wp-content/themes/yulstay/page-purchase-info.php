<?php
/*
	Template Name: Purchase Info
*/
get_header();

$purchase_info_page_title = get_field('purchase_info_page_title');
$purchase_info_page_description = get_field('purchase_info_page_description');
$purchase_info_page_section_one_image = get_field('purchase_info_page_section_one_image');
$purchase_info_page_section_one_title = get_field('purchase_info_page_section_one_title');
$purchase_info_page_section_one_description = get_field('purchase_info_page_section_one_description');
$purchase_info_page_section_two_image = get_field('purchase_info_page_section_two_image');
$purchase_info_page_section_two_title = get_field('purchase_info_page_section_two_title');
$purchase_info_page_section_two_description = get_field('purchase_info_page_section_two_description');
$purchase_info_page_section_three_image = get_field('purchase_info_page_section_three_image');
$purchase_info_page_section_three_title = get_field('purchase_info_page_section_three_title');
$purchase_info_page_section_three_description = get_field('purchase_info_page_section_three_description');
$purchase_info_page_section_four_image = get_field('purchase_info_page_section_four_image');
$purchase_info_page_section_four_title = get_field('purchase_info_page_section_four_title');
$purchase_info_page_section_four_description = get_field('purchase_info_page_section_four_description');
$purchase_info_page_section_five_title = get_field('purchase_info_page_section_five_title');
$purchase_info_page_section_five_description = get_field('purchase_info_page_section_five_description');

?>

        <div class="pxp-content">
            <div class="pxp-services-h pt-100 pb-100">
                <div class="container">
                    <h2 class="pxp-section-h2"><?php echo $purchase_info_page_title; ?></h2>
                    <p class="pxp-text-light info-des"><?php echo $purchase_info_page_description; ?></p>
                    <a href="<?php bloginfo('url'); ?>/purchase-form" class="pxp-primary-cta text-uppercase pxp-animate"><span class="fa fa-phone"></span> <?php _e('purchase Team','theme-text-domain'); ?></a>

                    <div class="pxp-services-h-container mt-4 mt-md-5">
                        <div class="pxp-services-h-fig pxp-cover pxp-animate-in rounded-lg" style="background-image: url(<?php echo $purchase_info_page_section_one_image; ?>);"></div>
                        <div class="pxp-services-h-items pxp-animate-in ml-0 ml-lg-5 mt-4 mt-md-5 mt-lg-0">
                        <h2 class="pxp-section-h2"><?php echo $purchase_info_page_section_one_title; ?></h2>
                        <p class="pxp-is-address" style="padding-top: 12px;"><?php echo $purchase_info_page_section_one_description; ?></p>

                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="pxp-services-h pt-100 pb-100">
                <div class="container">
                    <div class="pxp-services-h-container mt-4 mt-md-5">
                        <div class="pxp-services-h-items pxp-animate-in ml-0 mr-lg-5 mt-4 mt-md-5 mt-lg-0">
                        <h2 class="pxp-section-h2 mt-3 mt-md-5 mt-lg-0"><?php echo $purchase_info_page_section_two_title; ?></h2>
                            <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $purchase_info_page_section_two_description; ?></p>
                            <?php if( have_rows('purchase_info_page_second_list') ): $s= 1; $a=0; ?>

                            <?php while( have_rows('purchase_info_page_second_list') ): the_row() ;
                                    $i++;
                                            $purchase_info_page_second_list_item = get_sub_field('purchase_info_page_second_list_item');
                                    ?>
                                <div style="display:flex; gap:6px;">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#00AEC5" class="bi bi-plus" viewBox="0 0 16 16">
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="pxp-is-address" style="padding-top: 1px;"><?php echo $purchase_info_page_second_list_item; ?></p>
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>
                        </div>
                        <div class="pxp-services-h-fig pxp-cover pxp-animate-in rounded-lg" style="background-image: url(<?php echo $purchase_info_page_section_two_image; ?>);"></div>
                    </div>
                </div>
            </div>

            <div class="pxp-services-h pt-100 pb-100">
                <div class="container">
                    <div class="pxp-services-h-container mt-4 mt-md-5">
                        <div class="pxp-services-h-fig pxp-cover pxp-animate-in rounded-lg" style="background-image: url(<?php echo $purchase_info_page_section_three_image; ?>);"></div>
                        <div class="pxp-services-h-items pxp-animate-in ml-0 ml-lg-5 mt-4 mt-md-5 mt-lg-0">
                        <h2 class="pxp-section-h2 mt-3 mt-md-5 mt-lg-0"><?php echo $purchase_info_page_section_three_title; ?></h2>
                            <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $purchase_info_page_section_three_description; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pxp-services-h pt-100 pb-100">
                <div class="container">
                    <div class="pxp-services-h-container mt-4 mt-md-5">
                        <div class="pxp-services-h-items pxp-animate-in ml-0 mr-lg-5 mt-4 mt-md-5 mt-lg-0">
                        <h2 class="pxp-section-h2 mt-3 mt-md-5 mt-lg-0"><?php echo $purchase_info_page_section_four_title; ?></h2>
                            <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $purchase_info_page_section_four_description; ?></p>
                        </div>
                        <div class="pxp-services-h-fig pxp-cover pxp-animate-in rounded-lg" style="background-image: url(<?php echo $purchase_info_page_section_four_image; ?>);"></div>
                    </div>
                </div>
            </div>

            <div class="pxp-services-h pt-100 pb-100">
                <div class="container">
                    <div class="pxp-services-h-container mt-4 mt-md-5">
                        <div class="pxp-services-h-fig pxp-cover pxp-animate-in rounded-lg" style="background-image: url(<?php echo $investments_info_page_section_one_image; ?>);"></div>
                        <div class="pxp-services-h-items pxp-animate-in ml-0 ml-lg-5 mt-4 mt-md-5 mt-lg-0">
                                <h2 class="pxp-section-h2"><?php echo $purchase_info_page_section_five_title; ?></h2>
                                <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $purchase_info_page_section_five_description; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pxp-services-h pt-100 pb-100">
                <div class="container">
                    <div class="pxp-services-h-container mt-4 mt-md-5">
                        <div class="pxp-services-h-items pxp-animate-in ml-0 mr-lg-5 mt-4 mt-md-5 mt-lg-0">
                            <h2 class="pxp-section-h2 mt-3 mt-md-5 mt-lg-0"><?php echo $investments_info_page_forth_section_title; ?></h2>
                            <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $investments_info_page_forth_section_description; ?></p>
                        </div>
                        <div class="pxp-services-h-fig pxp-cover pxp-animate-in rounded-lg" style="background-image: url(<?php echo $investments_info_page_forth_section_image; ?>);"></div>
                    </div>
                </div>
            </div>

            <div class="pxp-services-h pt-100 pb-100">
                <div class="container">
                    <div class="pxp-services-h-container mt-4 mt-md-5">
                        <div class="pxp-services-h-fig pxp-cover pxp-animate-in rounded-lg" style="background-image: url(<?php echo $investments_info_page_section_one_image; ?>);"></div>
                        <div class="pxp-services-h-items pxp-animate-in ml-0 ml-lg-5 mt-4 mt-md-5 mt-lg-0">
                                <h2 class="pxp-section-h2"><?php echo $investments_info_page_fifth_section_title; ?></h2>
                                <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $investments_info_page_fifth_section_description; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pxp-cta-3 mt-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="pxp-cta-3-image pxp-cover rounded-lg" style="background-image: url(<?php echo $purchase_info_page_section_two_image; ?>);"></div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            
                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>

            <div class="pxp-cta-3 mt-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-4">
                            
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5 order-first order-lg-last">
                            <div class="pxp-cta-3-image pxp-cover rounded-lg" style="background-image: url();"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pxp-cta-3 mt-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="pxp-cta-3-image pxp-cover rounded-lg" style="background-image: url();"></div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>

            <div class="pxp-cta-4 mt-200 mb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <div class="text-center">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?lasjkj"></script>

<?php get_footer(); ?>