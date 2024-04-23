<?php
/*
	Template Name: Join Our Team
*/
get_header();

$second_title = get_field('second_title');
$paragraph_one = get_field('paragraph_one');
$video_id = get_field('video_id');

?>

        <div class="pxp-content">
            <div class="pxp-blog-posts pxp-content-wrapper mt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-9 col-lg-7">
                            <div class="pxp-blog-post-category"><span><?php the_date('j F, Y'); ?></span><span>Youtube</span></div>
                            <h1 class="pxp-page-header"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>

                <div class="pxp-contact-hero mt-4 mt-md-5">
                    <div class="pxp-contact-hero-fig pxp-cover" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>); background-position: 50% 80%;"></div>
                </div>

                <div class="container mt-100">
                    <div class="row">
                        <div class="col-sm-12 col-lg-1">
                            <div class="pxp-blog-post-share">
                                <div class="pxp-blog-post-share-label"><?php _e('Share','theme-text-domain'); ?></div>
                                <ul class="list-unstyled mt-3">
                                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                                    <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-10">
                            <div class="pxp-blog-post-block mt-4 mt-md-5 mt-lg-0">
                                <h2><?php echo $second_title ?></h2>
                                <div class="mt-3 mt-md-4">
                                    <p class="pxp-first-letter"><?php echo $paragraph_one ?></p>
                                    <?php if( have_rows('paragraph_section') ): $s= 1; $a=0; ?>

                                    <?php while( have_rows('paragraph_section') ): the_row() ;
                                            $i++;
                                                    $paragraph = get_sub_field('paragraph');
                                            ?>
                                    <p><?php echo $paragraph; ?></p>
                                    <?php   endwhile; endif; ?>
                                </div>
                            </div>

                            <div class="pxp-blog-post-block pxp-full mt-4 mt-md-5">
                                <!-- <a href="javascript:void(0);" class="pxp-blog-post-video pxp-cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/imageres1.png); background-position: 50% 50%;"></a> -->
                                <iframe width="889" height="500" src="https://www.youtube.com/embed/<?php echo $video_id ?>?start=23" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%; border: 0 none;"></iframe>
                            </div>

                            <!-- <div class="pxp-blog-post-block mt-4 mt-md-5">
                                <h2>Take the time to find the right fit</h2>
                                <div class="mt-3 mt-md-4">
                                    <p>Not all designers are created equal. Like all of us, each designer has his or her own unique personal tastes, quirks and business practices. To make sure your project is a success, it’s important that you and your designer are on the same page with a lot of these details. You may need to interview a few before you find someone who’s the right fit.</p>
                                    <div class="pxp-blog-post-blockquote pxp-left">"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."</div>
                                    <p>In the design world, this interview is called a consultation. It can be an in-person meeting or held over the phone, and it can be paid or unpaid. You can use this time to ask to see samples of the designer’s work, learn more about their process, and ask about business practices, such as their preferred methods for communication and billing.</p>
                                    <p>You can also use this time to let the designer get to know you. Feel free to bring in a few photos or items you intend to use for design inspiration. Let the designer know about your specific quirks and personal preferences. By the end of the meeting, you should have a good sense of whether the two of you will work well together.</p>
                                </div>
                            </div> -->

                            <!-- <div class="pxp-blog-post-block pxp-full mt-4 mt-md-5">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <img src="images/imageres1.png" alt="" class="pxp-image-full mb-3">
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <img src="images/imageres1.png" alt="" class="pxp-image-full mb-3">
                                    </div>
                                </div>
                            </div> -->

                            <!-- <div class="pxp-blog-post-block mt-4 mt-md-5">
                                <h2>Final thoughts</h2>
                                <div class="mt-3 mt-md-4">
                                    <p>For those who have never hired an interior designer before, the idea of doing so can feel out of reach, but it doesn’t need to be. We’ve created a first-timer’s guide to working with an interior designer to help you take the plunge. Use the advice in this post to make an informed decision as to whether hiring professional help is the right choice for you.</p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="container mt-100">
                    <h2 class="pxp-section-h2"><?php _e('Related Articles','theme-text-domain'); ?></h2>
                    <div class="row mt-4 mt-md-5">
                    <?php $the_query = new WP_Query( array('post_type' =>'podcast','posts_per_page' => '3',  'post__not_in'   => array( $id),) );?>
							     <?php if ( have_posts())   : while ( $the_query->have_posts() ) : $the_query->the_post();?>
							  
									   <?php
										$thumbnail_id = get_post_thumbnail_id(); 
										$thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
										$thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true); 

                                $categories = get_the_category();
										
								?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="#" class="pxp-posts-1-item">
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
                        <!-- <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="#" class="pxp-posts-1-item">
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
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="#" class="pxp-posts-1-item">
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
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>