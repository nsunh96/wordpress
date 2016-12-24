<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
    <header id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('<?php the_field("slider_1_image"); ?>');"></div>
                <div class="carousel-caption">
                    <h2><?php the_field('slider_1_heading'); ?></h2>
                    <p class="text-center"><?php the_field('slider_1_content'); ?></p>
                    <p class="text-center"><a class="btn btn-primary btn-lg" href="<?php the_field('slider_1_link'); ?>" role="button">Learn More</a></p>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php the_field("slider_2_image"); ?>');"></div>
                <div class="carousel-caption">
                    <h2><?php the_field('slider_2_heading'); ?></h2>
                    <p class="text-center"><?php the_field('slider_2_content'); ?></p>
                    <p class="text-center"><a class="btn btn-primary btn-lg" href="<?php the_field('slider_2_link'); ?>" role="button">Learn More</a></p>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('<?php the_field("slider_3_image"); ?>');"></div>
                <div class="carousel-caption">
                    <h2><?php the_field('slider_3_heading'); ?></h2>
                    <p class="text-center"><?php the_field('slider_3_content'); ?></p>
                    <p class="text-center"><a class="btn btn-primary btn-lg" href="<?php the_field('slider_3_link'); ?>" role="button">Learn More</a></p>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="fa fa-chevron-left fa-3x" aria-hidden="true"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="fa fa-chevron-right fa-3x" aria-hidden="true"></i>
        </a>
    </header>
    <div class="banner">
      <div class="container">
        <div class="row">  
            <div class="col-xs-12 col-sm-8">
              <h2 class="text-center">Ut enim ad minim veniam, quis nostrud exercitation ullamco.</h2>
            </div>         
            <div class="col-xs-12 col-sm-4">
              <p class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">Cable Builder <i class="fa fa-wrench" aria-hidden="true"></i></a></p>
            </div>
        </div>
      </div>
    </div>
    <div class="weather">
      <div class="container">
        <div class="row">  
            <div class="col-xs-12 col-sm-8">
              <p><?php the_field('weather_content'); ?></p>
            </div>         
            <div class="col-xs-12 col-sm-4">
              <div class="card">
                <p><span><?php the_field('weather_day'); ?> <?php the_field('weather_date'); ?></span> <em><?php the_field('weather_location'); ?></em></p>
                <div class="stats">
                  <ul>
                    <li><img src="<?php echo get_stylesheet_directory_uri() ; ?>/img/cloud-icon.png"></li>
                    <li class="temp"><?php the_field('weather_high_temp'); ?>&deg; / <?php the_field('weather_low_temp'); ?>&deg;</li>
                    <li class="forecast"><?php the_field('weather_forecast'); ?></li>
                  </ul>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="product1">
      <div class="container">
        <div class="row">  
            <div class="col-xs-12 col-sm-4 text-center">
              <img src="<?php the_field('product_1_image'); ?>">
            </div>         
            <div class="col-xs-12 col-sm-8">
              <h3 class="text-center">Feature Product <span>One</span></h3>
              <p class="text-center"><?php the_field('product_1_content'); ?></p>
              <p class="text-center"><a class="btn btn-primary btn-lg" href="<?php the_field('product_1_link'); ?>" role="button">Learn More</a></p>
            </div>
        </div>
      </div>
    </div>
    <div class="product2">
      <div class="container">
        <div class="row">  
            <div class="col-xs-12 col-sm-8">
              <h3 class="text-center">Feature Product <span>Two</span></h3>
              <p class="text-center"><?php the_field('product_2_content'); ?></p>
              <p class="text-center"><a class="btn btn-primary btn-lg" href="<?php the_field('product_2_link'); ?>" role="button">Learn More</a></p>
            </div>         
            <div class="col-xs-12 col-sm-4 text-center">
              <img src="<?php the_field('product_2_image'); ?>">
            </div>
        </div>
      </div>
    </div>
    <div class="product3">
      <div class="container">
        <div class="row">  
            <div class="col-xs-12 col-sm-4 text-center">
              <img src="<?php the_field('product_3_image'); ?>">
            </div>         
            <div class="col-xs-12 col-sm-8">
              <h3 class="text-center">Feature Product <span>Three</span></h3>
              <p class="text-center"><?php the_field('product_3_content'); ?></p>
              <p class="text-center"><a class="btn btn-primary btn-lg" href="<?php the_field('product_3_link'); ?>" role="button">Learn More</a></p>
            </div>
        </div>
      </div>
    </div>
    <div class="excellence">
      <div class="container">
        <div class="row">  
            <div class="col-xs-12 col-sm-6">
              <h2><?php the_field('excellence_heading'); ?></h2>
              <p><?php the_field('excellence_content'); ?></p>
            </div>         
            <div class="col-xs-12 col-sm-6">
              <img src="<?php the_field('excellence_image'); ?>" class="img-responsive">
            </div>
        </div>
      </div>
    </div>
    <div class="certifications">
      <div class="container">
        <h2 class="text-center">Proudly Serving Our Value Customers Globally Since 1979</h2>
        <div class="row">
          <div class="col-xs-12 col-md-4 text-center">
            <img src="<?php the_field('business_certification_1_image'); ?>">
            <p><em><?php the_field('business_certification_1_content'); ?></em></p>
          </div>
          <div class="col-xs-12 col-md-4 text-center">
            <img src="<?php the_field('business_certification_2_image'); ?>">
            <p><em><?php the_field('business_certification_2_content'); ?></em></p>
          </div>
          <div class="col-xs-12 col-md-4 text-center">
            <img src="<?php the_field('business_certification_3_image'); ?>">
            <p><em><?php the_field('business_certification_3_content'); ?></em></p>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>  