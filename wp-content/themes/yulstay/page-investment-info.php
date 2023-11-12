<?php
/*
	Template Name: Investments Info
*/
get_header();

$investments_info_page_title = get_field('investments_info_page_title');
$investments_info_page_description = get_field('investments_info_page_description');
$investments_info_page_section_one_image = get_field('investments_info_page_section_one_image');
$investments_info_page_section_one_title = get_field('investments_info_page_section_one_title');
$investments_info_page_section_one_paragraph = get_field('investments_info_page_section_one_paragraph');
$investments_info_page_second_image = get_field('investments_info_page_second_image');
$investments_info_page_second_title = get_field('investments_info_page_second_title');
$investments_info_page_second_paragraph = get_field('investments_info_page_second_paragraph');
$investments_info_page_third_section_title = get_field('investments_info_page_third_section_title');
$investments_info_page_third_section_description = get_field('investments_info_page_third_section_description');
$investments_info_page_forth_section_title = get_field('investments_info_page_forth_section_title');
$investments_info_page_forth_section_description = get_field('investments_info_page_forth_section_description');
$investments_info_page_fifth_section_title = get_field('investments_info_page_fifth_section_title');
$investments_info_page_fifth_section_description = get_field('investments_info_page_fifth_section_description');
$investments_info_page_sixth_section_title = get_field('investments_info_page_sixth_section_title');
$investments_info_page_sixth_section_description = get_field('investments_info_page_sixth_section_description');

?>

        <div class="pxp-content">
            <div class="pxp-services-h pt-100 pb-100">
                <div class="container">
                    <h2 class="pxp-section-h2"><?php echo $investments_info_page_title; ?></h2>
                    <p class="pxp-text-light"  style="width: 45%;"><?php echo $investments_info_page_description; ?></p>

                    <div class="pxp-services-h-container mt-4 mt-md-5">
                        <div class="pxp-services-h-fig pxp-cover pxp-animate-in rounded-lg" style="background-image: url(<?php echo $investments_info_page_section_one_image; ?>);"></div>
                        <div class="pxp-services-h-items pxp-animate-in ml-0 ml-lg-5 mt-4 mt-md-5 mt-lg-0">
                        <h2 class="pxp-section-h2"><?php echo $investments_info_page_section_one_title; ?></h2>
                        <p class="pxp-is-address" style="padding-top: 12px;"><?php echo $investments_info_page_section_one_paragraph; ?></p>

                            
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="pxp-services-columns mt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="pxp-section-h2 text-center">Your modern real estate platform</h2>
                        </div>
                        <div class="col-12">
                            <div class="row mt-4 mt-md-5">
                                <div class="col-md-4">
                                    <div class="pxp-services-columns-item text-center mb-3 mb-md-4">
                                        <div class="pxp-services-columns-item-fig">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/d11-home-service-1-icon-200x200.png" alt="Find your future home">
                                        </div>
                                        <h3 class="mt-3">Find your future home</h3>
                                        <p class="pxp-text-light">We help you find a new home by offering a smart real estate experience</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pxp-services-columns-item text-center mb-3 mb-md-4">
                                        <div class="pxp-services-columns-item-fig">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/d11-home-service-2-icon-200x200.png" alt="Experienced agents">
                                        </div>
                                        <h3 class="mt-3">Experienced agents</h3>
                                        <p class="pxp-text-light">Find an experienced agent who knows your market best</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pxp-services-columns-item text-center mb-3 mb-md-4">
                                        <div class="pxp-services-columns-item-fig">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/d11-home-service-3-icon-200x200.png" alt="List your own property">
                                        </div>
                                        <h3 class="mt-3">List your own property</h3>
                                        <p class="pxp-text-light">Sign up now and sell or rent your own properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="pxp-cta-3 mt-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="pxp-cta-3-image pxp-cover rounded-lg" style="background-image: url(<?php echo $investments_info_page_second_image; ?>);"></div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <h2 class="pxp-section-h2 mt-3 mt-md-5 mt-lg-0"><?php echo $investments_info_page_second_title; ?></h2>
                            <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $investments_info_page_second_paragraph; ?></p>
                            <?php if( have_rows('investments_info_page_second_list') ): $s= 1; $a=0; ?>

                            <?php while( have_rows('investments_info_page_second_list') ): the_row() ;
                                    $i++;
                                            $investments_info_page_second_list_item = get_sub_field('investments_info_page_second_list_item');
                                    ?>
                                <div style="display:flex; gap:6px;">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#00AEC5" class="bi bi-plus" viewBox="0 0 16 16">
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="pxp-is-address" style="padding-top: 1px;"><?php echo $investments_info_page_second_list_item; ?></p>
                                    </div>
                                </div>
                                <?php endwhile; endif; ?>
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
                            <h2 class="pxp-section-h2 mt-3 mt-md-5 mt-lg-0"><?php echo $investments_info_page_third_section_title; ?></h2>
                            <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $investments_info_page_third_section_description; ?></p>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5 order-first order-lg-last">
                            <div class="pxp-cta-3-image pxp-cover rounded-lg" style="background-image: url(https://mdataz.com/yulstaynew/wp-content/uploads/2023/10/19-2.jpg);"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pxp-cta-3 mt-100">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="pxp-cta-3-image pxp-cover rounded-lg" style="background-image: url(https://mdataz.com/yulstaynew/wp-content/uploads/2023/10/19-2.jpg);"></div>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-4">
                            <h2 class="pxp-section-h2 mt-3 mt-md-5 mt-lg-0"><?php echo $investments_info_page_forth_section_title; ?></h2>
                            <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $investments_info_page_forth_section_description; ?></p>

                        </div>
                        <div class="col-lg-1"></div>
                    </div>
                </div>
            </div>

            <div class="pxp-cta-4 mt-100 mb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <div class="text-center">
                                <h2 class="pxp-section-h2"><?php echo $investments_info_page_fifth_section_title; ?></h2>
                                <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $investments_info_page_fifth_section_description; ?></p>
                                <!-- <a href="contact.html" class="pxp-primary-cta text-uppercase mt-3 mt-md-5 pxp-animate">Contact us now</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pxp-cta-4 mb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <div class="text-center">
                                <h2 class="pxp-section-h2"><?php echo $investments_info_page_sixth_section_title; ?></h2>
                                <p class="pxp-text-light mt-3 mt-lg-4"><?php echo $investments_info_page_sixth_section_description; ?></p>
                                <!-- <a href="contact.html" class="pxp-primary-cta text-uppercase mt-3 mt-md-5 pxp-animate">Contact us now</a> -->
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