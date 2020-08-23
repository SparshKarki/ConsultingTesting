<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );

$css_class .= ' ' . $class;
$css_class .= ' ' . $style;

$atts['css_class'] = $css_class;

consulting_show_template('contacts_widget', $atts);