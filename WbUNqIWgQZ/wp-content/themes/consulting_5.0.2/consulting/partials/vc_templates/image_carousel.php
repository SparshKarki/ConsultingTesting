<?php

//stm_consulting_pa(get_defined_vars());

if( $grayscale ) {
    $css_class .= ' grayscale';
}

if( $el_class ) {
    $css_class .= ' ' . $el_class;
}

if( $h_centered ) {
    $css_class .= ' centered';
}

wp_enqueue_script( 'owl.carousel' );
wp_enqueue_style( 'owl.carousel' );

$owl_id = uniqid( 'owl-' );
$owl_nav_id = uniqid( 'owl-nav-' );

if( '' === $images ) {
    $images = '-1,-2,-3';
}

$images = explode( ',', $images );

?>

<div class="vc_image_carousel_wr<?php echo esc_attr( $css_class ); ?>">
    <div class="vc_image_carousel <?php echo esc_html( $style ); ?>" id="<?php echo esc_attr( $owl_id ); ?>">
        <?php $link_num = 0;
        foreach( $images as $attach_id ) : ?>
            <?php

            $thumbnail = consulting_get_image( $attach_id, $img_size );

            $link_url = '';

            if( !empty( $custom_links[ $link_num ] ) ) {
                $link_url = $custom_links[ $link_num ];
            }
            ?>
            <div class="item">
                <?php if( $link_url ): ?>
                    <a href="<?php echo esc_url( $link_url ); ?>">
                        <?php echo consulting_filtered_output( $thumbnail ); ?>
                    </a>
                <?php else: ?>
                    <?php echo consulting_filtered_output( $thumbnail ); ?>
                <?php endif; ?>
            </div>
            <?php $link_num++; endforeach; ?>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            var owlRtl = false;
            if ($('body').hasClass('rtl')) {
                owlRtl = true;
            }
            $("#<?php echo esc_js( $owl_id ); ?>").owlCarousel({
                rtl: owlRtl,
                <?php if( $autoplay ): ?>
                autoplay: true,
                <?php endif; ?>
                dots: false,
                <?php if( $loop ): ?>
                loop: true,
                <?php endif; ?>
                <?php if( $nav ): ?>
                nav: true,
                <?php endif; ?>
                <?php if($timeout): ?>
                autoplayTimeout: <?php echo esc_js( $timeout ); ?>,
                <?php endif; ?>
                smartSpeed: <?php echo esc_js( $smart_speed ); ?>,
                responsive: {
                    0: {
                        items: <?php echo esc_js( $items_mobile ); ?>
                    },
                    768: {
                        items: <?php echo esc_js( $items_tablet ); ?>
                    },
                    980: {
                        items: <?php echo esc_js( $items_small_desktop ); ?>
                    },
                    1199: {
                        items: <?php echo esc_js( $items ); ?>
                    }
                }
            });
        });
    </script>
</div>