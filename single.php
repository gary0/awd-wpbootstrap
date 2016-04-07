
<?php get_header(); ?>

<div class="container">

	<div class="row">

	  <div class="col-sm-8">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>

			<p><em><?php the_time('l, F jS, Y'); ?></em></p>

			<?php the_content(); ?>
			<?php the_tags(); ?>
			<?php 
				if ( is_singular( 'attachment' ) ) {
					// Parent post navigation.
					the_post_navigation( array(
						'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'awd_wpbootstrap' ),
				) );
				} elseif ( is_singular( 'post' ) ) {
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

