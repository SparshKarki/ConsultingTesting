<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$atts['css_class'] = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );

$atts['values'] = (array) vc_param_group_parse_atts( $values );
$atts['values_circle'] = (array) vc_param_group_parse_atts( $values_circle );

consulting_show_template('charts', $atts);