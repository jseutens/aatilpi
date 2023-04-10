<?php
function aatilpi_location_shortcode($atts) {
    // Parse shortcode attributes
    $atts = shortcode_atts(array(
        'location' => '', // The ID of the location to display
    ), $atts, 'aatilpi_location');

    // Get the location ID
    $location_id = $atts['location'];
    if (empty($location_id)) {
        // If no location ID is given, get the ID of the first location
        $locations = aatilpi_get_ordered_locations();
        if (!empty($locations)) {
            $location_id = $locations[0]->ID;
        }
    }

    // Get the location post object
    $location = get_post($location_id);

    // If the location does not exist or is not a location post type, return an error message
    if (!$location || $location->post_type !== 'aatilpi_location') {
        return '<p>' . __('The specified location does not exist.', AATILPI_TEXTDOMAIN) . '</p>';
    }
	$output_html = $location->post_title;
    // Render the location 
    return $output_html;
}

add_shortcode('contact-card', 'aatilpi_location_shortcode');
