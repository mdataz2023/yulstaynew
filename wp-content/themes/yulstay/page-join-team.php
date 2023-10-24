<?php
/*
	Template Name: Join Our Team
*/
get_header();

$join_our_team_page_banner_image = get_field('join_our_team_page_banner_image');
$join_our_team_page_title = get_field('join_our_team_page_title');
$join_our_team_page_title_description = get_field('join_our_team_page_title_description');
$join_our_team_page_contact_details_title = get_field('join_our_team_page_contact_details_title');
$join_our_team_page_address_line_one = get_field('join_our_team_page_address_line_one');
$join_our_team_page_address_line_two = get_field('join_our_team_page_address_line_two');
$join_our_team_page_contact_number = get_field('join_our_team_page_contact_number');
$join_our_team_page_contact_number_link = get_field('join_our_team_page_contact_number_link');
$join_our_team_page_email_address = get_field('join_our_team_page_email_address');
$join_our_team_page_email_address_link = get_field('join_our_team_page_email_address_link');
$join_our_team_page_contact_deatils_description = get_field('join_our_team_page_contact_deatils_description');
$join_our_team_page_list_section_title = get_field('join_our_team_page_list_section_title');
$join_our_team_page_paragraph = get_field('join_our_team_page_paragraph');

?>

        <div class="pxp-content">
            <div class="pxp-contact pxp-content-wrapper mt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <h1 class="pxp-page-header"><?php echo $join_our_team_page_title; ?></h1>
                            <p class="pxp-text-light"><?php echo $join_our_team_page_title_description; ?></p>
                        </div>
                    </div>
                </div>

                <div class="pxp-contact-hero mt-4 mt-md-5">
                    <div class="pxp-contact-hero-fig pxp-cover" style="background-image: url(<?php echo $join_our_team_page_banner_image ?>); background-position: 50% 80%;"></div>

                    <!-- <div class="pxp-contact-hero-offices-container">
                        <div class="container">
                            <div class="pxp-contact-hero-offices">
                                <h2 class="pxp-section-h2"><?php echo $join_our_team_page_contact_details_title; ?></h2>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="pxp-contact-hero-offices-title mt-3 mt-md-4"><?php echo $join_our_team_page_address_line_one; ?></div>
                                        <div class="pxp-contact-hero-offices-info mt-2 mt-md-3">
                                            <p class="pxp-is-address"><?php echo $join_our_team_page_address_line_two; ?></p>
                                            <p>
                                                <a href="<?php echo $join_our_team_page_contact_number_link; ?>"><?php echo $join_our_team_page_contact_number; ?></a><br>
                                                <a href="<?php echo $join_our_team_page_email_address_link; ?>"><?php echo $join_our_team_page_email_address; ?></a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>

                        <div class="container">
                            <div class="pxp-contact-hero-offices">
                                <h2 class="pxp-section-h2"><?php echo $join_our_team_page_contact_details_title; ?></h2>

                                <p class="pxp-is-address"><?php echo $join_our_team_page_contact_deatils_description; ?></p>

                                <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                        <div class="pxp-contact-hero-offices-title"><?php echo $join_our_team_page_address_line_one; ?></div>
                                        <div class="pxp-contact-hero-offices-info mt-2 mt-md-3">
                                            <p class="pxp-is-address"><?php echo $join_our_team_page_address_line_two; ?></p>
                                            <p>
                                                <a href="<?php echo $join_our_team_page_contact_number_link; ?>"><?php echo $join_our_team_page_contact_number; ?></a><br>
                                                <a href="<?php echo $join_our_team_page_email_address_link; ?>"><?php echo $join_our_team_page_email_address; ?></a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="pxp-contact-hero-offices-title">Saint-Laurent - BLVD Immobilier</div>
                                        <div class="pxp-contact-hero-offices-info mt-2 mt-md-3">
                                            <p class="pxp-is-address">4030 Boulevard Côte Vertu Ouest Suite 111, Saint-Laurent, Quebec, H4R 1V4</p>
                                            <p>
                                                <a href="<?php echo $join_our_team_page_contact_number_link; ?>"><?php echo $join_our_team_page_contact_number; ?></a><br>
                                                <a href="<?php echo $join_our_team_page_email_address_link; ?>"><?php echo $join_our_team_page_email_address; ?></a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="pxp-contact-hero-offices-title">Pointe-Claire - BLVD Immobilier</div>
                                        <div class="pxp-contact-hero-offices-info mt-2 mt-md-3">
                                            <p class="pxp-is-address">6600, aut Transcanadienne, Suite 203, Pointe-Claire, Québec, H9R 4S2</p>
                                            <p>
                                                <a href="<?php echo $join_our_team_page_contact_number_link; ?>"><?php echo $join_our_team_page_contact_number; ?></a><br>
                                                <a href="<?php echo $join_our_team_page_email_address_link; ?>"><?php echo $join_our_team_page_email_address; ?></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="pxp-contact-hero-offices" style="padding-bottom: 0px; padding-top: 0px;">
                                <h2 class="pxp-contact-hero-offices-title"><?php echo $join_our_team_page_list_section_title; ?></h2>
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                    <?php if( have_rows('join_our_team_page_list_left') ): $s= 1; $a=0; ?>

                                    <?php while( have_rows('join_our_team_page_list_left') ): the_row() ;
                                            $i++;
                                                    $join_our_team_page_list_left_items = get_sub_field('join_our_team_page_list_left_items');
                                            ?>
                                            <div style="display:flex; gap:6px;">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#00AEC5" class="bi bi-plus" viewBox="0 0 16 16">
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="pxp-is-address"><?php echo $join_our_team_page_list_left_items; ?></p>
                                                </div>
                                            </div>
                                        
                                        <?php endwhile; endif; ?>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                    <?php if( have_rows('join_our_team_page_list_right') ): $s= 1; $a=0; ?>

                                    <?php while( have_rows('join_our_team_page_list_right') ): the_row() ;
                                            $i++;
                                                    $join_our_team_page_list_right_items = get_sub_field('join_our_team_page_list_right_items');
                                            ?>
                                        
                                        <div style="display:flex; gap:6px;">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#00AEC5" class="bi bi-plus" viewBox="0 0 16 16">
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                    </svg>
                                                </div>
                                                <div>
                                                    <p class="pxp-is-address"><?php echo $join_our_team_page_list_right_items; ?></p>
                                                </div>
                                            </div>
                                        <?php endwhile; endif; ?>
                                    </div>
                                </div>
                                <p class="pxp-contact-hero-offices-title"><?php echo $join_our_team_page_paragraph; ?></p>
                            </div>
                        </div>

                <div class="container mt-100">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="pxp-section-h2">Send Us A Message</h2>
                            <?php echo do_shortcode('[contact-form-7 id="3660b35" title="Join Our Team Form"]'); ?>
                            <!-- <div class="pxp-contact-form mt-3 mt-md-4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pxp-contact-form-name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="pxp-contact-form-email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <select class="custom-select" id="pxp-contact-form-reg">
                                                <option value=""> - Choose a position - </option>
                                                <option value="">New Brokers</option>
                                                <option value="">Experienced Brokers</option>
                                                <option value="">Rental Expert</option>
                                                <option value="">Property Manger</option>
                                                <option value="">Administrative</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone (optional)" id="pxp-contact-form-phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="pxp-contact-form-message" rows="6" placeholder="Message"></textarea>
                                </div>
                                <a href="#" class="pxp-contact-form-btn">Send Message</a>
                            </div> -->
                        </div>
                        <!-- <div class="col-sm-12 col-lg-6">
                            <div class="row mt-4 mt-md-5 mt-lg-0">
                                <div class="col-6">
                                    <h2 class="pxp-section-h2">Our Locations</h2>
                                </div>
                                <div class="col-6 text-right">
                                    <select class="custom-select pxp-contact-locations-select">
                                        <option value="la">Los Angeles</option>
                                        <option value="ny">New York</option>
                                        <option value="sf">San Francisco</option>
                                    </select>
                                </div>
                            </div>
                            <div id="pxp-contact-map" class="mt-3"></div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>