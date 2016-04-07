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
