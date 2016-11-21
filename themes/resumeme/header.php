<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <title><?php if ( is_category() ) {echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );} elseif ( is_tag() ) {echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );} elseif ( is_archive() ) {wp_title(''); echo ' Archive | '; bloginfo( 'name' );} elseif ( is_search() ) {echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );} elseif ( is_home() || is_front_page() ) {bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );}  elseif ( is_404() ) {echo 'Error 404 Not Found | '; bloginfo( 'name' );} elseif ( is_single() ) {wp_title('');} else {echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );} ?></title>
        <link rel="icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/img/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/img/icons/apple-touch-icon-precomposed.png">
        <?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/<?php echo get_option('re_color_scheme'); ?>.css" />
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/<?php echo get_option('re_fonts'); ?>.css" />
    </head>
    <body>
        <div class="fixed">
            <nav class="top-bar" data-topbar>
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
                    </li>
                    <li class="toggle-topbar menu-icon">
                        <a href="#"><span>Menu</span></a>
                    </li>
                </ul>
                <section class="top-bar-section">
                    <ul class="right">
                    	<li><a href="#about-me" class="smoothScroll">About Me</a></li>
                        <li><a href="#professional-experience" class="smoothScroll">Professional Experience</a></li>
                        <li><a href="#contact" class="smoothScroll">Contact</a></li>
                    </ul>
                </section>
            </nav>
        </div>