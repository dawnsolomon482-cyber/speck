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
	<img class="speck-section--photo__img" src="<?php echo esc_url( speck_background_image( 'speck_service_bg', 'section-service.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Service & Parts', 'speck-modern-theme' ); ?>" />
</section>
