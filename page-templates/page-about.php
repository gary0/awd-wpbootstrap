<?php
/**
 * Template Name: Test Page with banner
 *
 * @package WordPress
 * @subpackage AWD WPBootstrap
 */
?>
<?php get_header();?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
    <header id="header">
        <div id="ball"></div>      
        <div class="site-branding">
            <?php
            // Get custom header image and determine its size
            if ( get_header_image() ) {
            ?>
                <div class="img-responsive" style="background-image: url('<?php echo header_image() ?>'); ">
                <div class="container">
                <?php if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
                <div class="site-branding-text">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' )?></a></h1>
                <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                </div>
                </div></div>
            <?php

            // If no custom header, then just display the site title and tagline
            } else {
            ?>
                <div class="container">
                <?php if ( function_exists( 'jetpack_the_site_logo' ) ) jetpack_the_site_logo(); ?>
                <div class="site-branding-text">
                    <!-- wrap header text in smoothscroll to top of content page-->
                    <a href="#page-top" class="smoothscroll" style="text-decoration:none;" >
                        <h1>
                            <?php bloginfo( 'name' );?>
                        </h1>
                        <h2>
                            <?php bloginfo( 'description' ); ?>
                        </h2>
                    </a>
                </div>
                </div>
            <?php
            } //endif get_header_image()
            ?>
        </div><!-- .site-branding -->        
    </header>  

    <div id ="page-top" class="container">
        <!-- this code removes the <p> element auto created after a 
        caption is used in the portfolio display -->
        <?php remove_filter ('the_content',  'wpautop');?>        

        <!--For caption-half-down and caption-half-up -->
        <div class="container-fluid bg-3 spacer text-center">
        <h2>Samples of my Work</h2>
        <div class="row">
        <div class="col-sm-4">
        <div class="thumbnail"><img class="img-responsive" src="http://anarchywebdev.com/wp-content/uploads/2016/03/crosbyweb-e1457672559645.jpg" alt="crosby web site" />
        <div id="caption-up-2" class="caption">
        <h4>Crosby Web</h4>
        For more details go to Portfolio

        <a class="label label-default" title="Go to Portfolio" href="http://anarchywebdev.com/my-portfolio/">Portfolio</a>

        </div>
        </div>
        <div><b>A responsive Twitter Bootstrap website.</b></div>
        </div>
        <div class="col-sm-4">
        <div class="thumbnail"><img class="img-responsive" src="http://anarchywebdev.com/wp-content/uploads/2013/11/vis-site-1-e1453089635665.jpg" alt="Vis Johnson Band website" />
        <div id="caption-half-down" class="caption">
        <h4>Vis Johnson Band</h4>
        For more details go to Portfolio

        </div>
        <div id="caption-half-up" class="caption"><a class="label label-default" title="Go to Portfolio" href="http://anarchywebdev.com/my-portfolio/">Portfolio</a></div>
        </div>
        <div><b>A WordPress website based on Twitter Bootstrap.</b></div>
        </div>
        <div class="col-sm-4">
        <div class="thumbnail"><img class="img-responsive" src="http://anarchywebdev.com/wp-content/uploads/2016/01/igl2-1-e1453511145841.jpg" alt="investigators greater london" />
        <div id="caption-up-1" class="caption">
        <h4>Investigators Greater London</h4>
        For more details go to Portfolio

        <a class="label label-default" title="Go to Portfolio" href="http://anarchywebdev.com/my-portfolio/">Portfolio</a>

        </div>
        </div>
        <div><b>A WordPress website with responsive theme.</b></div>
        </div>
        </div>
        </div>

        <div class="container-fluid spacer">
	        <div class="row">			    
			        <div class="row well">
				        <h4 style="text-align:center;" >Managing your content</h4>
				        <img class="alignright size-full wp-image-497" src="http://anarchywebdev.com/wp-content/uploads/2013/10/cms-images.jpg" alt="cms images" width="288" height="129" />
				        <p>As a web developer I have worked with various frameworks and content management systems (CMS), and found WordPress to be the most adaptable, and the easiest to learn. It allows you to manage, maintain and update your website yourself, or to easily manage other users, giving you complete control of your site.</p>
				        <p>WordPress is also highly customizable, with a huge array of plugins and themes that can add features, and allow you to change the look and feel of your site quite easily.</p>

			        </div>
			        <div class="row well">
				        <h4 style="text-align:center;">Responsive Design</h4>
				        <img class="alignleft size-medium wp-image-258" src="http://anarchywebdev.com/wp-content/uploads/2013/12/responsive-web-design1-300x128.png" alt="responsive web design graphic" width="300" height="128" />
				        <p>Mobile device technology and usage has grown enormously over the last few years, and it is important for your business to be accessible to as many potential clients as possible. One option may be to develop a mobile application to allow mobile users to access your site. However this may be an unnecessary expense for many small to medium businesses.</p>
				        <p>A responsive website will allow your potential clients to access your business more easily as they will be able access your content on any device.</p>
			        </div>
		        
			        <div class="row well">
				        <h4 style="text-align:center;">HTML5 and CSS3</h4>
				        <img class="alignright size-full wp-image-536" src="http://anarchywebdev.com/wp-content/uploads/2013/10/html_5_and_css_3.jpg" alt="html_5_and_css_3" width="150" height="79" />
				        <p>I use the latest HTML5 and CSS3 standards to ensure that my websites are as up to date and future-proof as possible. CSS3 is the latest standard for adding styles and animations to your website, and it allows styling content for all the different devices and screen sizes.</p>
				        <p>HTML5 is a markup language that is used for structuring and presenting content on the Web, and its new features are designed to make it easy to include and handle multimedia and graphical content.</p>
			        </div>
			        <div class="row well">
				        <h4 style="text-align:center;">SEO</h4>
				        <img class="alignleft wp-image-264 size-full" src="http://anarchywebdev.com/wp-content/uploads/2013/12/google-e1452652674184.png" alt="google" width="150" height="51" />
				        <p>There is no magic bullet when it comes to Search Engine Optimisation (SEO), and ranking your website highly on Google, or any other search engine, will take time. A well designed website will ensure that titles, tags, categories, etc. are used correctly, and that images and files are optimised to help give the best chance of high page ranking.</p>
				        <p>However, having good content is perhaps the most important thing in helping to achieve a high ranking. WordPress provides lots of plugins that can help with SEO, and there are also specialist agencies that provide SEO advice.</p>
			        </div>		        
	        </div>
        </div>        
        
        <?php endwhile; else: ?>

        <p><?php _e( 'Sorry, no posts matched your criteria.', 'awd_wpbootstrap' ); ?></p>
        <?php endif; ?>
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
