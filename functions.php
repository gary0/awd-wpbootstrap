<?php
/**
 * AWD WPBootstrap functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage AWD
 * 
 */

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

/**
 * AWD WPBootstrap only works in WordPress 4.4 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
  require get_template_directory() . '/page-templates/back-compat.php';
}

if ( ! function_exists( 'awd_wpbootstrap_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own awd_wpbootstrap_setup() function to override in a child theme.
 *
 */

function awd_wpbootstrap_setup() {
  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
   * Let WordPress manage the document title.
   * By adding theme support, we declare that this theme does not use a
   * hard-coded <title> tag in the document head, and expect WordPress to
   * provide it for us.
   */
  add_theme_support( 'title-tag' );

  /********** Set Header Image ***********/
  $args = array(
    'flex-width'    => true,
    'width'         => 0,
    'flex-height'    => true,
    'height'        => 0,
    'header-text'   => true,
    'default-text-color'     => 'eee',
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
  );
  add_theme_support( 'custom-header', $args );

  /*
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
   */
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 1200, 9999 );

  // This theme uses wp_nav_menu() in two locations.
  register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu','awd_wpbootstrap' ),
        'sidebar-menu' => __( 'Sidebar Menu','awd_wpbootstrap' )
       )
     );

  /*
   * Switch default core markup for search form, comment form, and comments
   * to output valid HTML5.
   */
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

  /*
   * Enable support for Post Formats.
   *
   * See: https://codex.wordpress.org/Post_Formats
   */
  add_theme_support( 'post-formats', array(
    'aside',
    'image',
    'video',
    'quote',
    'link',
    'gallery',
    'status',
    'audio',
    'chat',
  ) );

  /**************** Set background ***************/
  $args = array(
    'default-color' => '',
    'default-image' => '',
  );
  add_theme_support( 'custom-background', $args );

  /*
   * This theme styles the visual editor to resemble the theme style,
   * specifically font, colors, icons, and column width.
   */
  add_editor_style( array( 'css/editor-style.css', awd_wpbootstrap_fonts_url() ) );
}
endif; // awd_wpbootstrap_setup

add_action( 'after_setup_theme', 'awd_wpbootstrap_setup' );

/**
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 *
 */
function awd_wpbootstrap_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'awd_wpbootstrap_content_width', 1140 );
}
add_action( 'after_setup_theme', 'awd_wpbootstrap_content_width', 0 );

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 */
function awd_wpbootstrap_widgets_init() {
  // Put sidebar first as this is standard in almost all WordPress themes
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'awd_wpbootstrap' ),
    'id'            => 'sidebar-1',
    'description'   => __( 'Main sidebar (right or left)', 'awd_wpbootstrap' ),
    'before_widget' => '<aside id="%1$s" class="widget clearfix %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );

  // Put footer next as most themes put them here. Default # columns is 3.
  register_sidebar( array(
    'name'      => __( 'Footer', 'awd_wpbootstrap' ),
    'id'      => 'sidebar-2',
    'description'   => __( 'Optional site footer widgets. Add 1-4 widgets here to display in columns.', 'awd_wpbootstrap' ),
    'before_widget' => '<aside id="%1$s" class="widget col-sm-4 clearfix %2$s">',
    'after_widget'  => "</aside>",
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'awd_wpbootstrap_widgets_init' );

if ( ! function_exists( 'awd_wpbootstrap_fonts_url' ) ) :
/**
 * Register Google fonts for AWD WPBootstrap.
 *
 * @return string Google fonts URL for the theme.
 */
function awd_wpbootstrap_fonts_url() {
  $fonts_url = '';
  $fonts     = array();
  $subsets   = 'latin,latin-ext';

  /* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
  if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'awd_wpbootstrap' ) ) {
    $fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
  }

  /* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
  if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'awd_wpbootstrap' ) ) {
    $fonts[] = 'Montserrat:400,700';
  }

  /* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
  if ( 'off' !== _x( 'on', 'Oswald font: on or off', 'awd_wpbootstrap' ) ) {
    $fonts[] = 'Oswald:400,700';
  }

  if ( $fonts ) {
    $fonts_url = add_query_arg( array(
      'family' => urlencode( implode( '|', $fonts ) ),
      'subset' => urlencode( $subsets ),
    ), 'https://fonts.googleapis.com/css' );
  }

  return $fonts_url;
}
endif;

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 */
function awd_wpbootstrap_javascript_detection() {
  echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'awd_wpbootstrap_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since AWD WPBootstrap 1.0
 */
function awd_wpbootstrap_scripts() {
  // Add custom fonts, used in the main stylesheet.
  wp_enqueue_style( 'awd_wpbootstrap-fonts', awd_wpbootstrap_fonts_url(), array(), null );
  // Bootstrap Theme stylesheets.
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', true );
  wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css', true );
  // Theme stylesheet.
  wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css', true );
  wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
  wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/js/theme-js.js', array('jquery'), '', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'awd_wpbootstrap_scripts' );


//*************************************************************************/
//  responsive images [ 1) add img-responsive class 2) remove dimensions ]
//************************************************************************/
function awd_bootstrap_responsive_images( $html ){
  $classes = 'img-responsive'; // separated by spaces, e.g. 'img image-link'
  // check if there are already classes assigned to the anchor
  if ( preg_match('/<img.*? class="/', $html) ) {
    $html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
  } else {
    $html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
  }
  // remove dimensions from images,, does not need it!
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}
add_filter( 'the_content','awd_bootstrap_responsive_images',10 );
add_filter( 'post_thumbnail_html', 'awd_bootstrap_responsive_images', 10 );

/******************************************************************************************/
/*   Search Form - Using native in wordpress filter                                       */
/******************************************************************************************/
add_filter( 'get_search_form', 'wop_bootstrap_search_form', 100);
function wop_bootstrap_search_form() {
    $value_or_placeholder = ( get_search_query() == '' ) ? 'placeholder' : 'value';
    $label = 'Search';
    $search_text = 'Search this website...';
    $button_text = 'Search';
$form = '<form method="get" class="search-form form-inline" action="'.home_url( '/' ).'" role="search">
    <div class="form-group">
        <label class="sr-only sr-only-focusable" for="bsg-search-form">'.esc_html( $label ).'</label>
        <div class="input-group">
            <input type="search" class="search-field form-control" id="search" name="s" '.$value_or_placeholder.'="'.esc_attr( $search_text ).'">
            <span class="input-group-btn">
                <button type="submit" class="search-submit btn btn-default">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    <span class="sr-only">'.esc_attr( $button_text ).'</span>
                </button>
            </span>
        </div>
    </div>
</form>';
    return $form;
}

/**
 * Modifies tag cloud widget arguments to have all tags in randon order.
 * Font Size set to 0.8em to 1.7em 
 */
function awd_wpbootstrap_widget_tag_cloud_args( $args ) {
  $args['largest'] = 1.7;
  $args['smallest'] = 0.8;
  $args['unit'] = 'em';
  $args['number'] = 30;
  $args['order'] = 'RAND';
  return $args;
}
add_filter( 'widget_tag_cloud_args', 'awd_wpbootstrap_widget_tag_cloud_args' );

/**
 * Filter the except length to ?? eg.40 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );









