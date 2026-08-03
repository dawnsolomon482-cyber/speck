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
			$dealerships = array(
				array(
					'name'    => 'Speck Chevrolet of Prosser',
					'address' => '314 Sixth St, Prosser, WA 99350',
					'phone'   => '(509) 786-2666',
					'url'     => 'https://www.speckchevyprosser.com/',
					'brands'  => array( 'chevrolet' ),
				),
				array(
					'name'    => 'Speck Nissan of Sunnyside',
					'address' => '61 E Allen Rd, Sunnyside, WA 98944',
					'phone'   => '(509) 837-5501',
					'url'     => 'https://www.specknissan.com/',
					'brands'  => array( 'nissan' ),
				),
				array(
					'name'    => 'Speck Hyundai of Tri-Cities',
					'address' => '2910 W Clearwater Ave, Kennewick, WA 99336',
					'phone'   => '(509) 542-0234',
					'url'     => 'https://www.speckhyundai.com/',
					'brands'  => array( 'hyundai' ),
				),
				array(
					'name'    => 'Speck Buick GMC of Tri-Cities',
					'address' => '9610 Sandifur Pkwy, Pasco, WA 99301',
					'phone'   => '(509) 783-9399',
					'url'     => 'https://www.speckbuickgmc.com/',
					'brands'  => array( 'buick', 'gmc' ),
				),
				array(
					'name'    => 'Speck Chrysler Jeep Dodge Ram',
					'address' => '125 E Allen Rd, Sunnyside, WA 98944',
					'phone'   => '(509) 882-5005',
					'url'     => 'https://www.speckcdjr.com/',
					'brands'  => array( 'chrysler', 'jeep', 'dodge', 'ram' ),
				),
				array(
					'name'    => 'Speck Ford of Prosser',
					'address' => '630 Wine Country Rd, Prosser, WA 99350',
					'phone'   => '(509) 786-2155',
					'url'     => 'https://www.speckford.com/',
					'brands'  => array( 'ford' ),
				),
				array(
					'name'    => 'C. Speck Motors',
					'address' => '61 E Allen Rd, Sunnyside, WA 98944',
					'phone'   => '(509) 837-5501',
					'url'     => 'https://www.cspeckmotors.com/',
					'brands'  => array(),
				),
			);
			foreach ( $dealerships as $d ) :
				$tel = preg_replace( '/[^0-9+]/', '', $d['phone'] );
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
					<p class="speck-dealership-card__address"><?php echo esc_html( $d['address'] ); ?></p>
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
