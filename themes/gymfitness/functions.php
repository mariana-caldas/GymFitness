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
    //SlickNav CSS
    wp_enqueue_style('slickNavCSS', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');
    //Main Stylesheet
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFonts'), '1.0.0');
    //SlickNav JS
    wp_enqueue_script('slickNavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);
    //Main JS
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts');

//Enables feature images and other stuff
function gymfitness_setup(){
    //Add featured image
    add_theme_support( 'post-thumbnails');
}
add_action('after_setup_theme', 'gymfitness_setup');

?>
