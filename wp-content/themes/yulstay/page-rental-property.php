<?php
/*
	Template Name: Rental Property
*/
get_header();
$lang = get_bloginfo("language");
$language="A";
$currencyLetterPrefix="";
$currencyLetterSuffix="";
if ($lang == 'en-US'){
    $currencyLetterPrefix="$ ";
    $language="A";
}else{
    $currencyLetterSuffix=" $";
    $language="F";
}
global $wpdb;

$the_query = new WP_Query( array('post_type' =>'rental-property','posts_per_page' => '1000',  'post__not_in'   => array( $id),) );
?>

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
                        <div class="col-12 pxp-content-side-search-form-col">
                            <div class="form-group">
                                <select class="custom-select" id="pxp-p-filter-type">
                                    <option value="" disabled selected><?php _e('Select Area','theme-text-domain'); ?></option>
                                    <option value="All"><?php _e('All','theme-text-domain'); ?></option>
                                    <?php
                                     $datas = $wpdb->get_results("SELECT
                                     m.*, REGION_CODE, m.DESCRIPTION
                                 FROM
                                 wp_posts p join
                                     INSCRIPTIONS i on i.NO_INSCRIPTION=p.post_content
                                         JOIN
                                     MUNICIPALITES m ON m.CODE = i.MUN_CODE
                                         JOIN
                                     REGIONS r ON m.REGION_CODE = r.CODE where p.post_type='rental-property' and i.CODE_STATUT='EV'
                                 GROUP BY i.MUN_CODE", OBJECT );
                                     foreach ($datas as $REGIONS) {
                                        ?>
                                    <option value="<?php echo $REGIONS->CODE;?>">
                                        <?php
                                            echo $language=="A" ?$REGIONS->DESCRIPTION:$REGIONS->DESCRIPTION;?>
                                    </option>
                                    <?php }
                                ?>
                                </select>
                            </div>
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
                            <label for="pxp-p-filter-price-min"><?php _e('Price','theme-text-domain'); ?></label>
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
                            <label for="pxp-p-filter-beds"><?php _e('Beds','theme-text-domain'); ?></label>
                            <select class="custom-select" id="pxp-p-filter-beds">
                                <option value="" selected="selected"><?php _e('Any','theme-text-domain'); ?></option>
                                <option value="">Studio</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5+</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                        <div class="form-group">
                            <label for="pxp-p-filter-baths"><?php _e('Baths','theme-text-domain'); ?></label>
                            <select class="custom-select" id="pxp-p-filter-baths">
                                <option value="" selected="selected"><?php _e('Any','theme-text-domain'); ?></option>
                                <option value="1">1+</option>
                                <option value="2">2+</option>
                                <option value="3">3+</option>
                                <option value="4">4+</option>
                                <option value="5">5+</option>
                            </select>
                        </div>
                    </div>

                </div>


                <!-- <a href="#" class="pxp-filter-btn"><?php _e('Apply Filters','theme-text-domain'); ?></a>
                <a href="#" class="pxp-filter-clear-btn"><?php _e('Clear','theme-text-domain'); ?></a> -->

                <div class="row pxp-content-side-search-form-row">
                    <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                        <div class="form-group">
                            <a href="#" class="pxp-filter-btn"><?php _e('Apply Filters','theme-text-domain'); ?></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                        <div class="form-group">
                            <a href="#" class="pxp-filter-clear-btn"><?php _e('Clear','theme-text-domain'); ?></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="MLSXXXXXXX" id="pxp-p-filter-mls-no">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 pxp-content-side-search-form-col">
                        <div class="form-group">
                            <a href="#" class="search-btn2" id="mls_no_search"><?php _e('Search','theme-text-domain'); ?></a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row pb-4">
                <div class="col-sm-6">
                    <h2 class="pxp-content-side-h2"><?php
                    $POST_COUNT = $wpdb->get_row("SELECT count(NO_INSCRIPTION) as POST_COUNT FROM INSCRIPTIONS i join wp_posts p on p.post_content=i.NO_INSCRIPTION where p.post_type='rental-property' and i.CODE_STATUT='EV'", OBJECT );
                echo $POST_COUNT->POST_COUNT;
                ?> <?php _e('Results','theme-text-domain'); ?></h2>
                </div>
                <div class="col-sm-6">
                    <div class="pxp-sort-form form-inline float-right">
                        <div class="form-group">
                            <select class="custom-select" id="pxp-sort-results">
                                <option value="low"><?php _e('Price (Lo-Hi)','theme-text-domain'); ?></option>
                                <option selected value="high"><?php _e('Price (Hi-Lo)','theme-text-domain'); ?></option>
                            </select>
                        </div>
                        <div class="form-group d-flex">
                            <a role="button" class="pxp-map-toggle"><span class="fa fa-map-o"></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row filter_hide_section">
                <?php
                $postIndex=0;
                if ( have_posts())   : while ( $the_query->have_posts() ) : $the_query->the_post();?>

                <?php
                   $inscriptionsData = $wpdb->get_row(" SELECT * FROM INSCRIPTIONS where NO_INSCRIPTION = '".get_the_content()."' and CODE_STATUT='EV'", OBJECT );
                   if($inscriptionsData){
                    $thumbnail_id = get_post_thumbnail_id();
										$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
										$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);

                    $categories = get_the_category();
                    $results = $wpdb->get_results(" SELECT * FROM PHOTOS where  NO_INSCRIPTION = '".get_the_content()."' limit 3", OBJECT );
				?>
                <div class="col-sm-12 col-md-6 col-xxxl-4 hide_post_class  NO_INSCRIPTION<?php
                             $REGION_CODE = $wpdb->get_row("SELECT r.*,REGION_CODE,m.DESCRIPTION FROM MUNICIPALITES m JOIN REGIONS r ON m.REGION_CODE = r.CODE where m.CODE='".$inscriptionsData->MUN_CODE."' ", OBJECT );
     echo $REGION_CODE->REGION_CODE;?>">
                    <a href="<?php the_permalink(); ?>" class="pxp-results-card-1 rounded-lg" data-prop="1">
                        <div id="card-carousel-<?php echo  $postIndex;?>" class="carousel slide" data-ride="carousel"
                            data-interval="false">
                            <div class="carousel-inner">
                                <?php
                            $photoIndex=0;
                            foreach ($results as $page) {
                        ?>
                                <div class="carousel-item <?php echo $photoIndex==0?"active":""?>"
                                    style="background-image: url(<?php echo $page->PhotoURL;?>)"> </div>
                                <?php
                            $photoIndex= $photoIndex+1;
                         }
                        ?>
                            </div>
                            <span class="carousel-control-prev" data-href="#card-carousel-<?php echo  $postIndex;?>"
                                data-slide="prev">
                                <span class="fa fa-angle-left" aria-hidden="true"></span>
                            </span>
                            <span class="carousel-control-next" data-href="#card-carousel-<?php echo  $postIndex;?>"
                                data-slide="next">
                                <span class="fa fa-angle-right" aria-hidden="true"></span>
                            </span>
                        </div>
                        <div class="pxp-results-card-1-gradient"></div>
                        <div class="pxp-results-card-1-details">
                            <div class="pxp-results-card-1-details-title"><?php
                             $cityName="";
                             if ($lang == 'en-US'){
                                $cityName=$REGION_CODE->DESCRIPTION;
                             }else{
                                $cityName=$REGION_CODE->DESCRIPTION;
                             }
                            echo   $cityName; ?></div>
                            <div class="pxp-results-card-1-details-price">
                                <?php echo $currencyLetterPrefix."". number_format($inscriptionsData->PRIX_LOCATION_DEMANDE).''.$currencyLetterSuffix;;?></div>
                        </div>
                        <div class="pxp-results-card-1-features">
                            <span><?php echo $inscriptionsData->NB_CHAMBRES;?> BD <span>|</span>
                                <?php echo $inscriptionsData->NB_SALLES_BAINS;?> BA <span>|</span>
                                <?php echo $inscriptionsData->SUPERFICIE_HABITABLE." ".$inscriptionsData->UM_SUPERFICIE_HABITABLE;?>
                            </span>
                        </div>

                    </a>
                </div>
                <?php
             $postIndex++;
                        }
            endwhile; endif; ?>

                <!-- <div class="coUl-sm-12 col-md-6 col-xxxl-4">
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
            <div class="row filter_display_section">

            </div>
            <!-- <ul class="pagination pxp-paginantion mt-2 mt-md-4">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next <span class="fa fa-angle-right"></span></a>
                </li>
            </ul> -->

        </div>
        <div class="pxp-footer pxp-content-side-wrapper">
            <div class="pxp-footer-bottom">
                <div class="pxp-footer-copyright">&copy; <?php _e('Yulstay. All Rights Reserved. 2024','theme-text-domain'); ?></div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pxp-signin-modal" tabindex="-1" role="dialog" aria-labelledby="pxpSigninModal"
    aria-hidden="true">
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
                        <input type="text" class="form-control" id="pxp-signin-email"
                            placeholder="Enter your email address">
                    </div>
                    <div class="form-group">
                        <label for="pxp-signin-pass">Password</label>
                        <input type="password" class="form-control" id="pxp-signin-pass"
                            placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <a href="#" class="pxp-agent-contact-modal-btn">Sign In</a>
                    </div>
                    <div class="form-group mt-4 text-center pxp-modal-small">
                        <a href="#" class="pxp-modal-link">Forgot password</a>
                    </div>
                    <div class="text-center pxp-modal-small">
                        New to Resideo? <a href="javascript:void(0);" class="pxp-modal-link pxp-signup-trigger">Create
                            an account</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="pxp-signup-modal" tabindex="-1" role="dialog" aria-labelledby="pxpSignupModal"
    aria-hidden="true">
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
                                <input type="text" class="form-control" id="pxp-signup-firstname"
                                    placeholder="Enter first name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="pxp-signup-lastname">Last Name</label>
                                <input type="text" class="form-control" id="pxp-signup-lastname"
                                    placeholder="Enter last name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pxp-signup-email">Email</label>
                        <input type="text" class="form-control" id="pxp-signup-email"
                            placeholder="Enter your email address">
                    </div>
                    <div class="form-group">
                        <label for="pxp-signup-pass">Password</label>
                        <input type="password" class="form-control" id="pxp-signup-pass"
                            placeholder="Create a password">
                    </div>
                    <div class="form-group">
                        <a href="#" class="pxp-agent-contact-modal-btn">Sign Up</a>
                    </div>
                    <div class="text-center mt-4 pxp-modal-small">
                        Already have an account? <a href="javascript:void(0);"
                            class="pxp-modal-link pxp-signin-trigger">Sign in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeZktuvHBS_UuaSzu7q-KTg7Oh8s8mdrM&amp;libraries=geometry&amp;libraries=places">
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.4.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/markerclusterer.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js?asdsd"></script>
<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/map.js?asldksjd"></script> -->
<script>
(function($) {
    "use strict";


    var map;
    var markers = [];
    var markerCluster;
    var styles;
    var propertiesList = [];
    var options = {
        zoom: 14,
        mapTypeId: 'Styled',
        panControl: false,
        zoomControl: true,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        overviewMapControl: false,
        scrollwheel: false,
        zoomControlOptions: {
            position: google.maps.ControlPosition.RIGHT_BOTTOM,
        },
        fullscreenControl: false,
    };

    styles = [{
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
            "color": "#e9e9e9"
        }, {
            "lightness": 17
        }]
    }, {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [{
            "color": "#f5f5f5"
        }, {
            "lightness": 20
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{
            "color": "#ffffff"
        }, {
            "lightness": 17
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{
            "color": "#ffffff"
        }, {
            "lightness": 29
        }, {
            "weight": 0.2
        }]
    }, {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [{
            "color": "#ffffff"
        }, {
            "lightness": 18
        }]
    }, {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [{
            "color": "#ffffff"
        }, {
            "lightness": 16
        }]
    }, {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{
            "color": "#f5f5f5"
        }, {
            "lightness": 21
        }]
    }, {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{
            "color": "#dedede"
        }, {
            "lightness": 21
        }]
    }, {
        "elementType": "labels.text.stroke",
        "stylers": [{
            "visibility": "on"
        }, {
            "color": "#ffffff"
        }, {
            "lightness": 16
        }]
    }, {
        "elementType": "labels.text.fill",
        "stylers": [{
            "saturation": 36
        }, {
            "color": "#333333"
        }, {
            "lightness": 40
        }]
    }, {
        "elementType": "labels.icon",
        "stylers": [{
            "visibility": "off"
        }]
    }, {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [{
            "color": "#f2f2f2"
        }, {
            "lightness": 19
        }]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [{
            "color": "#fefefe"
        }, {
            "lightness": 20
        }]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [{
            "color": "#fefefe"
        }, {
            "lightness": 17
        }, {
            "weight": 1.2
        }]
    }];
    <?php
                        $datas = $wpdb->get_results("SELECT NB_CHAMBRES,UM_SUPERFICIE_HABITABLE,NB_CHAMBRES_HORS_SOL,LATITUDE,LONGITUDE,NO_INSCRIPTION,DEVISE_PRIX_DEMANDE,PRIX_DEMANDE,PRIX_LOCATION_DEMANDE FROM INSCRIPTIONS i join wp_posts p on p.post_content=i.NO_INSCRIPTION where post_type='rental-property'  and i.CODE_STATUT='EV'", OBJECT );
                        foreach ($datas as $page) {
                            $post = $wpdb->get_row("SELECT ID from wp_posts where post_content='".$page->NO_INSCRIPTION."'", OBJECT );
                            $results = $wpdb->get_row(" SELECT * FROM PHOTOS where  NO_INSCRIPTION = '".$page->NO_INSCRIPTION."'", OBJECT );

                       ?>
    propertiesList.push({
        id: <?php echo  $post->ID ;?>,
        title: '<?php echo $page->NOM_RUE_COMPLET." ".$page->NO_INSCRIPTION;;?>',
        photo: '<?php  echo $results->PhotoURL;?>',
        position: {
            lat: '<?php echo $page->LATITUDE;?>',
            lng: '<?php echo $page->LONGITUDE;?>'
        },
        price: {
            long: '<?php echo  $currencyLetterPrefix."". number_format($page->PRIX_LOCATION_DEMANDE).''.$currencyLetterSuffix;?>',
            short: '<?php echo $currencyLetterPrefix."". number_format($page->PRIX_LOCATION_DEMANDE).''.$currencyLetterSuffix;;?>'
        },
        link: '<?php  echo get_permalink( $post->ID );?>',
        features: {
            beds: '<?php echo $page->NB_CHAMBRES;?>',
            baths: '<?php echo $page->NB_CHAMBRES_HORS_SOL;?>',
            size: '<?php echo $page->SUPERFICIE_HABITABLE." ".$page->UM_SUPERFICIE_HABITABLE;?>'
        }
    });
    <?php
                        }
                        ?>

    function CustomMarker(id, latlng, map, classname, html) {
        this.id = id;
        this.latlng_ = latlng;
        this.classname = classname;
        this.html = html;

        this.setMap(map);
    }

    CustomMarker.prototype = new google.maps.OverlayView();

    CustomMarker.prototype.draw = function() {
        var me = this;
        var div = this.div_;

        if (!div) {
            div = this.div_ = document.createElement('div');
            div.classList.add(this.classname);
            div.innerHTML = this.html;

            google.maps.event.addDomListener(div, 'click', function(event) {
                google.maps.event.trigger(me, 'click');
            });

            var panes = this.getPanes();
            panes.overlayImage.appendChild(div);
        }

        var point = this.getProjection().fromLatLngToDivPixel(this.latlng_);

        if (point) {
            div.style.left = point.x + 'px';
            div.style.top = point.y + 'px';
        }
    };

    CustomMarker.prototype.remove = function() {
        if (this.div_) {
            this.div_.parentNode.removeChild(this.div_);
            this.div_ = null;
        }
    };

    CustomMarker.prototype.getPosition = function() {
        return this.latlng_;
    };

    CustomMarker.prototype.addActive = function() {
        if (this.div_) {
            $('.pxp-price-marker').removeClass('active');
            this.div_.classList.add('active');
        }
    };

    CustomMarker.prototype.removeActive = function() {
        if (this.div_) {
            this.div_.classList.remove('active');
        }
    };

    function addMarkers(props, map) {
        $.each(props, function(i, prop) {
            var latlng = new google.maps.LatLng(prop.position.lat, prop.position.lng);

            var html = '<div class="pxp-marker-short-price">' + prop.price.short + '</div>' +
                '<a href="' + prop.link + '" class="pxp-marker-details">' +
                '<div class="pxp-marker-details-fig pxp-cover" style="background-image: url(' + prop.photo +
                ');"></div>' +
                '<div class="pxp-marker-details-info">' +
                '<div class="pxp-marker-details-info-title">' + prop.title + '</div>' +
                '<div class="pxp-marker-details-info-price">' + prop.price.long + '</div>' +
                '<div class="pxp-marker-details-info-feat">' + prop.features.beds + ' BD<span>|</span>' +
                prop.features.baths + ' BA<span>|</span>' + prop.features.size + '</div>' +
                '</div>' +
                '</a>';

            var marker = new CustomMarker(prop.id, latlng, map, 'pxp-price-marker', html);

            marker.id = prop.id;
            markers.push(marker);
        });
    }

    setTimeout(function() {
        $.ajax("<?php echo get_template_directory_uri(); ?>/page-db.php", {
            type: 'POST', // http method
            data: {
                post_type: "rental-property",
                bloginfo: "<?php echo bloginfo('url');?>",
                currencyLetterPrefix: "<?php echo $currencyLetterPrefix;?>",
                currencyLetterSuffix: "<?php echo $currencyLetterSuffix;?>",
                regionCode: $("#pxp-p-filter-type").val(),
                orderBy: $("#pxp-sort-results").val(),
                min_price: $("#pxp-p-filter-price-min").val(),
                max_price: $("#pxp-p-filter-price-max").val(),
                baths: $("#pxp-p-filter-baths").val(),
                beds: $("#pxp-p-filter-beds").val(),
            }, // data to submit
            success: function(data, status, xhr) {
                $('.filter_hide_section').hide();
                $(".filter_display_section").html(data);
            },
            error: function(jqXhr, textStatus, errorMessage) {}
        });
        if ($('#results-map').length > 0) {
            map = new google.maps.Map(document.getElementById('results-map'), options);
            var styledMapType = new google.maps.StyledMapType(styles, {
                name: 'Styled',
            });

            map.mapTypes.set('Styled', styledMapType);
            map.setCenter(new google.maps.LatLng(37.7577627, -122.4726194));
            map.setZoom(15);

            addMarkers(propertiesList, map);

            map.fitBounds(markers.reduce(function(bounds, marker) {
                return bounds.extend(marker.getPosition());
            }, new google.maps.LatLngBounds()));

            markerCluster = new MarkerClusterer(map, markers, {
                maxZoom: 18,
                gridSize: 60,
                styles: [{
                        width: 40,
                        height: 40,
                    },
                    {
                        width: 60,
                        height: 60,
                    },
                    {
                        width: 80,
                        height: 80,
                    },
                ]
            });

            google.maps.event.trigger(map, 'resize');

            $('.pxp-results-card-1').each(function(i) {
                var propID = $(this).attr('data-prop');

                $(this).on('mouseenter', function() {
                    if (map) {
                        var targetMarker = $.grep(markers, function(e) {
                            return e.id == propID;
                        });

                        if (targetMarker.length > 0) {
                            targetMarker[0].addActive();
                            map.setCenter(targetMarker[0].latlng_);
                        }
                    }
                });
                $(this).on('mouseleave', function() {
                    var targetMarker = $.grep(markers, function(e) {
                        return e.id == propID;
                    });

                    if (targetMarker.length > 0) {
                        targetMarker[0].removeActive();
                    }
                });
            });
        }
    }, 300);
})(jQuery);

