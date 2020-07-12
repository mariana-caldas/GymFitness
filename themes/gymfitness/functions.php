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
    //Google Fonts
    wp_enqueue_style('googleFonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:wght@400;700;900&family=Staatliches&display=swap', array(), '1.0.0');
    //Main Stylesheet
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFonts'), '1.0.0');
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts');

?>
