<?php
/*
	Template Name: Purchase Form
*/
get_header();

?>

        <div class="pxp-content mb-100">
            <div class="pxp-contact pxp-content-wrapper banner-mtop">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <h1 class="pxp-page-header">Purchase Form</h1>
                            <p class="pxp-text-light">Three offices to better serve you</p>
                        </div>
                    </div>
                </div>

                <div class="pxp-contact-hero mt-4 mt-md-5">
                    <div class="pxp-contact-hero-fig pxp-cover" style="background-image: url(https://mdataz.com/yulstaynew/wp-content/uploads/2023/09/ph-big.jpg); background-position: 50% 80%;"></div>
                </div>

                <div class="container mt-100">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                                <div>
                                    <h2 class="pxp-section-h2" id="form-title">Purchase Form</h2>
                                </div>
                            <div id="form-id">
                                <div id="investment-form-content">
                                    <?php echo do_shortcode('[contact-form-7 id="714498e" title="Investments"]'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-6" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-big.jpg);">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>