<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract($atts);

$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );

if(!empty($style)) $atts['css_class'] = $css_class . ' ' . $style;

consulting_show_template('countdown', $atts);