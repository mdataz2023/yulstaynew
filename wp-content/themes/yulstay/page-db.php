<?php
/*
	Template Name: DB
*/
get_header();


global $wpdb;
$sql = "SELECT * FROM PHOTOS";
$table_data = $wpdb->get_results($sql);

echo $$table_data;

?>



<?php get_footer(); ?>