<?php
/**
 * Section: Financing.
 * Also available as the [speck_financing] shortcode for Elementor's Shortcode widget.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="speck-financing speck-section--photo" style="background-image: linear-gradient(180deg, rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?php echo esc_url( speck_background_image( 'speck_financing_bg', 'section-financing.jpg' ) ); ?>');">
	<div class="speck-container">
		<h2><?php esc_html_e( 'Financing Made Easy', 'speck-modern-theme' ); ?></h2>
		<p><?php esc_html_e( 'Get pre-qualified, value your trade-in, and explore credit resources before you visit.', 'speck-modern-theme' ); ?></p>
		<a class="speck-btn speck-btn--primary" href="<?php echo esc_url( home_url( '/finance/' ) ); ?>">
			<?php esc_html_e( 'Explore Financing', 'speck-modern-theme' ); ?>
		</a>
	</div>
</section>
