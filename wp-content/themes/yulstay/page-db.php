<?php
/*
    Template Name: DB
*/
get_header();

?>

<div style="color: black">
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

$tables = $wpdb->get_results("SHOW TABLES");

if ($tables) {
    echo '<ul>';
    foreach ($tables as $table) {
        foreach ($table as $table_name) {
            echo '<li>' . esc_html($table_name) . '</li>';
        }
    }
    echo '</ul>';
} else {
    echo 'No tables found in the database.';
}

?>
</div>

<?php
get_footer();
?>
