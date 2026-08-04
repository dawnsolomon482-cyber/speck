<?php
/**
 * Section: Hero ("Shop By Vehicle" search).
 * Also available as the [speck_hero] shortcode for Elementor's Shortcode widget.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<section class="speck-hero" style="background-image: linear-gradient(180deg, rgba(0,0,0,0.5), rgba(0,0,0,0.65)), url('<?php echo esc_url( speck_background_image( 'speck_hero_bg', 'hero-bg.jpg' ) ); ?>');">
	<div class="speck-container speck-hero__inner">
		<h1><?php esc_html_e( 'Shop By Vehicle', 'speck-modern-theme' ); ?></h1>
		<p class="speck-hero__count"><?php esc_html_e( 'Vehicles available across every Speck dealership', 'speck-modern-theme' ); ?></p>

		<div class="speck-search-tabs" role="tablist">
			<button type="button" class="speck-search-tabs__tab" role="tab" data-speck-tab="vehicle" aria-selected="false">
				<svg viewBox="0 0 24 24" fill="none"><path d="M4 7h16M4 12h10M4 17h13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="17" cy="7" r="2" fill="currentColor"/><circle cx="12" cy="17" r="2" fill="currentColor"/></svg>
				<?php esc_html_e( 'Vehicle', 'speck-modern-theme' ); ?>
			</button>
			<button type="button" class="speck-search-tabs__tab is-active" role="tab" data-speck-tab="keyword" aria-selected="true">
				<svg viewBox="0 0 24 24" fill="none"><circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="2"/><path d="m20 20-3.5-3.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
				<?php esc_html_e( 'Keyword', 'speck-modern-theme' ); ?>
			</button>
			<button type="button" class="speck-search-tabs__tab" role="tab" data-speck-tab="budget" aria-selected="false">
				<svg viewBox="0 0 24 24" fill="none"><rect x="2" y="6" width="16" height="12" rx="2" stroke="currentColor" stroke-width="2"/><circle cx="10" cy="12" r="2.5" stroke="currentColor" stroke-width="2"/><path d="M18 9v6" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
				<?php esc_html_e( 'Budget', 'speck-modern-theme' ); ?>
			</button>
		</div>

		<form class="speck-search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<div class="speck-search-fields" data-speck-fields="vehicle">
				<select name="condition">
					<option value=""><?php esc_html_e( 'All Vehicles', 'speck-modern-theme' ); ?></option>
					<option value="new"><?php esc_html_e( 'New', 'speck-modern-theme' ); ?></option>
					<option value="used"><?php esc_html_e( 'Used', 'speck-modern-theme' ); ?></option>
					<option value="certified"><?php esc_html_e( 'Certified Pre-Owned', 'speck-modern-theme' ); ?></option>
				</select>
				<input type="text" name="make" placeholder="<?php esc_attr_e( 'Make', 'speck-modern-theme' ); ?>">
				<input type="text" name="model" placeholder="<?php esc_attr_e( 'Model', 'speck-modern-theme' ); ?>">
			</div>
			<div class="speck-search-fields is-active" data-speck-fields="keyword">
				<input type="text" name="s" placeholder="<?php esc_attr_e( 'Search by Make, Stock #, etc.', 'speck-modern-theme' ); ?>">
			</div>
			<div class="speck-search-fields" data-speck-fields="budget">
				<input type="number" name="price_min" placeholder="<?php esc_attr_e( 'Min Price', 'speck-modern-theme' ); ?>">
				<input type="number" name="price_max" placeholder="<?php esc_attr_e( 'Max Price', 'speck-modern-theme' ); ?>">
			</div>
			<button type="submit" class="speck-btn speck-btn--primary"><?php esc_html_e( 'Search', 'speck-modern-theme' ); ?></button>
		</form>

		<div class="speck-hero__ctas">
			<a class="speck-btn speck-btn--block" href="#our-dealerships"><?php esc_html_e( 'Locations', 'speck-modern-theme' ); ?></a>
			<a class="speck-btn speck-btn--block" href="<?php echo esc_url( home_url( '/specials/' ) ); ?>"><?php esc_html_e( 'New Specials', 'speck-modern-theme' ); ?></a>
			<a class="speck-btn speck-btn--block" href="https://www.speckdealerships.com/service"><?php esc_html_e( 'Service', 'speck-modern-theme' ); ?></a>
		</div>
	</div>
</section>
