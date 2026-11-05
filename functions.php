<?php

function pillarlegalmarketing_setup() {
	load_theme_textdomain( 'pillarlegalmarketing', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'pillarlegalmarketing' ),
	) );
	add_theme_support( 'custom-logo', array(
    'height'      => 36,
    'width'       => 180,
    'flex-height' => true,
    'flex-width'  => true,
  ) );
}
add_action( 'after_setup_theme', 'pillarlegalmarketing_setup' );

function pillarlegalmarketing_enqueue_scripts() {
	wp_enqueue_style( 'pillarlegalmarketing-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'pillarlegalmarketing-navigation', get_template_directory_uri() . '/js/navigation.js', array(), wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'pillarlegalmarketing_enqueue_scripts' );

/**
 * Outputs menu items as bare <a> tags (no <ul>/<li>) to match the header markup.
 * Pass 'link_class' and optional 'link_attrs' (array) in the wp_nav_menu() args.
 */
class Pillarlegalmarketing_Flat_Nav_Walker extends Walker_Nav_Menu {
	public function start_lvl( &$output, $depth = 0, $args = null ) {}
	public function end_lvl( &$output, $depth = 0, $args = null ) {}
	public function end_el( &$output, $data_object, $depth = 0, $args = null ) {}

	public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		$item = $data_object;

		$atts = array(
			'class'        => isset( $args->link_class ) ? $args->link_class : '',
			'href'         => ! empty( $item->url ) ? $item->url : '',
			'title'        => ! empty( $item->attr_title ) ? $item->attr_title : '',
			'target'       => ! empty( $item->target ) ? $item->target : '',
			'rel'          => ! empty( $item->xfn ) ? $item->xfn : '',
			'aria-current' => $item->current ? 'page' : '',
		);
		if ( '_blank' === $atts['target'] && empty( $atts['rel'] ) ) {
			$atts['rel'] = 'noopener';
		}

		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( '' === $value || null === $value ) {
				continue;
			}
			$value       = 'href' === $attr ? esc_url( $value ) : esc_attr( $value );
			$attributes .= ' ' . $attr . '="' . $value . '"';
		}
		if ( ! empty( $args->link_attrs ) && is_array( $args->link_attrs ) ) {
			foreach ( $args->link_attrs as $attr => $value ) {
				$attributes .= ' ' . esc_attr( $attr ) . ( '' === $value ? '' : '="' . esc_attr( $value ) . '"' );
			}
		}

		$title   = apply_filters( 'nav_menu_item_title', apply_filters( 'the_title', $item->title, $item->ID ), $item, $args, $depth );
		$output .= '<a' . $attributes . '>' . $title . "</a>\n";
	}
}

add_filter( 'use_block_editor_for_post_type', '__return_false' );

/**
 * Gravity Forms: give the contact form's submit button the theme's button classes.
 */
function pillarlegalmarketing_gf_submit_button( $button, $form ) {
	return str_replace( "class='gform_button button'", "class='gform_button button btn btn-primary'", $button );
}
add_filter( 'gform_submit_button_1', 'pillarlegalmarketing_gf_submit_button', 10, 2 );

/**
 * Adds an id to every <h2> in post content (if it doesn't have one) and
 * returns the content plus a table of contents built from those headings.
 *
 * @param string $content Filtered post content (after 'the_content').
 * @return array { 'content' => string, 'toc' => array of [ 'id' => string, 'title' => string ] }
 */
function pillarlegalmarketing_content_with_toc( $content ) {
	$toc  = array();
	$used = array();

	$content = preg_replace_callback(
		'/<h2([^>]*)>(.*?)<\/h2>/is',
		function ( $m ) use ( &$toc, &$used ) {
			$attrs = $m[1];
			$title = trim( wp_strip_all_tags( $m[2] ) );

			if ( preg_match( '/\sid=["\']([^"\']+)["\']/i', $attrs, $id_match ) ) {
				$id = $id_match[1];
			} else {
				$id   = sanitize_title( $title );
				$base = $id;
				$i    = 2;
				while ( '' === $id || isset( $used[ $id ] ) ) {
					$id = ( $base ? $base : 'section' ) . '-' . $i++;
				}
				$attrs .= ' id="' . esc_attr( $id ) . '"';
			}
			$used[ $id ] = true;

			if ( '' !== $title ) {
				$toc[] = array( 'id' => $id, 'title' => $title );
			}
			return '<h2' . $attrs . '>' . $m[2] . '</h2>';
		},
		$content
	);

	return array( 'content' => $content, 'toc' => $toc );
}

/**
 * Estimated reading time in minutes (~225 words per minute).
 */
function pillarlegalmarketing_reading_time( $post = null ) {
	$words = str_word_count( wp_strip_all_tags( get_post_field( 'post_content', $post ) ) );
	return max( 1, (int) ceil( $words / 225 ) );
}
