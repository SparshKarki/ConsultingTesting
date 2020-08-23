(function($) {
    $(document).ready(function () {
        let body = 'body';

        $(body).on('click', '.skip_review', function (e) {
            e.preventDefault();
            review_added_set_option('yes');
        });

        $(body).on('click', '.did_review', function (e) {
            e.preventDefault();
            review_added_set_option('yes', true);
        });
    });

    function review_added_set_option(status, thanks) {

        $('#ccb_message').hide();
        if(typeof thanks !== 'undefined'){
            $('#ccb_thanks_message').css('display', 'block');
            setTimeout(function () {
                $('#ccb_thanks_message').hide();
            }, 3000);
        }

        $.ajax({
            url: ajaxurl,
            type: "GET",
            data: 'add_review_status=' + status + '&action=ccb_ajax_add_review&security=' + window.wp_data.ccb_ajax_add_review,
            success: function (data) {}
        });
    }
})(jQuery);