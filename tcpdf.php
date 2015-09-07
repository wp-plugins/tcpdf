<?php
/*
Plugin Name: TCPDF Library
Version: 1.0
Description: Provides the TCPDF library for creating PDF documents. This plugin is not useful on its own and is used by other plugins to create PDF documents.
Author: Rheinard Korf
Author URI: http://wordpress.org/extend/plugins/tcpdf/
Plugin URI: http://wordpress.org/extend/plugins/tcpdf/
Developers: Stas Sușcov ( https://twitter.com/Suscov ), Rheinard Korf ( https://twitter.com/rheinardkorf )
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * Contributors: Stas Sușcov, Rheinard Korf (Incsub)
 *
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (GPL-2.0)
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 2, as
 * published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston,
 * MA 02110-1301 USA
 *
 */


/**
 * Class TCPDF_Loader
 *
 * This class is a WordPress wrapper for the TCPDF library. It will attempt to ensure that this plugin is the
 * first call to TCPDF by hooking `activated_plugin` and adding it as the first item in the array.
 *
 * Once activated, TCPDF will be available to all other plugins.
 *
 */
class TCPDF_Loader {

	/**
	 * Initialise the TCPDF Library plugin
	 */
	public static function init() {

		add_action( 'activated_plugin', array( __CLASS__, 'load_tcpdf_first' ) );

		if ( ! class_exists( 'TCPDF' ) ) {
			define( 'TCPDF_PLUGIN_ACTIVE', true );
			define( 'TCPDF_VERSION', '6.2.11' );
			require( dirname( __FILE__ ) . '/lib/tcpdf/tcpdf.php' );
		}

	}

	/**
	 * When plugins are activated, make sure that TCPDF is first.
	 *
	 * Note: This is just a standard hook. Other plugins can still jump to first if hooking `activated_plugin`
	 */
	public static function load_tcpdf_first() {
		$path            = __FILE__;
		$path            = str_replace( trailingslashit( WP_PLUGIN_DIR ), '', $path );
		$path            = str_replace( WP_CONTENT_DIR . '/mu-plugins/', '', $path );
		$active_plugins  = get_option( 'active_plugins' );
		$this_plugin_key = array_search( $path, $active_plugins );
		if ( $this_plugin_key ) { // if it's 0 it's the first plugin already, no need to continue
			array_splice( $active_plugins, $this_plugin_key, 1 );
			array_unshift( $active_plugins, $path );
			update_option( 'active_plugins', $active_plugins );
		}
	}

}

// Keep it tidy in a class
TCPDF_Loader::init();




