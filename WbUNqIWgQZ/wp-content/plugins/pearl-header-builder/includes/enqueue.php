<?php if ( ! defined( 'ABSPATH' ) ) exit;

add_action('admin_enqueue_scripts', 'stm_header_builder_styles');

function stm_header_builder_styles($hook)
{
    /*Enqueue styles and scripts only for theme options*/
    $allowed_pages = array(
        'toplevel_page_stm_header_builder',
    );

	$theme_info = stm_get_assets_path();
	wp_enqueue_script('stm_hb_handle', $theme_info['js'] . 'handle.js', null, $theme_info['v'], 'all');

	$stm_last_edited_hb = get_option('stm_last_edited_hb', '');
	if(!empty($stm_last_edited_hb)):
		ob_start(); ?>
		(function($){
		$(document).ready(function(){
		var hb = "<?php echo esc_js($stm_last_edited_hb); ?>";
		var current_href = $('#toplevel_page_stm_header_builder a').attr('href');
		$('#toplevel_page_stm_header_builder a').attr('href', current_href + '&hb=' + hb);
		});
		})(jQuery);
		<?php $js = ob_get_clean();
		wp_add_inline_script( 'stm_hb_handle', $js);
	endif;
    
    if (!in_array($hook, $allowed_pages)) {
        return;
    }

	wp_enqueue_media();

    wp_enqueue_style('pearl-admin-styles-reset', $theme_info['css'] . 'reset.css', null, $theme_info['v'], 'all');
    wp_enqueue_style('stm_theme_options-vendors', $theme_info['vendors'] . 'vendor.css', null, $theme_info['v'], 'all');
    wp_enqueue_style('pearl-admin-styles', $theme_info['css'] . 'styles.css', null, $theme_info['v'], 'all');
    wp_enqueue_style('pearl-builder-styles', $theme_info['css'] . 'builder.css', null, $theme_info['v'], 'all');
    wp_enqueue_style('fontawesome', $theme_info['frontend_css'] . 'font-awesome.min.css', null, $theme_info['v']);

    wp_enqueue_style('nav-menus');
    //wp_enqueue_style('fontIconPicker', $theme_info['css'] . 'jquery.fonticonpicker.min.css', null, $theme_info['v']);

	wp_enqueue_script('stm_theme_options_vendors', $theme_info['vendors'] . 'vendor.js', null, $theme_info['v'], 'all');
    wp_enqueue_script('pearl_theme_options_app', $theme_info['js'] . 'app.min.js', null, $theme_info['v'], 'all');
    wp_enqueue_script('pearl_theme_options_admin', $theme_info['js'] . 'admin.js', null, $theme_info['v'], 'all');

	stm_hb_js_translations();
    //wp_enqueue_script('fontIconPicker', $theme_info['js'] . 'jquery.fonticonpicker.min.js', null, $theme_info['v'], 'all');
}