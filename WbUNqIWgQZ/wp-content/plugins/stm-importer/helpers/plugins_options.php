<?php
function stm_set_plugins_layout_options($layout)
{
	global $wp_filesystem;

	if (empty($wp_filesystem)) {
		require_once ABSPATH . '/wp-admin/includes/file.php';
		WP_Filesystem();
	}

	$options = STM_CONFIGURATIONS_PATH . '/demos/' . $layout . '/options/plugins_mods.json';

	if (file_exists($options)) {
		$encode_options = $wp_filesystem->get_contents($options);
		$import_options = json_decode( $encode_options, true );

		$default = get_option('plugins_mods_consulting', array());

		foreach ( $import_options as $key => $value ) {
			update_option( $key, $value );

			if(empty($default[$key])) {
				$default[$key] = $value;
			}
		}

		update_option('plugins_mods_consulting', $default);
	}
}