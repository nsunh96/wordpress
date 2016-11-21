<?php get_header(); ?>
        <div class="row">
            <div class="large-9 columns" role="content">
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <?php  
					if ( have_posts() ) the_post(); ?>
						<h1 class="page-title">
							<?php if ( is_day() ) { ?> Archive for <?php echo get_the_date(); ?>
							<?php  } elseif ( is_month() ) { ?> Archive for <?php echo get_the_date('F Y'); ?>
							<?php  } elseif ( is_year() ) { ?> Archive for <?php echo get_the_date('Y'); ?>
							<?php  } else { ?>
							<?php  echo get_queried_object()->name; ?>
							<?php  } ?>
                        </h1>
				<?php  rewind_posts(); ?>
            	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                </article>
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div><!-- End .row -->
<?php get_footer(); ?>