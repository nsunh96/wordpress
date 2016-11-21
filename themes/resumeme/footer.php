    <section class="footer">
        <footer class="row">
            <div class="large-12 columns">
                <div class="row">
                    <div class="large-6 columns">
                        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved</p>
                    </div>
                    <div class="large-6 columns">
                        <ul class="inline-list right">
                            <li><a href="#top"><i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </section>
	<?php wp_footer(); ?>
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    </body>
</html>