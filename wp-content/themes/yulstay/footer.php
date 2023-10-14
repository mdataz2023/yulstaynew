<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
	        <div class="pxp-footer pt-100 pb-100 mt-100">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-4">
                        <div class="pxp-footer-logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/yulstay-logo.png" style="width: 8rem;" alt="">
                        </div>
                        <div class="pxp-footer-address mt-2">
                            45 Rue des Soeurs Grises<br>
                            Montréal, QC H3C 6N2<br>
                            514.588.7663
                        </div>
                        <div class="pxp-footer-social mt-2">
                            <a href="#"><span class="fa fa-instagram"></span></a>
                            <a href="#"><span class="fa fa-facebook-square"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-8">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <h4 class="pxp-footer-header mt-4 mt-lg-0">Company</h4>
                                <ul class="list-unstyled pxp-footer-links mt-2">
                                    <!-- <li><a href="">About Us</a></li> -->
                                    <li><a href="<?php bloginfo('url'); ?>/team">Team</a></li>
                                    <li><a href="">Yulstay</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/contact">Contact Us</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/join-our-team">Join Our Team</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <h4 class="pxp-footer-header mt-4 mt-lg-0">Actions</h4>
                                <ul class="list-unstyled pxp-footer-links mt-2">
                                    <li><a href="<?php bloginfo('url'); ?>/residential">Residential</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/multi-residentialv">Multi Residential</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/rental-property">Rental + Management</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <h4 class="pxp-footer-header mt-4 mt-lg-0">Team</h4>
                                <ul class="list-unstyled pxp-footer-links mt-2">
                                    <li><a href="<?php bloginfo('url'); ?>/ralph-sebaaly/">Ralph Sebaaly</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/christian-daoud/">Christian Daoud</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/parvez-coowar/">Parvez Coowar</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/cynthia-dahoud/">Cynthia Dahoud</a></li>
                                    <li><a href="<?php bloginfo('url'); ?>/michael-ghannoum/">Michael Ghannoum</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pxp-footer-bottom mt-2">
                    <div><a href="#">Terms & Conditions</a> and <a href="#">Privacy Policy</a></div>
                    <div class="pxp-footer-copyright">&copy; Yulasty. All Rights Reserved. 2023</div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="pxp-signin-modal" tabindex="-1" role="dialog" aria-labelledby="pxpSigninModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-title" id="pxpSigninModal">Welcome back!</h5>
                        <form class="mt-4">
                            <div class="form-group">
                                <label for="pxp-signin-email">Email</label>
                                <input type="text" class="form-control" id="pxp-signin-email" placeholder="Enter your email address">
                            </div>
                            <div class="form-group">
                                <label for="pxp-signin-pass">Password</label>
                                <input type="password" class="form-control" id="pxp-signin-pass" placeholder="Enter your password">
                            </div>
                            <div class="form-group">
                                <a href="#" class="pxp-agent-contact-modal-btn">Sign In</a>
                            </div>
                            <div class="form-group mt-4 text-center pxp-modal-small">
                                <a href="#" class="pxp-modal-link">Forgot password</a>
                            </div>
                            <div class="text-center pxp-modal-small">
                                New to Resideo? <a href="javascript:void(0);" class="pxp-modal-link pxp-signup-trigger">Create an account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="pxp-signup-modal" tabindex="-1" role="dialog" aria-labelledby="pxpSignupModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="modal-title" id="pxpSignupModal">Create an account</h5>
                        <form class="mt-4">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="pxp-signup-firstname">First Name</label>
                                        <input type="text" class="form-control" id="pxp-signup-firstname" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="pxp-signup-lastname">Last Name</label>
                                        <input type="text" class="form-control" id="pxp-signup-lastname" placeholder="Enter last name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pxp-signup-email">Email</label>
                                <input type="text" class="form-control" id="pxp-signup-email" placeholder="Enter your email address">
                            </div>
                            <div class="form-group">
                                <label for="pxp-signup-pass">Password</label>
                                <input type="password" class="form-control" id="pxp-signup-pass" placeholder="Create a password">
                            </div>
                            <div class="form-group">
                                <a href="#" class="pxp-agent-contact-modal-btn">Sign Up</a>
                            </div>
                            <div class="text-center mt-4 pxp-modal-small">
                                Already have an account? <a href="javascript:void(0);" class="pxp-modal-link pxp-signin-trigger">Sign in</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_KEY_HERE&amp;libraries=geometry&amp;libraries=places"></script> -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/contact-map.js?assasd"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?kasjdk"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.sticky.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?asder"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/markerclusterer.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?asdsd"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/map.js?asldksjd"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?sadok"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/photoswipe.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/photoswipe-ui-default.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/gallery.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/infobox.js"></script>
        <!-- <script src="<?php echo get_template_directory_uri(); ?>/js/single-map.js"></script> -->
        <script src="<?php echo get_template_directory_uri(); ?>/js/Chart.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?asdasd12"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?lasjkj"></script>

<?php wp_footer(); ?>

</body>
</html>
