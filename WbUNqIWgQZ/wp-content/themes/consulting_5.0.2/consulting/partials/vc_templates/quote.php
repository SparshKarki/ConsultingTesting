<?php

$image_size = '48x48';
$image = consulting_get_image($image, $image_size);;


?>

<div class="quote_box <?php echo esc_html( $box_color ); ?><?php echo esc_attr( $css_class ); ?>" style="color: <?php echo esc_attr( $box_color_custom ); ?>">
    <?php if( ! empty( $quote ) ): ?>
        <div class="quote">
            <?php echo wp_kses( $quote, array( 'br' => array() ) ); ?>
        </div>
    <?php endif; ?>
    <?php if( ! empty( $image ) && is_string($image) ){ ?>
        <div class="stm_contact_image">
            <?php echo consulting_filtered_output($image); ?>
        </div>
    <?php } ?>
    <?php if( ! empty( $author_name ) || ! empty( $author_status ) ): ?>
        <div class="author_info">
            <div class="author_name">
                <?php echo esc_html( $author_name ); ?>
            </div>
            <div class="author_status">
                <?php echo esc_html( $author_status ); ?>
            </div>
        </div>
    <?php endif; ?>
</div>