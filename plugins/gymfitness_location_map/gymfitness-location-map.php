<?php

/* 
    Plugin Name: Gym Fitness - Location Map
    Plugin URI:
    Description: Creates a shortcode to display the map
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

?>