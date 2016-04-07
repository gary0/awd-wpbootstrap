/**
 * Theme: AWD WPBootstrap
 * 
 * Javascript for smooth scrolling internal links.
 *
 * @package awd_wpbootstrap
 */
 
( function( $ ) {

	// Smooth scroll to anchor within the page
	$(document).ready(function() {
		$('.smoothscroll').click(function() {
		  var target = $(this.hash);
		  var offset = $('body').css('padding-top');
		  if (offset) offset = offset.replace('px','');
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
			$('html,body').animate({
			  scrollTop: ( target.offset().top - offset )
			}, 1000);
			return false;
		  }
		});	
	});

	// The WordPress Default Widgets 
	// Now we'll add some classes for the wordpress default widgets - let's go
	jQuery( 'input.search-field' ).addClass( 'form-control' );	
	
	// here for each comment reply link of wordpress
	jQuery( '.comment-reply-link' ).addClass( 'btn btn-primary' );

	// here for the submit button of the comment reply form
	jQuery( '#submit' ).addClass( 'btn btn-primary' );	
	
	// the search widget	
	jQuery( 'input.search-field' ).addClass( 'form-control' );
	jQuery( 'input.search-submit' ).addClass( 'btn btn-default' );
	
	jQuery( '.widget_rss ul' ).addClass( 'media-list' );
	
	jQuery( '.widget_meta ul, .widget_recent_entries ul, .widget_archive ul, .widget_categories ul, .widget_nav_menu ul, .widget_pages ul' ).addClass( 'nav nav-pills nav-stacked' );

	jQuery( '.widget_recent_comments ul#recentcomments' ).css( 'list-style', 'none').css( 'padding-left', '0' );
	jQuery( '.widget_recent_comments ul#recentcomments li' ).css( 'padding', '5px 15px');
	
	jQuery( 'table#wp-calendar' ).addClass( 'table table-striped');
	
	jQuery(document.body).show();
	
} )( jQuery );