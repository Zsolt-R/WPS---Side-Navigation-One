<?php
/**
 *	WPS-nav-module
 *
 */

//Define module location.
define('MODULE_LOCATION',get_stylesheet_directory() . '/theme-modules/wps-menu-one');
define('MODULE_LOCATION_URI',get_stylesheet_directory_uri() . '/theme-modules/wps-menu-one');

/***************************************
    #ADD CHILD THEME SCRIPTS
****************************************/

// Add child Scripts.
add_action( 'wp_enqueue_scripts', 'add_module_mo_scripts', 20 );

function add_module_mo_scripts() {

	/* Slideout mobile navigation. - sidenav_one component */    
  wp_enqueue_script('site_slideout_js', MODULE_LOCATION_URI.'/assets/js/min/slideout.min.js', array('jquery'), '1.1.2', true );

}

/**
 * Sidenav Component
 *
 * Require these components early to allow correct pluggable function override
 */

/*  Custom Menu Walker - sidenav_one component */
require MODULE_LOCATION.'/inc/functions/wps-sidenav-one-menu-walker.php';

/* Override partent theme main navigation - sidenav_one component */
require MODULE_LOCATION.'/theme-components/objects/wps-sidenav-one-main-nav.php';

/* Mobile Navigation and toggle button - sidenav_one component */
require MODULE_LOCATION.'/theme-components/objects/wps-sidenav-one-mobile-nav.php';

// Child theme frontent class filter functions.
require MODULE_LOCATION.'/inc/settings/child-front-layout-setup.php';


/* Setup Module */
add_action( 'after_setup_theme', 'module_mo_setup', 11);

/**
 * Module setup function
 */
function module_mo_setup() {

  /**  
   * Add settings
   */

  /* add toggle button - sidenav_one component */
  add_action('layout_header__img','side_nav_toggle_button',0);

  /* Theme NAV. add child theme nav (mobile). - sidenav_one component */
  add_action('body_start','child_theme_site_sidenav');

  /**
   * Add  frontend class filters
   */

  /* Main Navigation adjustments css */
  add_filter('main_nav_class','theme_main_navigation_extra_class');

  /* Header Layout Right css - sidenav_one component */
  add_filter( 'header_layout_right_class', 'child_theme_header_layout_right' );

}
