<?php
function custom_get_header() {
    if (is_home()) {
        get_headerhome();
    } else {
        get_header();
    }
}
?>