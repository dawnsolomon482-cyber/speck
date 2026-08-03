<?php
/**
 * Speck Modern Theme functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'SPECK_THEME_VERSION', '1.0.0' );

/**
 * Theme setup.
 */
function speck_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 280,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	add_theme_support( 'align-wide' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'automatic-feed-links' );

	// Elementor compatibility.
	add_theme_support( 'elementor' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'speck-modern-theme' ),
			'footer'  => __( 'Footer Menu', 'speck-modern-theme' ),
		)
	);
}
add_action( 'after_setup_theme', 'speck_theme_setup' );

/**
 * Enqueue styles and scripts.
 */
function speck_enqueue_assets() {
	wp_enqueue_style( 'speck-style', get_stylesheet_uri(), array(), SPECK_THEME_VERSION );
	wp_enqueue_style( 'speck-main', get_template_directory_uri() . '/assets/css/main.css', array( 'speck-style' ), SPECK_THEME_VERSION );
	wp_enqueue_script( 'speck-main', get_template_directory_uri() . '/assets/js/main.js', array(), SPECK_THEME_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'speck_enqueue_assets' );

/**
 * Customizer: lets you replace the hero background photo from
 * WP Admin > Appearance > Customize > Speck Backgrounds, instead
 * of editing theme files. Falls back to the bundled sample image.
 */
function speck_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'speck_backgrounds',
		array(
			'title'    => __( 'Speck Backgrounds', 'speck-modern-theme' ),
			'priority' => 30,
		)
	);

	$images = array(
		'speck_hero_bg' => __( 'Hero Background (Shop By Vehicle)', 'speck-modern-theme' ),
	);

	foreach ( $images as $setting => $label ) {
		$wp_customize->add_setting(
			$setting,
			array(
				'default'           => '',
				'sanitize_callback' => 'esc_url_raw',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				$setting,
				array(
					'label'   => $label,
					'section' => 'speck_backgrounds',
				)
			)
		);
	}
}
add_action( 'customize_register', 'speck_customize_register' );

/**
 * Returns the URL for a Customizer-managed background image, falling back
 * to the theme's bundled sample photo when nothing has been uploaded yet.
 */
function speck_background_image( $setting, $fallback_filename ) {
	$custom = get_theme_mod( $setting, '' );
	if ( ! empty( $custom ) ) {
		return $custom;
	}
	return get_template_directory_uri() . '/assets/images/' . $fallback_filename;
}

/**
 * Homepage sections as shortcodes, so each one can be dragged individually
 * into an Elementor Shortcode widget and reordered/mixed with other
 * Elementor content: [speck_hero] [speck_brands] [speck_dealerships]
 * [speck_specials] [speck_financing] [speck_service] [speck_about].
 */
function speck_register_section_shortcodes() {
	$sections = array( 'hero', 'brands', 'dealerships', 'specials', 'financing', 'service', 'about' );
	foreach ( $sections as $section ) {
		add_shortcode(
			'speck_' . $section,
			function () use ( $section ) {
				ob_start();
				get_template_part( 'template-parts/sections/' . $section );
				return ob_get_clean();
			}
		);
	}
}
add_action( 'init', 'speck_register_section_shortcodes' );

/**
 * Elementor: mark theme location templates as full-width where relevant.
 */
function speck_elementor_locations( $elementor_theme_manager ) {
	// Intentionally left to Elementor defaults; header/footer remain theme-controlled
	// (Elementor Pro Theme Builder not required for this build).
}
add_action( 'elementor/theme/register_locations', 'speck_elementor_locations' );
