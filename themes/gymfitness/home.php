<?php 
/*
* This is the Blog page
*/
get_header(); 
?>
    <main class="container page with-sidebar">
        <div class="main-content">
            <?php while (have_posts()) : the_post(); ?>
                <h2 class="text-primary text-center"><?php the_title(); ?></h2>
            <?php endwhile; ?>
        </div>
        <?php get_sidebar(); ?>
    </main>
<?php get_footer(); ?>