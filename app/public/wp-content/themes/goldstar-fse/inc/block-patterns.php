<?php    
/**
 * Block Patterns
 *
 * @package Goldstar FSE
 * @since 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since 1.0
 *
 * @return void
 */
function goldstar_fse_register_block_patterns() {
	$block_pattern_categories = array(
		'goldstar-fse' => array( 'label' => esc_html__( 'Goldstar FSE Patterns', 'goldstar-fse' ) ),
		'pages'    => array( 'label' => esc_html__( 'Pages', 'goldstar-fse' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since 1.0
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'goldstar_fse_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(		
		'header-default',
		'header-banner',
		'section1',
		'section2',
		'section3',	
		'hidden-404',
		'sidebar',		
		'footer-default',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'goldstar_fse_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_parent_theme_file_path( '/inc/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'goldstar-fse/' . $block_pattern,
			require $pattern_file
		); // register_block_pattern( string $pattern_name, array $pattern_properties )
	}
}
add_action( 'init', 'goldstar_fse_register_block_patterns', 9 );