$("#pxp-p-filter-type").change(function() {
    // $('.hide_post_class').hide();
    // $('.hide_post_class2').hide();
    // if ($("#pxp-p-filter-type").val() == "All") {
    //     $('.hide_post_class').show();
    // } else {
    //     var value = $("#pxp-p-filter-type").val();
    //     var r1 = value.replaceAll(".", "");
    //     var r2 = r1.replaceAll("'", "");
    //     $('.NO_INSCRIPTION' + value).show();
    // }

    $.ajax("<?php echo get_template_directory_uri(); ?>/page-db.php", {
        type: 'POST',
        data: {
            post_type: "rental-property",
            bloginfo: "<?php echo bloginfo('url');?>",
            currencyLetterPrefix: "<?php echo $currencyLetterPrefix;?>",
            currencyLetterSuffix: "<?php echo $currencyLetterSuffix;?>",
            regionCode: $("#pxp-p-filter-type").val(),
            orderBy: $("#pxp-sort-results").val(),
            min_price: $("#pxp-p-filter-price-min").val(),
            max_price: $("#pxp-p-filter-price-max").val(),
            // min_size: $("#pxp-p-filter-size-min").val(),
            // max_size: $("#pxp-p-filter-size-max").val(),
            baths: $("#pxp-p-filter-baths").val(),
            beds: $("#pxp-p-filter-beds").val(),
        }, // data to submit
        success: function(data, status, xhr) {
            $('.filter_hide_section').hide();
            $(".filter_display_section").html(data);
        },
        error: function(jqXhr, textStatus, errorMessage) {}
    });
});


