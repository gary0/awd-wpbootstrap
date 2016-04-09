<?php
/**
 * The template part for displaying portfolio content
 *
 * @package WordPress
 * @subpackage AWD WPBootstrap
 */
?>

<article class="row well" id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="portfolio-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->
	<div class="row">
		<div class="col-sm-6">
			<?php
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
			  the_post_thumbnail();
			}
			?>
		</div> 

		<div class="col-sm-6 entry-content">
			<?php
				/* translators: %s: Name of current post */
				the_excerpt( sprintf(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'awd_wpbootstrap' ),
					get_the_title()
				) );

				wp_link_pages( array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'awd_wpbootstrap' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'awd_wpbootstrap' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				) );
			?>
			<div class="text-center">
				<a href="<?php echo get_permalink( $post->ID ); ?>" class="btn btn-info" role="button">Read More...</a>
			</div>
		</div><!-- .entry-content -->
	</div>
	<hr>

	
</article><!-- #post-## -->
