<?php
/**
 * Plugin Name: Night of the Living Style Guides
 * Plugin URI: https://github.com/sarahmonster/night-of-the-living-styleguides
 * Description: A plugin to get up and running with a style guide for your site, super-quick.
 * Version: 1.0
 * Author: sarah semark
 * Author URI: https://triggersandsparks.com
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Copyright 2017 sarah semark, based on work by John Cionci, J. Hogue, Oomph Inc.
 * https://github.com/oomphinc/wordpress-styleguide-plugin
 *
 * GNU General Public License, Free Software Foundation <http://creativecommons.org/licenses/GPL/2.0/>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 */

function wp_styleguide_page_template( $template ) {
	if ( is_page( 'styleguide' ) ) {
		$page_template = dirname( __FILE__ ) . '/includes/styleguide-page-template.php';
		if ( '' != $page_template ) {
			return $page_template;
		}
	}
	return $template;
}
add_filter( 'template_include', 'wp_styleguide_page_template', 99 );

function wp_styleguide_scripts() {
	if ( is_page( 'styleguide' )  ) {
		wp_enqueue_style( 'wp-styleguide', plugin_dir_url( __FILE__ ) . '/stylesheets/style-guide.css', null, false, 'all' );

		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-scrollto', plugin_dir_url( __FILE__ ) . 'js/jquery.scrollTo.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'jquery-waypoints', plugin_dir_url( __FILE__ ) . 'js/jquery.waypoints.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'wp-styleguide', plugin_dir_url( __FILE__ ) . 'js/scripts.js', array( 'jquery' ), false, true );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_styleguide_scripts' );
