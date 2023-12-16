

<?php
    /*
        Template Name: Home
    */
    get_header('home');
?>

<?php

$home_banner_title = get_field('home_banner_title');
$home_banner_title_description = get_field('home_banner_title_description');

?>

    <div class="pxp-content">
        <div class="pxp-hero vh-100" style="display: flex; flex-direction: column; justify-content: space-between;">
            <div></div>
            <div class="pxp-hero-bg pxp-cover pxp-cover-bottom">
                <video class="home-video" autoplay loop muted playsinline>
                    <source src="https://mdataz.com/yulstaynew/wp-content/uploads/2023/10/Home-Video-Bg-1.mp4" type="video/mp4">
                    <!-- You can add additional source elements for different video formats (e.g., WebM, Ogg) -->
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="pxp-hero-opacity"></div>

            <div class="pxp-hero-caption">
                <div class="container-home-banner">
                    <!-- <h1 class="text-white">Find your future home</h1> -->
                    <!-- <a href="<?php bloginfo('url'); ?>/">
                        <img class="yulstay-image" src="<?php echo get_template_directory_uri(); ?>/images/yulstay-logo.png" alt="">
                    </a> -->

                    <div style="text-align: center;">
                        <h1 class="text-white">
                            <!-- <?php echo $home_banner_title; ?> -->
                            <?php _e('Investing in peace of mind','theme-text-domain'); ?>
                        </h1>
                        <p class="pxp-text-light text-white mb-0" style="padding: 8px;">
                            <?php echo $home_banner_title_description; ?>
                        </p>
                        <div class="banner-dropdown">
                            <button class="banner-dropbtn"><?php _e('Start Now','theme-text-domain'); ?></button>
                            <div class="banner-dropdown-content">
                                <a href="<?php bloginfo('url'); ?>/invesment-form"><?php _e('Invest','theme-text-domain'); ?></a>
                                <a href="<?php bloginfo('url'); ?>/purchase-form"><?php _e('Purchase','theme-text-domain'); ?></a>
                                <a href="<?php bloginfo('url'); ?>/sale-form"><?php _e('Sale','theme-text-domain'); ?></a>
                                <a href="<?php bloginfo('url'); ?>/rental-management-form"><?php _e('Rental & Management','theme-text-domain'); ?></a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="tabs">
                        <div class="tabs__nav">
                        <button class="tabs__nav-btn tab-button" type="button" data-tab="#tab_1">Residential</button>
                        <button class="tabs__nav-btn tab-button" type="button" data-tab="#tab_2">Multi Residential</button>
                        <button class="tabs__nav-btn tab-button" type="button" data-tab="#tab_3">Rental Property</button>
                        </div>
                        <div class="tabs__content" style="box-shadow: 0px 15px 30px rgba(0,0,0,0.30);">
                        <div class="tabs__item" id="tab_1">
                            <div class="tab-content-flex">
                                <div><a class="tab-content-link" href="">Residential Form</a></div>
                                <div><a class="tab-content-link" href="">Residential Team</a></div>
                                <div><a class="tab-content-link" href="">Residential Property</a></div>
                            </div>
                        </div>
                        <div class="tabs__item" id="tab_2">
                            <div class="tab-content-flex">
                                <div><a class="tab-content-link" href="">Multi Residential Form</a></div>
                                <div><a class="tab-content-link" href="">Multi Residential Team</a></div>
                                <div><a class="tab-content-link" href="">Multi Residential Property</a></div>
                            </div>
                        </div>
                        <div class="tabs__item" id="tab_3">
                            <div class="tab-content-flex">
                                <div><a class="tab-content-link" href="">Rental Property Form</a></div>
                                <div><a class="tab-content-link" href="">Rental Property Team</a></div>
                                <div><a class="tab-content-link" href="">Rental Property Property</a></div>
                            </div>
                        </div>
                        </div>
                    </div> -->



                </div>
            </div>
            <div style="display: flex; justify-content: flex-end; z-index: 1000; color: white; font-size: 32px; padding: 12px;">
                <div style="font-weight: 700; font-size: 3.2rem;"></div>
            </div>
        </div>
        <!-- <div class="pxp-hero vh-100">
                <div class="pxp-hero-bg pxp-cover pxp-cover-bottom" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ph-big.jpg);"></div>
                <div class="pxp-hero-opacity"></div>
                <div class="pxp-hero-caption">
                    <div class="container">
                        <h1 class="text-white">Find your future home</h1>

                        <form class="pxp-hero-search mt-4" action="properties.html">
                            <div class="row">
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group">
                                        <select class="custom-select">
                                            <option selected>Buy</option>
                                            <option value="1">Rent</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-8">
                                    <div class="form-group">
                                        <input type="text" class="form-control pxp-is-address" placeholder="Enter address...">
                                        <span class="fa fa-search"></span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> -->

        <?php

            $home_team_section_title = get_field('home_team_section_title');
            $home_team_section_description = get_field('home_team_section_description');
            $home_team_section_link = get_field('home_team_section_link');
            $home_why_choose_us_section_backgroud_image = get_field('home_why_choose_us_section_backgroud_image');
            $home_why_choose_us_section_title = get_field('home_why_choose_us_section_title');
            $home_why_choose_us_section_description = get_field('home_why_choose_us_section_description');
            $home_properties_section_title = get_field('home_properties_section_title');
            $home_properties_section_descripton = get_field('home_properties_section_descripton');
            $home_properties_section_page_link = get_field('home_properties_section_page_link');
            $home_search_section_background_image = get_field('home_search_section_background_image');
            $home_search_section_title = get_field('home_search_section_title');
            $home_search_section_description = get_field('home_search_section_description');
            $home_search_section_link = get_field('home_search_section_link');
            $home_page_testimonial_background_image = get_field('home_page_testimonial_background_image');
            $home_page_testimonial_title = get_field('home_page_testimonial_title');
            $home_page_testimonial_description = get_field('home_page_testimonial_description');
            $home_page_testimonial_link = get_field('home_page_testimonial_link');
            $explore_section_title = get_field('explore_section_title');
            $explore_section_description = get_field('explore_section_description');

            ?>

            <div class="container mt-100">
                <h2 class="pxp-section-h2"><?php echo $home_team_section_title; ?></h2>
                <p class="pxp-text-light"><?php echo $home_team_section_description; ?></p>
            </div>
        <div class="pxp-testim-1 mt-50 pxp-cover">
                <!-- <div class="pxp-testim-1-intro">

                </div> -->
                <div class="pxp-testim-1-container mt-4 mt-md-5 mt-lg-0">
                    <div class="owl-carousel pxp-testim-1-stage">
                            <?php $the_query = new WP_Query( array('post_type' =>'team','posts_per_page' => '10',  'post__not_in'   => array( $id),) );?>
                            <?php if ( have_posts())   : while ( $the_query->have_posts() ) : $the_query->the_post();?>

                            <?php               $post_id = get_the_ID();
                                                $thumbnail_id = get_post_thumbnail_id();
                                                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                                                $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);

                            $categories = get_the_category();

                            ?>
                        <div>
                            <a href="<?php the_permalink(); ?>" class="pxp-agents-1-item">
                            <?php if ( has_post_thumbnail() ) {
                                $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
                                //echo '<link rel="preload" as="image" href="' . esc_attr( $attachment_image ) . '">';
                            ?>
                                <div class="pxp-agents-1-item-fig-container rounded-lg">
                                    <div class="pxp-agents-1-item-fig pxp-cover" style="background-image: url(<?php echo $attachment_image; ?>); background-position: top center"></div>
                                </div>
                                <?php } ?>
                                <div class="pxp-agents-1-item-details rounded-lg">
                                    <div class="pxp-agents-1-item-details-name"><?php the_title(); ?></div>
                                    <div class="pxp-agents-1-item-details-email"><?php if ($post_id == 32) {echo " "; } else { echo '<span class="fa fa-phone"></span>'; } ?>&#160; <?php echo get_field('team_member_telephone'); ?></div>
                                    <div class="pxp-agents-1-item-details-spacer"></div>
                                    <div class="pxp-agents-1-item-cta text-uppercase"><?php _e('More Details','theme-text-domain'); ?></div>
                                </div>
                                <!-- <div class="pxp-agents-1-item-rating"><span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></div> -->
                            </a>
                        </div>
                            <?php endwhile; endif; ?>
                        <!-- <div>
                            <div class="pxp-testim-1-item">
                                <div class="pxp-testim-1-item-avatar pxp-cover" style="background-image: url(images/ph-avatar.jpg)"></div>
                                <div class="pxp-testim-1-item-name">Rebecca Eason</div>
                                <div class="pxp-testim-1-item-location">Washington, MD</div>
                                <div class="pxp-testim-1-item-message">And it’s no wonder Resideo has shaken things up: As anyone who’s ever tried to rent or buy property in Washington knows, the experience is loaded with pain points.</div>
                            </div>
                        </div>
                        <div>
                            <div class="pxp-testim-1-item">
                                <div class="pxp-testim-1-item-avatar pxp-cover" style="background-image: url(images/ph-avatar.jpg)"></div>
                                <div class="pxp-testim-1-item-name">Kenneth Spiers</div>
                                <div class="pxp-testim-1-item-location">Cleveland, OH</div>
                                <div class="pxp-testim-1-item-message">While Resideo functions like a traditional broker, the company's promise is using technology to reduce the time and friction of  buying and selling house or apartment.</div>
                            </div>
                        </div>
                        <div>
                            <div class="pxp-testim-1-item">
                                <div class="pxp-testim-1-item-avatar pxp-cover" style="background-image: url(images/ph-avatar.jpg)"></div>
                                <div class="pxp-testim-1-item-name">Susanne Weil</div>
                                <div class="pxp-testim-1-item-location">Cambridge, MA</div>
                                <div class="pxp-testim-1-item-message">And it’s no wonder Resideo has shaken things up: As anyone who’s ever tried to rent or buy property in Cambridge knows, the experience is loaded with pain points.</div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

        <div class="pxp-services pxp-cover mt-100 pt-100 mb-200"
            style="background-image: url(<?php echo $home_why_choose_us_section_backgroud_image; ?>); background-position: 50% 60%;">
            <h2 class="text-center pxp-section-h2 font-white-in"><?php echo $home_why_choose_us_section_title; ?></h2>
            <p class="pxp-text-light text-center font-white-in"><?php echo $home_why_choose_us_section_description; ?></p>


            <div class="container">
                <div class="pxp-services-container rounded-lg mt-4 mt-md-5">
                        <a href="<?php bloginfo('url'); ?>/investments-info" class="pxp-services-item">
                            <div class="pxp-services-item-fig">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons81.png" alt="...">
                            </div>
                            <div class="pxp-services-item-text text-center">
                                <div class="pxp-services-item-text-title"><?php _e('Invest','theme-text-domain'); ?></div>
                                <div class="pxp-services-item-text-sub"><?php _e('We offer unparalleled service and advice on the acquisition of revenue properties.','theme-text-domain'); ?></div>
                            </div>
                            <div class="pxp-services-item-cta text-uppercase text-center"><?php _e('Learn More','theme-text-domain'); ?></div>
                        </a>
                        <a href="<?php bloginfo('url'); ?>/purchase-info" class="pxp-services-item">
                            <div class="pxp-services-item-fig">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons82.png" alt="...">
                            </div>
                            <div class="pxp-services-item-text text-center">
                                <div class="pxp-services-item-text-title"><?php _e('Purchase','theme-text-domain'); ?></div>
                                <div class="pxp-services-item-text-sub"><?php _e('Looking for your new home? Our buyer brokers know how to best accompany you from start to finish','theme-text-domain'); ?></div>
                            </div>
                            <div class="pxp-services-item-cta text-uppercase text-center"><?php _e('Learn More','theme-text-domain'); ?></div>
                        </a>
                        <a href="<?php bloginfo('url'); ?>/sale-info" class="pxp-services-item">
                            <div class="pxp-services-item-fig">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons83.png" alt="...">
                            </div>
                            <div class="pxp-services-item-text text-center">
                                <div class="pxp-services-item-text-title"><?php _e('Sale','theme-text-domain'); ?></div>
                                <div class="pxp-services-item-text-sub"><?php _e('Need to sell your property?  Our experienced brokers will devise an action plan based on your requirements.','theme-text-domain'); ?></div>
                            </div>
                            <div class="pxp-services-item-cta text-uppercase text-center"><?php _e('Learn More','theme-text-domain'); ?></div>
                        </a>
                        <a href="<?php bloginfo('url'); ?>/rental-management-info" class="pxp-services-item">
                            <div class="pxp-services-item-fig">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/icons84.png" alt="...">
                            </div>
                            <div class="pxp-services-item-text text-center">
                                <div class="pxp-services-item-text-title"><?php _e('Rental & Management','theme-text-domain'); ?></div>
                                <div class="pxp-services-item-text-sub"><?php _e('With a dedicated leasing team and strategic planning, we\'re ranked as one of the very best in the business','theme-text-domain'); ?></div>
                            </div>
                            <div class="pxp-services-item-cta text-uppercase text-center"><?php _e('Learn More','theme-text-domain'); ?></div>
                        </a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="container-fluid pxp-props-carousel-right mt-100">
            <h2 class="pxp-section-h2"><?php echo $home_properties_section_title; ?></h2>
            <p class="pxp-text-light"><?php echo $home_properties_section_descripton; ?></p>
            <div class="pxp-props-carousel-right-container mt-4 mt-md-5">
                <div class="owl-carousel pxp-props-carousel-right-stage">

                    <?php
                        $datas = $wpdb->get_results("SELECT i.*,p.ID FROM INSCRIPTIONS i join wp_posts p on p.post_content=i.NO_INSCRIPTION where post_type='residential'  and i.CODE_STATUT='EV' limit 2", OBJECT );
                        foreach ($datas as $inscriptionsData) {
                    $results = $wpdb->get_row(" SELECT * FROM PHOTOS where  NO_INSCRIPTION = '".$inscriptionsData->NO_INSCRIPTION ."' limit 1", OBJECT );
				?>
                    <div>
                        <a href="<?php echo get_permalink( $inscriptionsData->ID );?>"
                            class="pxp-prop-card-1 rounded-lg">
                            <div class="pxp-prop-card-1-fig pxp-cover"
                                style="background-image: url(<?php  echo $results->PhotoURL;?>);">
                            </div>
                            <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                            <div class="pxp-prop-card-1-details">
                                <div class="pxp-prop-card-1-details-title"><?php
                             $REGION_CODE = $wpdb->get_row("SELECT r.*,REGION_CODE,m.DESCRIPTION FROM MUNICIPALITES m JOIN REGIONS r ON m.REGION_CODE = r.CODE where m.CODE='".$inscriptionsData->MUN_CODE."' ", OBJECT );
                             if ($lang == 'en-US'){
                                echo $REGION_CODE->DESCRIPTION;
                             }else{
                                echo $REGION_CODE->DESCRIPTION;
                             }
                              ?></div>
                                <div class="pxp-prop-card-1-details-price">
                                    <?php  echo $currencyLetterPrefix."".number_format($inscriptionsData->PRIX_DEMANDE).''.$currencyLetterSuffix;?></div>
                                <div class="pxp-prop-card-1-details-features text-uppercase">
                                    <?php  echo $inscriptionsData->NB_CHAMBRES;?> BD <span>|</span>
                                    <?php echo $inscriptionsData->NB_CHAMBRES_HORS_SOL;?> BA
                                    <span>|</span>
                                    <?php echo $inscriptionsData->SUPERFICIE_HABITABLE." ".$inscriptionsData->UM_SUPERFICIE_HABITABLE;?>
                                </div>
                            </div>
                            <div class="pxp-prop-card-1-details-cta text-uppercase"><?php _e('View Details','theme-text-domain'); ?></div>
                        </a>
                    </div>
                    <?php
                       $postIndex++;
                    } ?>
                    <?php
                        $datas = $wpdb->get_results("SELECT i.*,p.ID FROM INSCRIPTIONS i join wp_posts p on p.post_content=i.NO_INSCRIPTION where post_type='rental-property'  and i.CODE_STATUT='EV' limit 2", OBJECT );
                        foreach ($datas as $inscriptionsData) {
                    $results = $wpdb->get_row(" SELECT * FROM PHOTOS where  NO_INSCRIPTION = '".$inscriptionsData->NO_INSCRIPTION ."' limit 1", OBJECT );
				?>
                    <div>
                        <a href="<?php echo get_permalink( $inscriptionsData->ID );?>"
                            class="pxp-prop-card-1 rounded-lg">
                            <div class="pxp-prop-card-1-fig pxp-cover"
                                style="background-image: url(<?php  echo $results->PhotoURL;?>);">
                            </div>
                            <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                            <div class="pxp-prop-card-1-details">
                                <div class="pxp-prop-card-1-details-title">
                                <?php
                             $REGION_CODE = $wpdb->get_row("SELECT r.*,REGION_CODE,m.DESCRIPTION FROM MUNICIPALITES m JOIN REGIONS r ON m.REGION_CODE = r.CODE where m.CODE='".$inscriptionsData->MUN_CODE."' ", OBJECT );
                             if ($lang == 'en-US'){
                                echo $REGION_CODE->DESCRIPTION;
                             }else{
                                echo $REGION_CODE->DESCRIPTION;
                             }
                              ?></div>
                                <div class="pxp-prop-card-1-details-price">
                                    <?php  echo $currencyLetterPrefix."".number_format($inscriptionsData->PRIX_LOCATION_DEMANDE).''.$currencyLetterSuffix;?></div>
                                <div class="pxp-prop-card-1-details-features text-uppercase">
                                    <?php  echo $inscriptionsData->NB_CHAMBRES;?> BD <span>|</span>
                                    <?php echo $inscriptionsData->NB_CHAMBRES_HORS_SOL;?> BA
                                    <span>|</span>
                                    <?php echo $inscriptionsData->SUPERFICIE_HABITABLE." ".$inscriptionsData->UM_SUPERFICIE_HABITABLE;?>
                                </div>
                            </div>
                            <div class="pxp-prop-card-1-details-cta text-uppercase"><?php _e('View Details','theme-text-domain'); ?></div>
                        </a>
                    </div>
                    <?php
                       $postIndex++;
                    } ?>
                    <?php
                        $datas = $wpdb->get_results("SELECT i.*,p.ID FROM INSCRIPTIONS i join wp_posts p on p.post_content=i.NO_INSCRIPTION where post_type='multi-residential'  and i.CODE_STATUT='EV' limit 2", OBJECT );
                        foreach ($datas as $inscriptionsData) {
                    $results = $wpdb->get_row(" SELECT * FROM PHOTOS where  NO_INSCRIPTION = '".$inscriptionsData->NO_INSCRIPTION ."' limit 1", OBJECT );
				?>
                    <div>
                        <a href="<?php echo get_permalink( $inscriptionsData->ID );?>"
                            class="pxp-prop-card-1 rounded-lg">
                            <div class="pxp-prop-card-1-fig pxp-cover"
                                style="background-image: url(<?php  echo $results->PhotoURL;?>);">
                            </div>
                            <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                            <div class="pxp-prop-card-1-details">
                                <div class="pxp-prop-card-1-details-title">
                                <?php
                             $REGION_CODE = $wpdb->get_row("SELECT r.*,REGION_CODE,m.DESCRIPTION FROM MUNICIPALITES m JOIN REGIONS r ON m.REGION_CODE = r.CODE where m.CODE='".$inscriptionsData->MUN_CODE."' ", OBJECT );
                             if ($lang == 'en-US'){
                                echo $REGION_CODE->DESCRIPTION;
                             }else{
                                echo $REGION_CODE->DESCRIPTION;
                             }
                              ?></div>
                                <div class="pxp-prop-card-1-details-price">
                                    <?php  echo $currencyLetterPrefix."".number_format($inscriptionsData->PRIX_DEMANDE).''.$currencyLetterSuffix;?></div>
                                <div class="pxp-prop-card-1-details-features text-uppercase">
                                    <?php  echo $inscriptionsData->NB_CHAMBRES;?> BD <span>|</span>
                                    <?php echo $inscriptionsData->NB_CHAMBRES_HORS_SOL;?> BA
                                    <span>|</span>
                                    <?php echo $inscriptionsData->SUPERFICIE_HABITABLE." ".$inscriptionsData->UM_SUPERFICIE_HABITABLE;?>
                                </div>
                            </div>
                            <div class="pxp-prop-card-1-details-cta text-uppercase"><?php _e('View Details','theme-text-domain'); ?></div>
                        </a>
                    </div>
                    <?php
                       $postIndex++;
                    } ?>

                </div>

                <!-- <a href="<?php echo $home_properties_section_page_link; ?>"
                    class="pxp-primary-cta text-uppercase mt-4 mt-md-5 pxp-animate"><?php _e('Browse All','theme-text-domain'); ?></a> -->
            </div>
        </div>

        <div hidden class="pxp-cta-1 pxp-cover mt-100 pt-300"
            style="background-image: url(<?php echo $home_search_section_background_image; ?>); background-position: 50% 60%;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="pxp-cta-1-caption pxp-animate-in">
                            <h2 class="pxp-section-h2"><?php echo $home_search_section_title; ?></h2>
                            <p class="pxp-text-light"><?php echo $home_search_section_description; ?></p>
                            <a href="<?php echo $home_search_section_link; ?>"
                                class="pxp-primary-cta text-uppercase mt-3 mt-md-5 pxp-animate"><?php _e('Search Now','theme-text-domain'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-100">
            <h2 class="pxp-section-h2"><?php echo $explore_section_title; ?></h2>
            <p class="pxp-text-light"><?php echo $explore_section_description; ?></p>

            <div class="row mt-4 mt-md-5">

            <?php
            $lang = get_bloginfo("language");
            $language="";
            if ($lang == 'en-US'){
                $language="";
            }else{
                $language="fr";
            }
               $cities = $wpdb->get_results("
               SELECT
                    r.*,i.NO_INSCRIPTION
                FROM
                    MUNICIPALITES m
                        JOIN
                    REGIONS r ON r.CODE = m.REGION_CODE
                        JOIN
                    INSCRIPTIONS i ON m.CODE = i.MUN_CODE
                    JOIN wp_posts p on p.post_content=i.NO_INSCRIPTION
                GROUP BY r.CODE ", OBJECT );
               foreach ($cities as $city) {
                $results = $wpdb->get_row(" SELECT * FROM PHOTOS where  NO_INSCRIPTION = '".$city->NO_INSCRIPTION ."' limit 1", OBJECT );

            ?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="<?php echo site_url().'/'. $language."/properties?city=".$city->CODE;?>" class="pxp-areas-1-item rounded-lg">
                        <div class="pxp-areas-1-item-fig pxp-cover"
                            style="background-image: url(<?php  echo $results->PhotoURL;?>);">
                        </div>
                        <div class="pxp-areas-1-item-details">
                            <div class="pxp-areas-1-item-details-area"><?php
                            if ($lang == 'en-US'){
                                echo $city->DESCRIPTION_ANGLAISE;
                             }else{
                                echo $city->DESCRIPTION_FRANCAISE;
                             }
                            ?></div>
                            <!-- <div class="pxp-areas-1-item-details-city">Arlington, VA</div> -->
                        </div>
                        <div class="pxp-areas-1-item-counter"><span><?php


                    $COUNT_REGION = $wpdb->get_row("
                    SELECT
                        count(m.REGION_CODE) as COUNT_REGION,r.*

                      FROM
                      MUNICIPALITES m
                      JOIN
                  REGIONS r ON r.CODE = m.REGION_CODE
                              JOIN
                              INSCRIPTIONS i ON m.CODE = i.MUN_CODE
                              JOIN wp_posts p on p.post_content=i.NO_INSCRIPTION
                        WHERE
                          i.CODE_STATUT = 'EV' AND m.REGION_CODE='".$city->CODE ."'", OBJECT );
                        echo $COUNT_REGION->COUNT_REGION;
                        ?> <?php _e('Properties','theme-text-domain'); ?></span></div>
                        <div class="pxp-areas-1-item-cta text-uppercase"><?php _e('Explore','theme-text-domain'); ?></div>
                    </a>
                </div>
<?php }
                ?>

            </div>

            <!-- <a href="properties.html" class="pxp-primary-cta text-uppercase mt-2 mt-md-4 pxp-animate">Explore
                Neighborhoods</a> -->
        </div>

        <div class="pxp-testim-1 pt-100 pb-100 mt-100 pxp-cover" style="background-image: url(<?php echo $home_page_testimonial_background_image; ?>);">
            <div class="pxp-testim-1-intro">
                <h2 class="pxp-section-h2 font-white-in"><?php echo $home_page_testimonial_title; ?></h2>
                <p class="pxp-text-light font-white-in"><?php echo $home_page_testimonial_description; ?></p>
                <a href=" https://g.page/r/Ca0AVgRaIjCoEBM/review" target="_blank" class="pxp-primary-cta text-uppercase mt-2 mt-md-3 mt-lg-5 pxp-animate font-white-in"><?php _e('Read All Stories','theme-text-domain'); ?></a>
            </div>
            <div class="pxp-testim-1-container mt-4 mt-md-5 mt-lg-0">
                <div class="owl-carousel pxp-testim-1-stage" id="testimonialCarousel">
                    <?php $the_query = new WP_Query( array('post_type' =>'testimonial','posts_per_page' => '20',  'post__not_in'   => array( $id),) );?>
                                    <?php if ( have_posts())   : while ( $the_query->have_posts() ) : $the_query->the_post();?>

                                        <?php
                                            $thumbnail_id = get_post_thumbnail_id();
                                            $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                                            $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);

                        $categories = get_the_category();

										?>
                    <div>
                        <div class="pxp-testim-1-item">
                            <?php if ( has_post_thumbnail() ) {
                                $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
                                //echo '<link rel="preload" as="image" href="' . esc_attr( $attachment_image ) . '">';
                            ?>
                                <div class="pxp-testim-1-item-avatar pxp-cover" style="background-image: url(<?php echo $attachment_image; ?>)"></div>
                            <?php } ?>
                            <div class="pxp-testim-1-item-name"><?php the_title(); ?></div>
                            <div class="pxp-testim-1-item-location">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <div class="pxp-testim-1-item-message"><?php the_content(); ?></div>
                        </div>
                    </div>
                    <?php endwhile; endif; ?>
                    <!-- <div>
                        <div class="pxp-testim-1-item">
                            <div class="pxp-testim-1-item-avatar pxp-cover"
                                style="background-image: url(images/ph-avatar.jpg)"></div>
                            <div class="pxp-testim-1-item-name">Rebecca Eason</div>
                            <div class="pxp-testim-1-item-location">Washington, MD</div>
                            <div class="pxp-testim-1-item-message">And it’s no wonder Resideo has shaken things up: As
                                anyone who’s ever tried to rent or buy property in Washington knows, the experience is
                                loaded with pain points.</div>
                        </div>
                    </div>
                    <div>
                        <div class="pxp-testim-1-item">
                            <div class="pxp-testim-1-item-avatar pxp-cover"
                                style="background-image: url(images/ph-avatar.jpg)"></div>
                            <div class="pxp-testim-1-item-name">Kenneth Spiers</div>
                            <div class="pxp-testim-1-item-location">Cleveland, OH</div>
                            <div class="pxp-testim-1-item-message">While Resideo functions like a traditional broker,
                                the company's promise is using technology to reduce the time and friction of buying and
                                selling house or apartment.</div>
                        </div>
                    </div>
                    <div>
                        <div class="pxp-testim-1-item">
                            <div class="pxp-testim-1-item-avatar pxp-cover"
                                style="background-image: url(images/ph-avatar.jpg)"></div>
                            <div class="pxp-testim-1-item-name">Susanne Weil</div>
                            <div class="pxp-testim-1-item-location">Cambridge, MA</div>
                            <div class="pxp-testim-1-item-message">And it’s no wonder Resideo has shaken things up: As
                                anyone who’s ever tried to rent or buy property in Cambridge knows, the experience is
                                loaded with pain points.</div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>

    </div>

    <script>
        const tabsNav = document.querySelector('.tabs__nav');
        const tabsBtn = document.querySelectorAll(".tabs__nav-btn");
        const tabsItems = document.querySelectorAll(".tabs__item");

        tabsNav.addEventListener('click', function(event) {
        const targetButton = event.target.closest('.tabs__nav-btn');

        if (targetButton) {
            const tabId = targetButton.getAttribute("data-tab");
            const currentTab = document.querySelector(tabId);

            tabsBtn.forEach(btn => btn.classList.toggle('active', btn === targetButton));
            tabsItems.forEach(item => item.classList.toggle('active', item === currentTab));
        }
        });

        tabsBtn[0].click();
      </script>


    <?php get_footer(); ?>