<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and navbar.
 * Fonts are set in functions.php
 *
 * @package WordPress
 * @subpackage AWD WPBootstrap
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="en-GB">

  <head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <!-- Fix the navbar to the top of the screen -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <?php wp_nav_menu(
              array(
                'theme_location' => 'header-menu',
                'menu_class' => 'nav navbar-nav', //<ul> class
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
            ?>          
        </div>

      </div>
      </nav>

    



   