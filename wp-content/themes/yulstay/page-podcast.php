<?php
/*
	Template Name: Podcast
*/
get_header();

$page_title = get_field('page_title');
$banner_image = get_field('banner_image');

?>

        <div class="pxp-content">
            <div class="pxp-blog-posts pxp-content-wrapper mt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            <h1 class="pxp-page-header"><?php echo $page_title ?></h1>
                            <?php if( have_rows('banner_paragraph_section') ): $s= 1; $a=0; ?>

                            <?php while( have_rows('banner_paragraph_section') ): the_row() ;
                                    $i++;
                                            $paragraph = get_sub_field('paragraph');
                                    ?>
                            <p class="pxp-text-light"><?php echo $paragraph; ?></p>
                            <?php   endwhile; endif; ?>
                            
                        </div>
                    </div>
                </div>

                <div class="pxp-contact-hero mt-4 mt-md-5">
                    <div class="pxp-contact-hero-fig pxp-cover" style="background-image: url(<?php echo $banner_image; ?>); background-position: 50% 80%; background-position: top !important;"></div>
                </div>

                <div class="container">

                    <div class="row mt-100">
                            <!-- <div class="row"> -->
                                <?php $the_query = new WP_Query( array('post_type' =>'podcast','posts_per_page' => '10',  'post__not_in'   => array( $id),) );?>
							     <?php if ( have_posts())   : while ( $the_query->have_posts() ) : $the_query->the_post();?>
							  
									   <?php
										$thumbnail_id = get_post_thumbnail_id(); 
										$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
										$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true); 

                                $categories = get_the_category();
										
								?>

                                <div class="col-sm-12 col-md-4">
                                    <a href="<?php the_permalink(); ?>" class="pxp-posts-1-item">
                                    <?php if ( has_post_thumbnail() ) {
                                        $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
                                        //echo '<link rel="preload" as="image" href="' . esc_attr( $attachment_image ) . '">';  
                                    ?>
                                        <div class="pxp-posts-1-item-fig-container">
                                            <div class="pxp-posts-1-item-fig pxp-cover" style="background-image: url(<?php echo $attachment_image; ?>);"></div>
                                        </div>
                                        <?php } ?>
                                        <div class="pxp-posts-1-item-details">
                                            <div class="pxp-posts-1-item-details-category">Youtube</div>
                                            <div class="pxp-posts-1-item-details-title"><?php the_title(); ?></div>
                                            <div class="pxp-posts-1-item-details-date mt-2"><?php the_date('j F, Y') ?></div>
                                            <div class="pxp-posts-1-item-cta text-uppercase"><?php _e('Read Article','theme-text-domain'); ?></div>
                                        </div>
                                    </a>
                                </div>
                                <?php endwhile; endif; wp_reset_Query(); ?>

                                <!-- <div class="col-sm-12 col-md-4">
                                    <a href="single-post.html" class="pxp-posts-1-item">
                                        <div class="pxp-posts-1-item-fig-container">
                                            <div class="pxp-posts-1-item-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/imageres1.png);"></div>
                                        </div>
                                        <div class="pxp-posts-1-item-details">
                                            <div class="pxp-posts-1-item-details-category">Architecture</div>
                                            <div class="pxp-posts-1-item-details-title">Private Contemporary Home Balancing Openness</div>
                                            <div class="pxp-posts-1-item-details-date mt-2">April 9, 2021</div>
                                            <div class="pxp-posts-1-item-cta text-uppercase">Read Article</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <a href="single-post.html" class="pxp-posts-1-item">
                                        <div class="pxp-posts-1-item-fig-container">
                                            <div class="pxp-posts-1-item-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/imageres1.png);"></div>
                                        </div>
                                        <div class="pxp-posts-1-item-details">
                                            <div class="pxp-posts-1-item-details-category">Interior Design</div>
                                            <div class="pxp-posts-1-item-details-title">Stylish Modern Ranch Exuding a Welcoming Feel</div>
                                            <div class="pxp-posts-1-item-details-date mt-2">April 9, 2021</div>
                                            <div class="pxp-posts-1-item-cta text-uppercase">Read Article</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <a href="single-post.html" class="pxp-posts-1-item">
                                        <div class="pxp-posts-1-item-fig-container">
                                            <div class="pxp-posts-1-item-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/imageres1.png);"></div>
                                        </div>
                                        <div class="pxp-posts-1-item-details">
                                            <div class="pxp-posts-1-item-details-category">Interior Design</div>
                                            <div class="pxp-posts-1-item-details-title">What to Expect When Working with an Interior Designer</div>
                                            <div class="pxp-posts-1-item-details-date mt-2">April 9, 2021</div>
                                            <div class="pxp-posts-1-item-cta text-uppercase">Read Article</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <a href="single-post.html" class="pxp-posts-1-item">
                                        <div class="pxp-posts-1-item-fig-container">
                                            <div class="pxp-posts-1-item-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/imageres1.png);"></div>
                                        </div>
                                        <div class="pxp-posts-1-item-details">
                                            <div class="pxp-posts-1-item-details-category">Architecture</div>
                                            <div class="pxp-posts-1-item-details-title">Private Contemporary Home Balancing Openness</div>
                                            <div class="pxp-posts-1-item-details-date mt-2">April 9, 2021</div>
                                            <div class="pxp-posts-1-item-cta text-uppercase">Read Article</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <a href="single-post.html" class="pxp-posts-1-item">
                                        <div class="pxp-posts-1-item-fig-container">
                                            <div class="pxp-posts-1-item-fig pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/imageres1.png);"></div>
                                        </div>
                                        <div class="pxp-posts-1-item-details">
                                            <div class="pxp-posts-1-item-details-category">Interior Design</div>
                                            <div class="pxp-posts-1-item-details-title">Stylish Modern Ranch Exuding a Welcoming Feel</div>
                                            <div class="pxp-posts-1-item-details-date mt-2">April 9, 2021</div>
                                            <div class="pxp-posts-1-item-cta text-uppercase">Read Article</div>
                                        </div>
                                    </a>
                                </div> -->
                            <!-- </div> -->

                            <!-- <ul class="pagination pxp-paginantion mt-3 mt-md-4">
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next <span class="fa fa-angle-right"></span></a></li>
                            </ul> -->
                        </div>
                        <!-- <div class="col-sm-12 col-lg-3 mt-4 mt-md-5 mt-lg-0">
                            <div class="pxp-blog-posts-side-section">
                                <h3>Search Articles</h3>
                                <div class="mt-3 mt-md-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control pxp-is-address" placeholder="Search">
                                        <span class="fa fa-search"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="pxp-blog-posts-side-section mt-4 mt-md-5">
                                <h3>Categories</h3>
                                <ul class="pxp-blog-posts-side-v-list list-unstyled mt-3 mt-md-4">
                                    <li><a href="#">Fashion (3)</a></li>
                                    <li><a href="#">Lifestyle (2)</a></li>
                                    <li><a href="#">Personal (2)</a></li>
                                    <li><a href="#">Stories (2)</a></li>
                                    <li><a href="#">Travel (4)</a></li>
                                </ul>
                            </div>

                            <div class="pxp-blog-posts-side-section mt-4 mt-md-5">
                                <h3>Tags</h3>
                                <div class="pxp-blog-posts-side-tags mt-3 mt-md-4">
                                    <a href="#">Premium (10)</a>
                                    <a href="#">Interior (12)</a>
                                    <a href="#">Stories (6)</a>
                                    <a href="#">Fashion (2)</a>
                                    <a href="#">Architecture (8)</a>
                                    <a href="#">Lifestyle (5)</a>
                                    <a href="#">Travel (10)</a>
                                    <a href="#">Personal (11)</a>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>
        </div>

        <div class="pxp-full pxp-cover pt-100 pb-100 mt-100" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/imageres3.png);">
            <div class="container">
                <h2 class="pxp-section-h2" style="color:white;">Stay Up to Date</h2>
                <p class="pxp-text-light" style="color:white;">Subscribe to our newsletter.</p>
                <div class="row mt-4 mt-md-5">
                    <div class="col-xs-12 col-sm-6">
                        <div class="pxp-newsletter-1-form">
                        <?php echo do_shortcode('[mc4wp_form id=920048]'); ?>
                                    </div>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>