<?php
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

consulting_show_template('stocks_table', $atts);