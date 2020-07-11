<?php 

//Creates the menu
function gymfitness_menus(){
    register_nav_menus(array(
        'main-menu' => 'Main Menu'
    ));
}

add_action('init', 'gymfitness_menus' );

?>