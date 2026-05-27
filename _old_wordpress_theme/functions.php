<?php
/**
 * Kiwa Personal Media — functions.php
 * Block theme: minimal PHP. Design lives in theme.json and assets/.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enqueue theme assets.
 */
function kiwa_enqueue_assets(): void {
	$ver = wp_get_theme()->get( 'Version' );

	wp_enqueue_style(
		'kiwa-custom',
		get_template_directory_uri() . '/assets/css/custom.css',
		[],
		$ver
	);

	wp_enqueue_script(
		'kiwa-main',
		get_template_directory_uri() . '/assets/js/main.js',
		[],
		$ver,
		[ 'strategy' => 'defer', 'in_footer' => true ]
	);
}
add_action( 'wp_enqueue_scripts', 'kiwa_enqueue_assets' );

/**
 * Editor styles.
 */
function kiwa_editor_styles(): void {
	add_editor_style( 'assets/css/custom.css' );
}
add_action( 'after_setup_theme', 'kiwa_editor_styles' );

/**
 * Register block pattern category.
 */
function kiwa_register_pattern_categories(): void {
	register_block_pattern_category(
		'kiwa-sections',
		[ 'label' => __( 'Kiwa Sections', 'kiwa-personal-media' ) ]
	);
}
add_action( 'init', 'kiwa_register_pattern_categories' );

/**
 * Add theme supports.
 */
function kiwa_setup(): void {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
}
add_action( 'after_setup_theme', 'kiwa_setup' );
