<?php
/*
Plugin Name: TCPDF Library
Plugin URI: http://wordpress.org/extend/plugins/tcpdf/
Description: TCPDF Library as a plugin
Version: 0.1
Author: sushkov
Author URI: http://wordpress.org/extend/plugins/tcpdf/
*/
?>
<?php
/*  Copyright 2012 Stas Suscov <stas@net.utcluj.ro>

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

define( 'TCPDF_VERSION_LOADED', '5.9.3' );

if ( !class_exists( TCPDF ) ) {
  require( dirname( __FILE__ ) . '/lib/tcpdf/tcpdf.php' );
}
?>
