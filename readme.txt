=== TCPDF Library ===
Contributors: rheinardkorf, sushkov
Tags: tcpdf, pdf, developer
Requires at least: WordPress 4.0
Tested up to: WordPress 4.3
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Donate link: https://www.paypal.me/rheinard

A WordPress wrapper for the popular TCPDF Library.

== Description ==

Exposes the TCPDF library to be used by other plugins or themes. This greatly
reduces the size of plugins and will ensure that you always have the latest
TCPDF version (compatible with WordPress minimum requirements) available.

== Installation ==

Please follow the [standard installation procedure for WordPress plugins](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins).

== Frequently Asked Questions ==

** How do I use this plugin? **

This plugin on its own is not very useful. It gets used by other plugins that
require the ability to produce PDF documents.

== Changelog ==

= 1.0 =
* Note: Project re-activated.
* Update: Now released with TCPDF 6.2.11.
* Update: New wrapper class for loading TCPDF.
* Update: Sets as first plugin upon activation to ensure that TCPDF is available when needed.

= 0.1 =
* First stable release.
