<?php get_header(); ?>
        <div class="row">
            <div class="large-9 columns" role="content">
            	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                    <h1><?php the_title(); ?></h1>
                    <a href="<?php echo wp_get_attachment_url($post->ID); ?>">
						<?php
                        	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
								if ($image) : ?>
                                <img src="<?php echo $image[0]; ?>" alt="" />
								<?php endif; ?>
                    </a>
                </article>
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div><!-- End .row -->
<?php get_footer(); ?>