<?php

/* 
    Plugin Name: Gym Fitness - Location Map
    Plugin URI:
    Description: Creates a shortcode to display the Google Map whose data comes from Advanced Custom Fields
    Version: 1.0
    Author: Mariana Caldas
    Author URI: https://www.marianacaldas.com/
    Text Domain: gymfitness-location-map
    License: GPL2
    License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/
 if(!defined('ABSPATH')) die();

//Shortcode API
function gymfitness_location_shortcode(){ 
    $location = get_field('location_map');
    if($location):
    ?>
    <div class="acf-map" data-zoom="<?php echo esc_attr($location['zoom']); ?>">
        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
    </div>
    <?php endif;

}
add_shortcode('gymfitness_location_map', 'gymfitness_location_shortcode');

//Adding Google Maps API Key to allow map loadind on ACF plugin
function my_acf_google_map_api( $api ){
	$api['key'] = get_field('google_key');
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

//Enqueues the JS and CSS files
function gymfitness_location_scripts(){
    // Google Maps
    if(is_page('contact-us')):
     wp_enqueue_script('googlemaps', 'https://maps.googleapis.com/maps/api/js?key=' . get_field('google_key'), array(), true);
    endif;
}
add_action('wp_enqueue_scripts', 'gymfitness_location_scripts');

?>