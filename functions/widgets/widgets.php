<?php
	// Sidebar Widget
	if ( ! function_exists( 'custom_widgets' ) ) :
	function custom_widgets() {
		register_sidebar(array(
			'id' => 'sidebar-widgets',
			'name' => __( 'Sidebar Widgets' ),
			'description' => __( 'Drag widgets to this sidebar container.' ),
			'before_widget' => '<div class="yourclass">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		));
		register_sidebar(array(
			'id' => 'footer-widgets',
			'name' => __( 'Footer Widgets' ),
			'description' => __( 'Drag widgets to this footer container.' ),
			'before_widget' => '<div class="yourclass">',
			'after_widget' => '</div>',
			'before_title' => '<h5>',
			'after_title' => '</h5>',
		));
	}
	add_action( 'widgets_init', 'custom_widgets' );
	endif;
?>