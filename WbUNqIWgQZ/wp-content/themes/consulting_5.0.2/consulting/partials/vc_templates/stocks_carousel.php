<?php

wp_enqueue_script( 'vue' );
wp_enqueue_script( 'vue-resource' );
wp_enqueue_script( 'stocks-carousel' );
wp_enqueue_script( 'owl.carousel' );
wp_enqueue_style( 'owl.carousel' );

?>

<div class="consulting_stocks_box with_arrows">
    <div class="row">
        <div class="container">
            <div class="consulting_stocks_carousel stocks_list" data-indexes="<?php echo esc_attr($stocks_carousel); ?>">
                <div class="owl-carousel">
                    <div v-for="currency in data" class="single-item">
                        <div class="currency_column">
                            <div class="stock-exchange" v-text="currency.symbol"></div>
                        </div>
                        <div class="currency_column">
                            <div class="regular-price" v-text="currency.regularMarketPrice.toFixed(2)"></div>
                            <div class="regular-change" v-bind:class="isNegative(currency.regularMarketChangePercent)">
                                <span v-text="currency.regularMarketChange.toFixed(2)"></span>
                                <span>({{currency.regularMarketChangePercent.toFixed(2)}}%)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    <?php if( !empty( $loop ) ) : ?>
    var loop = true;
    <?php else : ?>
    var loop = false;
    <?php endif; ?>

    <?php if( !empty( $nav ) ) : ?>
    var nav = true;
    <?php else : ?>
    var nav = false;
    <?php endif; ?>

    <?php if( !empty( $count_desktop ) ) : ?>
    var count_desktop = <?php echo esc_js($count_desktop); ?>;
    <?php else : ?>
    var count_desktop = 6;
    <?php endif; ?>

    <?php if( !empty( $count_landscape ) ) : ?>
    var count_landscape = <?php echo esc_js($count_landscape); ?>;
    <?php else : ?>
    var count_landscape = 5;
    <?php endif; ?>

    <?php if( !empty( $count_portrait ) ) : ?>
    var count_portrait = <?php echo esc_js($count_portrait); ?>;
    <?php else : ?>
    var count_portrait = 4;
    <?php endif; ?>

    <?php if( !empty( $count_mobile ) ) : ?>
    var count_mobile = <?php echo esc_js($count_mobile); ?>;
    <?php else : ?>
    var count_mobile = 2;
    <?php endif; ?>

    <?php if( !empty( $count_mobile_portrait ) ) : ?>
    var count_mobile_portrait = <?php echo esc_js($count_mobile_portrait); ?>;
    <?php else : ?>
    var count_mobile_portrait = 1;
    <?php endif; ?>
</script>