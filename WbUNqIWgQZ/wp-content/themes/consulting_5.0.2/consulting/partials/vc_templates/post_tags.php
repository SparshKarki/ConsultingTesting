<div class="stm_post_tags post_bottom_wr <?php echo esc_attr( $css_class ); ?>">
    <div class="post_bottom media">
        <?php
        if ( ! get_post_meta( get_the_ID(), 'disable_tags', true ) ) {
            the_tags( '<div class="tags media-body">', ' ', '</div>' );
        }
        ?>
    </div>
</div>