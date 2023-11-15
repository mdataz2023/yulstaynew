<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package yulstay
 */

get_header();
?>

        <div class="pxp-content mb-100">
            <h1 class="mb-5" data-fittext="true" data-fittext-options='{ "compressor": 0.25, "minFontSize": 150, "maxFontSize": 300 }' class="liquid-counter-element" data-enable-counter="true" data-counter-options='{ "targetNumber": "404", "blurEffect": true }'>
									<span>000</span>
								</h1><!-- /.liquid-counter-element -->
	
							</div><!-- /.text-404 -->
	
							<h3 class="font-weight-bold mb-1">Looks like you’re lost</h3>
							<p class="mb-5">We can’t seem to find the page you’re looking for</p>
            </div>
            <a href="https://dev.oddly.co/tptl/wp-content/themes/tptl/home-page.html" class="signup-btn font-size-16 font-weight-bold">
								<span>
									<span class=""></span>
									<span class="btn-icon">
										<i class="icon-ion-ios-arrow-round-back"></i>
									</span>
									<span class="btn-txt px-3">Back to home</span>
								</span>
							</a>


<?php
get_footer(); ?>