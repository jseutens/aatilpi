<?php
// Uninstall Plugin
if (!defined('ABSPATH') && !defined('WP_UNINSTALL_PLUGIN')) exit();
// for future use if options will be written to the db
//delete_option('xxxxxx');

// delete the custom post type and its associated posts
$args = array(
    'post_type' => 'aatilpi_location',
    'posts_per_page' => -1,
    'post_status' => 'any',
);
$query = new WP_Query( $args );
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post();
        wp_delete_post( get_the_ID(), true );
    }
}
wp_reset_postdata();
unregister_post_type( 'aatilpi_location' );
