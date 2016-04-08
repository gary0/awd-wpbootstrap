
<?php get_header(); ?>

<div class="container">

	<div class="row">

	  <div class="col-sm-8">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				</header><!-- .entry-header -->

				<?php
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				  the_post_thumbnail();
				}
				?>      

				<div class="entry-content">

					<?php $custom = get_post_custom();?>
      					<div>
      						<hr>
      						<p><strong>Year Completed </strong><?php echo $custom["year_completed"][0];?></p>
      					</div>
      					<div>
      						<p><strong>Skills Used </strong><?php echo get_the_term_list($post->ID, 'Skills', '', ', ','');?></p>
      					</div>
					<?php the_content(); ?>
				</div><!-- .entry-content -->
				<hr>				
			</article><!-- #post-## -->
			

			<?php 
				if ( is_singular( 'attachment' ) ) {
					// Parent post navigation.
					the_post_navigation( array(
						'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'awd_wpbootstrap' ),
				) );
				} elseif ( is_singular( 'portfolio' ) ) {
					// Previous/next post navigation.
					the_post_navigation( array(
						'next_text' => '<button type="button" class="btn btn-info">' . '<span class="glyphicon glyphicon-arrow-left"></span>' . '<span class="meta-nav" aria-hidden="true">' . __( ' Next:', 'awd_wpbootstrap' ) . '</span> ' .
							'<span class="screen-reader-text">' . __( 'Next post:', 'awd_wpbootstrap' ) . '</span> ' .
							'<span class="post-title">%title</span>' . '</button>',
						'prev_text' => '<button type="button" class="btn btn-info">' . '<span class="glyphicon glyphicon-arrow-right"></span>' . '<span class="meta-nav" aria-hidden="true">' . __( ' Previous:', 'awd_wpbootstrap' ) . '</span> ' .
							'<span class="screen-reader-text">' . __( 'Previous post:', 'awd_wpbootstrap' ) . '</span> ' .
							'<span class="post-title">%title</span>' . '</button>',
					));
				}
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}
			?>
		  	<hr>			

		<?php endwhile; else: ?>
			<p><?php _e('Sorry, this page does not exist.', 'awd_wpbootstrap' ); ?></p>
		<?php endif; ?>

	  </div>
	  <!--  SIDEBAR -->
	  <div class="col-sm-4">        
	      <?php get_sidebar(); ?>
	  </div>

	</div>
 </div>

<?php get_footer(); ?>

