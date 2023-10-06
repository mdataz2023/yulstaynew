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

// $table_name = $wpdb->prefix . 'REGIONS';

// SQL query to retrieve data from the "REGIONS" table
$sql = "SELECT CODE, DESCRIPTION_FRANCAISE, DESCRIPTION_ANGLAISE FROM REGIONS";

// Get the table data
$table_data = $wpdb->get_results($sql);

if (!empty($table_data)) {
    dd ($table_data);
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>CODE</th>';
    echo '<th>DESCRIPTION_FRANCAISE</th>';
    echo '<th>DESCRIPTION_ANGLAISE</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($table_data as $row) {
        echo '<tr>';
        echo '<td>' . esc_html($row->CODE) . '</td>';
        echo '<td>' . esc_html($row->DESCRIPTION_FRANCAISE) . '</td>';
        echo '<td>' . esc_html($row->DESCRIPTION_ANGLAISE) . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo 'No data found in the "REGIONS" table.';
    dd ($table_data);
}

?>
</div>

<?php
get_footer();
?>
