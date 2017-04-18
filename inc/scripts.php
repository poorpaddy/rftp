<?php
// Theme css & js

function base_scripts_styles() {
	$in_footer = true;
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	wp_deregister_script( 'comment-reply' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply', get_template_directory_uri() . '/js/comment-reply.js', '', '', $in_footer );
	}


	wp_enqueue_style( 'base-bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array() );
	
	wp_enqueue_style( 'base-style', get_stylesheet_uri(), array() );
	wp_enqueue_script( 'base-fontawesome-script', 'https://use.fontawesome.com/916f6a5013.js', array(), '', false );

	wp_enqueue_style( 'base-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,700', array() );	

	wp_enqueue_script( 'base-bootstrap-script', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array( 'jquery' ), '', $in_footer );

	// Loads JavaScript file with functionality specific.
	wp_enqueue_script( 'base-script', get_template_directory_uri() . '/js/jquery.main.js', array( 'jquery' ), '', $in_footer );

	

	// Implementation stylesheet.
	wp_enqueue_style( 'base-theme', get_template_directory_uri() . '/theme.css', array() );	

}
add_action( 'wp_enqueue_scripts', 'base_scripts_styles' );