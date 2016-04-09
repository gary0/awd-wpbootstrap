<?php
/**
 * Template Name: Home Page 
 *
 * @package WordPress
 * @subpackage AWD WPBootstrap
 */
?>

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



<div class="row portfolio-header">
<h2>My Portfolio</h2>
This is my current Portfolio with examples and links to some of my recent work.

This website is built using WordPress and uses my own theme, which itself utilises the Twitter Bootstrap framework, to create a responsive WordPress theme with the Bootstrap features. WordPress by default creates its own classes, for example menus will have the "menu" class assigned to them on creation, but Bootstrap uses "nav-pills", amongst others.

So there is some work to be done to assign Bootstrap classes to replace the default WordPress classes, and in the near future I hope to add a tutorial to this site explaining the process, should anyone want to build their own WordPress/Bootstrap theme. The theme is a work in progress, and I am always looking to expand it whenever I learn something new.

Unfortunately I am unable to show any work that I have done with the companies that I have previously worked for.

</div>
[list-posts-portfolio]

<div class="row well">
    <h4 class="text-center">Crosby Web</h4>
    <div class="col-sm-6">
    <div><a href="http://crosbyweb.co.uk" target="_blank"><img class="img-responsive center-block" src="http://anarchywebdev.com/wp-content/uploads/2016/03/crosbyweb-300x223.jpg" alt="crosby web site" /></a></div>
    &nbsp;

    </div>
    <div class="col-sm-6">Crosby Web is a responsive website built with the Twitter Bootstrap framework. The site was...
    <!-- Trigger the modal with a button -->
    <button class="btn btn-info btn-md center-block" type="button" data-toggle="modal" data-target="#crosbywebModal">More details</button>
    <!-- Modal -->
    <div id="crosbywebModal" class="modal fade">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal">×</button>
                <h4 class="modal-title">Crosby Web</h4>
                </div>

                <div class="modal-body">
                Crosby Web is a responsive website built with the Twitter Bootstrap framework. The site was not built with any content managment system, as a contact form was the only requirement, so a simple PHP email form was used. This makes for a very light site in terms of size and loading speed.
                <img class="img-responsive center-block" src="http://anarchywebdev.com/wp-content/uploads/2016/03/crosbyweb-300x223.jpg" alt="crosby web site" />

                </div>
                <div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    </div>
</div>
<div class="row well">
    <h4 class="text-center">Vis Johnson Band</h4>
    <div class="col-sm-6">
    <div><a href="http://visjohnson.band" target="_blank"><img class="img-responsive center-block" src="http://anarchywebdev.com/wp-content/uploads/2013/11/vis-site-1-300x220.jpg" alt="Vis Johnson Band website" /></a></div>
    &nbsp;

    </div>
    <div class="col-sm-6">
    <div>

    A recent WordPress build, the ‘Vis Johnson Band‘ is a responsive website based on the Bootstrap theme...

    <!-- Trigger the modal with a button -->
    <button class="btn btn-info btn-md center-block" type="button" data-toggle="modal" data-target="#visModal">More details</button>

    <!-- Modal -->
    <div id="visModal" class="modal fade">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">

    <button class="close" type="button" data-dismiss="modal">×</button>
    <h4 class="modal-title">Vis Johnson Band</h4>
    </div>
    <div class="modal-body">

    A recent WordPress build, the ‘Vis Johnson Band‘ is a responsive website based on the Bootstrap theme. It’s a multimedia site with audio using HTML5 and video links to YouTube. It makes use of the Jetpack gallery and carousel features to create a tiled mosaic gallery.

    <img class="img-responsive center-block" src="http://anarchywebdev.com/wp-content/uploads/2013/11/vis-site-1-300x220.jpg" alt="Vis Johnson Band website" />

    </div>
    <div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Close</button></div>
    </div>
    </div>
    </div>
    <!-- end modal -->

    </div>
    </div>
</div>
<div class="row well">
    <h4 class="text-center">Investigators Greater London</h4>
    <div class="col-sm-6">
    <div><a href="http://investigatorsgreaterlondon.com/" target="_blank"><img class="img-responsive center-block" src="http://anarchywebdev.com/wp-content/uploads/2016/01/igl-1-300x197.jpg" alt="Investigators Greater London website" /></a></div>
    &nbsp;

    </div>
    <div class="col-sm-6">
    <div>

    Investigators Greater London is a responsive WordPress site that I have worked on recently...

    <!-- Trigger the modal with a button -->
    <button class="btn btn-info btn-md center-block" type="button" data-toggle="modal" data-target="#iglModal">More details</button>

    <!-- Modal -->
    <div id="iglModal" class="modal fade">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">

    <button class="close" type="button" data-dismiss="modal">×</button>
    <h4 class="modal-title">Investigators Greater London</h4>
    </div>
    <div class="modal-body">

    Investigators Greater London is a responsive WordPress site that I have worked on recently. I cannot claim to have designed this theme though. On this occasion the client purchased a great looking theme from Elegant Themes which was very easy to set up with lots of layout options for the client.

    <img class="img-responsive center-block" src="http://anarchywebdev.com/wp-content/uploads/2016/01/igl-1-300x197.jpg" alt="Investigators Greater London website" />

    </div>
    <div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Close</button></div>
    </div>
    </div>
    </div>
    <!-- end modal -->

    </div>
    </div>
