<?php

get_header();

$team_member_name = get_field('team_member_name');
$team_member_destination=get_field('team_member_destination');
$team_member_email=get_field('team_member_email');
$team_member_telephone=get_field('team_member_telephone');
$team_member_address=get_field('team_member_address');
$specialities_heading=get_field('social_media_heading');
$specialities_paragraph=get_field('specialities_paragraph');
$social_media_heading=get_field('social_media_heading');
$social_media_paragraph=get_field('social_media_paragraph');
$broker_id=get_field('broker_id');

?>

<div class="pxp-content">
    <div class="pxp-agents mt-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-8">
                    <h1 class="pxp-page-header float-left"><?php the_title(); ?></h1>
                    <span class="pxp-agent-rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span
                            class="fa fa-star"></span><span class="fa fa-star"></span><span
                            class="fa fa-star"></span></span>
                    <div class="clearfix"></div>
                    <p><?php echo $team_member_destination; ?></p>
                    <div class="mt-4 mt-md-5">
                        <div class="pxp-agent-email"><a href="mailto:<?php echo $team_member_email; ?>"><span
                                    class="fa fa-envelope-o"></span> <?php echo $team_member_email; ?></a></div>
                        <div class="pxp-agent-email"><a href=""><span class="fa fa-location-arrow"></span>
                                <?php echo $team_member_address; ?></a></div>
                        <div class="pxp-agent-phone"><a href="tel:<?php echo $team_member_telephone; ?>" style="color: #333 !important;"><span
                                    class="fa fa-phone"></span>  <?php echo $team_member_telephone; ?></a></div>
                    </div>
                    <div hidden class="mt-4 mt-md-5">
                        <a href="#pxp-work-with" class="pxp-agent-contact-btn" data-toggle="modal"
                            data-target="#pxp-work-with">Work with <?php the_title(); ?></a>
                    </div>
                </div>
                <div class="col-sm-12 offset-lg-1 col-lg-3">
                    <div class="pxp-agent-photo pxp-cover rounded-lg mt-4 mt-md-5 mt-lg-0"
                        style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>); background-position: 50% 0%;">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-lg-8">
                    <div class="pxp-agent-section mt-4 mt-md-5">
                        <h3>About <?php the_title(); ?></h3>
                        <div class="mt-3 mt-md-4">
                            <?php if( have_rows('team_member_paragraphs') ): $s= 1; $a=0; ?>

                            <?php while( have_rows('team_member_paragraphs') ): the_row() ;
                                    $i++;
                                            $paragraph = get_sub_field('team_member_paragraph');
                                    ?>
                            <p><?php echo $paragraph; ?></p>
                            <?php   endwhile; endif; ?>
                        </div>

                        <div class="mt-3 mt-md-4">
                            <?php if( have_rows('team_member_questions') ): $s= 1; $a=0; ?>

                            <?php while( have_rows('team_member_questions') ): the_row() ;
                                    $i++;
                                            $team_member_question = get_sub_field('team_member_question');
                                            $team_member_answer = get_sub_field('team_member_answer');
                                    ?>
                            <p style="font-weight: 900;"><?php echo $team_member_question; ?></p>
                            <p><?php echo $team_member_answer; ?></p>
                            <?php   endwhile; endif; ?>
                        </div>

                    </div>
                </div>
                <div class="col-sm-12 col-lg-3 offset-lg-1">
                    <div class="pxp-agent-section mt-4 mt-md-5">
                        <h3>Specialities</h3>
                        <ul class="list-unstyled pxp-agent-specialities mt-3 mt-md-4">
                            <li>International Buyers and Sellers</li>
                            <li>Investors</li>
                            <li>Family Offices</li>
                        </ul>
                    </div>
                    <div class="pxp-agent-section mt-4 mt-md-5">
                        <h3>Social Media</h3>
                        <ul class="list-unstyled pxp-agent-social mt-3 mt-md-4">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <h2 class="pxp-section-h2 mt-100">Listings by <?php the_title(); ?></h2>
            <div class="row mt-4 mt-md-5">
                <?php
                        $datas = $wpdb->get_results("SELECT i.*,p.ID,p.post_type FROM INSCRIPTIONS i join wp_posts p on p.post_content=i.NO_INSCRIPTION where i.CODE_STATUT='EV' and COURTIER_INSCRIPTEUR_1='".$broker_id."'", OBJECT );
                        foreach ($datas as $inscriptionsData) {
                    $results = $wpdb->get_row(" SELECT * FROM PHOTOS where  NO_INSCRIPTION = '".$inscriptionsData->NO_INSCRIPTION ."' limit 1", OBJECT );
				?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <a href="<?php echo get_permalink( $inscriptionsData->ID );?>" class="pxp-prop-card-1 rounded-lg mb-4">
                        <div class="pxp-prop-card-1-fig pxp-cover"
                            style="background-image: url(<?php  echo $results->PhotoURL;?>);"></div>
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
                            <div class="pxp-prop-card-1-details-price"><?php
                            if($inscriptionsData->post_type=="residential" || $inscriptionsData->post_type=="multi-residential"){
                                echo $inscriptionsData->PRIX_DEMANDE.' $';
                            }else{
                                echo $inscriptionsData->PRIX_LOCATION_DEMANDE.' $';
                            }
                         ?></div>
                            <?php  echo $inscriptionsData->NB_CHAMBRES;?> BD <span>|</span>
                                    <?php echo $inscriptionsData->NB_CHAMBRES_HORS_SOL;?> BA
                                    <span>|</span>
                                    <?php echo $inscriptionsData->SUPERFICIE_HABITABLE." ".$inscriptionsData->UM_SUPERFICIE_HABITABLE;?>
                        </div>
                        <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                    </a>
                </div>
                <?php } ?>

            </div>

            <!-- <ul class="pagination pxp-paginantion mt-3 mt-md-4">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next <span class="fa fa-angle-right"></span></a>
                </li>
            </ul> -->

            <!-- <div class="row mt-100">
                <div class="col-sm-12 col-lg-1"></div>
                <div class="col-sm-12 col-lg-10">
                    <div class="pxp-agent-block">
                        <div class="pxp-agent-comments">
                            <h4>3 Reviews</h4>

                            <div class="mt-3 mt-md-4">
                                <div class="media">
                                    <img src="images/ph-avatar.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5>Scott Goodwin</h5>
                                        <div class="pxp-agent-comments-date">April 9, 2021 at 2:33 pm</div>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                            turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.</p>

                                        <div class="media mt-2 mt-md-3">
                                            <img src="images/ph-avatar.jpg" class="mr-3" alt="...">
                                            <div class="media-body">
                                                <h5>Alayna Becker</h5>
                                                <div class="pxp-agent-comments-date">April 9, 2021 at 2:33 pm</div>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                    scelerisque ante sollicitudin. Cras purus odio, vestibulum in
                                                    vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi
                                                    vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="media mt-2 mt-md-3">
                                    <img src="images/ph-avatar.jpg" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5>Erika Tillman</h5>
                                        <div class="pxp-agent-comments-date">April 9, 2021 at 2:33 pm</div>
                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
                                            sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra
                                            turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia
                                            congue felis in faucibus.</p>
                                    </div>
                                </div>
                            </div>

                            <h4 class="mt-4 mt-md-5">Leave a review</h4>
                            <form action="single-agent.html" class="pxp-agent-comments-form mt-3 mt-md-4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="pxp-agent-comments-name">You Name</label>
                                            <input type="text" class="form-control" id="pxp-agent-comments-name"
                                                placeholder="Enter your full name">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="pxp-agent-comments-email">You Email</label>
                                            <input type="text" class="form-control" id="pxp-agent-comments-email"
                                                placeholder="Enter your email address">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="d-block">Rate the Agent</label>
                                    <span class="pxp-single-agent-rating"><span data-rating="5"></span><span
                                            data-rating="4"></span><span data-rating="3"></span><span
                                            data-rating="2"></span><span data-rating="1"></span></span>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <label for="pxp-agent-comments-review">Write a Review</label>
                                    <textarea class="form-control" id="pxp-agent-comments-review" rows="6"
                                        placeholder="Write your review here..."></textarea>
                                </div>
                                <a href="#" class="pxp-agent-comments-form-btn">Post Review</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

<?php get_footer(); ?>