<?php
function custom_get_header() {
    if (is_home()) {
        get_headerhome();
    } else {
        get_header();
    }
}


// Nav Menu

function register_main_lang() {
    register_nav_menu('main-lang',__( 'Main lang' ));
}
add_action( 'init', 'register_main_lang' );


/**
 * schedule_post_publish_event runs when a Post is Published
 */
add_action( 'publish_post', 'schedule_post_publish_event' );

/**
 * when user posts this function will call
 */
function schedule_post_publish_event( $post_id ) {
    // Schedule the actual event
    wp_schedule_single_event( 1 * MINUTE_IN_SECONDS, 'post_publish_send_email');
}
/**
 * this method will call when cron executes
 */
function post_publish_send_email() {
    //init time
    $time = date("Y-m-d h:i:sa", time());
    //send email to admin
    wp_mail( 'dulan.imovil@gmail..com', 'New post has been published', 'New post has been published on' . $time );
}
?>