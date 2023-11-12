<?php
/*
	Template Name: Rental & Management Info
*/
get_header();

$rental_management_info_page_title = get_field('rental_management_info_page_title');
$rental_management_info_page_description = get_field('rental_management_info_page_description');
$rental_management_info_page_section_one_image = get_field('rental_management_info_page_section_one_image');
$rental_management_info_page_section_one_title = get_field('rental_management_info_page_section_one_title');
$rental_management_info_page_section_one_description = get_field('rental_management_info_page_section_one_description');
$rental_management_info_page_section_two_image = get_field('rental_management_info_page_section_two_image');
$rental_management_info_page_section_two_title = get_field('rental_management_info_page_section_two_title');
$rental_management_info_page_section_two_description = get_field('rental_management_info_page_section_two_description');
$rental_management_info_page_section_three_image = get_field('rental_management_info_page_section_three_image');
$rental_management_info_page_section_three_title = get_field('rental_management_info_page_section_three_title');
$rental_management_info_page_section_three_description = get_field('rental_management_info_page_section_three_description');
$rental_management_info_page_section_four_image = get_field('rental_management_info_page_section_four_image');
$rental_management_info_page_section_four_title = get_field('rental_management_info_page_section_four_title');
$rental_management_info_page_section_four_description = get_field('rental_management_info_page_section_four_description');
// $rental_management_info_page_section_five_title = get_field('rental_management_info_page_section_five_title');
// $rental_management_info_page_section_five_description = get_field('rental_management_info_page_section_five_description');

?>

        <div class="pxp-content">
            <div class="pxp-services-h pt-100 pb-100">
                <div class="container">
                    <h2 class="pxp-section-h2"><?php echo $rental_management_info_page_title; ?></h2>
                    <p class="pxp-text-light" style="width: 45%;"><?php echo $rental_management_info_page_description; ?></p>

                    <div class="pxp-services-h-container mt-4 mt-md-5">
                        <div class="pxp-services-h-fig pxp-cover pxp-animate-in rounded-lg" style="background-image: url(<?php echo $rental_management_info_page_section_one_image; ?>);"></div>
                        <div class="pxp-services-h-items pxp-animate-in ml-0 ml-lg-5 mt-4 mt-md-5 mt-lg-0">
                        <h2 class="pxp-section-h2"><?php echo $rental_management_info_page_section_one_title; ?></h2>
                        <p class="pxp-is-address" style="padding-top: 12px;"><?php echo $rental_management_info_page_section_one_description; ?></p>

                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="pxp-cta-3 mt-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="pxp-cta-3-image pxp-cover rounded-lg" style="background-image: url(<?php echo $rental_management_info_page_section_two_image; ?>);"></div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <h2 class="pxp-section-h2 mt-3 mt-md-5 mt-lg-0"><?php echo $rental_management_info_page_section_two_title; ?></h2>
                            <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $rental_management_info_page_section_two_description; ?></p>
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
                            <h2 class="pxp-section-h2 mt-3 mt-md-5 mt-lg-0"><?php echo $rental_management_info_page_section_three_title; ?></h2>
                            <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $rental_management_info_page_section_three_description; ?></p>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5 order-first order-lg-last">
                            <div class="pxp-cta-3-image pxp-cover rounded-lg" style="background-image: url(<?php echo $rental_management_info_page_section_three_image; ?>);"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pxp-cta-3 mt-100 mb-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="pxp-cta-3-image pxp-cover rounded-lg" style="background-image: url(<?php echo $rental_management_info_page_section_four_image; ?>);"></div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <h2 class="pxp-section-h2 mt-3 mt-md-5 mt-lg-0"><?php echo $rental_management_info_page_section_four_title; ?></h2>
                            <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $rental_management_info_page_section_four_description; ?></p>
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
                                <h2 class="pxp-section-h2"><?php echo $rental_management_info_page_section_five_title; ?></h2>
                                <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $rental_management_info_page_section_five_description; ?></p>
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