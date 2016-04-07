<?php
/**
 * Theme: AWD WPBootstrap
 * 
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 * 
 * @package AWD wpbootstrap
 */

		/* If footer "sidebar" has widgets, then display them */
		if(is_active_sidebar('sidebar-2')){
		?>
			<div class="sidebar-footer clearfix">
				<div class="container">
					<div id="footer-sidebar2">
						<?php						
							dynamic_sidebar('sidebar-2');
							}
						?>
					</div>
				</div><!-- .container -->
			</div><!-- .sidebar-footer -->		

      <footer class="container-fluid text-center">
      	
      	<nav>
      		<a href="<?php echo home_url(); ?>/cookie-policy/">Privacy Policy</a>
		</nav>

      	<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

      </footer>

    <?php wp_footer(); ?>

  </body>

</html>

