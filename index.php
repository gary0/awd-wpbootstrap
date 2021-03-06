<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * 
 */

get_header(); ?>

<div class="container">
	<div class="row">
		<div id="primary" class="col-sm-8 content-area">
			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<?php if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php endif; ?>

				<?php
				// Start the loop.
				while ( have_posts() ) : the_post(); 
					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'page-templates/content', get_post_format() );
					
				endwhile;

				// Previous/next page navigation.
				the_posts_pagination( array(
					'prev_text'          => __( 'Previous page', 'awd_wpbootstrap' ),
					'next_text'          => __( 'Next page', 'awd_wpbootstrap' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'awd_wpbootstrap' ) . ' </span>',
				) );	

			// If no content, include the "No posts found" template.
			else: ?>
			  <p><?php _e('Sorry, this page does not exist.', 'awd_wpbootstrap' ); ?></p>
			<?php endif; 
			?>
			</main><!-- .site-main -->
		</div><!-- .content-area -->

		<div class="col-sm-4">
			<!-- The column width is set in sidebar.php -->
			<?php get_sidebar(); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>