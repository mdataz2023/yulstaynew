<?php
/*
    Template Name: DB
*/
get_header();

global $wpdb;
$table_name = $wpdb->prefix . 'REGIONS'; 
$sql = "SELECT * FROM $table_name";
$table_data = $wpdb->get_results($sql);

echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Column 1</th>';
echo '<th>Column 2</th>';
echo '<th>Column 2</th>';
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

get_footer();
?>
