<?php
/**
 * Template Name: Full Width (Elementor)
 * Description: Header/footer intact, but content area has no container/width
 * constraints so Elementor sections can run edge-to-edge.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>

<main id="primary" class="speck-page speck-page--fullwidth">
	<?php
	while ( have_posts() ) :
		the_post();
		the_content();
	endwhile;
	?>
</main>

<?php
get_footer();
