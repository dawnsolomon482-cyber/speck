<?php
/**
 * Section: Our Dealerships (location cards).
 * Also available as the [speck_dealerships] shortcode for Elementor's Shortcode widget.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section id="our-dealerships" class="speck-dealerships">
	<div class="speck-container">
		<h2><?php esc_html_e( 'Our Dealerships', 'speck-modern-theme' ); ?></h2>
		<div class="speck-dealership-grid">
			<?php
			foreach ( speck_get_dealerships() as $d ) :
				$tel     = preg_replace( '/[^0-9+]/', '', $d['phone'] );
				$address = $d['street'] . ', ' . $d['city'] . ', ' . $d['state'] . ' ' . $d['zip'];
				?>
				<div class="speck-dealership-card">
					<?php if ( ! empty( $d['brands'] ) ) : ?>
						<div class="speck-dealership-card__brands">
							<?php foreach ( $d['brands'] as $brand ) : ?>
								<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/brands/' . $brand . '.png' ); ?>" alt="<?php echo esc_attr( ucfirst( $brand ) ); ?>">
							<?php endforeach; ?>
						</div>
					<?php endif; ?>
					<h3><?php echo esc_html( $d['name'] ); ?></h3>
					<p class="speck-dealership-card__address"><?php echo esc_html( $address ); ?></p>
					<p class="speck-dealership-card__phone">
						<a href="tel:<?php echo esc_attr( $tel ); ?>"><?php echo esc_html( $d['phone'] ); ?></a>
					</p>
					<a class="speck-btn speck-btn--outline" href="<?php echo esc_url( $d['url'] ); ?>" target="_blank" rel="noopener noreferrer">
						<?php esc_html_e( 'Visit Website', 'speck-modern-theme' ); ?>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
