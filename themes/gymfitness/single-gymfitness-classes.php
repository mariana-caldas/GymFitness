<?php get_header(); ?>
<main class="container page with-sidebar">
    <div class="main-content">
        <?php get_template_part('template-parts/page', 'loop')?>
    </div>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
