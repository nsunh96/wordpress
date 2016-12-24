<?php

//Enqueue Stylesheets & Scripts
    if ( ! function_exists( 'bjg_scripts' ) ) :
        function bjg_scripts() {
        	/***** Stylesheets *****/
        	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
            wp_enqueue_style( 'ie10-workaround', 'https://maxcdn.bootstrapcdn.com/css/ie10-viewport-bug-workaround.css' );
            wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
            wp_enqueue_style( 'lato-font', 'https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900" rel="stylesheet' );
            wp_enqueue_style( 'bjg-theme', get_stylesheet_directory_uri() . '/style.css' );
			/***** Scripts *****/
            // Deregister the jquery version bundled with wordpress
            wp_deregister_script( 'jquery' );
            // JQuery 2.1.3
            wp_register_script( 'jquery-1-12-4', 'https://code.jquery.com/jquery-1.12.4.min.js', array(), '1.12.4', false );
            // Index JS
            wp_register_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '3.3.7', false );
            // Lightbox
            wp_register_script( 'ie10-workaround', 'https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js', array(), '1.0.0', false );

			// Enqueue all registered scripts
			wp_enqueue_script( 'jquery-1-12-4' );
			wp_enqueue_script( 'bootstrap' );
			wp_enqueue_script( 'ie10-workaround' );
        }
        add_action( 'wp_enqueue_scripts', 'bjg_scripts' );
    endif;

    //Register Menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'bjgelectronics' ),
    ) );

    /**
     * Class Name: wp_bootstrap_navwalker
     * GitHub URI: https://github.com/twittem/wp-bootstrap-navwalker
     * Description: A custom WordPress nav walker class to implement the Bootstrap 3 navigation style in a custom theme using the WordPress built in menu manager.
     * Version: 2.0.4
     * Author: Edward McIntyre - @twittem
     * License: GPL-2.0+
     * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
     */
    class wp_bootstrap_navwalker extends Walker_Nav_Menu {
        /**
         * @see Walker::start_lvl()
         * @since 3.0.0
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param int $depth Depth of page. Used for padding.
         */
        public function start_lvl( &$output, $depth = 0, $args = array() ) {
            $indent = str_repeat( "\t", $depth );
            $output .= "\n$indent<ul role=\"menu\" class=\" dropdown-menu\">\n";
        }
        /**
         * @see Walker::start_el()
         * @since 3.0.0
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param object $item Menu item data object.
         * @param int $depth Depth of menu item. Used for padding.
         * @param int $current_page Menu item ID.
         * @param object $args
         */
        public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
            $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
            /**
             * Dividers, Headers or Disabled
             * =============================
             * Determine whether the item is a Divider, Header, Disabled or regular
             * menu item. To prevent errors we use the strcasecmp() function to so a
             * comparison that is not case sensitive. The strcasecmp() function returns
             * a 0 if the strings are equal.
             */
            if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
                $output .= $indent . '<li role="presentation" class="divider">';
            } else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
                $output .= $indent . '<li role="presentation" class="divider">';
            } else if ( strcasecmp( $item->attr_title, 'dropdown-header') == 0 && $depth === 1 ) {
                $output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr( $item->title );
            } else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {
                $output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';
            } else {
                $class_names = $value = '';
                $classes = empty( $item->classes ) ? array() : (array) $item->classes;
                $classes[] = 'menu-item-' . $item->ID;
                $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
                if ( $args->has_children )
                    $class_names .= ' dropdown';
                if ( in_array( 'current-menu-item', $classes ) )
                    $class_names .= ' active';
                $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
                $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
                $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';
                $output .= $indent . '<li' . $id . $value . $class_names .'>';
                $atts = array();
                $atts['title']  = ! empty( $item->title )   ? $item->title  : '';
                $atts['target'] = ! empty( $item->target )  ? $item->target : '';
                $atts['rel']    = ! empty( $item->xfn )     ? $item->xfn    : '';
                // If item has_children add atts to a.
                if ( $args->has_children && $depth === 0 ) {
                    $atts['href']           = '#';
                    $atts['data-toggle']    = 'dropdown';
                    $atts['class']          = 'dropdown-toggle';
                    $atts['aria-haspopup']  = 'true';
                } else {
                    $atts['href'] = ! empty( $item->url ) ? $item->url : '';
                }
                $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );
                $attributes = '';
                foreach ( $atts as $attr => $value ) {
                    if ( ! empty( $value ) ) {
                        $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                        $attributes .= ' ' . $attr . '="' . $value . '"';
                    }
                }
                $item_output = $args->before;
                /*
                 * Glyphicons
                 * ===========
                 * Since the the menu item is NOT a Divider or Header we check the see
                 * if there is a value in the attr_title property. If the attr_title
                 * property is NOT null we apply it as the class name for the glyphicon.
                 */
                if ( ! empty( $item->attr_title ) )
                    $item_output .= '<a'. $attributes .'><span class="glyphicon ' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';
                else
                    $item_output .= '<a'. $attributes .'>';
                $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
                $item_output .= ( $args->has_children && 0 === $depth ) ? ' <span class="caret"></span></a>' : '</a>';
                $item_output .= $args->after;

                $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
        }
        /**
         * Traverse elements to create list from elements.
         *
         * Display one element if the element doesn't have any children otherwise,
         * display the element and its children. Will only traverse up to the max
         * depth and no ignore elements under that depth.
         *
         * This method shouldn't be called directly, use the walk() method instead.
         *
         * @see Walker::start_el()
         * @since 2.5.0
         *
         * @param object $element Data object
         * @param array $children_elements List of elements to continue traversing.
         * @param int $max_depth Max depth to traverse.
         * @param int $depth Depth of current element.
         * @param array $args
         * @param string $output Passed by reference. Used to append additional content.
         * @return null Null on failure with no changes to parameters.
         */
        public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
            if ( ! $element )
                return;
            $id_field = $this->db_fields['id'];
            // Display this element.
            if ( is_object( $args[0] ) )
               $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );

            parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
        }
        /**
         * Menu Fallback
         * =============
         * If this function is assigned to the wp_nav_menu's fallback_cb variable
         * and a manu has not been assigned to the theme location in the WordPress
         * menu manager the function with display nothing to a non-logged in user,
         * and will add a link to the WordPress menu manager if logged in as an admin.
         *
         * @param array $args passed from the wp_nav_menu function.
         *
         */
        public static function fallback( $args ) {
            if ( current_user_can( 'manage_options' ) ) {
                extract( $args );
                $fb_output = null;
                if ( $container ) {
                    $fb_output = '<' . $container;
                    if ( $container_id )
                        $fb_output .= ' id="' . $container_id . '"';
                    if ( $container_class )
                        $fb_output .= ' class="' . $container_class . '"';
                    $fb_output .= '>';
                }
                $fb_output .= '<ul';
                if ( $menu_id )
                    $fb_output .= ' id="' . $menu_id . '"';
                if ( $menu_class )
                    $fb_output .= ' class="' . $menu_class . '"';
                $fb_output .= '>';
                $fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">Add a menu</a></li>';
                $fb_output .= '</ul>';
                if ( $container )
                    $fb_output .= '</' . $container . '>';
                echo $fb_output;
            }
        }
    }

    // Register sidebar
    if ( ! function_exists( 'bjg_sidebar_widgets' ) ) :
    function bjg_sidebar_widgets() {
        register_sidebar(array(
          'id' => 'sidebar-widgets',
          'name' => __( 'Sidebar widgets', 'bjgelectronics' ),
          'description' => __( 'Drag widgets to this sidebar container.', 'bjgelectronics' ),
          'before_widget' => '<div>',
          'after_widget' => '</div>',
          'before_title' => '<h4>',
          'after_title' => '</h4>',
        ));
        
        register_sidebar(array(
          'id' => 'footer-widgets',
          'name' => __( 'Footer Widgets', 'bjgelectronics' ),
          'description' => __( 'Drag widgets to this header container', 'bjgelectronics' ),
          'before_widget' => '<div class="col-xs-12 col-sm-15 widget">',
          'after_widget' => '</div>',
          'before_title' => '<h3>',
          'after_title' => '</h3>',
        ));

    }
    add_action( 'widgets_init', 'bjg_sidebar_widgets' );
    endif;

    //Remove Admin Bar
    add_filter('show_admin_bar', '__return_false');

    //Add Thumbnail Support
    add_theme_support( 'post-thumbnails' ); 

    // Enable shortcodes in widgets
    add_filter( 'widget_text', 'do_shortcode' );

    // REMOVE EMOJI ICONS
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    //Advanced Custom Fields Repeater
    add_action('acf/register_fields', 'my_register_fields');
    function my_register_fields()
    {
        include_once('library/acf-repeater/repeater.php');
    }

    include "library/advanced-custom-fields/acf.php";

    remove_action( 'wp_head', 'dns-prefetch' );

?>