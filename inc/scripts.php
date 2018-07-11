<?php
/**
 * Enqueue scripts and styles.
 */
function mdlwp_scripts() {
	$primary = get_theme_mod( 'primary_color', 'indigo' );
	$secondary = get_theme_mod( 'secondary_color', 'pink' );

	wp_enqueue_style( 'mdlwp-mdl-css', '//storage.googleapis.com/code.getmdl.io/1.3.0/material.'.$primary.'-'.$secondary.'.min.css' );

	wp_enqueue_style( 'mdlwp-mdl-icons', '//fonts.googleapis.com/icon?family=Material+Icons' );

	wp_enqueue_style( 'mdlwp-mdl-roboto', '//fonts.googleapis.com/css?family=Roboto:300,400,500,700' );

	wp_enqueue_style( 'mdlwp-style', get_template_directory_uri() . '/style.css' );

	wp_enqueue_script( 'mdlwp-mdl-js', '//storage.googleapis.com/code.getmdl.io/1.3.0/material.min.js', array(), '1.1.1', true );
}
add_action( 'wp_enqueue_scripts', 'mdlwp_scripts' );
