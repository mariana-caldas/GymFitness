<?php 
/*
* This is the Search page
*/
get_header(); 
?>
<main class="container page">

    <h1 class="text-primary text-center">
        Search Results for: <?php echo esc_html(get_search_query()); ?>
    </h1>

    <?php if (have_posts()) : ?>

        <ul class="blog-entries">
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/blog', 'loop'); ?>
            <?php endwhile; ?>
        </ul>

    <?php else : ?>

        <p class="text-center">
            No results found. Try another search.
        </p>

    <?php endif; ?>

</main>
<?php get_footer(); ?>