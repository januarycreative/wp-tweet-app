<?php

// Register Primary Menu
register_nav_menus( array('primary' => __( 'Primary Navigation' ),) );

// Addiung Post-Thumbnail Support (Featured Image)
add_theme_support('post-thumbnails');

// Allow HTML5 in Comments
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form' ) );

// Enqueue Google jQuery Library instead of WordPress default
// 1.10.2 - Latest jQuery as of October 2013
function modify_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.10.2');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'modify_jquery');

//Convert discovered urls to proper clickable state
add_filter( 'the_content', 'make_clickable' );
add_filter( 'the_title', 'make_clickable' );

?>