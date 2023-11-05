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

        <div class="pxp-content mb-100">
            <div class="pxp-contact pxp-content-wrapper banner-mtop">
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

                    <!-- <div class="pxp-contact-hero-offices-container">
                        <div class="container">
                            <div class="pxp-contact-hero-offices">
                                <h2 class="pxp-section-h2"><?php echo $contact_page_contact_details_title; ?></h2>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pxp-contact-hero-offices-title mt-3 mt-md-4"><?php echo $contact_page_address_line_one; ?></div>
                                        <div class="pxp-contact-hero-offices-info mt-2 mt-md-3">
                                            <p class="pxp-is-address"><span class="fa fa-location-arrow"></span> <?php echo $contact_page_address_line_two; ?></p>
                                            <p>
                                                <a href="<?php echo $contact_page_contact_number_link; ?>"><span class="fa fa-phone"> </span><?php echo $contact_page_contact_number; ?></a><br>
                                                <a href="<?php echo $contact_page_email_address_link; ?>"><span class="fa fa-envelope-o"> </span><?php echo $contact_page_email_address; ?></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>

                        <div class="container mt-100">
                        <h2 class="pxp-section-h2"><?php echo $contact_page_contact_details_title; ?></h2>
                                
                                <div class="row">
                                    <!-- <div class="col-sm-12 col-md-4">
                                        <h2 class="pxp-section-h2" style="text-align: center;"><?php echo $contact_page_contact_details_title; ?></h2>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="pxp-contact-hero-offices-title" style="text-align: center;"><?php echo $contact_page_address_line_one; ?></div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        
                                        <div class="pxp-contact-hero-offices-info mt-2">
                                            <p class="pxp-is-address"><?php echo $contact_page_address_line_two; ?></p>
                                            <p>
                                                <a href="<?php echo $contact_page_contact_number_link; ?>"><?php echo $contact_page_contact_number; ?></a><br>
                                                <a href="<?php echo $contact_page_email_address_link; ?>"><?php echo $contact_page_email_address; ?></a>
                                            </p>
                                        </div>
                                    </div> -->
                                    
                                    <div class="col-sm-12 col-md-4">
                                        <div class="pxp-contact-hero-offices-title"><?php echo $contact_page_address_line_one; ?></div>
                                        <div class="pxp-contact-hero-offices-info mt-2 mt-md-3">
                                            <p class="pxp-is-address"><span class="fa fa-location-arrow"></span>&nbsp;&nbsp;<?php echo $contact_page_address_line_two; ?></p>
                                            <p>
                                                <a href="<?php echo $contact_page_contact_number_link; ?>"><span class="fa fa-phone">&nbsp;&nbsp;</span><?php echo $contact_page_contact_number; ?></a><br>
                                                <a href="<?php echo $contact_page_email_address_link; ?>"><span class="fa fa-envelope-o">&nbsp;&nbsp;</span><?php echo $contact_page_email_address; ?></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>

                <div class="container mt-100">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                        <div style="display:flex; justify-content: space-between; align-items: center;">
                            <div>
                                <h2 class="pxp-section-h2" id="form-title">Select your form</h2>
                            </div>
                            <div>
                                <select class="contact-dropbtn" id="select-form">
                                    <option value="default">Select your form</option>
                                    <option value="investment-form">Investments</option>
                                    <option value="purchase-form">Purchase</option>
                                    <option value="sale-form">Sale</option>
                                    <option value="rental-form">Rental & Management</option>
                                </select>
                            </div>
                        </div>
                        
                        <div id="form-id">
                            <div id="default-content" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-big.jpg); width: 100%; height: 450px;">
                                
                            </div>
                            <div id="investment-form-content" style="display: none;">
                                <?php echo do_shortcode('[contact-form-7 id="714498e" title="Investments"]'); ?>
                            </div>
                            <div id="purchase-form-content" style="display: none;">
                                <?php echo do_shortcode('[contact-form-7 id="714498e" title="Investments"]'); ?>
                            </div>
                            <div id="sale-form-content" style="display: none;">
                                <?php echo do_shortcode('[contact-form-7 id="35457d9" title="Sale"]'); ?>
                            </div>
                            <div id="rental-form-content" style="display: none;">
                                <?php echo do_shortcode('[contact-form-7 id="35457d9" title="Sale"]'); ?>
                            </div>
                        </div>
                        
                        <script>
                            // Get references to the select element and the form content sections
                            const selectForm = document.getElementById('select-form');
                            const formTitle = document.getElementById('form-title');
                            const formId = document.getElementById('form-id');
                        
                            // Add an event listener to the select element
                            selectForm.addEventListener('change', () => {
                                // Get the selected option's value
                                const selectedOption = selectForm.value;
                        
                                // Hide all form content sections
                                Array.from(formId.children).forEach(section => {
                                    section.style.display = 'none';
                                });
                        
                                // Show the selected form content section
                                const selectedContent = document.getElementById(selectedOption + '-content');
                                if (selectedContent) {
                                    selectedContent.style.display = 'block';
                                }
                        
                                // Update the title with the selected option's text
                                formTitle.textContent = selectForm.options[selectForm.selectedIndex].text;
                            });
                        
                            // Display the default content initially
                            document.getElementById('default-content').style.display = 'block';
                        </script>
                        
                            <!-- <?php echo do_shortcode('[contact-form-7 id="96e23ab" title="Contact Form"]'); ?> -->
                            <!-- <div class="pxp-contact-form mt-3 mt-md-4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pxp-contact-form-name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <select class="custom-select" id="pxp-contact-form-reg">
                                                <option value=""> - select option - </option>
                                                <option value="">Residential</option>
                                                <option value="">Multi Residential</option>
                                                <option value="">Rental Property</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input type="date" class="form-control" id="pxp-contact-form-email" placeholder="Date of purchase">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pxp-contact-form-email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone (optional)" id="pxp-contact-form-phone">
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="pxp-contact-form-btn">Send Message</a>
                            </div> -->
                            <!-- <div class="pxp-contact-form mt-3 mt-md-4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pxp-contact-form-name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pxp-contact-form-name" placeholder="Expected sale price">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pxp-contact-form-email" placeholder="Desired sale date">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pxp-contact-form-name" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pxp-contact-form-email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone (optional)" id="pxp-contact-form-phone">
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="pxp-contact-form-btn">Send Message</a>
                            </div> -->
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="row mt-4 mt-md-5 mt-lg-0">
                                <div class="col-6">
                                    <h2 class="pxp-section-h2"><?php _e('Our Locations','theme-text-domain'); ?></h2>
                                </div>
                                <!-- <div class="col-6 text-right">
                                    <select class="custom-select pxp-contact-locations-select">
                                        <option value="la">Los Angeles</option>
                                        <option value="ny">New York</option>
                                        <option value="sf">San Francisco</option>
                                    </select>
                                </div> -->
                            </div>
                            <div class="mt-3">
                            <iframe style="width: 100%; height: 450px; border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82654.1772775515!2d-73.63507320679707!3d45.500930295474966!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91b04898a3c2b%3A0xa830225a045600ad!2sYulstay%20Real%20Estate%20Services!5e0!3m2!1sen!2slk!4v1697704831057!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALbrsESmR55p0PLDbeL-SQ_YPuRpucYrw&amp;libraries=geometry&amp;libraries=places"></script>

<?php get_footer(); ?>