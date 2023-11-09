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

// Footer Menu

function register_footer_company_menu() {
    register_nav_menu('footer-company-menu',__( 'Footer Company Menu' ));
  }
  add_action( 'init', 'register_footer_company_menu' );


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



// Create a WordPress custom page template or plugin to use this code.
function display_database_table() {
    global $wpdb; // WordPress database connection

    $table_name = $wpdb->prefix . 'CODE'; // Replace 'your_table_name' with your table name

    // SQL query to retrieve data from your table
    $sql = "SELECT * FROM $table_name";

    $table_data = $wpdb->get_results($sql);

    if (!empty($table_data)) {
        echo '<table>';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Column 1</th>';
        echo '<th>Column 2</th>';
        echo '<th>Column 2</th>';
        // Add more table headers as needed
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        foreach ($table_data as $row) {
            echo '<tr>';
            echo '<td>' . esc_html($row->CODE) . '</td>'; // Replace 'column1' with your actual column names
            echo '<td>' . esc_html($row->DESCRIPTION_FRANCAISE) . '</td>';
            echo '<td>' . esc_html($row->DESCRIPTION_ANGLAISE) . '</td>'; // Replace 'column2' with your actual column names
            // Add more table columns as needed
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } else {
        echo 'No data found in the table.';
    }
}

// Create a shortcode to display the table on a page or post
function display_database_table_shortcode() {
    ob_start();
    display_database_table();
    return ob_get_clean();
}
add_shortcode('display_table', 'display_database_table_shortcode');


?>