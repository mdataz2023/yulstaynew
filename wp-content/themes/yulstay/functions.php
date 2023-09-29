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
?>