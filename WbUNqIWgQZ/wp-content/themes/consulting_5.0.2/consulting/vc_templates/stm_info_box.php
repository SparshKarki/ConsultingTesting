<?php

$link = '';

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$atts['css_class'] = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );
$atts['link'] = vc_build_link( $link );

if(!empty($content)) $atts['content'] = wpb_js_remove_wpautop($content, true);

consulting_show_template('info_box', $atts);