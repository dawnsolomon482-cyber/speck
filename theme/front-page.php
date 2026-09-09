<?php
/**
 * Homepage template.
 * Always renders the coded Speck homepage sections below (hero, brands,
 * dealerships, specials, financing, service, about, blog) -- whatever is
 * saved in the "Home" page's own content editor is intentionally ignored,
 * so pasting or editing text there can never hide or replace the homepage
 * design. To customize a section's design, edit its file under
 * template-parts/sections/ or use the matching Customizer section instead.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>

<main id="primary" class="speck-home">

	<?php
	/**
	 * Each section below lives in its own file under template-parts/sections/
	 * and is also registered as a shortcode ([speck_hero], [speck_brands],
	 * [speck_dealerships], [speck_specials], [speck_financing],
	 * [speck_service], [speck_about], [speck_blog]) for use on OTHER pages
	 * (not this one) via Elementor's Shortcode widget. This homepage itself
	 * always renders every section below, in this order.
	 */
	foreach ( array( 'hero', 'brands', 'dealerships', 'specials', 'financing', 'service', 'about', 'blog' ) as $speck_section ) {
		get_template_part( 'template-parts/sections/' . $speck_section );
	}
	?>

</main>

<?php
get_footer();
