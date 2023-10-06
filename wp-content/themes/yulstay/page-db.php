<?php
/*
	Template Name: DB
*/
get_header();


global $wpdb;
$table_name = $wpdb->prefix . 'PHOTOS'; 
$sql = "SELECT * FROM $table_name";
$table_data = $wpdb->get_results($sql);

if (!empty($table_data)) {
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Column 1</th>';
    echo '<th>Column 2</th>';
    // Add more table headers as needed
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($table_data as $row) {
        echo '<tr>';
        echo '<td>' . esc_html($row->column1) . '</td>';
        echo '<td>' . esc_html($row->column2) . '</td>';
        // Add more table columns as needed
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo 'No data found in the table.';
}

?>



<?php get_footer(); ?>