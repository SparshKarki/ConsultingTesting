<?php

wp_enqueue_script( 'stocks-charts' );
wp_enqueue_script( 'charts-js' );

$uniq_id = uniqid('stock-box');

?>

<div class="consulting_stocks_box consulting_stocks_charts_box">
    <div class="labels_box">
        <div class="stocks_label"><span style="background-color: <?php echo esc_attr($chart_fill_color); ?>;"></span><?php echo esc_attr($stm_stocks_chart); ?></div>
        <?php if( !empty( $second_symbol ) ) : ?>
            <div class="stocks_label"><span style="background-color: <?php echo esc_attr($chart_fill_color2); ?>;"></span><?php echo esc_attr($stm_stocks_chart2); ?></div>
        <?php endif; ?>
    </div>
    <div class="consulting_stocks_chart stocks_charts"
         data-indexes="<?php echo esc_attr($stm_stocks_chart); ?>, <?php if( !empty( $second_symbol ) ) { echo esc_attr($stm_stocks_chart2); }  ?>"
         data-range="<?php echo esc_attr($chart_range); ?>"
         data-interval="<?php echo esc_attr($chart_interval); ?>"
         data-fill-color="<?php echo esc_attr($chart_fill_color); ?>, <?php echo esc_attr($chart_fill_color2); ?>"
         data-point-color="<?php echo esc_attr($chart_point_color); ?>, <?php echo esc_attr($chart_point_color2); ?>"
         data-id="<?php echo esc_attr($uniq_id); ?>">
        <canvas id="<?php echo esc_attr($uniq_id); ?>"></canvas>
    </div>
</div>