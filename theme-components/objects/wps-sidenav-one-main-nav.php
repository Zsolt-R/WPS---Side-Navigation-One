<?php
/**
 * Child theme main navigation 
 * pluggable function override.
 * Include this file outside theme setup, it needs to be run as fast s possible in order to override the main theme's function
 *
 * @package wpshapers-theme
 */

/**
 * Override main navigation with pluggable function
 * this function override must happen as fast as possible, using it on child theme setup will throw an error
 */
function theme_site_navigation() {

  echo '<nav id="site-navigation"'.main_nav_class().' role="navigation" data-ui-component="site-main-navigation">';

  wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'site-nav__list', 'walker' => new Child_Theme_Menu_Object() ) );
  echo '</nav><!-- #site-navigation -->';

}