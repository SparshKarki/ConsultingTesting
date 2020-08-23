<?php
function consulting_inline_css() {

    $css = '';

    $colors = consulting_get_actual_colors();

    $base_color = $colors['base_color'];
    $secondary_color = $colors['secondary_color'];
    $third_color = $colors['third_color'];

    ob_start();

    ?>

    <style>
        .elementor-widget-video .eicon-play {
            border-color: <?php echo consulting_filtered_output($third_color); ?>;
            background-color: <?php echo consulting_filtered_output($third_color); ?>;
        }

        .elementor-widget-wp-widget-nav_menu ul li,
        .elementor-widget-wp-widget-nav_menu ul li a {
            color: <?php echo consulting_filtered_output($base_color); ?>;
        }

        .elementor-widget-wp-widget-nav_menu ul li.current-cat:hover>a,
        .elementor-widget-wp-widget-nav_menu ul li.current-cat>a,
        .elementor-widget-wp-widget-nav_menu ul li.current-menu-item:hover>a,
        .elementor-widget-wp-widget-nav_menu ul li.current-menu-item>a,
        .elementor-widget-wp-widget-nav_menu ul li.current_page_item:hover>a,
        .elementor-widget-wp-widget-nav_menu ul li.current_page_item>a,
        .elementor-widget-wp-widget-nav_menu ul li:hover>a {
            border-left-color: <?php echo consulting_filtered_output($secondary_color); ?>;
        }

        div.elementor-widget-button a.elementor-button,
        div.elementor-widget-button .elementor-button {
            background-color: <?php echo consulting_filtered_output($base_color); ?>;
        }

        div.elementor-widget-button a.elementor-button:hover,
        div.elementor-widget-button .elementor-button:hover {
            background-color: <?php echo consulting_filtered_output($third_color); ?>;
            color: <?php echo consulting_filtered_output($base_color); ?>;
        }

        .elementor-default .elementor-text-editor ul:not(.elementor-editor-element-settings) li:before,
        .elementor-default .elementor-widget-text-editor ul:not(.elementor-editor-element-settings) li:before {
            color: <?php echo consulting_filtered_output($secondary_color); ?>;
        }

        .consulting_elementor_wrapper .elementor-tabs .elementor-tabs-content-wrapper .elementor-tab-mobile-title,
        .consulting_elementor_wrapper .elementor-tabs .elementor-tabs-wrapper .elementor-tab-title {
            background-color: <?php echo consulting_filtered_output($third_color); ?>;
        }

        .consulting_elementor_wrapper .elementor-tabs .elementor-tabs-content-wrapper .elementor-tab-mobile-title,
        .consulting_elementor_wrapper .elementor-tabs .elementor-tabs-wrapper .elementor-tab-title a {
            color: <?php echo consulting_filtered_output($base_color); ?>;
        }

        .consulting_elementor_wrapper .elementor-tabs .elementor-tabs-content-wrapper .elementor-tab-mobile-title.elementor-active,
        .consulting_elementor_wrapper .elementor-tabs .elementor-tabs-wrapper .elementor-tab-title.elementor-active {
            background-color: <?php echo consulting_filtered_output($base_color); ?>;
        }

        .consulting_elementor_wrapper .elementor-tabs .elementor-tabs-content-wrapper .elementor-tab-mobile-title.elementor-active,
        .consulting_elementor_wrapper .elementor-tabs .elementor-tabs-wrapper .elementor-tab-title.elementor-active a {
            color: <?php echo consulting_filtered_output($third_color); ?>;
        }

        .radial-progress .circle .mask .fill {
            background-color: <?php echo consulting_filtered_output($third_color); ?>;
        }

    </style>

    <?php

    $css = ob_get_contents();
    ob_end_clean();

    return str_replace(array('<style>', '</style>'), '', $css);
}