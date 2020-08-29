<?php get_header('front-page'); ?>
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
<?php while(have_posts()) : the_post(); ?>
    <section class="container section text-center welcome-section">
        <h2 class="text-primary"><?php the_field('welcome_title')  ?></h2>
        <p><?php the_field('welcome_content')  ?></p>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>