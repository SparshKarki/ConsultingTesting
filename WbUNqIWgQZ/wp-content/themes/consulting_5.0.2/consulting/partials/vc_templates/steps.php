<?php

wp_enqueue_script('owl.carousel');
wp_enqueue_style('owl.carousel');
wp_enqueue_style('steps');

$id = rand(0, 999999);
?>

<div id="<?php echo esc_attr($id); ?>" class="steps_box">
    <?php
    if (!empty($steps)) {
        foreach($steps as $step) {
            consulting_show_template('step', $step);
        }
    } else {
        echo consulting_filtered_output($content);
    } ?>
</div>

<?php if (!empty($text)) echo consulting_filtered_output($text); ?>

<script type="text/javascript">
    (function ($) {

        $(window).load(function () {
            stm_owl_load();
        });

        function stm_owl_load() {
            var owlRtl = false;
            if ($('body').hasClass('rtl')) {
                owlRtl = true;
            }

            var fixOwl = function () {
                var $stage = $('#<?php echo esc_js($id); ?> .owl-stage'),
                    stageW = $stage.width(),
                    $el = $('#<?php echo esc_js($id); ?>').find('.owl-item'),
                    elW = 0;
                $el.each(function () {
                    var elWidth = parseFloat($(this).width());
                    var elMargins = parseFloat(($(this).css("margin-right").slice(0, -2)));
                    elW += elWidth + elMargins;
                });
                if (elW > stageW) {
                    $stage.width(elW);
                }
            };

            $('#<?php echo esc_js($id); ?>').owlCarousel({
                rtl: owlRtl,
                margin: 20,
                dots: true,
                onInitialized: fixOwl,
                onRefreshed: fixOwl,
                responsive: {
                    0: {
                        items: 1,
                        dots: false
                    },
                    550: {
                        items: 1,
                        dots: false
                    },
                    768: {
                        items: 2
                    },
                    1100: {
                        items: 3
                    },
                    1400: {
                        items: 3
                    }
                }
            });

        }
    })(jQuery)
</script>