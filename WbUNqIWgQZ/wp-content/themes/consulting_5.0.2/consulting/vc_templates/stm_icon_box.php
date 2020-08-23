<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$atts['css_class'] = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );

$atts['content'] = wpb_js_remove_wpautop($content, true);

$atts['link'] = vc_build_link($link);

consulting_show_template('icon_box', $atts);