<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage AWD WPBootstrap
 */
?>
<?php get_header(); ?>

<div class="container">
	<div class="row">

	  <div class="col-sm-8">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

		  	<?php 
		  	the_content(); 
		  	wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'awd_wpbootstrap' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'awd_wpbootstrap' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		  	?>
		  	<?php the_tags(); ?>

			<?php endwhile; else: ?>

			<p><?php _e('Sorry, this page does not exist.', 'awd_wpbootstrap' ); ?></p>
			<?php endif; ?>

	  </div>

	  <div class="col-sm-4">
	  	<!-- The column width is set in sidebar.php -->
	  	<?php get_sidebar(); ?>
	  </div>

	</div>
</div>

<?php get_footer(); ?>