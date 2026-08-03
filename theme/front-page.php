<?php
/**
 * Homepage template.
 * Coded fallback that mirrors the live speckdealerships.com homepage sections
 * with a modernized design. If you edit the "Home" page with Elementor,
 * Elementor's content will take over automatically via the_content().
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>

<main id="primary" class="speck-home">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php if ( trim( get_the_content() ) !== '' ) : ?>
			<?php the_content(); ?>
			<?php get_footer(); return; ?>
		<?php endif; ?>
	<?php endwhile; endif; ?>

	<?php
	/**
	 * Each section below lives in its own file under template-parts/sections/
	 * and is also registered as a shortcode ([speck_hero], [speck_brands],
	 * [speck_dealerships], [speck_specials], [speck_financing],
	 * [speck_service], [speck_about]). To reorder, remove, or mix these with
	 * other content, edit the "Home" page with Elementor and drag a
	 * Shortcode widget for each section you want, in whatever order you
	 * like — see readme.txt.
	 */
	foreach ( array( 'hero', 'brands', 'dealerships', 'specials', 'financing', 'service', 'about' ) as $speck_section ) {
		get_template_part( 'template-parts/sections/' . $speck_section );
	}
	?>

</main>

<?php
get_footer();
