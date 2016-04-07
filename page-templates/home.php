<?php get_header(); ?>
<div class="container">
  <div class="row">
    <div class="col-sm-8">

  	<h1>News</h1>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p><em><?php the_time('l, F jS, Y'); ?></em></p>
      <hr>

  	<?php endwhile; else: ?>
  		<p><?php _e('Sorry, there are no posts.', 'awd_wpbootstrap'); ?></p>
  	<?php endif; ?>

    </div>
    
    <div class="col-sm-4">        
        <?php get_sidebar(); ?>
    </div>
    
  </div>
</div>
<?php get_footer(); ?>