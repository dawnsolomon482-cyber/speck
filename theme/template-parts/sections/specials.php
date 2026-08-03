<?php
/**
 * Section: Current Specials.
 * Also available as the [speck_specials] shortcode for Elementor's Shortcode widget.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="speck-specials speck-section--photo" style="background-image: linear-gradient(180deg, rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('<?php echo esc_url( speck_background_image( 'speck_specials_bg', 'section-specials.jpg' ) ); ?>');">
	<div class="speck-container">
		<h2><?php esc_html_e( 'Current Specials', 'speck-modern-theme' ); ?></h2>
		<p><?php esc_html_e( 'New vehicle offers, used vehicle deals, and truck & SUV specials across all Speck locations.', 'speck-modern-theme' ); ?></p>
		<a class="speck-btn speck-btn--primary" href="<?php echo esc_url( home_url( '/specials/' ) ); ?>">
			<?php esc_html_e( 'See All Specials', 'speck-modern-theme' ); ?>
		</a>
	</div>
</section>
