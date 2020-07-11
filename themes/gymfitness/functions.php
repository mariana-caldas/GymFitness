<?php 

//Creates the menu
function gymfitness_menus(){
    register_nav_menus(array(
        'main-menu' => 'Main Menu'
    ));
}

add_action('init', 'gymfitness_menus' );

//Adds stylesheets and Js files
function gymfitness_scripts(){
    //Normalize CSS.
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts');

?>
