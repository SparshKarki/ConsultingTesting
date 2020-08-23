<?php
$style = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
consulting_show_template('testimonials_pager', $atts);