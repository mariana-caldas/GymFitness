<?php 
//Link to the queries file
require get_template_directory() . '/inc/queries.php';

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

    //LightBox CSS
    if(basename(get_page_template()) === 'gallery.php'):
        wp_enqueue_style('lightboxCSS', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.3');
    endif;

    //Main Stylesheet
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize', 'googleFonts'), '1.0.0');
    //SlickNav JS
    wp_enqueue_script('slickNavJS', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

    //LightBox JS
    if(basename(get_page_template()) === 'gallery.php'):
     wp_enqueue_script('lightboxJS', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.3', true);
    endif;
    
    //Main JS
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'gymfitness_scripts');

//Enables feature images and other stuff
function gymfitness_setup(){
    //Register new image sizes
    add_image_size('square', 350, 350, true);
    add_image_size('portrait', 350, 724, true);
    add_image_size('box', 400, 375, true);
    add_image_size('mediumSize', 700, 400, true);
    add_image_size('blog', 966, 400, true);
    //Add featured image
    add_theme_support( 'post-thumbnails');
}
add_action('after_setup_theme', 'gymfitness_setup');

//Creates Widget Zone
function gymfitness_sidebar() {
    register_sidebar( 
        array(
            'id'            => 'primary-sidebar',
            'name'          => 'Gym Fitness Sidebar',
            'description'   => 'For the the page templates with sidebar.',
            'before_widget' => '<div class="widget-blog">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-blog-title">',
            'after_title'   => '</h3>'
        )
    );
}
add_action( 'widgets_init', 'gymfitness_sidebar' );

//Remove WordPress Admin Bar CSS (White Space at the top)
add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

?>
