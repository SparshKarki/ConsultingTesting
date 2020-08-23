<?php

/*
Plugin Name: Recent Tweets Widget
Plugin URI: http://wordpress.org/extend/plugins/recent-tweets-widget/
Description: Recent Tweets Widget plugin for Twitter API v1.1 with Cache. It uses the new Twitter API v1.1 and stores tweets in the cache. It means that it will read status messages from your database and it doesn't query Twitter.com for every page load so you won't be rate limited. You can set how often you want to update the cache.
Version: 1.6.8
Author: Noah Kagan
Author URI: https://appsumo.com/tools/wordpress/?utm_source=sumo&utm_medium=wp-widget&utm_campaign=recent-tweets
Text Domain: recent-tweets-widget
*/

//error_reporting(E_ALL);
//ini_set('display_errors', '1');



// make sure we don't expose any info if called directly
if ( !function_exists( 'add_action' ) ) {
	echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
	exit;
}

define('TP_RECENT_TWEETS_PATH', plugin_dir_url( __FILE__ ));
define('TP_RECENT_TEXT_DOMAIN', 'recent-tweets-widget');

//register stylesheet for widget
function tp_twitter_plugin_styles() {
	wp_enqueue_style( 'tp_twitter_plugin_css', TP_RECENT_TWEETS_PATH . 'tp_twitter_plugin.css', array(), '1.0', 'screen' );
}
add_action( 'wp_enqueue_scripts', 'tp_twitter_plugin_styles' );

// include widget function
require_once('widget.php');

// Link to settings page from plugins screen
//add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'add_action_links' );

function add_action_links ( $links ) {
	$mylinks = array(
		'<a href="' . admin_url( 'options-general.php?page=recent-tweets' ) . '">Settings</a>',
	);

	return array_merge( $links, $mylinks );
}

// Settings menu
/*
add_action('admin_menu', 'tp_twitter_plugin_menu_item');

function tp_twitter_plugin_menu_item() {
	add_options_page( 'Recent Tweets', 'Recent Tweets', 'manage_options', 'recent-tweets', 'tp_twitter_plugin_settings_page');
}
*/

function tp_twitter_plugin_settings_page() {
	include(plugin_dir_path( __FILE__ ).'/settings.php');
}

function tp_twitter_other_plugins_page() {
	include(plugin_dir_path( __FILE__ ).'/other_plugins.php');
}

function recent_tweets_admin_init() {
	register_setting( 'tp_twitter_plugin_options', 'tp_twitter_plugin_options');
	recent_tweets_handle_external_redirects();

	wp_enqueue_script('recent-tweets-admin',plugin_dir_url( __FILE__ ). 'scripts/recent-tweets-scripts.js',array('jquery'));
	wp_enqueue_style('recent-tweets-admin-style',plugin_dir_url( __FILE__ ).'styles/recent-tweets-style-common.css', array(), '3.1.1');
} 

function recent_tweets_handle_external_redirects() {
	if ( empty( $_GET['page'] ) ) {
		return;
	}

	if ( 'recent_tweets_go_appsumo_pro' === $_GET['page'] ) {
		wp_redirect( ( 'https://appsumo.com/tools/wordpress/?utm_source=sumo&utm_medium=wp-widget&utm_campaign=recent_tweets' ) );
		die;
	}
}

add_action( 'admin_init', 'recent_tweets_admin_init' );
//delete_option('tp_twitter_global_notification');
add_option('tp_twitter_global_notification', 1);

function tp_twitter_plugin_top_level_menu() {
	add_menu_page( 'Recent Tweets', 'Recent Tweets', 'manage_options', 'recent-tweets', 'tp_twitter_plugin_settings_page', 'dashicons-twitter');
	//add_submenu_page( 'recent-tweets', 'Other Plugins', 'Other Plugins', 'manage_options', 'other-plugins', 'tp_twitter_other_plugins_page');

	add_submenu_page( 'recent-tweets', 'Other Tools', 'Other Tools', 'manage_options', 'recent-tweets-plugin-other-tools', 'recent_tweets_other_tools_page');

	add_submenu_page(
		'recent-tweets',
		'Appsumo',
		'<span class="recent-tweets-sidebar-appsumo-link"><span class="dashicons dashicons-star-filled" style="font-size: 17px"></span> AppSumo</span>',
		'manage_options',
		'recent_tweets_go_appsumo_pro',
		'recent_tweets_handle_external_redirects'
	);

	add_filter( 'plugin_action_links_' . plugin_basename(__FILE__), 'recent_tweets_filter_plugin_actions', 10, 2 );

}

add_action( 'admin_menu', 'tp_twitter_plugin_top_level_menu' );


function tp_twitter_plugin_global_notice() {

}

function recent_tweets_other_tools_page() {
	include(plugin_dir_path( __FILE__ ).'/other_tools.php');
}

function recent_tweets_filter_plugin_actions($links, $file) {
   $settings_link = '<a href="admin.php?page=recent-tweets">' . __('Settings') . '</a>';
   array_unshift( $links, $settings_link ); // before other links

   return $links;
}

add_action( 'admin_notices', 'tp_twitter_plugin_global_notice' );


function tp_twitter_plugin_deactivate() {
	delete_option('tp_twitter_global_notification');
}
register_deactivation_hook( __FILE__, 'tp_twitter_plugin_deactivate' );


function tp_twitter_plugin_load_plugin_textdomain() {
    load_plugin_textdomain( TP_RECENT_TEXT_DOMAIN, FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'tp_twitter_plugin_load_plugin_textdomain' );
