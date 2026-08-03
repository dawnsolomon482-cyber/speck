<?php
/**
 * Section: About Speck Family Dealerships.
 * Also available as the [speck_about] shortcode for Elementor's Shortcode widget.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="speck-about">
	<div class="speck-container">
		<h2><?php esc_html_e( 'About Speck Family Dealerships', 'speck-modern-theme' ); ?></h2>
		<p><?php esc_html_e( 'Speck Family Dealerships offers a solid selection of new cars, trucks, and SUVs, plus quality pre-owned inventory, finance expertise, and a professional team of service technicians across Washington State.', 'speck-modern-theme' ); ?></p>
		<a class="speck-btn speck-btn--outline" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">
			<?php esc_html_e( 'Learn More', 'speck-modern-theme' ); ?>
		</a>
	</div>
</section>
