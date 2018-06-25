<?php
/*
Plugin Name: Minimal Blogging Theme for AMP
Plugin URI: https://ampforwp.com/demo/minimal-blog/amp/
Description: Create a Minimal Blogging AMP theme with ease.
Version: 1.1
Author: AMPforWP Team
Author URI: http://ampforwp.com
License: GPL2
AMP: Minimal blogging
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;
// Define the Folder of the theme.
if(!defined('AMPFORWP_MINIMAL_MAGAZINE_THEME')) {
define('AMPFORWP_MINIMAL_MAGAZINE_THEME', plugin_dir_path( __FILE__ )); }
require_once( AMPFORWP_MINIMAL_MAGAZINE_THEME . 'minimal_blog_options.php');