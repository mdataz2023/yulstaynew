<?php
/*
	Template Name: Team
*/
get_header();

?>
<?php

$team_page_banner_image = get_field('team_page_banner_image');
$team_page_title = get_field('team_page_title');
$team_page_title_description = get_field('team_page_title_description');

?>

        <div class="pxp-content">
            <div class="pxp-agents pxp-content-wrapper mt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <h1 class="pxp-page-header"><?php echo $team_page_title ?></h1>
                            <p class="pxp-text-light"><?php echo $team_page_title_description ?></p>
                        </div>
                    </div>
                </div>

                <div class="pxp-agents-hero mt-4 mt-md-5">
                    <div class="pxp-agents-hero-fig pxp-cover" style="background-image: url(<?php echo $team_page_banner_image ?>); background-position: 50% 60%;"></div>

                    <div hidden class="pxp-agents-hero-search-container">
                        <div class="container">
                            <div class="pxp-agents-hero-search">
                                <h2 class="pxp-section-h2">Find an Agent</h2>
                                <div class="pxp-agents-hero-search-form mt-3 mt-md-4">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-4">
                                            <div class="form-group">
                                                <label for="pxp-agents-search-location">Location</label>
                                                <input type="text" class="form-control" id="pxp-agents-search-location" placeholder="Neighborhood/City/Zip">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <div class="form-group">
                                                <label for="pxp-agents-search-name">Name</label>
                                                <input type="text" class="form-control" id="pxp-agents-search-name" placeholder="Agent name">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-4">
                                            <div class="form-group">
                                                <label for="pxp-agents-search-service">Service Needed</label>
                                                <select class="custom-select" id="pxp-agents-search-service">
                                                    <option value="1" selected="selected">Buying or selling</option>
                                                    <option value="2">Buying a home</option>
                                                    <option value="3">Selling a home</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row mt-200">
                        <?php $the_query = new WP_Query( array('post_type' =>'team','posts_per_page' => '20',  'post__not_in'   => array( $id),) );?>
							     <?php if ( have_posts())   : while ( $the_query->have_posts() ) : $the_query->the_post();?>
							  
									   <?php
										$thumbnail_id = get_post_thumbnail_id(); 
										$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
										$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true); 

                        $categories = get_the_category();
										
										?> 
                        <div class="col-sm-12 col-md-6 col-lg-3">
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
                                    <div class="pxp-agents-1-item-details-email"><span class="fa fa-phone"></span> <?php echo get_field('team_member_telephone'); ?></div>
                                    <div class="pxp-agents-1-item-details-spacer"></div>
                                    <div class="pxp-agents-1-item-cta text-uppercase"><?php _e('More Details','theme-text-domain'); ?></div>
                                </div>
                                <!-- <div class="pxp-agents-1-item-rating"><span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span></div> -->
                            </a>
                        </div>
                         <?php endwhile; endif; ?>

                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>