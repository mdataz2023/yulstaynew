<?php
/*
	Template Name: Contact
*/
get_header();

$contact_page_banner_image = get_field('contact_page_banner_image');
$contact_page_title = get_field('contact_page_title');
$contact_page_title_description = get_field('contact_page_title_description');
$contact_page_contact_details_title = get_field('contact_page_contact_details_title');
$contact_page_address_line_one = get_field('contact_page_address_line_one');
$contact_page_address_line_two = get_field('contact_page_address_line_two');
$contact_page_contact_number = get_field('contact_page_contact_number');
$contact_page_contact_number_link = get_field('contact_page_contact_number_link');
$contact_page_email_address = get_field('contact_page_email_address');
$contact_page_email_address_link = get_field('contact_page_email_address_link');

?>

        <div class="pxp-content">
            <div class="pxp-contact pxp-content-wrapper mt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <h1 class="pxp-page-header"><?php echo $contact_page_title; ?></h1>
                            <p class="pxp-text-light"><?php echo $contact_page_title_description; ?></p>
                        </div>
                    </div>
                </div>

                <div class="pxp-contact-hero mt-4 mt-md-5">
                    <div class="pxp-contact-hero-fig pxp-cover" style="background-image: url(<?php echo $contact_page_banner_image; ?>); background-position: 50% 80%;"></div>

                    <div class="pxp-contact-hero-offices-container">
                        <div class="container">
                            <div class="pxp-contact-hero-offices">
                                <h2 class="pxp-section-h2"><?php echo $contact_page_contact_details_title; ?></h2>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pxp-contact-hero-offices-title mt-3 mt-md-4"><?php echo $contact_page_address_line_one; ?></div>
                                        <div class="pxp-contact-hero-offices-info mt-2 mt-md-3">
                                            <p class="pxp-is-address"><?php echo $contact_page_address_line_two; ?></p>
                                            <p>
                                                <a href="<?php echo $contact_page_contact_number_link; ?>"><?php echo $contact_page_contact_number; ?></a><br>
                                                <a href="<?php echo $contact_page_email_address_link; ?>"><?php echo $contact_page_email_address; ?></a>
                                            </p>
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-12 col-md-4">
                                        <div class="pxp-contact-hero-offices-title mt-3 mt-md-4">New York</div>
                                        <div class="pxp-contact-hero-offices-info mt-2 mt-md-3">
                                            <p class="pxp-is-address">90 Fifth Avenue, 3rd Floor<br>New York, NY 1980</p>
                                            <p>
                                                <a href="#">(123) 789-7390</a><br>
                                                <a href="#">office-ny@resideo.com</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="pxp-contact-hero-offices-title mt-3 mt-md-4">San Francisco</div>
                                        <div class="pxp-contact-hero-offices-info mt-2 mt-md-3">
                                            <p class="pxp-is-address">90 Fifth Avenue, 3rd Floor<br>San Francisco, CA 1980</p>
                                            <p>
                                                <a href="#">(123) 789-7390</a><br>
                                                <a href="#">office-sf@resideo.com</a>
                                            </p>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-200">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <h2 class="pxp-section-h2">Send Us A Message</h2>
                            <div class="pxp-contact-form mt-3 mt-md-4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pxp-contact-form-name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pxp-contact-form-email" placeholder="Email">
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <select class="custom-select" id="pxp-contact-form-reg">
                                                <option value="">What is this regarding?</option>
                                                <option value="">Customer support / feedback</option>
                                                <option value="">Applying</option>
                                                <option value="">Press</option>
                                                <option value="">Listings</option>
                                                <option value="">Partnerships</option>
                                                <option value="">General questions</option>
                                            </select>
                                        </div>
                                    </div> -->
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone (optional)" id="pxp-contact-form-phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="pxp-contact-form-message" rows="6" placeholder="Message"></textarea>
                                </div>
                                <a href="#" class="pxp-contact-form-btn">Send Message</a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="row mt-4 mt-md-5 mt-lg-0">
                                <div class="col-6">
                                    <h2 class="pxp-section-h2">Our Locations</h2>
                                </div>
                                <!-- <div class="col-6 text-right">
                                    <select class="custom-select pxp-contact-locations-select">
                                        <option value="la">Los Angeles</option>
                                        <option value="ny">New York</option>
                                        <option value="sf">San Francisco</option>
                                    </select>
                                </div> -->
                            </div>
                            <div id="pxp-contact-map" class="mt-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALbrsESmR55p0PLDbeL-SQ_YPuRpucYrw&amp;libraries=geometry&amp;libraries=places"></script>

<?php get_footer(); ?>