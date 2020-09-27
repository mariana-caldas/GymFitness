<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <?php wp_head() ?>
</head>

<body class="front-page">
    <header class="site-header">
        <div class="container header-grid">
            <div class="navigation-bar">
                <div class="logo">
                    <?php 
                        $custom_logo= get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo);
                    ?>
                    <a href="<?php echo home_url() ?>" title="Go to Gym Fitness Homepage">
                        <img src="<?php echo $image[0]; ?>" alt="Gym Fitness Logo" />
                    </a>
                </div>
                <?php
                    $args = array(
                        'theme_location' => 'main-menu',
                        'container' => 'nav',
                        'container_class' => 'main-menu'
                    );
                    wp_nav_menu($args)
                
                ?>
            </div>
            <div class="tagline text-center">
                <h1><?php the_field('hero_tagline'); ?></h1>
                <p><?php the_field('hero_content'); ?></p>
            </div>
        </div>
    </header>