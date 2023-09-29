<?php
function custom_get_header() {
    if (is_home()) {
        get_headerhome();
    } else {
        get_header();
    }
}


// Nav Menu

function register_main_menu() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_main_menu' );
?>