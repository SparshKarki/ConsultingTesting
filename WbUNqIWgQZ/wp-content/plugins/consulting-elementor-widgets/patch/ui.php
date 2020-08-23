<?php

new CEW_Patch_UI();

class CEW_Patch_UI
{

    public function __construct()
    {
        add_action('admin_menu', [$this, 'add_menu_page']);

        add_action('admin_enqueue_scripts', [$this, 'enqueue']);

    }

    function add_menu_page()
    {
        add_menu_page(
            __('WPB > Elementor patch', 'textdomain'),
            __('WPB > Elementor', 'textdomain'),
            'manage_options',
            'cew_patch',
            [$this, 'patch_page'],
            'dashicons-flag',
            3
        );
    }

    function patch_page()
    {
        require_once STM_CEW_PATH . '/patch/templates/main.php';
    }

    function enqueue($hook)
    {
        if ($hook === 'toplevel_page_cew_patch') {
            wp_enqueue_style('cew_patch', STM_CEW_URL . '/assets/css/consulting-elementor-patch.css', array(), time());

            /*APP Files*/
            wp_enqueue_style('cew_patch_app', STM_CEW_URL . 'patch-app/dist/css/app.css', array(), time());
            wp_enqueue_style('cew_patch_font', 'https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap');

            wp_enqueue_script('cew_patch_app_vendors', STM_CEW_URL . 'patch-app/dist/js/chunk-vendors.js', array(), time(), true);
            wp_enqueue_script('cew_patch_app', STM_CEW_URL . 'patch-app/dist/js/app.js', array('cew_patch_app_vendors'), time(), true);
            wp_localize_script('cew_patch_app', 'cew_patch_vars', array(
                'endpoints' => [
                    'post_types_list' => admin_url( 'admin-ajax.php' ) . '?action=cew_get_post_types',
                    'retrieve_post' => admin_url( 'admin-ajax.php' ) . '?action=cew_retrieve_post_to_patch',
                    'patch_post' => admin_url( 'admin-ajax.php' ) . '?action=cew_patch_post',
                    'site_url' => get_site_url(get_current_blog_id()),
                ]
            ));

        }
    }



}