<?php
/*
    Template Name: DB
*/
get_header();

?>

<div>
<?php
global $wpdb;

// Perform a simple query to check the database connection
$result = $wpdb->get_var("SELECT 1");

if ($wpdb->last_error) {
    // If there is an error, print or log it
    echo "Database connection error: " . $wpdb->last_error;
} else {
    // Database connection is successful
    echo "Database connection is working!";
}
?>
</div>

<?php
get_footer();
?>
