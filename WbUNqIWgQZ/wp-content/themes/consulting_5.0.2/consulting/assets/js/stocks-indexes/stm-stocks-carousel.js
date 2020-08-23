jQuery(document).ready(function ($) {
    "use strict";
    jQuery('.consulting_stocks_carousel').each(function () {
        var el = this;
        var attr = jQuery(el).attr('data-indexes');
        var carousel = jQuery(this).find('.owl-carousel');
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
                        Vue.nextTick(function(){
                            vm.installOwlCarousel();
                        }.bind(vm));
                    });
                    jQuery('.consulting_stocks_box').addClass("hide_preloader");
                },
                installOwlCarousel: function(){
                    carousel.owlCarousel({
                        loop: loop,
                        nav: nav,
                        responsive: {
                            0: {
                                items: count_mobile_portrait
                            },
                            480: {
                                items: count_mobile
                            },
                            768: {
                                items: count_portrait
                            },
                            1024: {
                                items: count_landscape
                            },
                            1110: {
                                items: count_desktop
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