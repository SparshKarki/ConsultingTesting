(function ($) {

    wp.customize('bg_color', function (value) {
        value.on(function (newval) {
            $('body').css('background-color', newval);
        });
    });

    wp.customize('jqueryui_slider', function (value) {
        value.on(function (newval) {
            $('p').css('font-size', newval + 'px');
        });
    });

})(jQuery);