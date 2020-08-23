<?php
if (function_exists('icl_object_id')) {
    $post_sidebar = get_post(apply_filters('wpml_object_id', $sidebar, 'stm_vc_sidebar', true));
} else {
    $post_sidebar = get_post($sidebar);
}

if (empty($post_sidebar) || $sidebar == '0') {
    return;
}

$is_elementor_sidebar = consulting_is_elementor_page($sidebar);

?>

<div class="stm_sidebar<?php echo esc_attr($css_class); ?>">

    <?php if ($is_elementor_sidebar && class_exists('Elementor\Plugin')): ?>
        <?php echo \Elementor\Plugin::$instance->frontend->get_builder_content($sidebar); ?>
    <?php else: ?>
        <style type="text/css" scoped>
            <?php echo get_post_meta( $sidebar, '_wpb_shortcodes_custom_css', true ); ?>
        </style>
        <?php echo apply_filters('the_content', $post_sidebar->post_content); ?>
    <?php endif; ?>

</div>