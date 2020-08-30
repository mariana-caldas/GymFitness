<?php get_header('front-page'); ?>
<?php while(have_posts()) : the_post(); ?>
    <?php 
        $image = get_field('hero_image');
        if( $image ): 
    ?>
        <style type="text/css">
            body.front-page .site-header {
                background-image: linear-gradient( rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(<?php echo $image['url']; ?>);
            }
        </style>
    <?php endif; ?>

    <section class="container section text-center welcome-section">
        <h2 class="text-primary"><?php the_field('welcome_title');  ?></h2>
        <p><?php the_field('welcome_content');  ?></p>
    </section>
    <section class="section-areas">
        <ul class="areas-container">
            <li class="area">
                <?php 
                    $area1 = get_field('area_1');
                    $image = wp_get_attachment_image_src($area1['area_image'], 'mediumSize')[0];
                    $post1 = 52;
                ?>
                 <img src="<?php echo $image ?>" />
                 <a href="<?php get_post_permalink(the_permalink($post1)); ?>"><?php echo $area1['area_name'] ?></a>
            </li>
            
            <li class="area">
                <?php 
                    $area2 = get_field('area_2');
                    $image = wp_get_attachment_image_src($area2['area_image'], 'mediumSize')[0];
                    $post2 =30;
                ?>
                 <img src="<?php echo $image ?>" />
                 <a href="<?php get_post_permalink(the_permalink($post2)); ?>"><?php echo $area2['area_name'] ?></a>
            </li>
            <li class="area">
                <?php 
                    $area3 = get_field('area_3');
                    $image = wp_get_attachment_image_src($area3['area_image'], 'mediumSize')[0];
                    $post3 = 53;
                ?>
                 <img src="<?php echo $image ?>" />
                 <a href="<?php get_post_permalink(the_permalink($post3)); ?>"><?php echo $area3['area_name'] ?></a>
            </li>
            <li class="area">
                <?php 
                    $area4 = get_field('area_4');
                    $image = wp_get_attachment_image_src($area4['area_image'], 'mediumSize')[0];
                    $post4 = 55;
                
                ?>
                 <img src="<?php echo $image ?>" />
                 <a href="<?php get_post_permalink(the_permalink($post4)); ?>"><?php echo $area4['area_name'] ?></a>
            </li>
        </ul>

    </section>

<?php endwhile; ?>

<?php get_footer(); ?>