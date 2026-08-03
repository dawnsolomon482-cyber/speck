<?php
/**
 * The header for Speck Modern Theme
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="speck-header" role="banner">
	<div class="speck-container speck-header__inner">

		<div class="speck-header__logo">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="speck-header__site-name">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
				</a>
			<?php endif; ?>
		</div>

		<button class="speck-nav-toggle" id="speckNavToggle" aria-expanded="false" aria-controls="speckPrimaryNav">
			<span class="screen-reader-text"><?php esc_html_e( 'Toggle menu', 'speck-modern-theme' ); ?></span>
			<span class="speck-nav-toggle__bar"></span>
			<span class="speck-nav-toggle__bar"></span>
			<span class="speck-nav-toggle__bar"></span>
		</button>

		<nav class="speck-primary-nav" id="speckPrimaryNav" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'speck-modern-theme' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'speck-menu',
					'fallback_cb'    => 'speck_default_primary_menu',
				)
			);
			?>
		</nav>

	</div>
</header>

<?php
/**
 * Fallback menu matching the live speckdealerships.com navigation, including
 * its dropdown sub-menus (used only if no menu has been assigned yet under
 * Appearance > Menus). Every link points to a real, working destination:
 * brand-specific items go straight to that brand's Speck dealership site;
 * everything else goes to the matching internal page or section.
 */
function speck_default_primary_menu() {
	$chevy    = 'https://www.speckchevyprosser.com/';
	$nissan   = 'https://www.specknissan.com/';
	$hyundai  = 'https://www.speckhyundai.com/';
	$buickgmc = 'https://www.speckbuickgmc.com/';
	$cdjr     = 'https://www.speckcdjr.com/';
	$ford     = 'https://www.speckford.com/';

	// Work Trucks Solutions portal links, matching the live site's exact filters.
	$wts_new       = 'https://speckdealerships.worktrucksolutions.com/?filters=Chassis.Condition:New&utm_source=retailsite&utm_medium=referral&utm_campaign=mainnav&utm_term=worktrucks';
	$wts_used      = 'https://speckdealerships.worktrucksolutions.com/?filters=Chassis.Condition:Used&utm_source=retailsite&utm_medium=referral&utm_campaign=mainnav&utm_term=worktrucks';
	$wts_chevrolet = 'https://speckdealerships.worktrucksolutions.com/?filters=Chassis.Make:Chevrolet&utm_source=retailsite&utm_medium=referral&utm_campaign=mainnav&utm_term=worktrucks';
	$wts_ram       = 'https://speckdealerships.worktrucksolutions.com/?filters=Chassis.Make:Ram&utm_source=retailsite&utm_medium=referral&utm_campaign=mainnav&utm_term=worktrucks';

	// Cross-brand searches (not tied to one dealer) go to the "Our Dealerships"
	// section, since inventory itself lives on each dealership's own site.
	$all_dealers = home_url( '/' ) . '#our-dealerships';

	$menu = array(
		'Home'          => array( 'url' => home_url( '/' ) ),
		'New Vehicles'  => array(
			'url'      => home_url( '/new-vehicles/' ),
			'children' => array(
				'Search All New Inventory'    => $all_dealers,
				'Search New Chevrolet Inventory' => $chevy,
				'Search New Ford Inventory'      => $ford,
				'Search New GMC Inventory'       => $buickgmc,
				'Search New Buick Inventory'     => $buickgmc,
				'Search New Hyundai Inventory'   => $hyundai,
				'Search New Nissan Inventory'    => $nissan,
				'Search New Ram Inventory'       => $cdjr,
				'Search New Jeep Inventory'      => $cdjr,
				'Search New Chrysler Inventory'  => $cdjr,
				'Search New Dodge Inventory'     => $cdjr,
				'New Work Trucks'             => $wts_new,
				'Payment Calculator'          => home_url( '/finance/' ),
			),
		),
		'Used Vehicles' => array(
			'url'      => home_url( '/used-vehicles/' ),
			'children' => array(
				'Search All Used Inventory'          => $all_dealers,
				'Search Certified Pre-Owned Vehicles' => $all_dealers,
				'Search Used Vehicles Under 20k'      => $all_dealers,
				'Search CarFax 1 Owner Used Vehicles' => $all_dealers,
				'Search Used Trucks'                  => $all_dealers,
				'Search Used SUVs'                     => $all_dealers,
				'Search Used Cars'                     => $all_dealers,
				'Search Used Vans'                      => $all_dealers,
				'Used Work Trucks'                      => $wts_used,
				'Shop Used Vehicles by Price'           => $all_dealers,
			),
		),
		'Work Trucks'   => array(
			'url'      => home_url( '/work-trucks/' ),
			'children' => array(
				'Work Trucks'            => $wts_new,
				'New Work Trucks'        => $wts_new,
				'Used Work Trucks'       => $wts_used,
				'Chevrolet Work Trucks'  => $wts_chevrolet,
				'Ram Work Trucks'        => $wts_ram,
			),
		),
		'Specials'      => array(
			'url'      => home_url( '/specials/' ),
			'children' => array(
				'New Vehicle Specials'    => home_url( '/specials/' ),
				'All Used Vehicle Specials' => home_url( '/specials/' ),
				'New Truck Specials'      => home_url( '/specials/' ),
				'New SUV Specials'        => home_url( '/specials/' ),
			),
		),
		'Finance'       => array(
			'url'      => home_url( '/finance/' ),
			'children' => array(
				'Finance'                => home_url( '/finance/' ),
				'Sell Your Car'          => home_url( '/finance/' ),
				'Car Loan Credit Score'  => home_url( '/finance/' ),
			),
		),
		'Service'       => array( 'url' => 'https://www.speckdealerships.com/service' ),
		'Parts'         => array( 'url' => home_url( '/parts/' ) ),
		'About Us'      => array(
			'url'      => home_url( '/about-us/' ),
			'children' => array(
				'Our Locations'                  => $all_dealers,
				'About Speck Dealerships'        => home_url( '/about-us/' ),
				'Dealership Blog'                => home_url( '/about-us/' ),
				'Supporting Our Community'        => home_url( '/about-us/' ),
				'Drive For A Cure Event'          => home_url( '/about-us/' ),
				'Personas Que Habla Español'      => home_url( '/about-us/' ),
			),
		),
	);

	echo '<ul class="speck-menu">';
	foreach ( $menu as $label => $item ) {
		$has_children = ! empty( $item['children'] );
		echo '<li class="menu-item' . ( $has_children ? ' menu-item-has-children' : '' ) . '">';
		echo '<a href="' . esc_url( $item['url'] ) . '">' . esc_html( $label ) . '</a>';
		if ( $has_children ) {
			echo '<ul class="sub-menu">';
			foreach ( $item['children'] as $child_label => $child_url ) {
				echo '<li class="menu-item"><a href="' . esc_url( $child_url ) . '">' . esc_html( $child_label ) . '</a></li>';
			}
			echo '</ul>';
		}
		echo '</li>';
	}
	echo '</ul>';
}
?>
