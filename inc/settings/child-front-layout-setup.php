<?php
/**
 * Child theme front end classes
 *
 * @package wps_prime
 */

/**
 *
 * @param array $classes Holds all the main navigation classes in an array.
*/
function child_theme_header_layout_right( $classes ){

		$classes[] = 'palm--hide';
		return $classes;
}
