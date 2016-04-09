<?php
/**
 * Template Name: Full Page with banner
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
                </div>
            </div>
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

    <!-- if id=page-top is declared in content then that will be used instead -->
    <div id ="page-top">
        <!-- this code removes the <p> element auto created after a 
        caption is used in the portfolio display -->
        <?php remove_filter ('the_content',  'wpautop');?>
        <?php the_content(); ?>
    </div>

    <?php endwhile; else: ?>

    <p><?php _e( 'Sorry, no posts matched your criteria.', 'awd_wpbootstrap' ); ?></p>
    <?php endif; ?>
    
    <?php get_footer(); ?>
