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
}
add_action( 'wp_enqueue_scripts', 'pillarlegalmarketing_enqueue_scripts' );

function pillarlegalmarketing_nav_link_class( $atts, $item, $args ) {
	if ( 'primary' === $args->theme_location ) {
		$atts['class'] = isset( $atts['class'] ) ? $atts['class'] . ' site-nav__link' : 'site-nav__link';
	}
	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'pillarlegalmarketing_nav_link_class', 10, 3 );

add_filter( 'use_block_editor_for_post_type', '__return_false' );