$("#pxp-sort-results").change(function() {
    $.ajax("<?php echo get_template_directory_uri(); ?>/page-db.php", {
        type: 'POST', // http method
        data: {
            post_type: "rental-property",
            bloginfo: "<?php echo bloginfo('url');?>",
            currencyLetterPrefix: "<?php echo $currencyLetterPrefix;?>",
            currencyLetterSuffix: "<?php echo $currencyLetterSuffix;?>",
            regionCode: $("#pxp-p-filter-type").val(),
            orderBy: $("#pxp-sort-results").val(),
            min_price: $("#pxp-p-filter-price-min").val(),
            max_price: $("#pxp-p-filter-price-max").val(),
            // min_size: $("#pxp-p-filter-size-min").val(),
            // max_size: $("#pxp-p-filter-size-max").val(),
            baths: $("#pxp-p-filter-baths").val(),
            beds: $("#pxp-p-filter-beds").val(),
        }, // data to submit
        success: function(data, status, xhr) {
            $('.filter_hide_section').hide();
            $(".filter_display_section").html(data);
        },
        error: function(jqXhr, textStatus, errorMessage) {}
    });
});

$(".pxp-filter-clear-btn").click(function() {
    $('.filter_hide_section').show();
    $(".filter_display_section").hide();
    $("#pxp-p-filter-type").val("");
    $("#pxp-sort-results").val("");
    $("#pxp-p-filter-price-min").val("");
    $("#pxp-p-filter-price-max").val("")
    // $("#pxp-p-filter-size-min").val("")
    // $("#pxp-p-filter-size-max").val("")
    $("#pxp-p-filter-baths").val("")
    $("#pxp-p-filter-beds").val("")
});
$(".pxp-filter-btn").click(function() {
    $.ajax("<?php echo get_template_directory_uri(); ?>/page-db.php", {
        type: 'POST',
        data: {
            post_type: "rental-property",
            bloginfo: "<?php echo bloginfo('url');?>",
            currencyLetterPrefix: "<?php echo $currencyLetterPrefix;?>",
            currencyLetterSuffix: "<?php echo $currencyLetterSuffix;?>",
            regionCode: $("#pxp-p-filter-type").val(),
            orderBy: $("#pxp-sort-results").val(),
            min_price: $("#pxp-p-filter-price-min").val(),
            max_price: $("#pxp-p-filter-price-max").val(),
            // min_size: $("#pxp-p-filter-size-min").val(),
            // max_size: $("#pxp-p-filter-size-max").val(),
            baths: $("#pxp-p-filter-baths").val(),
            beds: $("#pxp-p-filter-beds").val(),
        },
        success: function(data, status, xhr) {
            $('.filter_hide_section').hide();
            $(".filter_display_section").html(data);
        },
        error: function(jqXhr, textStatus, errorMessage) {}
    });
});