</div>
<div class="row well">
    <h4 class="text-center">Investigators North West</h4>
    <div class="col-sm-6">
    <div><a href="http://investigatorsnorthwest.com/" target="_blank"><img class="img-responsive center-block" src="http://anarchywebdev.com/wp-content/uploads/2013/12/investigators-300x225.jpg" alt="investigators north west website" /></a></div>
    &nbsp;

    </div>
    <div class="col-sm-6">
    <div>

    Investigators North West is a responsive WordPress site built for a Private Investigation...

    <!-- Trigger the modal with a button -->
    <button class="btn btn-info btn-md center-block" type="button" data-toggle="modal" data-target="#inwModal">More details</button>

    <!-- Modal -->
    <div id="inwModal" class="modal fade">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">

    <button class="close" type="button" data-dismiss="modal">×</button>
    <h4 class="modal-title">Investigators North West</h4>
    </div>
    <div class="modal-body">

    Investigators North West is a responsive WordPress site built for a Private Investigation firm based in London, and expanding in the North West. It is a bespoke design built using the Bones theme. It was designed with usability in mind with easy navigation and no sub-menus. It is fully responsive and easy to read and navigate on any device.

    <img class="img-responsive center-block" src="http://anarchywebdev.com/wp-content/uploads/2013/12/investigators-300x225.jpg" alt="investigators north west website" />

    </div>
    <div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Close</button></div>
    </div>
    </div>
    </div>
    <!-- end modal -->

    </div>
    </div>
</div>
<div class="row well">
    <h4 class="text-center">Learn the Sax</h4>
    <div class="col-sm-6">
    <div><a href="http://learnthesax.com/" target="_blank"><img class="img-responsive center-block" src="http://anarchywebdev.com/wp-content/uploads/2013/11/learnthesax-1-300x224.jpg" alt="learnthesax" /></a></div>
    &nbsp;

    </div>
    <div class="col-sm-6">
    <div>

    The ‘Learn the Sax‘ website is a recent responsive WordPress build. It is still a work...

    <!-- Trigger the modal with a button -->
    <button class="btn btn-info btn-md center-block" type="button" data-toggle="modal" data-target="#ltsModal">More details</button>

    <!-- Modal -->
    <div id="ltsModal" class="modal fade">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">

    <button class="close" type="button" data-dismiss="modal">×</button>
    <h4 class="modal-title">Learn the Sax</h4>
    </div>
    <div class="modal-body">

    The ‘Learn the Sax‘ website is a recent responsive WordPress build. It is still a work in progress, and needs a few more tutorials adding but please feel free to check it out. You may learn a bit about playing the saxophone in the process.

    <img class="img-responsive center-block" src="http://anarchywebdev.com/wp-content/uploads/2013/11/learnthesax-1-300x224.jpg" alt="learnthesax" />

    </div>
    <div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Close</button></div>
    </div>
    </div>
    </div>
    <!-- end modal -->

    </div>
    </div>
</div>
<div class="row well">
    <h4 class="text-center">A Den of Antiquities</h4>
    <div class="col-sm-6">
    <div><a href="http://adenofantiquities.com/" target="_blank"><img class="img-responsive center-block" src="http://anarchywebdev.com/wp-content/uploads/2013/11/antiquitieshome-1-300x216.jpg" alt="A den of antiquities home" /></a></div>
    &nbsp;

    </div>
    <div class="col-sm-6">
    <div>

    ‘A Den of Antiquities’ is a WordPress eCommerce website, built using The Cart Press eCommerce...

    <!-- Trigger the modal with a button -->
    <button class="btn btn-info btn-md center-block" type="button" data-toggle="modal" data-target="#denModal">More details</button>

    <!-- Modal -->
    <div id="denModal" class="modal fade">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <div class="modal-header">

    <button class="close" type="button" data-dismiss="modal">×</button>
    <h4 class="modal-title">A Den of Antiquities</h4>
    </div>
    <div class="modal-body">

    ‘A Den of Antiquities’ is a WordPress eCommerce website, built using The Cart Press eCommerce plugin, and the responsive Bones theme. The client is due to add new products and categories to it in the near future to take advantage of the Woo Commerce features.

    <img class="img-responsive center-block" src="http://anarchywebdev.com/wp-content/uploads/2013/11/antiquitieshome-1-300x216.jpg" alt="A den of antiquities home" />

    </div>
    <div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Close</button></div>
    </div>
    </div>
    </div>
    <!-- end modal -->

    </div>
    </div>
</div>
