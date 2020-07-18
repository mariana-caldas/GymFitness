<?php get_header(); ?>
<main class="container page with-sidebar">
    <div class="main-content">
        <?php while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</main>
<?php get_footer(); ?>