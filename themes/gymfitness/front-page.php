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

<?php get_footer(); ?>