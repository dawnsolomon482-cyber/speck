<?php
/**
 * Section: Current Specials.
 * Also available as the [speck_specials] shortcode for Elementor's Shortcode widget.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="speck-specials speck-section--photo">
	<img class="speck-section--photo__img" src="<?php echo esc_url( speck_background_image( 'speck_specials_bg', 'section-specials.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Current Specials', 'speck-modern-theme' ); ?>" />
</section>
