<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<div class="stm-search stm-search_<?php echo esc_attr($element['value']); ?>">
    <div class="stm_widget_search">
        <div class="stm_widget_search_button"><i class="fa fa-search"></i></div>
        <div class="search_wrapper hidden">
            <div class="hb_search_form_wrap"></div>
            <div class="hb_search_form">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        "use strict";
        $(".stm_widget_search_button").on('click', function(){
            $(this).parents('.stm-header__row_color').css('z-index', '100');
            $(this).parent().addClass('active');
        });
        $(".hb_search_form_wrap").on('click', function(){
            $(this).parents('.stm-header__row_color').css('z-index', '20');
            $('.search_wrapper').parent().removeClass('active');
        });
    });
</script>