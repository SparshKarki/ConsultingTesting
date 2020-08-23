<?php

function consulting_get_post_types_for_elementor(){

    $field = array();

    $post_types_objects = get_post_types(
        [
            'public' => true,
        ], 'objects'
    );

    foreach ( $post_types_objects as $cpt_slug => $post_type ) {

        $field[ $cpt_slug ] = $post_type->labels->name;

    }

    unset($field['elementor_library']);
    unset($field['attachment']);

    return array_keys($field);
}

function stm_theme_before_import_content($layout, $builder) {
    if($builder === 'elementor') {

        /*Update Options Elementor*/
        update_option('elementor_cpt_support', consulting_get_post_types_for_elementor());
        update_option('elementor_disable_color_schemes', 'yes');
        update_option('elementor_disable_typography_schemes', 'yes');
        update_option('elementor_load_fa4_shim', 'yes');
        update_option('elementor_space_between_widgets', 35);

    }
}