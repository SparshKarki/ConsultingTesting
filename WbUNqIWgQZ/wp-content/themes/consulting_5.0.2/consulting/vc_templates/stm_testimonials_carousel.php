<?php
$style = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$class_to_filter = 'testimonials_carousel';

$class_to_filter .= vc_shortcode_custom_css_class( $css, ' ' );

$atts['css_class'] = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $class_to_filter );

$atts['link'] = vc_build_link( $link );

consulting_show_template('testimonials_carousel', $atts);