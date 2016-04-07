<?php
/**
 * Template Name: Full width
 *
 * @package WordPress
 * @subpackage AWD WPBootstrap
 */
?>
<?php get_header(); ?>

<div class="row">	

	 <div class="col-xs-12">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

		  	<?php the_content(); ?>

		<?php endwhile; else: ?>

			<p><?php _e('Sorry, this page does not exist.', 'awd_wpbootstrap'); ?></p>

		<?php endif; ?>

	  </div>  

</div>

<?php get_footer(); ?>