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

    <!-- Top Carousel -->
        <div class="">
            <div id="myCarousel" class="carousel slide carousel-fade center-block" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators"></ol><!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox" >
                    <div class="item active" style="background-color:#337ab7;">
                        
                        <div class="carousel-caption center-block" >
                            <h3>
                                Responsive Design
                            </h3>
                            <p>
                                Mobile device technology and usage has grown enormously over the last few years, and it is important for your business to be accessible to as many potential clients as possible. One option may be to develop a mobile application...
                            </p>
                            <a href="#responsive" class="btn btn-default smoothscroll" role="button">Read More</a>
                        </div>
                    </div>
                    <div class="item" style="background-color:#d9534f;">
                        
                        <div class="carousel-caption center-block" >
                            <h3>
                                Managing your content
                            </h3>
                            <p>
                                WordPress allows you to manage, maintain and update your website yourself, or to easily manage other users, giving you complete control of your site. WordPress is also highly customizable, with a huge array of plugins and themes...
                            </p><a href="#content" class="btn btn-default smoothscroll" role="button">Read More</a>
                        </div>
                    </div>
                    <div class="item" style="background-color:#8a6d3b;">
                        
                        <div class="carousel-caption center-block" >
                            <h3>
                                HTML5 and CSS3
                            </h3>
                            <p>
                                The latest HTML5 and CSS3 standards help ensure that your website is up to date and future-proof as possible. CSS3 is the latest standard for adding styles and animations to your website, and it allows styling content for all the different devices and screen sizes...
                            </p><a href="#htmlcss" class="btn btn-default smoothscroll" role="button">Read More</a>
                        </div>
                    </div>
                </div><!-- Left and right controls -->
                 <!-- Left and right controls -->
                 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                   <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
                 </a>
                 <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
                 </a>
            </div>              
        </div>

    
    <!-- this code removes the <p> element auto created after a 
    caption is used in the portfolio display -->
    <?php remove_filter ('the_content',  'wpautop');?>

    <div id ="page-top" class="container-fluid spacer text-center">
        <h2>Samples of my Work</h2>    
    </div>

    <!--For caption-half-down and caption-half-up -->
    <div class="container home-portfolio text-center">
        <div class="col-sm-4">
            <div class="home-portfolio-item">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://anarchywebdev.com/wp-content/uploads/2016/03/crosbyweb-e1457672559645.jpg" alt="crosby web site" />
                    <div id="caption-half-down" class="caption">
                        <h4>Crosby Web</h4>
                        For more details go to Portfolio
                    </div>
                    <div id="caption-half-up" class="caption">
                            <a class="label label-default" title="Go to Portfolio" href="http://anarchywebdev.com/my-portfolio/">Portfolio</a>
                    </div>
                </div>
                <div><b>A responsive website based on Twitter Bootstrap.</b></div>
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
                                Crosby Web is a responsive website built with the Twitter Bootstrap framework. The site was not built with any content management system, such as WordPress, as a simple contact form was the only technical requirement. So rather than using a CMS, a simple PHP contact form was used, as this made for a very light site in terms of file size and page loading speed.
                                <img class="img-responsive center-block" src="http://anarchywebdev.com/wp-content/uploads/2016/03/crosbyweb-300x223.jpg" alt="crosby web site" />
                                The site uses two image sliders with the Bootstrap Carousel displayed at the top of the page, and the Slick Slider used for the Portfolio display. The Slick Slider is a third party image slider which can be configured in a variety of ways for some great effects.
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div><!-- end modal -->
            </div>
        </div>
        <div class="col-sm-4">
            <div class="home-portfolio-item">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://anarchywebdev.com/wp-content/uploads/2013/11/vis-site-1-e1453089635665.jpg" alt="Vis Johnson Band website" />
                    <div id="caption-half-down" class="caption">
                        <h4>Vis Johnson Band</h4>
                        For more details go to Portfolio
                    </div>
                    <div id="caption-half-up" class="caption">
                        <a class="label label-default" title="Go to Portfolio" href="http://anarchywebdev.com/my-portfolio/">Portfolio</a>
                    </div>
                </div>
                <div><b>A WordPress website based on Twitter Bootstrap.</b></div>

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
                                The ‘Vis Johnson Band‘ website uses the WordPress content management system,  and is responsive website based on the Bootstrap theme. WordPress is a great choice for sites with lots of content as it allows easy management of media items such as images and audio.
                                <img class="img-responsive center-block" src="http://anarchywebdev.com/wp-content/uploads/2013/11/vis-site-1-300x220.jpg" alt="Vis Johnson Band website" />
                                It’s a multimedia site and uses audio, video and images across the site. The audio and video content make use of the new HTML5 features for presenting media, and provides video links for YouTube content. It makes use of the inbuilt Jetpack plugin gallery and carousel features, to create a cool tiled mosaic gallery.
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div><!-- end modal -->
            </div>
        </div>
        <div class="col-sm-4">
            <div class="home-portfolio-item">
                <div class="thumbnail">
                    <img class="img-responsive" src="http://anarchywebdev.com/wp-content/uploads/2016/01/igl2-1-e1453511145841.jpg" alt="investigators greater london" />
                    <div id="caption-half-down" class="caption">
                        <h4>Investigators Greater London</h4>
                        For more details go to Portfolio
                    </div>
                    <div id="caption-half-up" class="caption">
                        <a class="label label-default" title="Go to Portfolio" href="http://anarchywebdev.com/my-portfolio/">Portfolio</a>
                    </div>
                </div>
                <div><b>A WordPress website with responsive theme.</b></div>

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
                            <div class="modal-footer">
                                <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end modal -->
            </div>
        </div>
    </div>
    

    <div class="container spacer">
        <div class="">			    
		        <div id="content" class="row well">
			        <h4 style="text-align:center;" >Managing your content</h4>
			        <img class="alignright size-full wp-image-497" src="http://anarchywebdev.com/wp-content/uploads/2013/10/cms-images.jpg" alt="cms images" width="288" height="129" />
			        <p>As a web developer I have worked with various frameworks and content management systems (CMS), and found WordPress to be the most adaptable, and the easiest to learn. It allows you to manage, maintain and update your website yourself, or to easily manage other users, giving you complete control of your site.</p>
			        <p>WordPress is also highly customizable, with a huge array of plugins and themes that can add features, and allow you to change the look and feel of your site quite easily.</p>

		        </div>
		        <div id="responsive" class="row well">
			        <h4 style="text-align:center;">Responsive Design</h4>
			        <img class="alignleft size-medium wp-image-258" src="http://anarchywebdev.com/wp-content/uploads/2013/12/responsive-web-design1-300x128.png" alt="responsive web design graphic" width="300" height="128" />
			        <p>Mobile device technology and usage has grown enormously over the last few years, and it is important for your business to be accessible to as many potential clients as possible. One option may be to develop a mobile application to allow mobile users to access your site. However this may be an unnecessary expense for many small to medium businesses.</p>
			        <p>A responsive website will allow your potential clients to access your business more easily as they will be able access your content on any device.</p>
		        </div>
	        
		        <div id="htmlcss" class="row well">
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

<?php get_footer(); ?>
