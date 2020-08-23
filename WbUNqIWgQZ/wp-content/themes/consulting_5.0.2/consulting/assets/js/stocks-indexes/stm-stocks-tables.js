jQuery(document).ready(function ($) {
    "use strict";
    jQuery('.consulting_stocks_table').each(function () {
        var el = this;
        var attr = jQuery(el).attr('data-indexes');
        var stock = new Vue({
            el: el,
            data: {
                'indexes' : attr,
                'action' : 'stm_get_prices',
                'security' : stm_get_prices,
                'data' : []
            },
            methods: {
                getAllStocks: function () {
                    var vm = this;
                    this.$http.get(ajaxurl + '?action=' + this.action + '&indexes=' + this.indexes + '&security=' + this.security).then(function (response) {
                        this.data = response.body;
                    });
                    jQuery('.consulting_stocks_box').addClass("hide_preloader");
                },
                isNegative: function (number) {
                    return (number < 0) ? 'negative' : 'positive'
                }
            },
            created: function() {
                this.getAllStocks();
            }
        });
    });

});