<?php
/**
 * Section: Explore By Automotive Brand -- an auto-scrolling, slow-motion
 * logo marquee (no cards, just the logos). Loops seamlessly because the
 * logo list is rendered twice back-to-back and the CSS animation slides
 * exactly one copy's width before restarting.
 * Also available as the [speck_brands] shortcode for Elementor's Shortcode widget.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$speck_brands = array(
	'chevrolet' => array( 'Chevrolet', 'https://www.speckchevyprosser.com/' ),
	'ford'      => array( 'Ford', 'https://www.speckford.com/' ),
	'gmc'       => array( 'GMC', 'https://www.speckbuickgmc.com/' ),
	'buick'     => array( 'Buick', 'https://www.speckbuickgmc.com/' ),
	'hyundai'   => array( 'Hyundai', 'https://www.speckhyundai.com/' ),
	'nissan'    => array( 'Nissan', 'https://www.specknissan.com/' ),
	'ram'       => array( 'Ram', 'https://www.speckcdjr.com/' ),
	'jeep'      => array( 'Jeep', 'https://www.speckcdjr.com/' ),
	'chrysler'  => array( 'Chrysler', 'https://www.speckcdjr.com/' ),
	'dodge'     => array( 'Dodge', 'https://www.speckcdjr.com/' ),
);
?>
<section class="speck-brands">
	<div class="speck-container">
		<h2><?php esc_html_e( 'Explore By Automotive Brand', 'speck-modern-theme' ); ?></h2>
	</div>

	<div class="speck-brands__marquee">
		<div class="speck-brands__track">
			<?php
			// Rendered twice so the animation can loop seamlessly.
			for ( $speck_pass = 0; $speck_pass < 2; $speck_pass++ ) :
				foreach ( $speck_brands as $speck_slug => $speck_brand ) :
					?>
					<a class="speck-brands__logo" href="<?php echo esc_url( $speck_brand[1] ); ?>" target="_blank" rel="noopener noreferrer" <?php echo 0 === $speck_pass ? '' : 'aria-hidden="true" tabindex="-1"'; ?>>
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/' . $speck_slug . '.png' ); ?>" alt="<?php echo esc_attr( $speck_brand[0] ); ?>" loading="lazy">
					</a>
					<?php
				endforeach;
			endfor;
			?>
		</div>
	</div>
</section>
