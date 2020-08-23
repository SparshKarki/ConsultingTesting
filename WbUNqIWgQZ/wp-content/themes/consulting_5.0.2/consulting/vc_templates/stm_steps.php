<?php
$atts = vc_map_get_attributes($this->getShortcode(), $atts);
extract($atts);

$content = str_replace('[stm_step', '[stm_step stm_button="' . $link . '" ', $content);

$atts['content'] = wpb_js_remove_wpautop($content, true);

$atts['css_class'] = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class($css, ' '));

if (!empty($link)) {
    $link = vc_build_link($link);
    $atts['text'] = '<a href="' . esc_attr($link['url']) . '" class="vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-outline vc_btn3-color-theme_style_2"'
        . ($link['target'] ? ' target="' . esc_attr($link['target']) . '"' : '')
        . ($link['title'] ? ' title="' . esc_attr($link['title']) . '"' : '')
        . '>' . esc_attr($link['title']) . '</a>';
}

consulting_show_template('steps', $atts);