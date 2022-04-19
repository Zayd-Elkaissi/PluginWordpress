<?php

/*
Plugin Name: Post Duplicate 
Plugin URI: https://wordpress.com
Description: Allows you to duplicate WordPress articles!
Version: 0.1
Author: Zayd
Author URI: https://wordpress.com
*/

use Pentiminax\DuplicatePost\PentiminaxPlugin;

if ( ! defined( 'ABSPATH' ) )
	exit;

define('PENTIMINAX_PLUGIN_DIR', plugin_dir_path(__FILE__));

require PENTIMINAX_PLUGIN_DIR . 'vendor/autoload.php';

$plugin = new PentiminaxPlugin(__FILE__);