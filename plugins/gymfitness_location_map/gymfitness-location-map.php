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
    ?>
    <div class="location-map">
        <input type="hidden" id="lat" value="<?php echo $location['lat']; ?>" />
   </div>
   
<?php
}
add_shortcode('gymfitness_location_map', 'gymfitness_location_shortcode');



?>