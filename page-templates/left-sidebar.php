<?php
/**
 * Template Name: Left sidebar
 *
 * @package WordPress
 * @subpackage AWD WPBootstrap
 */
?>
<?php get_header(); ?>

<div class="row">

	<div class="col-sm-4">

  	<?php get_sidebar(); ?>

	 </div>

	 <div class="col-sm-8">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

		  	<?php the_content(); ?>

		<?php endwhile; else: ?>

			<p><?php _e('Sorry, this page does not exist.', 'awd_wpbootstrap'); ?></p>

		<?php endif; ?>

	  </div>  

</div>

<?php get_footer(); ?>