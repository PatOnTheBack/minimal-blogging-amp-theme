<?php
/*
Plugin Name: Minimal Blogging Theme for AMP
Plugin URI: https://wordpress.org/plugins/accelerated-mobile-pages/
Description: Create AMP Themes easily with help of AMP Framework
Version: 1.0
Author: AMPforWP Team
Author URI: http://ampforwp.com/amp-theme-framework
License: GPL2
AMP: Minimal blogging
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;
// Define the Folder of the theme.
define('AMPFORWP_TECH_MAGAZINE_THEME', plugin_dir_path( __FILE__ )); 
require_once( AMPFORWP_TECH_MAGAZINE_THEME . '/minimal_blog_options.php');