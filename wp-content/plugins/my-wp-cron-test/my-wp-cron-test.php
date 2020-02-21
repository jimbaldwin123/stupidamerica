<?php
/*
Plugin Name: My WP-Cron Test
 */

function bl_print_tasks() {
    echo '<pre>'; print_r( _get_cron_array() ); echo '</pre>';
}

add_action( 'my_hourly_event',  'sa_notify_save_post_cron' );
wp_schedule_event( time(), 'hourly', 'my_hourly_event' );

/*
public static function activate() {
    wp_schedule_event( time(), 'hourly', 'my_hourly_event' );
}

public static function deactivate() {
    wp_clear_scheduled_hook('my_hourly_event');
}
*/

