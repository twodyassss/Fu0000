<?php
/*
Plugin Name: Member
Plugin URI: 
Description: The easiest way to create powerful online communities and beautiful user profiles with twodays
Version: 1.0
Author: 
Author URI: 
Text Domain: 
*/

defined( 'ABSPATH' ) || exit;

require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
$plugin_data = get_plugin_data( __FILE__ );

define( 'um_url', plugin_dir_url( __FILE__ ) );
define( 'um_path', plugin_dir_path( __FILE__ ) );
define( 'um_plugin', plugin_basename( __FILE__ ) );
define( 'member_version', $plugin_data['Version'] );
define( 'member_plugin_name', $plugin_data['Name'] );

require_once 'includes/class-functions.php';
require_once 'includes/class-init.php';