<?php
/**
 * Intro partial
 *
 * @package Envato_Market
 * @since 1.0.0
 */

?>
<div class="two-col">
	<div class="col">
		<h1 class="about-title"><strong><?php esc_html_e( 'Envato Market', 'consulting' ); ?></strong> <sup><?php echo esc_html( envato_market()->get_version() ); ?></sup></h1>
		<p><?php esc_html_e( 'Welcome!', 'consulting' ); ?></p>
		<p><?php esc_html_e( 'This plugin can install WordPress themes and plugins purchased from ThemeForest & CodeCanyon by connecting with the Envato Market API using a secure OAuth personal token. Once your themes & plugins are installed WordPress will periodically check for updates, so keeping your items up to date is as simple as a few clicks.', 'consulting' ); ?></p>
		<p><?php esc_html_e( 'You can add a global token to connect all your items from your account, and/or connect directly with a specific item using a singe-use token & item ID. When the global token and single-use token are set for the same item, the single-use token will be used to communicate with the API.', 'consulting' ); ?></p>
		<p><strong><?php printf( esc_html__( 'Development of this plugin is done on %sGitHub%s. Pull requests welcome.', 'consulting' ), '<a href="https://github.com/envato/wp-envato-market" target="_blank">', '</a>' ); ?></strong></p>
	</div>
	<div class="col screenshot-image">
		<span><?php esc_html_e( 'Active Theme', 'consulting' ); ?></span>
		<img src="<?php echo esc_url( get_template_directory_uri() ) . '/screenshot.png'; ?>" alt="<?php esc_attr_e('Active theme screenshot', 'consulting') ?>" />
	</div>
</div>
