			<aside class="large-3 columns">
                <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
						<?php dynamic_sidebar( 'sidebar' ); ?>
					<?php else : ?>
						<div class="alert alert-message">
							<p><?php _e("Please activate some Widgets","wpbootstrap"); ?>.</p>
						</div>
					<?php endif; ?>
            </aside>