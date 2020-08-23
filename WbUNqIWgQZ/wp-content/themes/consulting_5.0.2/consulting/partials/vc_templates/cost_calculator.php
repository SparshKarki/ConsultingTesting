<?php
/**
 * @var $calculator
 * @var $style
 * @var $css_class
 */

if( empty( $style ) ) {
    $style = 'style_1';
}

if( !empty( $calculator ) && shortcode_exists( 'stm-calc' ) ):
    ?>
    <div class="stm_cost_calculator <?php echo esc_attr($style); ?>">
        <?php echo do_shortcode('[stm-calc id="' . $calculator . '"]'); ?>
    </div>
<?php
endif;