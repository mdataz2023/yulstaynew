<?php
/*
	Template Name: Rental & Management Form
*/
get_header();

$rental_management_page_title = get_field('rental_management_page_title');
$rental_management_page_description = get_field('rental_management_page_description');
$rental_management_page_image = get_field('rental_management_page_image');
$rental_management_page_form_description = get_field('rental_management_page_form_description');

?>

        <div class="pxp-content mb-100">
            <div class="pxp-contact pxp-content-wrapper banner-mtop">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <h1 class="pxp-page-header"><?php echo $rental_management_page_title; ?></h1>
                            <p class="pxp-text-light"><?php echo $rental_management_page_description; ?></p>
                        </div>
                    </div>
                </div>

                <!-- <div class="pxp-contact-hero mt-4 mt-md-5">
                    <div class="pxp-contact-hero-fig pxp-cover" style="background-image: url(https://mdataz.com/yulstaynew/wp-content/uploads/2023/09/ph-big.jpg); background-position: 50% 80%;"></div>
                </div> -->

                <div class="container mt-100">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                                <div>
                                    <h2 class="pxp-section-h2" id="form-title">Invesment Form</h2>
                                </div>
                            <div id="form-id">
                                <div id="investment-form-content">
                                    <p class="pxp-text-light"><?php echo $rental_management_page_form_description; ?></p>
                                    <?php echo do_shortcode('[contact-form-7 id="714498e" title="Investments"]'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-6" style="background-image: url(<?php echo $rental_management_page_image; ?>">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>