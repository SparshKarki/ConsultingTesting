<?php

new Cew_Patch_API();

class Cew_Patch_API
{
    public function __construct()
    {
        add_action('wp_ajax_cew_get_post_types', [$this, 'get_post_types_list']);
        add_action('wp_ajax_nopriv_cew_get_post_types', [$this, 'get_post_types_list']);

        add_action('wp_ajax_cew_retrieve_post_to_patch', [$this, 'retrieve_post']);
        add_action('wp_ajax_nopriv_cew_retrieve_post_to_patch', [$this, 'retrieve_post']);

        add_action('wp_ajax_cew_patch_post', [$this, 'patch_post']);
        add_action('wp_ajax_nopriv_cew_patch_post', [$this, 'patch_post']);
    }

    function get_post_types_list()
    {
        $r = get_post_types(array(
            'public' => true
        ));


        foreach ($r as &$data) {
            $labels = get_post_type_object($data);

            $data = $labels->label;
        }


        wp_send_json($r);
    }

    function retrieve_post()
    {

        if (empty($_GET['post_types'])) {
            wp_send_json(array(
                'error' => true,
                'message' => esc_html__('Please, select Post type', 'plugin-domain')
            ));
        }

        $post_types = explode(',', sanitize_text_field($_GET['post_types']));

        $elementor_cpt_support = get_option('elementor_cpt_support', array());
        $elementor_cpt_support = array_merge($post_types, $elementor_cpt_support);

        /*Update Options Elementor*/
        update_option('elementor_cpt_support', array_unique($elementor_cpt_support));
        update_option('elementor_disable_color_schemes', 'yes');
        update_option('elementor_disable_typography_schemes', 'yes');
        update_option('elementor_load_fa4_shim', 'yes');
        update_option('elementor_space_between_widgets', 35);

        $args = array(
            'post_type' => $post_types,
            'posts_per_page' => 1,
            'meta_query' => array(
                'relation' => 'OR',
                array(
                    'key' => 'cew_patched',
                    'compare' => 'NOT EXISTS'
                ),
                array(
                    'key' => 'cew_patched',
                    'value' => STM_PATCH_VAR,
                    'compare' => '!='
                ),
            )
        );

        $q = new WP_Query($args);

        if ($q->have_posts()) {
            while ($q->have_posts()) {
                $q->the_post();

                $post = array(
                    'id' => get_the_ID(),
                    'title' => get_the_title()
                );

            }

            wp_reset_postdata();
        }

        Elementor\Plugin::$instance->files_manager->clear_cache();

        if (empty($post)) {
            wp_send_json(array(
                'error' => true,
                'message' => esc_html__('Seems like, all posts were patched!', 'plugin-domain')
            ));
        } else {
            wp_send_json(array(
                'error' => false,
                'post' => $post
            ));
        }

    }

    function patch_post()
    {
        if (empty($_GET['post_id'])) {
            wp_send_json([
                'error' => true,
                'message' => __('Post id is undefined. Stopping.', 'plugin-domain')
            ]);
        }

        $post_id = intval($_GET['post_id']);

        $vc = new CEW_Patch($post_id, $post_id);

        update_post_meta($post_id, 'cew_patched', STM_PATCH_VAR);

        wp_send_json([
            'error' => false,
            'message' => sprintf(__('Post "%s" patched', 'plugin-domain'), get_the_title($post_id)),
            'r' => $vc
        ]);
    }

}