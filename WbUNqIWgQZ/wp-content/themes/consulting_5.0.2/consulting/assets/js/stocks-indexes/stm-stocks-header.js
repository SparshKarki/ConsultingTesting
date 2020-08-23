jQuery(document).ready(function ($) {
    "use strict";
    jQuery('.consulting_stocks_list').each(function () {
        var el = this;
        var carousel = jQuery(this).find('.owl-carousel');
        var stock = new Vue({
            el: el,
            data: {
                'indexes' : stocks,
                'action' : 'stm_get_prices',
                'security' : stm_get_prices,
                'data' : []
            },
            methods: {
                getAllStocks: function () {
                    var vm = this;
                    this.$http.get(ajaxurl + '?action=' + this.action + '&indexes=' + this.indexes + '&security=' + this.security).then(function (response) {
                        this.data = response.body;
                        Vue.nextTick(function(){
                            vm.installOwlCarousel();
                        }.bind(vm));
                    });
                    jQuery('.consulting_stocks_box').addClass("hide_preloader");
                },
                installOwlCarousel: function(){
                    carousel.owlCarousel({
                        loop: true,
                        nav: true,
                        responsive: {
                            0: {
                                items: 1
                            },
                            1024: {
                                items: 6
                            }
                        }
                    });
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