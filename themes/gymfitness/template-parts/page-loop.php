<?php while (have_posts()) : the_post(); ?>
    <h1 class="text-primary text-center"><?php the_title(); ?></h1>
    <?php 
    if(has_post_thumbnail()):
        the_post_thumbnail('blog');
    endif;

    //Check the current custom post type
    if(get_post_type() === 'gymfitness-classes'):

        $start_time = get_field('start_time');
        $end_time = get_field('end_time');
    ?>
        <p class="content-post-class">
            <?php echo the_field('class_days') . " - " . $start_time . " to " . $end_time ?>
        </p>
    <?php
    endif;
    ?>
    
<?php the_content(); ?>

<?php endwhile; ?>