<?php 
get_header(); 
?>
    <main class="container page">
        <?php 
            $category = get_queried_object();
        ?>
        <h2 class="text-center text-primary"><?php echo $category->name; ?></h2>
        <?php get_template_part('template-parts/blog', 'loop'); ?>
    </main>
<?php get_footer(); ?>