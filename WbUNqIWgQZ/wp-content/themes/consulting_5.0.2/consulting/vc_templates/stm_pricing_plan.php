<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$atts['link'] = vc_build_link( $link );
$atts['content'] = wpb_js_remove_wpautop($content, true);

consulting_show_template('pricing_plan', $atts);