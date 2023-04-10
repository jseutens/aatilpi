<?php
function aatilpi_register_location_post_type() {
    $labels = array(
        'name' => __('Locations', AATILPI_TEXTDOMAIN),
        'singular_name' => __('Location', AATILPI_TEXTDOMAIN),
        // Add more labels as needed
    );

    $permalink_slug = get_option('aatilpi_permalink', 'locations');

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_menu' => true,
        'supports' => array('title', 'thumbnail', 'page-attributes'),
        'taxonomies' => array(),
        'has_archive' => false,
        'rewrite' => array('slug' => $permalink_slug),
    );

    register_post_type('aatilpi_location', $args);
}
add_action('init', 'aatilpi_register_location_post_type');
function aatilpi_get_ordered_locations() {
    $args = array(
    	'post_type' => 'aatilpi_location',
        'posts_per_page' => -1,
        'orderby' => 'menu_order',
        'order' => 'ASC',
    );

    return get_posts($args);
}

// Add custom columns to the locations list table
function aatilpi_location_columns($columns) {
    $new_columns = array();
    foreach ($columns as $key => $value) {
        if ($key == 'date') {
            $new_columns['menu_order'] = __('Order', AATILPI_TEXTDOMAIN);
        }
        $new_columns[$key] = $value;
    }
    return $new_columns;
}
add_filter('manage_aatilpi_location_posts_columns', 'aatilpi_location_columns');

// Fill custom columns with data
function aatilpi_location_custom_column($column, $post_id) {
    if ($column == 'menu_order') {
        $post = get_post($post_id);
        echo $post->menu_order;
    }
}
add_action('manage_aatilpi_location_posts_custom_column', 'aatilpi_location_custom_column', 10, 2);

// Make the custom columns sortable
function aatilpi_location_sortable_columns($columns) {
    $columns['menu_order'] = 'menu_order';
    return $columns;
}
add_filter('manage_edit-aatilpi_location_sortable_columns', 'aatilpi_location_sortable_columns');


