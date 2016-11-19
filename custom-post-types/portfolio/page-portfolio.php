<?php
/* Template Name: Portfolio */
get_header();
query_posts('post_type=portfolio&posts_per_page=9');
?>
<?php get_header(); ?>
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php
            $title= str_ireplace('"', '', trim(get_the_title()));
            $desc= str_ireplace('"', '', trim(get_the_content()));
        ?>
            <div class="entry portfolio">
                    <div class="img">
                        <a class="th" role="button" aria-label="Thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <h5><?=$title?></h5>
                    </a>
                    <?php $site= get_post_custom_values('projLink');
						if($site[0] != ""){
					?>
                    <p><a href="<?=$site[0]?>" target="_blank">Visit the Site</a></p>
                    <?php }else{ ?>
                    <p><em>Live Link Unavailable</em></p>
                    <?php } ?>
                    <p><?php print get_the_excerpt(); ?>
                    <p><a href="<?php the_permalink(); ?>">More</a></p>
            </div>
        <?php endwhile; endif; ?>>
<?php get_footer(); ?>