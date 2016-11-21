<?php

if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {

	// Enqueue Main Stylesheet
	wp_enqueue_style( 'Foundation Stylesheet', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/css/foundation.min.css' );
		
	// Enqueue WordPress Stylesheet
	wp_enqueue_style( 'WordPress Stylesheet', get_stylesheet_directory_uri() . '/style.css' );
	
	// Enqueue Font Awesome Stylesheet
	wp_enqueue_style( 'Font Awesome Stylesheet', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css' );
	
	// Enqueue ResumeMe Stylesheet
	wp_enqueue_style( 'ResumeMe Stylesheet', get_stylesheet_directory_uri() . '/css/resumeme/resumeme.css' );

	// Deregister the jquery version bundled with wordpress
	wp_deregister_script( 'jquery' );

	// Modernizr is used for polyfills and feature detection. Must be placed in header. (Not required)
	wp_register_script( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), '2.8.3', false );

	// Fastclick removes the 300ms delay on click events in mobile environments. Must be placed in header. (Not required)
	wp_register_script( 'fastclick', get_template_directory_uri() . '/js/vendor/fastclick.js', array(), '1.0.0', false );
	
	// Smoothscroll JS
	wp_register_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll/smoothscroll.js', array(), '1.0.0', false );

	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), '2.1.0', false );

	// Foundation JS
	wp_register_script( 'foundation', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/js/foundation.min.js', array('jquery'), '5.5.1', true );

	// Enqueue all registered scripts
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'fastclick' );
	wp_enqueue_script( 'smoothscroll' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'foundation' );

	}

	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;

?>
