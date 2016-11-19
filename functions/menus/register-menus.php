<?php
	//Register Menus
	register_nav_menus(array(
		'main-menu' => 'Main Menu',
	));
	//Main Menu
	if ( ! function_exists( 'theme_main_menu' ) ) {
		function theme_main_menu() {
			wp_nav_menu(array( 
				'container' => false,
				'container_class' => '',
				'menu' => '',
				'menu_id' => 'your-id',
				'menu_class' => 'your-class',
				'theme_location' => 'main-menu',
				'before' => '',
				'after' => '',
				'link_before' => '',
				'link_after' => '',
				'fallback_cb' => false,
			));
		}
	}
?>