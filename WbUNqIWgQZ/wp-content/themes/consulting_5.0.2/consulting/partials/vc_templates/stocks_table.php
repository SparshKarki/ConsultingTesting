<?php
wp_enqueue_script( 'vue' );
wp_enqueue_script( 'vue-resource' );
wp_enqueue_script( 'stocks-tables' );
?>

<div class="consulting_stocks_box">
    <div class="consulting_stocks_table stocks_table" data-indexes="<?php echo esc_attr($stocks_table); ?>">
        <div v-for="currency in data" class="single-item" v-bind:class="isNegative(currency.regularMarketChangePercent)">
            <div class="arrow">
                <i class="fa fa-arrow-up"></i>
                <i class="fa fa-arrow-down"></i>
            </div>

            <div class="exchange_box">
                <div class="stock-exchange" v-text="currency.symbol"></div>
                <div class="stock-full-exchange" v-text="currency.fullExchangeName"></div>
            </div>

            <div class="prices_box">
                <div class="regular-change">
                    <span v-text="currency.regularMarketChange.toFixed(2)"></span>
                    <span>/ {{currency.regularMarketChangePercent.toFixed(2)}}%</span>
                </div>
                <div class="regular-price" v-text="currency.regularMarketPrice.toFixed(2)"></div>
            </div>
        </div>
    </div>
</div>