$("#mls_no_search").click(function() {
    $.ajax("<?php echo get_template_directory_uri(); ?>/page-db.php", {
        type: 'POST',
        data: {
            post_type: "rental-property",
            bloginfo: "<?php echo bloginfo('url');?>",
            regionCode: $("#pxp-p-filter-type").val(),
            currencyLetterPrefix: "<?php echo $currencyLetterPrefix;?>",
            currencyLetterSuffix: "<?php echo $currencyLetterSuffix;?>",
            orderBy: $("#pxp-sort-results").val(),
            min_price: $("#pxp-p-filter-price-min").val(),
            max_price: $("#pxp-p-filter-price-max").val(),
            mls_no: $("#pxp-p-filter-mls-no").val(),
            // max_size: $("#pxp-p-filter-size-max").val(),
            baths: $("#pxp-p-filter-baths").val(),
            beds: $("#pxp-p-filter-beds").val(),
        },
        success: function(data, status, xhr) {
            $(".filter_display_section").show();
            $('.filter_hide_section').hide();
            $(".filter_display_section").html(data);
        },
        error: function(jqXhr, textStatus, errorMessage) { }
    });
});
</script>

<script>
// Find the element with the class "wpml-ls-native"
const spanElement = document.querySelector(".wpml-ls-native");

if (spanElement) {
    // Get the text content within the span element
    const textContent = spanElement.textContent;

    // Determine what to display based on the text content
    let displayText = "";
    if (textContent.includes("Français")) {
        displayText = "FR";
    } else if (textContent.includes("English")) {
        displayText = "EN";
    }

    // Create a new span element with the determined display text
    const newSpanElement = document.createElement("span");
    newSpanElement.textContent = displayText;

    // Replace the original span element with the new one
    spanElement.replaceWith(newSpanElement);
}
</script>

</body>

</html>