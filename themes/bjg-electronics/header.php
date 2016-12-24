<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" cotent="">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ; ?>/img/favicon.ico">
    <title><?php if (function_exists('is_tag') && is_tag()) { echo 'Tag Archive for &quot;'.$tag.'&quot; - '; } elseif (is_archive()) { wp_title(''); echo ' Archive - '; } elseif (is_search()) { echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; } elseif (!(is_404()) && (is_single()) || (is_page())) { wp_title(''); echo ' - '; } elseif (is_404()) { echo 'Not Found - '; } if (is_home()) { bloginfo('name'); echo ' - '; bloginfo('description'); } else { bloginfo('name'); } ?></title>
    <?php wp_head(); ?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-lg-6">
            <div class="logo">
              <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/bjg-logo.png"></a>
            </div>
          </div>
          <div class="col-xs-12 col-lg-6">
            <div class="utilities">
              <div class="row">
                <div class="col-xs-6">
                  <div class="input-group">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                      </span>
                      <input type="text" class="form-control" placeholder="Search">
                    </div><!-- /input-group -->
                </div>
                <div class="col-xs-6">
                  <a class="btn btn-primary btn-lg" href="#" role="button">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 1,
                'container'         => 'div',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
          ?>
          <ul class="nav navbar-nav navbar-right">
            <li><a class="btn btn-primary btn-lg" href="#" role="button">Request A Quote</a></li>
          </ul>
        </div>
      </div>
    </nav>
