<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <!--Make the page iOS and Android compatible -->
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">
    <meta name="theme-color" content="#ff5b00">
    <meta name="mobile-web-app-capable" content="yes">
    <!--------------------------------------------->
    <?php wp_head() ?>
</head>

<body>
    <header class="site-header">
        <div class="container header-grid">
            <div class="navigation-bar">
                <div class="logo">
                    <?php 
                        $custom_logo= get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo);
                    ?>
                    <?php if ($custom_logo) : ?>
                        <a href="<?php echo home_url() ?>" title="Go to Gym Fitness Homepage">
                            <img src="<?php echo $image[0]; ?>" alt="Gym Fitness Logo" />
                        </a>
                    <?php else : ?> 
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="Go to the Homepage"><p class="site-title"><?php bloginfo( 'name' ); ?></p></a>
                    <?php endif; ?>
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
        </div>
    </header>