<?php get_header(); ?>
        <div class="row">
            <div class="large-9 columns" role="content">
            	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </article>
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div><!-- End .row -->
<?php get_footer(); ?>