<?php
/**
 * Section: Service & Parts.
 * Also available as the [speck_service] shortcode for Elementor's Shortcode widget.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="speck-service speck-section--photo">
	<img class="speck-section--photo__img" src="<?php echo esc_url( speck_background_image( 'speck_service_bg', 'section-service.jpg' ) ); ?>" alt="" />
	<div class="speck-container">
		<h2><?php esc_html_e( 'Service & Parts', 'speck-modern-theme' ); ?></h2>
		<p><?php esc_html_e( 'Schedule service or order parts at your nearest Speck dealership.', 'speck-modern-theme' ); ?></p>
		<div class="speck-hero__ctas">
			<a class="speck-btn speck-btn--primary" href="https://www.speckdealerships.com/service">
				<?php esc_html_e( 'Schedule Service', 'speck-modern-theme' ); ?>
			</a>
			<a class="speck-btn speck-btn--outline-light" href="<?php echo esc_url( home_url( '/parts/' ) ); ?>">
				<?php esc_html_e( 'Order Parts', 'speck-modern-theme' ); ?>
			</a>
		</div>
	</div>
</section>
