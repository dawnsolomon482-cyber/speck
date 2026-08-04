<?php
/**
 * Section: Hero ("Shop By Vehicle" search).
 * Also available as the [speck_hero] shortcode for Elementor's Shortcode widget.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="speck-hero" style="background-image: linear-gradient(180deg, rgba(0,0,0,0.5), rgba(0,0,0,0.65)), url('<?php echo esc_url( speck_background_image( 'speck_hero_bg', 'hero-bg.jpg' ) ); ?>');">
	<div class="speck-container speck-hero__inner">
		<h1><?php esc_html_e( 'Shop By Vehicle', 'speck-modern-theme' ); ?></h1>
		<p class="speck-hero__count"><?php esc_html_e( 'Vehicles available across every Speck dealership', 'speck-modern-theme' ); ?></p>

		<div class="speck-hero__ctas">
			<a class="speck-btn speck-btn--block" href="#our-dealerships"><?php esc_html_e( 'Locations', 'speck-modern-theme' ); ?></a>
			<a class="speck-btn speck-btn--block" href="<?php echo esc_url( home_url( '/specials/' ) ); ?>"><?php esc_html_e( 'New Specials', 'speck-modern-theme' ); ?></a>
			<a class="speck-btn speck-btn--block" href="https://www.speckdealerships.com/service"><?php esc_html_e( 'Service', 'speck-modern-theme' ); ?></a>
		</div>
	</div>
</section>
