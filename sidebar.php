
<?php
/**
 * Theme: WP Bootstrap
 * 
 * The Sidebar positioned on the right. If no widgets added, display some as samples.
 *
 * @package wpbootstrap
 */
?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?>			

			<aside id="pages" class="widget widget_pages">
				<h2 class="widget-title"><?php _e( 'Site Content', 'awd_wpbootstrap' ); ?></h2>
				
            <?php wp_nav_menu(
              array(
                'theme_location' => 'sidebar-menu',
                'menu_class' => 'nav nav-pills nav-stacked' //<ul> class
                ) );?>				
			</aside>

			<aside id="tag_cloud" class="widget widget_tag_cloud">
				<h2>Recent Posts</h2>
				<ul class="nav nav-pills nav-stacked">
				<?php
					$recent_posts = wp_get_recent_posts();
					foreach( $recent_posts as $recent ){
						echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
					}
				?>
				</ul>
			</aside>

			<aside id="search" class="widget widget_search">
				<br />
				<?php get_search_form(); ?>
			</aside>

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
