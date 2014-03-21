<?php
/*
Plugin Name: Gallery Off White
Plugin URI: http://Gallery-Off-White.fr
Description: Gallerie pour voir des photos 
Author: Stan Saada & Julien Bensoussan
Version: 1.1
Author URI: http:sews-corp.com
*/

// Plugin Constants
define( 'WSF_PORTFOLIO_URL', plugin_dir_url(__FILE__) );
define( 'WSF_PORTFOLIO_DIR', plugin_dir_path( __FILE__ ));

// Classes
require_once( WSF_PORTFOLIO_DIR . '/inc/cpt.php');
require_once( WSF_PORTFOLIO_DIR . '/inc/fields.php');
require_once( WSF_PORTFOLIO_DIR . '/inc/shortcodes.php');
require_once( WSF_PORTFOLIO_DIR . '/inc/main.php');

new wsf_shortcode();
new wsf_main();