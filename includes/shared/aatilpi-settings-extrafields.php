<?php
// add custom field group 
function aatilpi_custom_field_meta_box() {
    add_meta_box(
        'aatilpi_custom_field_meta_box_id', // Unique ID
        'Contact location data ', // Title
        'aatilpi_custom_field_meta_box_callback', // Callback function
        'aatilpi_location', // Custom post type
        'normal', // Context (normal, side, advanced)
        'high' // Priority (high, core, default, low)
    );
}
add_action('add_meta_boxes', 'aatilpi_custom_field_meta_box');

// add fields
function aatilpi_custom_field_meta_box_callback($post) {
	wp_nonce_field('aatilpi_custom_field_meta_box', 'aatilpi_custom_field_meta_box_nonce');
	$custom_field_value = get_post_meta($post->ID, '_aatilpi_custom_field_key', true);
	$order_field_value = get_post_meta($post->ID, '_aatilpi_order_field_key', true);
	$yes_no_field_value = get_post_meta($post->ID, '_aatilpi_yes_no_field_key', true);

echo '<table class="aatilpi-meta-box-fields">';
echo '<thead>';
echo '<tr>';
echo '<th>Name</th>';
echo '<th> Order</th>';
echo '<th>Visual</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
echo '<tr>';

// Celphone field
echo '<td>';
echo '<label for="aatilpi_custom_field">Cellphone:</label>';
echo '<input type="text" id="aatilpi_custom_field" name="aatilpi_custom_field" value="' . esc_attr($custom_field_value) . '" size="50" />';
echo '</td>';

// Cellphone Order field
echo '<td>';
echo '<input type="number" id="aatilpi_order_field" name="aatilpi_order_field" value="' . esc_attr($order_field_value) . '" size="5" />';
echo '</td>';

// Cellphone Yes/No select box
echo '<td>';
echo '<select id="aatilpi_yes_no_field" name="aatilpi_yes_no_field">';
echo '<option value="yes"' . ($yes_no_field_value === 'yes' ? ' selected' : '') . '>Yes</option>';
echo '<option value="no"' . ($yes_no_field_value === 'no' ? ' selected' : '') . '>No</option>';
echo '</select>';
echo '</td>';

echo '</tr>';
echo '</tbody>';
echo '</table>'; // Close the wrapper table

}


//saving the stuff
function aatilpi_custom_field_save_postdata($post_id, $post) {
//    error_log('AATILPI NONCE: ' . print_r($_POST['aatilpi_custom_field_meta_box_nonce'], true));
    if (!isset($_POST['aatilpi_custom_field_meta_box_nonce'])) {
        return;
    }

    if (!wp_verify_nonce($_POST['aatilpi_custom_field_meta_box_nonce'], 'aatilpi_custom_field_meta_box')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Save custom field data
    if (isset($_POST['aatilpi_custom_field'])) {
        $custom_field_data = sanitize_text_field($_POST['aatilpi_custom_field']);
//        error_log('AATILPI Field Data: ' . print_r($custom_field_data, true));
        update_post_meta($post_id, '_aatilpi_custom_field_key', $custom_field_data);
    }

    // Save order field data
    if (isset($_POST['aatilpi_order_field'])) {
        $order_field_data = intval($_POST['aatilpi_order_field']);
//        error_log('AATILPI Order Field Data: ' . print_r($order_field_data, true));
        update_post_meta($post_id, '_aatilpi_order_field_key', $order_field_data);
    }
// Save Yes/No field data
if (isset($_POST['aatilpi_yes_no_field'])) {
    $yes_no_field_data = sanitize_key($_POST['aatilpi_yes_no_field']);
    update_post_meta($post_id, '_aatilpi_yes_no_field_key', $yes_no_field_data);
}

}
add_action('save_post_aatilpi_location', 'aatilpi_custom_field_save_postdata', 10, 2);