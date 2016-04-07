<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * 
 */

get_header(); ?>

<div class="container">
	

		<div id="primary" class="col-sm-8 content-area">
			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'page-templates/portfolio', get_post_format() );

				// End the loop.
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

<?php get_footer(); ?>