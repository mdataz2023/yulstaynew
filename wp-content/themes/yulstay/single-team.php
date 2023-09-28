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

?>

<div class="pxp-content">
            <div class="pxp-agents mt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-8">
                            <h1 class="pxp-page-header float-left"><?php the_title(); ?></h1>
                            <span class="pxp-agent-rating"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></span>
                            <div class="clearfix"></div>
                            <p><?php echo $team_member_destination; ?></p>
                            <div class="mt-4 mt-md-5">
                                <div class="pxp-agent-email"><a href="mailto:<?php echo $team_member_email; ?>"><span class="fa fa-envelope-o"></span> <?php echo $team_member_email; ?></a></div>
                                <div class="pxp-agent-email"><a href=""><span class="fa fa-envelope-o"></span> <?php echo $team_member_address; ?></a></div>
                                <div class="pxp-agent-phone"><a href="tel:<?php echo $team_member_telephone; ?>"><span class="fa fa-phone"></span> <?php echo $team_member_telephone; ?></a></div>
                            </div>
                            <div class="mt-4 mt-md-5">
                                <a href="#pxp-work-with" class="pxp-agent-contact-btn" data-toggle="modal" data-target="#pxp-work-with">Work with <?php the_title(); ?></a>
                            </div>
                        </div>
                        <div class="col-sm-12 offset-lg-1 col-lg-3">
                            <div class="pxp-agent-photo pxp-cover rounded-lg mt-4 mt-md-5 mt-lg-0" style="background-image: url(images/ph-agent.jpg); background-position: 50% 0%;"></div>
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
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="single-property.html" class="pxp-prop-card-1 rounded-lg mb-4">
                                <div class="pxp-prop-card-1-fig pxp-cover" style="background-image: url(images/ph-gallery.jpg);"></div>
                                <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                                <div class="pxp-prop-card-1-details">
                                    <div class="pxp-prop-card-1-details-title">Chic Apartment in Downtown</div>
                                    <div class="pxp-prop-card-1-details-price">$890,000</div>
                                    <div class="pxp-prop-card-1-details-features text-uppercase">2 BD <span>|</span> 2 BA <span>|</span> 920 SF</div>
                                </div>
                                <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="single-property.html" class="pxp-prop-card-1 rounded-lg mb-4">
                                <div class="pxp-prop-card-1-fig pxp-cover" style="background-image: url(images/ph-gallery.jpg);"></div>
                                <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                                <div class="pxp-prop-card-1-details">
                                    <div class="pxp-prop-card-1-details-title">Colorful Little Apartment</div>
                                    <div class="pxp-prop-card-1-details-price">$2,675</div>
                                    <div class="pxp-prop-card-1-details-features text-uppercase">1 BD <span>|</span> 1 BA <span>|</span> 500 SF</div>
                                </div>
                                <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="single-property.html" class="pxp-prop-card-1 rounded-lg mb-4">
                                <div class="pxp-prop-card-1-fig pxp-cover" style="background-image: url(images/ph-gallery.jpg);"></div>
                                <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                                <div class="pxp-prop-card-1-details">
                                    <div class="pxp-prop-card-1-details-title">Cozy Two Bedroom Apartment</div>
                                    <div class="pxp-prop-card-1-details-price">$960,000</div>
                                    <div class="pxp-prop-card-1-details-features text-uppercase">2 BD <span>|</span> 2 BA <span>|</span> 870 SF</div>
                                </div>
                                <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="single-property.html" class="pxp-prop-card-1 rounded-lg mb-4">
                                <div class="pxp-prop-card-1-fig pxp-cover" style="background-image: url(images/ph-gallery.jpg);"></div>
                                <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                                <div class="pxp-prop-card-1-details">
                                    <div class="pxp-prop-card-1-details-title">Beautiful House in Marina</div>
                                    <div class="pxp-prop-card-1-details-price">$5,198,000</div>
                                    <div class="pxp-prop-card-1-details-features text-uppercase">5 BD <span>|</span> 4.5 BA <span>|</span> 3,945 SF</div>
                                </div>
                                <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="single-property.html" class="pxp-prop-card-1 rounded-lg mb-4">
                                <div class="pxp-prop-card-1-fig pxp-cover" style="background-image: url(images/ph-gallery.jpg);"></div>
                                <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                                <div class="pxp-prop-card-1-details">
                                    <div class="pxp-prop-card-1-details-title">Modern Residence</div>
                                    <div class="pxp-prop-card-1-details-price">$7,995</div>
                                    <div class="pxp-prop-card-1-details-features text-uppercase">4 BD <span>|</span> 1.5 BA <span>|</span> 2,240 SF</div>
                                </div>
                                <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <a href="single-property.html" class="pxp-prop-card-1 rounded-lg mb-4">
                                <div class="pxp-prop-card-1-fig pxp-cover" style="background-image: url(images/ph-gallery.jpg);"></div>
                                <div class="pxp-prop-card-1-gradient pxp-animate"></div>
                                <div class="pxp-prop-card-1-details">
                                    <div class="pxp-prop-card-1-details-title">Luxury Mansion</div>
                                    <div class="pxp-prop-card-1-details-price">$5,430,000</div>
                                    <div class="pxp-prop-card-1-details-features text-uppercase">4 BD <span>|</span> 5 BA <span>|</span> 5,200 SF</div>
                                </div>
                                <div class="pxp-prop-card-1-details-cta text-uppercase">View Details</div>
                            </a>
                        </div>
                    </div>
                    
                    <ul class="pagination pxp-paginantion mt-3 mt-md-4">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next <span class="fa fa-angle-right"></span></a></li>
                    </ul>

                    <div class="row mt-100">
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
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                
                                                <div class="media mt-2 mt-md-3">
                                                    <img src="images/ph-avatar.jpg" class="mr-3" alt="...">
                                                    <div class="media-body">
                                                        <h5>Alayna Becker</h5>
                                                        <div class="pxp-agent-comments-date">April 9, 2021 at 2:33 pm</div>
                                                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media mt-2 mt-md-3">
                                            <img src="images/ph-avatar.jpg" class="mr-3" alt="...">
                                            <div class="media-body">
                                                <h5>Erika Tillman</h5>
                                                <div class="pxp-agent-comments-date">April 9, 2021 at 2:33 pm</div>
                                                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="mt-4 mt-md-5">Leave a review</h4>
                                    <form action="single-agent.html" class="pxp-agent-comments-form mt-3 mt-md-4">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="pxp-agent-comments-name">You Name</label>
                                                    <input type="text" class="form-control" id="pxp-agent-comments-name" placeholder="Enter your full name">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="pxp-agent-comments-email">You Email</label>
                                                    <input type="text" class="form-control" id="pxp-agent-comments-email" placeholder="Enter your email address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="d-block">Rate the Agent</label>
                                            <span class="pxp-single-agent-rating"><span data-rating="5"></span><span data-rating="4"></span><span data-rating="3"></span><span data-rating="2"></span><span data-rating="1"></span></span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="form-group">
                                            <label for="pxp-agent-comments-review">Write a Review</label>
                                            <textarea class="form-control" id="pxp-agent-comments-review" rows="6" placeholder="Write your review here..."></textarea>
                                        </div>
                                        <a href="#" class="pxp-agent-comments-form-btn">Post Review</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php get_footer(); ?>