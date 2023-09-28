<?php
/*
	Template Name: Rental Property
*/
get_header();?>

        <div class="pxp-content pxp-full-height">
            <div class="pxp-map-side pxp-map-right pxp-half">
                <div id="results-map"></div>
                <a href="javascript:void(0);" class="pxp-list-toggle"><span class="fa fa-list"></span></a>
            </div>
            <div class="pxp-content-side pxp-content-left pxp-half">
                <div class="pxp-content-side-wrapper">
                    <div class="d-flex">
                        <div class="pxp-content-side-search-form">
                            <div class="row pxp-content-side-search-form-row">
                                <div class="col-5 col-sm-5 col-md-4 col-lg-3 pxp-content-side-search-form-col">
                                    <select class="custom-select" id="pxp-p-search-status">
                                        <option value="buy" selected="selected">Buy</option>
                                        <option value="rent">Rent</option>
                                    </select>
                                </div>
                                <div class="col-7 col-sm-7 col-md-8 col-lg-9 pxp-content-side-search-form-col">
                                    <input type="text" class="form-control pxp-is-address" placeholder="Search by City, Neighborhood, or Address" id="pxp-p-search-address">
                                    <span class="fa fa-search"></span>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <a role="button" class="pxp-adv-toggle"><span class="fa fa-sliders"></span></a>
                        </div>
                    </div>
                    <div class="pxp-content-side-search-form-adv mb-3">
                        <div class="row pxp-content-side-search-form-row">
                            <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                                <div class="form-group">
                                    <label for="pxp-p-filter-price-min">Price</label>
                                    <input type="text" class="form-control" placeholder="Min" id="pxp-p-filter-price-min">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                                <div class="form-group">
                                    <label for="pxp-p-filter-price-max" class="d-none d-sm-inline-block">&nbsp;</label>
                                    <input type="text" class="form-control" placeholder="Max" id="pxp-p-filter-price-max">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                                <div class="form-group">
                                    <label for="pxp-p-filter-beds">Beds</label>
                                    <select class="custom-select" id="pxp-p-filter-beds">
                                        <option value="" selected="selected">Any</option>
                                        <option value="">Studio</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                                <div class="form-group">
                                    <label for="pxp-p-filter-baths">Baths</label>
                                    <select class="custom-select" id="pxp-p-filter-baths">
                                        <option value="" selected="selected">Any</option>
                                        <option value="">1+</option>
                                        <option value="">1.5+</option>
                                        <option value="">2+</option>
                                        <option value="">3+</option>
                                        <option value="">4+</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                                <div class="form-group">
                                    <label for="pxp-p-filter-type">Type</label>
                                    <select class="custom-select" id="pxp-p-filter-type">
                                        <option value="">Select type</option>
                                        <option value="">Apartment</option>
                                        <option value="">House</option>
                                        <option value="">Townhome</option>
                                        <option value="">Multi-Family</option>
                                        <option value="">Land</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                                <div class="form-group">
                                    <label for="pxp-p-filter-size-min">Size (sq ft)</label>
                                    <input type="text" class="form-control" id="pxp-p-filter-size-min" placeholder="Min">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                                <div class="form-group">
                                    <label for="pxp-p-filter-size-max" class="d-none d-sm-inline-block">&nbsp;</label>
                                    <input type="text" class="form-control" id="pxp-p-filter-size-max" placeholder="Max">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="mb-2">Amenities</label>
                            <div class="row pxp-content-side-search-form-row">
                                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-check"></span> Internet</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-check"></span> Garage</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-check"></span> Air Conditioning</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-check"></span> Dishwasher</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-check"></span> Disposal</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-check"></span> Balcony</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-check"></span> Gym</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-check"></span> Playroom</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 pxp-content-side-search-form-col">
                                    <div class="form-group">
                                        <div class="checkbox custom-checkbox">
                                            <label><input type="checkbox" value="1"><span class="fa fa-check"></span> Bar</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="pxp-filter-btn">Apply Filters</a>
                    </div>
                    <div class="row pb-4">
                        <div class="col-sm-6">
                            <h2 class="pxp-content-side-h2">1,684 Results</h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="pxp-sort-form form-inline float-right">
                                <div class="form-group">
                                    <select class="custom-select" id="pxp-sort-results">
                                        <option value="" selected="selected">Default Sort</option>
                                        <option value="">Price (Lo-Hi)</option>
                                        <option value="">Price (Hi-Lo)</option>
                                        <option value="">Beds</option>
                                        <option value="">Baths</option>
                                        <option value="">Size</option>
                                    </select>
                                </div>
                                <div class="form-group d-flex">
                                    <a role="button" class="pxp-map-toggle"><span class="fa fa-map-o"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <?php $the_query = new WP_Query( array('post_type' =>'rental-property','posts_per_page' => '100',  'post__not_in'   => array( $id),) );?>
							     <?php if ( have_posts())   : while ( $the_query->have_posts() ) : $the_query->the_post();?>
							  
									   <?php
										$thumbnail_id = get_post_thumbnail_id(); 
										$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
										$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true); 

                    $categories = get_the_category();
										
										?>
                        <div class="col-sm-12 col-md-6 col-xxxl-4">
                            <a href="<?php the_permalink(); ?>" class="pxp-results-card-1 rounded-lg" data-prop="1">
                                <div id="card-carousel-1" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" style="background-image: url(images/ph-gallery.jpg)"></div>
                                        <div class="carousel-item" style="background-image: url(images/ph-gallery.jpg);"></div>
                                        <div class="carousel-item" style="background-image: url(images/ph-gallery.jpg);"></div>
                                    </div>
                                    <span class="carousel-control-prev" data-href="#card-carousel-1" data-slide="prev">
                                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                                    </span>
                                    <span class="carousel-control-next" data-href="#card-carousel-1" data-slide="next">
                                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                                    </span>
                                </div>
                                <div class="pxp-results-card-1-gradient"></div>
                                <div class="pxp-results-card-1-details">
                                    <div class="pxp-results-card-1-details-title"><?php the_title(); ?></div>
                                    <div class="pxp-results-card-1-details-price">$890,000</div>
                                </div>
                                <div class="pxp-results-card-1-features">
                                    <span>2 BD <span>|</span> 2 BA <span>|</span> 920 SF</span>
                                </div>
                                <div class="pxp-results-card-1-save"><span class="fa fa-star-o"></span></div>
                            </a>
                        </div>
                        <?php endwhile; endif; ?>

                        <!-- <div class="col-sm-12 col-md-6 col-xxxl-4">
                            <a href="single-property.html" class="pxp-results-card-1 rounded-lg" data-prop="2">
                                <div id="card-carousel-2" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" style="background-image: url(images/ph-gallery.jpg)"></div>
                                        <div class="carousel-item" style="background-image: url(images/ph-gallery.jpg);"></div>
                                        <div class="carousel-item" style="background-image: url(images/ph-gallery.jpg);"></div>
                                    </div>
                                    <span class="carousel-control-prev" data-href="#card-carousel-2" data-slide="prev">
                                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                                    </span>
                                    <span class="carousel-control-next" data-href="#card-carousel-2" data-slide="next">
                                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                                    </span>
                                </div>
                                <div class="pxp-results-card-1-gradient"></div>
                                <div class="pxp-results-card-1-details">
                                    <div class="pxp-results-card-1-details-title">Colorful Little Apartment</div>
                                    <div class="pxp-results-card-1-details-price">$2,675</div>
                                </div>
                                <div class="pxp-results-card-1-features">
                                    <span>1 BD <span>|</span> 1 BA <span>|</span> 500 SF</span>
                                </div>
                                <div class="pxp-results-card-1-save"><span class="fa fa-star-o"></span></div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xxxl-4">
                            <a href="single-property.html" class="pxp-results-card-1 rounded-lg" data-prop="3">
                                <div id="card-carousel-3" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" style="background-image: url(images/ph-gallery.jpg)"></div>
                                        <div class="carousel-item" style="background-image: url(images/ph-gallery.jpg);"></div>
                                        <div class="carousel-item" style="background-image: url(images/ph-gallery.jpg);"></div>
                                    </div>
                                    <span class="carousel-control-prev" data-href="#card-carousel-3" data-slide="prev">
                                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                                    </span>
                                    <span class="carousel-control-next" data-href="#card-carousel-3" data-slide="next">
                                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                                    </span>
                                </div>
                                <div class="pxp-results-card-1-gradient"></div>
                                <div class="pxp-results-card-1-details">
                                    <div class="pxp-results-card-1-details-title">Cozy Two Bedroom Apartment</div>
                                    <div class="pxp-results-card-1-details-price">$960,000</div>
                                </div>
                                <div class="pxp-results-card-1-features">
                                    <span>2 BD <span>|</span> 2 BA <span>|</span> 870 SF</span>
                                </div>
                                <div class="pxp-results-card-1-save"><span class="fa fa-star-o"></span></div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xxxl-4">
                            <a href="single-property.html" class="pxp-results-card-1 rounded-lg" data-prop="4">
                                <div id="card-carousel-4" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" style="background-image: url(images/ph-gallery.jpg)"></div>
                                        <div class="carousel-item" style="background-image: url(images/ph-gallery.jpg);"></div>
                                        <div class="carousel-item" style="background-image: url(images/ph-gallery.jpg);"></div>
                                    </div>
                                    <span class="carousel-control-prev" data-href="#card-carousel-4" data-slide="prev">
                                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                                    </span>
                                    <span class="carousel-control-next" data-href="#card-carousel-4" data-slide="next">
                                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                                    </span>
                                </div>
                                <div class="pxp-results-card-1-gradient"></div>
                                <div class="pxp-results-card-1-details">
                                    <div class="pxp-results-card-1-details-title">Beautiful House in Marina</div>
                                    <div class="pxp-results-card-1-details-price">$5,198,000</div>
                                </div>
                                <div class="pxp-results-card-1-features">
                                    <span>5 BD <span>|</span> 4.5 BA <span>|</span> 3,945 SF</span>
                                </div>
                                <div class="pxp-results-card-1-save"><span class="fa fa-star-o"></span></div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xxxl-4">
                            <a href="single-property.html" class="pxp-results-card-1 rounded-lg" data-prop="5">
                                <div id="card-carousel-5" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" style="background-image: url(images/ph-gallery.jpg)"></div>
                                        <div class="carousel-item" style="background-image: url(images/ph-gallery.jpg);"></div>
                                        <div class="carousel-item" style="background-image: url(images/ph-gallery.jpg);"></div>
                                    </div>
                                    <span class="carousel-control-prev" data-href="#card-carousel-5" data-slide="prev">
                                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                                    </span>
                                    <span class="carousel-control-next" data-href="#card-carousel-5" data-slide="next">
                                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                                    </span>
                                </div>
                                <div class="pxp-results-card-1-gradient"></div>
                                <div class="pxp-results-card-1-details">
                                    <div class="pxp-results-card-1-details-title">Modern Residence</div>
                                    <div class="pxp-results-card-1-details-price">$7,995</div>
                                </div>
                                <div class="pxp-results-card-1-features">
                                    <span>4 BD <span>|</span> 1.5 BA <span>|</span> 2,240 SF</span>
                                </div>
                                <div class="pxp-results-card-1-save"><span class="fa fa-star-o"></span></div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xxxl-4">
                            <a href="single-property.html" class="pxp-results-card-1 rounded-lg" data-prop="6">
                                <div id="card-carousel-6" class="carousel slide" data-ride="carousel" data-interval="false">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" style="background-image: url(images/ph-gallery.jpg)"></div>
                                        <div class="carousel-item" style="background-image: url(images/ph-gallery.jpg);"></div>
                                        <div class="carousel-item" style="background-image: url(images/ph-gallery.jpg);"></div>
                                    </div>
                                    <span class="carousel-control-prev" data-href="#card-carousel-6" data-slide="prev">
                                        <span class="fa fa-angle-left" aria-hidden="true"></span>
                                    </span>
                                    <span class="carousel-control-next" data-href="#card-carousel-6" data-slide="next">
                                        <span class="fa fa-angle-right" aria-hidden="true"></span>
                                    </span>
                                </div>
                                <div class="pxp-results-card-1-gradient"></div>
                                <div class="pxp-results-card-1-details">
                                    <div class="pxp-results-card-1-details-title">Luxury Mansion</div>
                                    <div class="pxp-results-card-1-details-price">$5,430,000</div>
                                </div>
                                <div class="pxp-results-card-1-features">
                                    <span>4 BD <span>|</span> 5 BA <span>|</span> 5,200 SF</span>
                                </div>
                                <div class="pxp-results-card-1-save"><span class="fa fa-star-o"></span></div>
                            </a>
                        </div> -->
                    </div>

                    <ul class="pagination pxp-paginantion mt-2 mt-md-4">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next <span class="fa fa-angle-right"></span></a></li>
                    </ul>

                </div>
                <div class="pxp-footer pxp-content-side-wrapper">
                    <div class="pxp-footer-bottom">
                        <div class="pxp-footer-copyright">&copy; Resideo. All Rights Reserved. 2021</div>
                    </div>
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

        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_KEY_HERE&amp;libraries=geometry&amp;libraries=places"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/markerclusterer.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/main.js?asdsd"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/map.js?asldksjd"></script>

        </body>
    </html>